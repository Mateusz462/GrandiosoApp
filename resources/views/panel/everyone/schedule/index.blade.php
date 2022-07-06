@extends('layouts.app')

@section('title')
    Sekcje - GrandiosoApp
@endsection

@section('custom-style')
    .col-md-cal {
        flex: 0 0 14.28571%;
        max-width: 14.28571%;
    }
    .text-sobota {
        color: rgb(142, 33, 130)
    }
    .text-niedziela {
        color: #9bdf14
    }

    .calendar {

        display: flex;
        position: relative;
        padding: 16px;
        margin: 0 auto;
        max-width: 320px;
        background: white;
        border-radius: 4px;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    .month-year {
        position: absolute;
        bottom:62px;
        right: -27px;
        font-size: 2rem;
        line-height: 1;
        font-weight: 300;
        color: #94A3B8;
        transform: rotate(90deg);
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
    }

    .year {
        margin-left: 4px;
        color: #CBD5E1;
    }

    .days {
        display: flex;
        flex-wrap: wrap;
        flex-grow: 1;
        margin-right: 46px;
    }

    .day-label {
        position: relative;
        flex-basis: calc(14.286% - 2px);
        margin: 1px 1px 12px 1px;
        font-weight: 700;
        font-size: 0.65rem;
        text-transform: uppercase;
        color: #1E293B;
    }

    .day {
        position: relative;
        flex-basis: calc(14.286% - 2px);
        margin: 1px;
        border-radius: 999px;
        cursor: pointer;
        font-weight: 300;
    }

    .day.dull {
        color: #94A3B8;
    }

    .day.today {
        color: #0EA5E9;
        font-weight: 600;
    }

    .day::before {
        content: '';
        display: block;
        padding-top: 100%;
    }

    .day:hover {
        background: #E0F2FE;
    }

    .day .content {
        color: rgb(18, 175, 175);
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
@endsection

@section('content-header')
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="m-0">Grafik prób i koncertów</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Orkiestra Grandioso Radom</li>
                        <li class="breadcrumb-item active" aria-current="page">Grafik prób i koncertów </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <?php
                            $y = '2022';
                            $d = '10';
                            $m = '5';
                            $date = null;
                            $date = empty($date) ? Carbon::today() : Carbon::createFromDate($y, $m, $d);
                            //$date = Carbon::createFromDate($y, $m, $d);

                            $startOfCalendar = $date->copy()->firstOfMonth()->startOfWeek(Carbon::MONDAY);
                            $endOfCalendar = $date->copy()->lastOfMonth()->endOfWeek(Carbon::SUNDAY);
                            $dni = ['Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota', 'Niedziela'];
                            $miesiace = [1 => 'Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień'];
                            $checkdate = $date->format('d.m.Y');
                            $swieta = array(
                                //maj
                                [
                                    'id' => '1',
                                    'data' => '01.05.2022',
                                    'tytul' => 'Święto Pracy',
                                    'swieto' => '1',


                                    'id' => '2',
                                    'data' => '02.05.2022',
                                    'tytul' => 'Dzień Flagi Rzeczpospolitej Polskiej',
                                    'swieto' => '0',

                                    'id' => '3',
                                    'data' => '03.05.2022',
                                    'tytul' => 'Święto Konstytucji Trzeciego Maja',
                                    'swieto' => '1',

                                    'id' => '4',
                                    'data' => '26.05.2022',
                                    'tytul' => 'Dzień Matki',
                                    'swieto' => '0',

                                    'id' => '5',
                                    'data' => '01.05.2022',
                                    'tytul' => 'Dzień Dziecka',
                                    'swieto' => '0',

                                    'id' => '6',
                                    'data' => '01.05.2022',
                                    'tytul' => 'Zielone Świątki',
                                    'swieto' => '0',

                                    'id' => '7',
                                    'data' => '01.05.2022',
                                    'tytul' => 'Boże Ciało',
                                    'swieto' => '1',

                                    'id' => '8',
                                    'data' => '01.05.2022',
                                    'tytul' => 'Dzień Ojca',
                                    'swieto' => '0',

                                ]

                            );

                        ?>
                        <div class="row">
                            <h1 class="mb-3">{{ $miesiace[$date->format('n')] }} <small class="text-muted">{{ $date->format('Y') }}</small></h1>
                            <p class="px-2">
                                <button class="btn btn-outline-success me-2"><i class="fas fa-calendar-alt fa-lg"></i>&nbsp; Wszystko</button>
                                <button class="btn btn-outline-warning me-2"><i class="fas fa-music fa-lg"></i>&nbsp; Próby</button>
                                <button class="btn btn-outline-danger me-2"><i class="fas fa-calendar-plus fa-lg"></i>&nbsp; Koncerty</button>
                                <button class="btn btn-outline-info me-2"><i class="fas fa-plane fa-lg"></i>&nbsp; Wyjazdy</button>
                            </p>
                            <!--col-->
                            <!-- <div class="col text-end">
                                <a href="{{ route('roles.create') }}" class="btn btn-outline-success"><i class="fas fa-plus"></i> Dodaj</a>
                            </div> -->
                        </div>
                        <!--row-->

                        <div class="row mt-4">
                            <div class="row">
                                @foreach ($dni as $dayLabel)
                                    <div class="col-lg-6 col-md-cal">
                                        <div class="card border bg-dark mb-2">
                                            <div class="card-body text-center">
                                                <h4 class="">
                                                    {{ $dayLabel }}
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="row">
                                @while($startOfCalendar <= $endOfCalendar)
                                    <?php
                                        if($startOfCalendar->format('m') != $date->format('m')):
                                            $bgcolor = "bg-secondary";
                                            $linkclass = "text-white";
                                        else:
                                            $bgcolor = "bg-dark";
                                            $linkclass = "text-white";
                                        endif;
                                        switch($startOfCalendar->format('w')):
                                            case '6':
                                                $headerclass = "text-warning";
                                                $iconclass = "text-warning";
                                            break;
                                            case '0':
                                                $headerclass = "text-danger";
                                                $iconclass = "text-danger";
                                            break;
                                            default:
                                                $headerclass = "";
                                                $iconclass = "";
                                            break;
                                        endswitch;

                                        if($startOfCalendar->format('d.m.Y') == $checkdate):
                                            $bgcolor = "bg-success";
                                            $linkclass = "text-white";
                                            $headerclass = "";
                                            $iconclass = "";
                                        endif;

                                        if(in_array($startOfCalendar->format('d.m.Y'), $swieta)):
                                            echo 'tak';
                                            echo $swieta['tytul'];
                                        endif;

                                        // print "<pre>";
                                        // print_r($startOfCalendar->format('d.m.Y'));
                                        // echo '<br />';
                                        // print_r($swieta);
                                        // print "</pre>";

                                    ?>
                                        <div class="col-md-cal col-sm-6">
                                            <div class="card border {{ $bgcolor }} mb-2">
                                                <div class="card-body text-center">
                                                    <p class="{{ $headerclass }} font-weight-bold">
                                                        {{ $startOfCalendar->format('d.m.Y') }}
                                                    </p>
                                                    <!-- Instagram -->
                                                    <a class="{{ $linkclass }}" href="#!" role="button">
                                                        <i class="fas fa-calendar-times fa-2x {{ $iconclass }}"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @php
                                        $startOfCalendar->addDay();
                                    @endphp
                                @endwhile
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
