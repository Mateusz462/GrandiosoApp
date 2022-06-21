<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Hash;
use Gate;
use Symfony\Component\HttpFoundation\Response;
//use App\Http\Requests\StoreRoleRequest;
//use App\Http\Requests\UpdateRoleRequest;
use Brian2694\Toastr\Facades\Toastr;

class UserController extends Controller
{
    public function index(Request $request)
    {
        //abort_if(Gate::denies('user_list_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        //$users = User::;
        //$users = User::with(['roles'])->;
        $users = User::with('roles')->paginate(10);
        if($request->filter_login){
            $users = User::where('login', 'LIKE', '%'.$request->filter_login.'%')->paginate(15);
        }
        if($request->filter_email) {
            $users = User::where('email', 'LIKE', '%'.$request->filter_email.'%')->paginate(15);
        }
        if($request->filter_code) {
            $users = User::where('code', 'LIKE', '%'.$request->filter_code.'%')->paginate(15);
        }
        return view('panel.admin.users.index', compact('users'));
    }

    public function card(Request $request)
    {
        abort_if(Gate::denies('user_card_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $users = User::paginate(12);
        if($request->filter_login){
            $users = User::where('login', 'LIKE', '%'.$request->filter_login.'%')->paginate(12);
        }
        if($request->filter_email) {
            $users = User::where('email', 'LIKE', '%'.$request->filter_email.'%')->paginate(12);
        }
        if($request->filter_code) {
            $users = User::where('code', 'LIKE', '%'.$request->filter_code.'%')->paginate(12);
        }
        return view('panel.administracja.uzytkownicy.card', compact('users'));
    }

    public function create()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::pluck('name', 'id');

        return view('panel.administracja.uzytkownicy.create', compact('roles'));
    }

    public function schedule()
    {
        $users = User::with('roles')->paginate(10);
        
        return view('panel.everyone.schedule.index', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'imie' => 'required',
            'nazwisko' => 'required',
            'email' => 'required|email',
            'login' => 'required',
            'roles' => 'required',
        ]);
        try{
            $roles = $request->roles;

            $data = [
                'imie' => $request->imie,
                'nazwisko' => $request->nazwisko,
                'email' => $request->email,
                'login' => $request->login,
                'code' => rand(0, 100),
                'avatar' => '',
                'status' => '1',
                'deleted' => '0',
                'password' => Hash::make('123456789'),
            ];
            $user = User::create($data);
            $user->roles()->sync($request->input('roles', []));

            Toastr::success('Użytkownik został utworzony pomyślnie','Sukces');
            return redirect()->route('users.list')->with('success', 'Użytkownik został utworzony pomyślnie');
        } catch (\Exception $e) {
            Toastr::error('Wystąpił błąd podczas tworzenia użytkownika','Błąd!');
            return redirect()->route('users.list')->with('error', 'Wystąpił błąd podczas tworzenia użytkownika');
        }
    }

    public function edit(User $user)
    {
        //abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::all()->pluck('name', 'id');
        $rolesglobal = Role::where('prefix', '1')->pluck('name', 'id');

        $roletype = [
            'SuperAdmin' => 'Super Administrator',
            'Admin' => 'Administrator',
            'Employee' => 'Nauczyciel',
            'Parent' => 'Rodzic / Opiekun',
            'User' => 'Uczeń',
        ];
        $rolesections = Role::where('prefix', '!=', '1')->pluck('name', 'id');

        $user->load('roles', 'rolesglobal', 'rolesections');


        return view('panel.admin.users.edit', compact('user', 'roles','roletype','rolesections'));
    }

    public function update(Request $request, User $user)
    {
        //abort_if(Gate::denies('user_list_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            //'roles' => 'required',
            //'roleglobal' => 'required',
            //'rolesections' => 'required',
        ]);
        try{
            // $roles = $request->roles;
            //
            // $data = [
            //     'imie' => $request->imie,
            //     'nazwisko' => $request->nazwisko,
            //     'email' => $request->email,
            //     'login' => $request->login,
            //     'code' => rand(0, 100),
            //     'avatar' => '',
            //     'status' => '1',
            //     'deleted' => '0',
            //     'password' => Hash::make('123456789'),
            // ];
            //$user = User::update($data);
            //$user->roles()->sync($request->input('roles', []));

            $user->update($request->all());

            //$user->roles()->sync($request->input('roles', []));
            //$user->roles()->sync($request->input('rolesglobal', []));

            $user->roles()->sync($request->input('rolesections', []));


            Toastr::success('Użytkownik został utworzony pomyślnie','Sukces');
            return redirect()->route('users.index')->with('success', 'Użytkownik został utworzony pomyślnie');
        } catch (\Exception $e) {
            Toastr::error('Wystąpił błąd podczas tworzenia użytkownika','Błąd!');
            return redirect()->route('users.index')->with('error', 'Wystąpił błąd podczas tworzenia użytkownika');
        }
    }

}
