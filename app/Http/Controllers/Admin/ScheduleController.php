<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Schedule;
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
        $y = '2022';
        $d = '31';
        $m = '5';
        $date = null;
        $date = empty($date) ? Carbon::today() : Carbon::createFromDate($y, $m, $d);
    //    $date = Carbon::createFromDate($y, $m, $d);

        $startOfCalendar = $date->copy()->firstOfMonth()->startOfWeek(Carbon::MONDAY);
        $endOfCalendar = $date->copy()->lastOfMonth()->endOfWeek(Carbon::SUNDAY);
        $dni = ['Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota', 'Niedziela'];
        $dniformat = ['Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota'];
        $miesiace = [1 => 'Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień'];
        $checkdate = $date->format('d.m.Y');
        $schedules = Schedule::all();

        return view('panel.everyone.schedule.index',
            compact(
                'date',
                'startOfCalendar',
                'endOfCalendar',
                'dni',
                'miesiace',
                'checkdate',
                'schedules',
                'dniformat'
            )
        );
    }

    public function getallevents($date)
    {
        //dd($date);
        $events['events'] = Schedule::where('date', $date)->get();
        $events['holidays'] = array(
           //maj
           [
               'id' => '1',
               'data' => '01.05.2022',
               'tytul' => 'Święto Pracy',
               'swieto' => '1',
           ],
           [
               'id' => '2',
               'data' => '02.05.2022',
               'tytul' => 'Dzień Flagi Rzeczpospolitej Polskiej',
               'swieto' => '0',
           ],
           [
               'id' => '3',
               'data' => '03.05.2022',
               'tytul' => 'Święto Konstytucji Trzeciego Maja',
               'swieto' => '1',
           ],
           [
               'id' => '4',
               'data' => '26.05.2022',
               'tytul' => 'Dzień Matki',
               'swieto' => '0',
           ],
           [
               'id' => '5',
               'data' => '01.06.2022',
               'tytul' => 'Dzień Dziecka',
               'swieto' => '0',
           ],
           [
               'id' => '6',
               'data' => '02.06.2022',
               'tytul' => 'Zielone Świątki',
               'swieto' => '0',
           ],
           [
               'id' => '7',
               'data' => '28.06.2022',
               'tytul' => 'Boże Ciało',
               'swieto' => '1',
           ],
           [
               'id' => '8',
               'data' => '01.07.2022',
               'tytul' => 'Dzień Ojca',
               'swieto' => '1',

           ],
           [
               'id' => '9',
               'data' => '01.08.2022',
               'tytul' => 'Narodowy Dzień Pamięci Powstania Warszawskiego',
               'swieto' => '0',

           ],
           [
               'id' => '10',
               'data' => '15.08.2022',
               'tytul' => 'Święto Wojska Polskiego',
               'swieto' => '1',

           ],
           [
               'id' => '11',
               'data' => '04.05.2022',
               'tytul' => 'Wybuch II Wojny Światowej',
               'swieto' => '1',

           ],
           [
               'id' => '12',
               'data' => '18.07.2022',
               'tytul' => 'Wybuch II Wojny Światowej',
               'swieto' => '1',

           ],
           [
               'id' => '13',
               'data' => '18.07.2022',
               'tytul' => 'Wybuch III Wojny Światowej',
               'swieto' => '1',

           ]

       );


        return response()->json($events);
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
