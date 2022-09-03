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

    public function index(Request $request)
    {
        // dd($request->month);
        //abort_if(Gate::denies('user_list_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $y = $request->year;
        $m = $request->month;
        $d = '1';
        // $date = null;
        $date = $y. ''. $m. ''. $d;
        if(empty($request)){
            $date = Carbon::today();
        } else {
            $date = Carbon::createFromDate($y, $m, $d);
        }
        // $date = ($date) ? Carbon::today() : Carbon::createFromDate($y, $m, $d);
        // $date = Carbon::createFromDate($y, $m, $d);

        $startOfCalendar = $date->copy()->firstOfMonth()->startOfWeek(Carbon::MONDAY);
        $endOfCalendar = $date->copy()->lastOfMonth()->endOfWeek(Carbon::SUNDAY);
        $dni = ['Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota', 'Niedziela'];
        $dniformat = ['Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota'];
        $miesiace = [1 => 'Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień'];
        $checkdate = today()->format('d.m.Y');
        $schedules = Schedule::all();
        $swieta = array(
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

           ]

        );
        return view('panel.everyone.schedule.index',
            compact(
                'date',
                'startOfCalendar',
                'endOfCalendar',
                'dni',
                'miesiace',
                'checkdate',
                'schedules',
                'dniformat',
                'swieta'
            )
        );
    }

    public function getallevents($date)
    {
        $date1 = Carbon::createFromDate($date);
        $date1->format('Y-m-d H:i:s');
        $events = Schedule::where('date', $date1)->get();

        $icon = '';

        $output = '';
        if(count($events) > 0){
            foreach($events as $event){
                $output .= '<div class="col-12" id="modal-podglad-event-'.$event->id.'">
                    <div class="card bg-dark shadow mb-4">
                        <div class="card-body">
                            <h4 class="font-weight-bold mb-2">
                                <i class="fas fa-check-circle"></i>
                                '.$event->title.'
                            </h4>
                            <p class="mb-0">
                                <b>Data:</b>
                                '.$event->date->format('d.m.Y').'
                            </p>
                            <p class="mb-0">
                                <b>Godzina:</b>
                                '.$event->time_from->format('H:i').' - '.$event->time_to->format('H:i').'
                            </p>
                            <p class="mb-0">
                                <b>Miejsce:</b>
                                '.$event->place.'
                            </p>
                            <p class="mb-2">
                                <b>Typ próby:</b>
                                '.$event->rehearsaltype.'
                            </p>
                            <p class="mb-2">
                                <b>Opis:</b>
                                '.$event->description.'
                            </p>
                            <p class="mb-0">
                                <b>Program:</b>
                                <p class="mb-2"></p>
                            </p>
                            <p class="mb-0">
                                <button class="btn btn-success" name="button"><i class="fas fa-check"></i></button>
                                <button class="btn btn-danger" name="button" disabled><i class="fas fa-times"></i></button>
                                <span class="text-success ms-2 pb-2">Będę na próbie!</span>
                            </p>
                        </div>
                    </div>
                </div>';
            }
        } else {
            $output .= '
            <div class="mt-5 mb-5 d-flex justify-content-center">
                <div class="p-3">
                    <div class="first text-center">
                        <i class="fas fa-times-circle fa-6x"></i>
                        <h3 class="mt-3">Brak wydarzeń w tym dniu</h3>
                        <p class="text-muted">

                        </p>
                        <button class="btn btn-success" onclick="Dodaj()"><i class="fas fa-calendar-plus"></i> Dodaj wydarzenie</button>
                    </div>
                </div>
            </div>';
        }

        return ($output);
    }

    public function getallholidays($date)
    {
        $holidays = array(
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
       return response()->json($holidays);
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
        try {
            $data = [
                'title' => $request->title,
                'date' => $request->date,
                'time_from' => $request->time_from,
                'time_to' => $request->time_to,
                'rehearsaltype' => $request->type,
                'shifttype' => '',
                'description' => $request->description,
                'place' => $request->place,
                'program' => '',
                'status' => 1,
                'user_id' => auth()->user()->id,
                'reason' => '',
            ];
            $user = Schedule::create($data);

            Toastr::success('został utworzony pomyślnie','Sukces');
            return redirect()->route('home')->with('success', 'został utworzony pomyślnie');
        } catch (\Exception $e) {
            Toastr::error('Wystąpił błąd podczas tworzenia','Błąd!');
            return redirect()->route('home')->with('error', 'Wystąpił błąd podczas tworzenia');
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
