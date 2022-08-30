@extends('layouts.app')

@section('title')
    Sekcje - GrandiosoApp
@endsection

@section('custom-style')
    @media (min-width: 1200px){
        .col-md-cal {
            flex: 0 0 auto;
            max-width: 14.28571%;
        }
    }
    .text-sobota {
        color: rgb(142, 33, 130)
    }
    .text-niedziela {
        color: #9bdf14
    }

    .form-select {
        background-color: #4f4f4f;
        color:#fff;
    }
@endsection

@section('content-header')
    <div class="container-fluid px-4 my-5">
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
    <div class="container-fluid px-4">
        <div class="row">

            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h1 class="mb-3"><span id="msc">{{ $miesiace[$date->format('n')] }}</span> <small class="text-muted">{{ $date->format('Y') }}</small></h1>
                                <p class="px-2">
                                    <button class="btn btn-outline-success me-2"><i class="fas fa-calendar-alt fa-lg"></i>&nbsp; Wszystko</button>
                                    <button class="btn btn-outline-warning me-2"><i class="fas fa-music fa-lg"></i>&nbsp; Próby</button>
                                    <button class="btn btn-outline-danger me-2"><i class="fas fa-calendar-plus fa-lg"></i>&nbsp; Koncerty</button>
                                    <button class="btn btn-outline-info me-2"><i class="fas fa-plane fa-lg"></i>&nbsp; Wyjazdy</button>
                                </p>
                            </div>
                            <!--col-->
                            <div class="col text-end me-4">
                                <form class="" action="" method="get">
                                    <div class="form-check form-check-inline">
                                        <select class="form-select" name="month">
                                            <?php

                                            ?>
                                            <option value="1">Styczeń</option>
                                            <option value="2">Luty</option>
                                            <option value="3">Marzec</option>
                                            <option value="4">Kwiecień</option>
                                            <option value="5">Maj</option>
                                            <option value="6">Czerwiec</option>
                                            <option value="7">Lipiec</option>
                                            <option value="8">Sierpień</option>
                                            <option value="9">Wrzesień</option>
                                            <option value="10">Październik</option>
                                            <option value="11">Listopad</option>
                                            <option value="12">Grudzień</option>
                                        </select>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <select class="form-select" name="year">
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                        </select>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-calendar-alt me-1"></i>Wybierz datę</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--row-->
                        <div class="row mt-4">
                            <div class="row">
                                @foreach ($dni as $dayLabel)
                                    <div class="col-md-cal d-none d-lg-block">
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
                                                $modal ='';
                                            break;
                                            case '0':
                                                $headerclass = "text-danger";
                                                $iconclass = "text-danger";
                                                $modal ='';
                                            break;
                                            default:
                                                $headerclass = "";
                                                $iconclass = "";
                                                $modal ='';
                                                $event ='';
                                                $icon = "";
                                            break;
                                        endswitch;


                                        // print "<pre>";
                                        // print_r($startOfCalendar->format('d.m.Y'));
                                        // echo '<br />';
                                        // print_r(today());
                                        // print "</pre>";
                                        if($startOfCalendar->format('d.m.Y') == $checkdate):
                                            $bgcolor = "bg-success";
                                            $linkclass = "text-white";
                                            $headerclass = "";
                                            $iconclass = "";
                                            $modal ='';
                                            $event ='';


                                        endif;

                                        $icon = "fas fa-calendar-times fa-2x";
                                        for ($i=0; $i < 11 ; $i++) {
                                            // code...
                                            if(in_array($startOfCalendar->format('d.m.Y'), $swieta[$i])):
                                                // echo 'tak';
                                                $headerclass = "text-danger";
                                                $iconclass = "text-danger text-swieto";
                                                $modal = "data-mdb-toggle=modal data-mdb-target=#exampleModal";
                                                $swieto = $swieta;
                                            endif;
                                        }

                                        $event = [
                                            'id' => 1,
                                            'data' => '18.07.2022',
                                            'dzientyg' => 'Poniedziałek',
                                            'ile' => '2',
                                        ];
                                        foreach ($schedules as $row) {
                                            // code...
                                            // print "<pre>";
                                            // print_r($startOfCalendar->format('d.m.Y'));
                                            // echo '<br />';
                                            // print_r($row->date->format('d.m.Y'));
                                            // print "</pre>";
                                            if($startOfCalendar->format('d.m.Y') == $row->date->format('d.m.Y')):
                                                // echo "string";
                                                $icon = "fas fa-calendar-check fa-2x zd";

                                            endif;
                                        }




                                    ?>
                                        <div class="col-md-cal">
                                            <div class="d-lg-none card border bg-dark mb-2 mt-5">
                                                <div class="card-body text-center">
                                                    <h4 class="">
                                                        {{ $dniformat[(date('w', strtotime($startOfCalendar->format('d.m.Y'))))] }}
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="card border {{ $bgcolor }} mb-2">
                                                <div class="card-body text-center">
                                                    <p class="{{ $headerclass }} font-weight-bold">
                                                        {{ $startOfCalendar->format('d.m.Y') }}
                                                    </p>
                                                    <!-- Instagram -->
                                                    <?php
                                                        $format = $startOfCalendar->format('d.m.Y');
                                                        $tyd = $dniformat[(date('w', strtotime($startOfCalendar->format('d.m.Y'))))];
                                                        $data = $startOfCalendar->format('Y.m.d');
                                                    ?>
                                                    <a class="{{ $linkclass }}" href="#!" role="button" onclick="Podglad('{{ $format }}', '{{ $tyd }}', '{{ $data }}')">

                                                        <i class="{{ $icon }} {{ $iconclass }}" id="icon-class-{{ $format }}"></i>

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

    <!-- Modal -->
    <div class="modal top fade" id="modal-podglad" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="static" data-mdb-keyboard="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <h3 class="my-4 font-weight-bold " id="modal-podglad-header"></h3>

                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow mb-4 bg-dark">
                                <div class="card-body text-center">
                                    <p class="">
                                        <img class="rounded-circle" width="120px" src="{{ Auth::user()->getPicture() }}" alt="">
                                        <p class="fw-bold h4 mt-3">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</p>
                                        <p class="mb-1">Orkiestra Grandioso Radom</p>
                                        <p class="">
                                            <span class="badge badge-light">
                                                <i class="fas fa-shield-alt"></i>
                                                @if(Auth::user()->roletype == 'SuperAdmin')
                                                    Super Administrator
                                                @elseif(Auth::user()->roletype == 'Admin')
                                                    Administrator
                                                @elseif(Auth::user()->roletype == 'Employee')
                                                    Nauczyciel
                                                @elseif(Auth::user()->roletype == 'Parent')
                                                    Rodzic / Opiekun
                                                @elseif(Auth::user()->roletype == 'User')
                                                    Uczeń
                                                @endif
                                            </span>
                                        </p>
                                        <p class="pb-0 text-center">
                                            @if(count(Auth::user()->rolesections) < 1)
                                                Brak danych!
                                            @else
                                                @foreach(auth()->user()->rolesections as $key => $item)
                                                    <span class="badge badge-{{ $item->color }} mb-1">
                                                        <img width="24px" src="{{ asset('/storage/instruments/'.$item->image ) }}" alt=""> {{ $item->name }}
                                                    </span>
                                                    <!-- https://cdn-icons-png.flaticon.com/512/836/836920.png -->
                                                @endforeach
                                            @endif
                                        </p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="modal-podglad-loading" class="text-center row" style="display: none">
                        <br><br><div class="col-12">
                            <div class="spinner-border" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div><br><br>
                    </div>
                    <div id="modal-podglad-zawartosc">
                        <div id="modal-podglad-holiday-row" class="row" style="display: none">
                            <div class="col-12">
                                <div class="alert alert-danger mt-2 mb-2" role="alert">
                                    <i class="fas fa-info-circle fa-lg"></i> <span id="modal-podglad-holiday-header"></span>
                                </div>
                            </div>
                            <?php
                                foreach ($swieta as $row) {
                                    // code...
                                    // print "<pre>";
                                    // print_r($row);
                                    // print "</pre>";
                                    if($event['data'] == $row):
                                        echo 'tak';
                                    endif;
                                }
                                for ($i=0; $i < 11 ; $i++) {
                                    // code...
                                    if(in_array($event['data'], $swieta[$i])):
                                        // print_r($swieta);
                                        // echo $swieta[$i]['tytul'];
                                        echo
                                        '<div class="col-12">
                                            <div class="alert alert-danger mt-2 mb-2" role="alert">
                                                <i class="fas fa-info-circle fa-lg"></i> <b>'.$swieta[$i]['data'].'</b> '.$swieta[$i]['tytul'].'
                                            </div>
                                        </div>';
                                    endif;
                                }
                            ?>
                        </div>
                        <div id="modal-podglad-event-row-error" class="text-center row" style="display: none">

                        </div>
                        <div id="modal-podglad-event-row" class="row">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-mdb-dismiss="modal"><i class="fas fa-times"></i> Zamknij</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('javascript')
    <script type="text/javascript">
        function Podglad(format, week, date) {
            const header = week + ' ' + format;
            $("#modal-podglad-header").html(header);
            $("#modal-podglad-event-row").css("display", "none");

            $("#modal-podglad-loading").css("display", "block");
            $("#modal-podglad-zawartosc").css("display", "none");

            if($("#icon-class-date-", format).hasClass("text-swieto")){
                $("#modal-podglad-holiday-header").html('ads');
                $("#modal-podglad-holiday-row").css("display", "block");
            }

            $.ajax({
                type: 'GET', //THIS NEEDS TO BE GET
                url: "schedule/json/" + date,
                //dataType: 'json',
                success: function (response) {
                    // console.log(response);

                    if(response.events.length > 0) {
                        $("#modal-podglad-event-row-error").css("display", "none");
                        $("#modal-podglad-event-row").empty();
                        $.each(response.events, function(index, event) {
                            // console.log(event);
                            const text = '<div class="col-12" id="modal-podglad-event-col-'+ index +'">'+
                                '<div class="card bg-dark shadow mb-4">'+
                                    '<div class="card-body">'+
                                        '<h4 class="font-weight-bold mb-2">'+
                                            '<i class="fas fa-check-circle"></i> '
                                             + event.title +
                                        '</h4>'+
                                        '<p class="mb-0">'+
                                            '<b>Data:</b> '
                                             + new Date(event.date * 1000).toUTCString().match(/(\d\d:\d\d:\d\d)/) +' - '+ event.date +
                                        '</p>'+
                                        '<p class="mb-0">'+
                                            '<b>Godzina:</b> '
                                             + event.time_from + '-'+ event.time_to +
                                        '</p>'+
                                        '<p class="mb-0">'+
                                            '<b>Typ próby:</b> Próba koncertowa'+
                                        '</p>'+
                                        '<p class="mb-2">'+
                                            '<b>Miejsce:</b> '
                                            + event.place +
                                        '</p>' +
                                        '<p class="mb-2">'+
                                            '<b>Opis:</b> '
                                            + event.description +
                                        '</p>'+
                                        '<p class="mb-0">'+
                                            '<b>Program:</b>'+
                                            '<p class="mb-2">brak danych!</p>'+
                                        '</p>'+
                                        '<p class="mb-0">'+
                                            '<button class="btn btn-success" name="button"><i class="fas fa-check"></i></button> '+
                                            '<button class="btn btn-danger" name="button" disabled><i class="fas fa-times"></i></button> '+
                                            '<span class="text-success ms-2 pb-2">Będę na próbie!</span>'+
                                        '</p>'+
                                    '</div>'+
                                '</div>'+
                            '</div>';
                            $("#modal-podglad-event-row").append(text);



                            $("#modal-podglad-loading").css("display", "none");
                            $("#modal-podglad-zawartosc").css("display", "block");
                            $("#modal-podglad-event-row").css("display", "block");
                            $("#modal-podglad-event-row-error").css("display", "none");

                        });
                    } else {
                        $("#modal-podglad-loading").css("display", "none");
                        $("#modal-podglad-zawartosc").css("display", "block");
                        $("#modal-podglad-event-row-error").html('<br><br><div class="col-12">Brak wydarzeń!</div><br><br>');

                        $("#modal-podglad-event-row-error").css("display", "block");
                    }

                    if(response.holidays.length > 0) {
                        $("#modal-podglad-holiday-row").css("display", "none");
                        $("#modal-podglad-holiday-row").empty();
                        $.each(response.holidays, function(index, holiday) {
                            // console.log(holiday);
                            if(holiday.data == format){
                                const text = '<div class="col-12" id="modal-podglad-holiday-col-'+ index +'">'+
                                    '<div class="alert alert-danger mt-2 mb-3" role="alert">'+
                                        '<i class="fas fa-info-circle fa-lg"></i>&nbsp;' + '<b>'+ holiday.data +'</b> '+ holiday.tytul +
                                    '</div>'+
                                '</div>';
                                $("#modal-podglad-holiday-row").append(text);
                                $("#modal-podglad-holiday-row").css("display", "block");
                            }





                        });
                    }
                },error:function(){
                    console.log(data);
                }
            });



            console.log();
            $("#modal-podglad").modal("show");

        }
    </script>
@endsection
