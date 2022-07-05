<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Carbon\CarbonPeriod;
use Carbon\Carbon;
use Gate;
use Symfony\Component\HttpFoundation\Response;
//use App\Http\Requests\StoreRoleRequest;
//use App\Http\Requests\UpdateRoleRequest;
use Brian2694\Toastr\Facades\Toastr;

class ScheduleController extends Controller
{
    public function index()
    {
        //abort_if(Gate::denies('user_list_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        //dd($dates);
        $users = User::with('roles')->paginate(10);

        return view('panel.everyone.schedule.index', compact('users'));
    }

    public function calendar($date = null)
    {
        $y = '2022';
        $m = '06';
        $d = '13';
        // $date = $y, '-', $m, '-',  $d;
        $date = $y;
        //MONDAY
        $date = empty($date) ? Carbon::now() : Carbon::createFromDate($y, $m, $d);
        $date = Carbon::createFromDate($y, $m, $d);
        $startOfCalendar = $date->copy()->firstOfMonth()->startOfWeek(Carbon::MONDAY);
        $endOfCalendar = $date->copy()->lastOfMonth()->endOfWeek(Carbon::SUNDAY);
        $dayLabels = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
        return
            view('panel.everyone.schedule.calendar',
                compact(
                    'date',
                    'startOfCalendar',
                    'endOfCalendar',
                    'dayLabels',
                )
            );
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
