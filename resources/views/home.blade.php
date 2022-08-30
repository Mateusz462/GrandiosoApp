@extends('layouts.app')

@section('content-header')
    <div class="container-fluid px-4 my-5">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="m-0">Aktualności</h1>
            </div><!-- /.col -->
            <div class="col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Orkiestra Grandioso Radom</li>
                        <li class="breadcrumb-item active" aria-current="page">Aktualności</li>
                    </ol>
                </nav>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection

@section('content')
    <div class="container-fluid px-4">
        <!-- row -->
		<div class="row">
            @if(auth()->user()->status == '0')
                <div class="col-12 mb-3">
                    <div class="alert alert-danger mt-3 mb-1" role="alert">
                        <b><i class="fas fa-ban fa-lg"></i></b> Twoje konto zostało <b>ZABLOKOWANE</b>! Skontaktuj się z administracją aby odblokować twoje konto!
                    </div>
                </div>
            @endif
            <!-- <div class="col-12 mb-3">
                <div class="alert alert-primary mt-3 mb-1" role="alert">
                    <b><i class="fas fa-info-circle fa-lg"></i></b> Dodano nową ankietę! Prosimy o jej najszybsze wypełnienie! <a href="surveys/3">Ankieta</a>
                </div>
            </div> -->
            <!-- <div class="col-md-12">
                <div class="card">
                    <div class="card-body bg-  ">
                        <div class="d-flex justify-content-start align-items-end pe-3">
                            @csrf
                            <img class="rounded-circle" src="{{ auth()->user()->getPicture() }}" alt="avatar 3" style="width: 40px; height: 100%;">
                            <input type="text" class="form-control rounded-pill border-0 bg-dark form-control-lg pointer mx-2" disabled="" placeholder="Mapisz wiadomość" data-bs-toggle="modal" data-bs-target="#createModal">
                            <button class="btn btn-success btn-lg ms-2" id="chat-button-send" type="button" data-mdb-toggle="tooltip" data-mdb-html="true" title='<i class="fas fa-paper-plane"></i> Wyślij' onclick="sendmessage()"><i class="fas fa-paper-plane fa-lg"></i></button>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="col-sm-12 col-xl-9">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-5">
                                <h3 class="font-weight-bold mb-2">
                                    <i class="fas fa-bullhorn"></i> Posty
                                </h3>
                            </div>
                            <!--col-->
                            <div class="col text-end">
                                <a href="{{ route('annouments.index') }}" class="btn btn-primary"><i class="fas fa-eye"></i> Zobacz więcej</a>
                                <a href="{{ route('annouments.create') }}" class="btn btn-outline-success"><i class="fas fa-plus"></i> Dodaj post</a>
                            </div>
                        </div>
                        <!--row-->

                        <div class="row mt-2">
                            @if(count($annouments) > 0)
                                <!-- <div class="col-md-12">
                                    <div class="alert alert-info mt-3 mb-1" role="alert">
                                        <b><i class="fas fa-info-circle fa-lg"></i></b> Obowiązkowo na <b>każdą próbę musztry</b> przynosimy okrycie głowy i wodę!
                                    </div>
                                    <div class="alert alert-secondary mt-3 mb-1" role="alert">
                                        <b><i class="fas fa-info-circle fa-lg"></i></b> Program z musztrą można za darmo pobrać <a href="#">tutaj</a>. W razie pytań napisz do <a href="#">Mati Wydra</a>.
                                    </div>
                                    <div class="alert alert-warning mt-3 mb-1" role="alert">
                                        <b><i class="fas fa-times-circle fa-lg"></i></b> Anulowano 1 próbę!
                                    </div>
                                </div> -->
                                @foreach ($annouments as $row)
                                    <a href="{{ route('annouments.show', $row->id ) }}" class="text-decoration-none text-white mt-2">
                                        <div class="col-md-12">
                                            <div class="card bg-dark border mt-2 p-0">
                                                <div class="position-relative p-3">
                                                    <div class="d-flex justify-content-start">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <img class="rounded-circle me-3" src="{{ $row->user->getPicture() }}" width="45">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <span class="d-flex align-items-center font-weight-bold">{{ $row->user->firstname }} {{ $row->user->lastname }}</span>
                                                                <span class="d-flex align-items-center">
                                                                    <span class="badge badge-light">
                                                                        <i class="fas fa-shield-alt"></i>
                                                                        @if($row->user->roletype == 'SuperAdmin')
                                                                            Super Administrator
                                                                        @elseif($row->user->roletype == 'Admin')
                                                                            Administrator
                                                                        @elseif($row->user->roletype == 'Employee')
                                                                            Nauczyciel
                                                                        @elseif($row->user->roletype == 'Parent')
                                                                            Rodzic / Opiekun
                                                                        @elseif($row->user->roletype == 'User')
                                                                            Uczeń
                                                                        @endif
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="position-relative px-3">
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <h3 class="font-weight-bold">{{ $row->title }}</h3>
                                                        </div>
                                                        <!--col-->
                                                        @if($row->is_pinned)
                                                            <div class="col text-end">
                                                                <h5><span class="badge badge-danger">Ważne!</span></h5>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div  class="position-relative px-3 mt-2" style="max-height: 550px; scrollbar-gutter: stable; overflow: auto;">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        {!! $row->text !!}
                                                    </div>
                                                    <!-- <span>Zaginiony telefon wraz ładowarką jest do odebrania u mnie - po uiszczeniu opłaty za "dzikie ładowanie" 🤑</span> -->
                                                </div>
                                                <div class="position-relative px-3 mt-3">
                                                    <div class="d-flex align-items-center pb-2 border-bottom mb-2">
                                                        <a href="#" class="text-decoration-none text-white text-muted">
                                                            {{ $row->created_at->diffForHumans() }}
                                                            <!-- 1 godzinę temu -->
                                                        </a>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between pb-2 border-bottom mb-2 mt-3">
                                                        <div class="d-flex align-items-center">
                                                            <i class="far fa-comment-alt"></i>
                                                            <span class="ms-2">0 komentarzy</span>
                                                        </div>
                                                        <div class="d-flex flex-row align-items-center">
                                                            <i class="fas fa-share"></i>
                                                            <span class="ms-2">Udostępnij</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="position-relative px-3 my-2">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="d-flex">
                                                            <div class="d-flex align-items-center">
                                                                <i class="far fa-thumbs-up"></i>
                                                                <span class="ms-1">0</span>
                                                            </div>
                                                            <div class="d-flex align-items-center ms-3">
                                                                <i class="far fa-heart"></i>
                                                                <span class="ms-1">0</span>
                                                            </div>
                                                            <div class="d-flex align-items-center ms-3">
                                                                <i class="far fa-thumbs-down"></i>
                                                                <span class="ms-1">0</span>
                                                            </div>
                                                        </div>
                                                        <!-- <i class="fas fa-tools"></i>
                                                        <span class="ms-2">W budowie</span> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            @else
                                <div class="col-md-12">
                                    <div class="card bg-dark border mt-2 p-0">
                                        <div class="position-relative p-5 text-center">
                                            <h3 class="font-weight-bold">
                                                <i class="far fa-times-circle"></i>
                                                Brak postów do wyświetlenia!
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-5">
                                <h3 class="font-weight-bold mb-2">
                                    <i class="fas fa-calendar-alt"></i> Grafik na najbliższe dni
                                </h3>
                            </div>
                            <!--col-->
                            <!--col-->
                            <div class="col text-end">
                                <a href="{{ route('calendar') }}" class="btn btn-primary"><i class="fas fa-calendar"></i> Kalendarz</a>
                            </div>
                        </div>
                        <!--row-->

                        <div class="row mt-4">
                            <?php
                                $dates = [];

                                for($date = today()->copy(); $date->lte(today()->add(1, 'day')); $date->addDay()) {
                                    $dates[] = $date->format('Y-m-d');
                                }

                            ?>
                            @for($date = today()->copy(); $date->lte(today()->add(2, 'day')); $date->addDay())
                                <div class="col-lg-6 col-xl-6">
                                    <div class="card bg-dark shadow mb-4">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h3 class="font-weight-bold mb-2">
                                                        @if($date==today()) Dzisiaj: {{ $date->format('d.m.Y') }} @elseif($date==\Carbon\Carbon::tomorrow()) Jutro: {{ $date->format('d.m.Y') }} @else {{ $date->format('d.m.Y') }} @endif
                                                    </h3>
                                                </div>
                                                <!--col-->
                                            </div>
                                            <!--row-->
                                            <div class="row mt-4">
                                                <div class="col">
                                                    @if($date==today())
                                                        @forelse ($schedules[0] as $row)
                                                            @if($row->date == $date)
                                                                <div class="card shadow mb-4">
                                                                    <div class="card-body">
                                                                        @if($row->status == 1)
                                                                            <h4 class="font-weight-bold mb-2 text-success"><i class="fas fa-check-circle"></i> {{ $row->title }}: Zrealizowano!</h4>
                                                                        @elseif($row->status == 2)
                                                                            <h4 class="font-weight-bold mb-2 text-secondary"><i class="fas fa-times-circle"></i> {{ $row->title }}: Odwołano!</h4>
                                                                        @else
                                                                            <h4 class="font-weight-bold mb-2"><i class="fas fa-check-circle"></i> {{ $row->title }}</h4>
                                                                        @endif
                                                                        @if($row->status == 2)<s>@endif
                                                                            <p class="mb-0">
                                                                                <b>Data:</b> {{ $row->date->format('d.m.Y') }}
                                                                            </p>
                                                                            <p class="mb-0">
                                                                                <b>Godzina:</b> {{ $row->time_from }}-{{ $row->time_to }}
                                                                            </p>
                                                                            <p class="mb-0">
                                                                                <b>Typ próby:</b> {{ $row->rehearsaltype }}
                                                                            </p>
                                                                            <p class="mb-2">
                                                                                <b>Miejsce:</b> {{ $row->place }}
                                                                            </p>
                                                                            <p class="mb-0">
                                                                                <b>Opis:</b>
                                                                                {!! $row->description !!}
                                                                            </p>
                                                                            <p class="@if($row->status == 1 || $row->status == 2) mb-3 @else mb-0 @endif">
                                                                                <b>Program nagrań:</b>
                                                                                <p class="mb-0"><b>brak danych!</b></p>
                                                                            </p>
                                                                        @if($row->status == 2)</s>@endif
                                                                        @if($row->status == 1)
                                                                            <p class="mb-0 text-success">
                                                                                <i class="fas fa-check-circle"></i> Byłeś obecny na {{ $row->shifttype }}!
                                                                            </p>
                                                                        @elseif($row->status == 2)
                                                                            <p class="mt-3 mb-0"><b>Odwołał:</b>
                                                                                <span class="badge badge-light">Administrator</span>
                                                                                <!-- <img class="rounded-circle" width="24px" src="{{ Auth::user()->getPicture() }}" alt=""> {{ Auth::user()->firstname }} {{ Auth::user()->lastname }} -->
                                                                            </p>
                                                                            <p class="mb-0"><b>Data:</b> {{ $row->updated_at->format('d.m.Y H:i') }}</p>
                                                                            <p class="mb-0"><b>Powód:</b> {{ $row->reason }}</p>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <!-- card -->
                                                            @endif
                                                        @empty
                                                            <div class="card shadow mb-4">
                                                                <div class="card-body">
                                                                    <h4 class="font-weight-bold mb-2"><i class="fas fa-times-circle"></i> Wolne!</h4>
                                                                    <p class="mb-0">
                                                                        Brak zaplanowanych zajęć!
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        @endforelse
                                                    @elseif($date==\Carbon\Carbon::tomorrow())
                                                        @forelse ($schedules[1] as $row)
                                                            @if($row->date == $date)
                                                                <div class="card shadow mb-4">
                                                                    <div class="card-body">
                                                                        @if($row->status == 1)
                                                                            <h4 class="font-weight-bold mb-2 text-success"><i class="fas fa-check-circle"></i> {{ $row->title }}: Zrealizowano!</h4>
                                                                        @elseif($row->status == 2)
                                                                            <h4 class="font-weight-bold mb-2 text-secondary"><i class="fas fa-times-circle"></i> {{ $row->title }}: Odwołano!</h4>
                                                                        @else
                                                                            <h4 class="font-weight-bold mb-2"><i class="fas fa-check-circle"></i> {{ $row->title }}</h4>
                                                                        @endif
                                                                        @if($row->status == 2)<s>@endif
                                                                            <p class="mb-0">
                                                                                <b>Data:</b> {{ $row->date->format('d.m.Y') }}
                                                                            </p>
                                                                            <p class="mb-0">
                                                                                <b>Godzina:</b> {{ $row->time_from }}-{{ $row->time_to }}
                                                                            </p>
                                                                            <p class="mb-0">
                                                                                <b>Typ próby:</b> {{ $row->rehearsaltype }}
                                                                            </p>
                                                                            <p class="mb-2">
                                                                                <b>Miejsce:</b> {{ $row->place }}
                                                                            </p>
                                                                            <p class="mb-0">
                                                                                <b>Opis:</b>
                                                                                {!! $row->description !!}
                                                                            </p>
                                                                            <p class="@if($row->status == 1 || $row->status == 2) mb-3 @else mb-0 @endif">
                                                                                <b>Program nagrań:</b>
                                                                                <p class="mb-0"><b>brak danych!</b></p>
                                                                            </p>
                                                                        @if($row->status == 2)</s>@endif
                                                                        @if($row->status == 1)
                                                                            <p class="mb-0 text-success">
                                                                                <i class="fas fa-check-circle"></i> Byłeś obecny na {{ $row->shifttype }}!
                                                                            </p>
                                                                        @elseif($row->status == 2)
                                                                            <p class="mt-3 mb-0"><b>Odwołał:</b>
                                                                                <span class="badge badge-light">Administrator</span>
                                                                                <!-- <img class="rounded-circle" width="24px" src="{{ Auth::user()->getPicture() }}" alt=""> {{ Auth::user()->firstname }} {{ Auth::user()->lastname }} -->
                                                                            </p>
                                                                            <p class="mb-0"><b>Data:</b> {{ $row->updated_at->format('d.m.Y H:i') }}</p>
                                                                            <p class="mb-0"><b>Powód:</b> {{ $row->reason }}</p>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <!-- card -->
                                                            @endif
                                                        @empty
                                                            <div class="card shadow mb-4">
                                                                <div class="card-body">
                                                                    <h4 class="font-weight-bold mb-2"><i class="fas fa-times-circle"></i> Wolne!</h4>
                                                                    <p class="mb-0">
                                                                        Brak zaplanowanych zajęć!
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        @endforelse
                                                    @else
                                                        @forelse ($schedules[2] as $row)
                                                            @if($row->date == $date)
                                                                <div class="card shadow mb-4">
                                                                    <div class="card-body">
                                                                        @if($row->status == 1)
                                                                            <h4 class="font-weight-bold mb-2 text-success"><i class="fas fa-check-circle"></i> {{ $row->title }}: Zrealizowano!</h4>
                                                                        @elseif($row->status == 2)
                                                                            <h4 class="font-weight-bold mb-2 text-secondary"><i class="fas fa-times-circle"></i> {{ $row->title }}: Odwołano!</h4>
                                                                        @else
                                                                            <h4 class="font-weight-bold mb-2"><i class="fas fa-check-circle"></i> {{ $row->title }}</h4>
                                                                        @endif
                                                                        @if($row->status == 2)<s>@endif
                                                                            <p class="mb-0">
                                                                                <b>Data:</b> {{ $row->date->format('d.m.Y') }}
                                                                            </p>
                                                                            <p class="mb-0">
                                                                                <b>Godzina:</b> {{ $row->time_from }}-{{ $row->time_to }}
                                                                            </p>
                                                                            <p class="mb-0">
                                                                                <b>Typ próby:</b> {{ $row->rehearsaltype }}
                                                                            </p>
                                                                            <p class="mb-2">
                                                                                <b>Miejsce:</b> {{ $row->place }}
                                                                            </p>
                                                                            <p class="mb-0">
                                                                                <b>Opis:</b>
                                                                                {!! $row->description !!}
                                                                            </p>
                                                                            <p class="@if($row->status == 1 || $row->status == 2) mb-3 @else mb-0 @endif">
                                                                                <b>Program nagrań:</b>
                                                                                <p class="mb-0"><b>brak danych!</b></p>
                                                                            </p>
                                                                        @if($row->status == 2)</s>@endif
                                                                        @if($row->status == 1)
                                                                            <p class="mb-0 text-success">
                                                                                <i class="fas fa-check-circle"></i> Byłeś obecny na {{ $row->shifttype }}!
                                                                            </p>
                                                                        @elseif($row->status == 2)
                                                                            <p class="mt-3 mb-0"><b>Odwołał:</b>
                                                                                <span class="badge badge-light">Administrator</span>
                                                                                <!-- <img class="rounded-circle" width="24px" src="{{ Auth::user()->getPicture() }}" alt=""> {{ Auth::user()->firstname }} {{ Auth::user()->lastname }} -->
                                                                            </p>
                                                                            <p class="mb-0"><b>Data:</b> {{ $row->updated_at->format('d.m.Y H:i') }}</p>
                                                                            <p class="mb-0"><b>Powód:</b> {{ $row->reason }}</p>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <!-- card -->
                                                            @endif
                                                        @empty
                                                            <div class="card shadow mb-4">
                                                                <div class="card-body">
                                                                    <h4 class="font-weight-bold mb-2"><i class="fas fa-times-circle"></i> Wolne!</h4>
                                                                    <p class="mb-0">
                                                                        Brak zaplanowanych zajęć!
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        @endforelse
                                                    @endif
                                                </div>
                                                <!-- col -->
                                            </div>
                                            <!-- row -->
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-5">
                                <h3 class="font-weight-bold mb-2">
                                    <i class="fas fa-exclamation-triangle"></i> Ważne skróty
                                </h3>
                            </div>
                            <!--col-->
                        </div>
                        <!--row-->
                        <div class="row mt-4">
                            <div class="col-md-6 col-xl-6 col-xl-3">
                                <div class="card bg-dark shadow mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="font-weight-bold mb-2">
                                                    <i class="fas fa-calendar"></i> Grafik
                                                </h3>
                                            </div>
                                            <!--col-->
                                            <div class="col text-end">
                                                <a href="{{ route('calendar') }}" class="btn btn-outline-primary"><i class="fas fa-eye"></i> Zobacz</a>
                                            </div>
                                        </div>
                                        <!--row-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-6 col-xl-3">
                                <div class="card bg-dark shadow mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="font-weight-bold mb-2">
                                                    <i class="fas fa-layer-group"></i> Musztra
                                                </h3>
                                            </div>
                                            <!--col-->
                                            <div class="col-sm-5 text-end">
                                                <a href="{{ route('marshing.index') }}" class="btn btn-outline-primary"><i class="fas fa-eye"></i> Zobacz</a>
                                            </div>
                                        </div>
                                        <!--row-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-6 col-xl-3">
                                <div class="card bg-dark shadow mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="font-weight-bold mb-2">
                                                    <i class="fas fa-users"></i> Sekcje
                                                </h3>
                                            </div>
                                            <!--col-->
                                            <div class="col-sm-5 text-end">
                                                <a href="{{ route('user.sections.index') }}" class="btn btn-outline-primary"><i class="fas fa-eye"></i> Zobacz</a>
                                            </div>
                                        </div>
                                        <!--row-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-6 col-xl-3">
                                <div class="card bg-dark shadow mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="font-weight-bold mb-2">
                                                    <i class="fas fa-music"></i> Nuty
                                                </h3>
                                            </div>
                                            <!--col-->
                                            <div class="col-sm-5 text-end">
                                                <a href="#" class="btn btn-outline-primary disabled"><i class="fas fa-eye"></i> Zobacz</a>
                                            </div>
                                        </div>
                                        <!--row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xl-6 col-xl-3">
                                <div class="card bg-dark shadow mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="font-weight-bold mb-2">
                                                    <i class="fas fa-handshake"></i> Zebrania
                                                </h3>
                                            </div>
                                            <!--col-->
                                            <div class="col-sm-5 text-end">
                                                <a href="#" class="btn btn-outline-primary disabled"><i class="fas fa-eye"></i> Zobacz</a>
                                            </div>
                                        </div>
                                        <!--row-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-6 col-xl-3">
                                <div class="card bg-dark shadow mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="font-weight-bold mb-2">
                                                    <i class="fas fa-plane"></i> Wyjazdy
                                                </h3>
                                            </div>
                                            <!--col-->
                                            <div class="col-sm-5 text-end">
                                                <a href="{{ route('user.travels') }}" class="btn btn-outline-primary"><i class="fas fa-eye"></i> Zobacz</a>
                                            </div>
                                        </div>
                                        <!--row-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-6 col-xl-3">
                                <div class="card bg-dark shadow mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="font-weight-bold mb-2">
                                                    <i class="fas fa-poll"></i> Ankiety
                                                </h3>
                                            </div>
                                            <!--col-->
                                            <div class="col-sm-5 text-end">
                                                <a href="{{ route('user.surveys') }}" class="btn btn-outline-primary"><i class="fas fa-eye"></i> Zobacz</a>
                                            </div>
                                        </div>
                                        <!--row-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-6 col-xl-3">
                                <div class="card bg-dark shadow mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="font-weight-bold mb-2">
                                                    <i class="fas fa-file"></i> Dokumenty
                                                </h3>
                                            </div>
                                            <!--col-->
                                            <div class="col-sm-5 text-end">
                                                <a href="#" class="btn btn-outline-primary disabled"><i class="fas fa-eye"></i> Zobacz</a>
                                            </div>
                                        </div>
                                        <!--row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-3">
                <div class="card bg-dark mb-4">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center">
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
                        </div>
                    </div>
                </div>
    			<div class="card shadow mb-4">
    				<div class="card-body">
    					<h3 class="font-weight-bold mb-4"><i class="fas fa-users"></i> Sekcje</h3>
    					<p class="mb-1 h5">
    						O to lista przypisanych do ciebie sekcji:
    					</p>
    					<p class="mb-0">
    						● Grupa dęta blaszana<br>
    						● Sekcja Puzonów<br>
    					</p>
    					<p class="text-muted">Wybierz nazwę swojej sekcji aby przejść do grupy</p>

    					<p class="mb-2 h5">
    						Informacje dotyczące sekcji:
    					</p>
    				</div>
    			</div>
                <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="">
    				<!-- Inner -->
    				<div class="carousel-inner">
    					<!-- Single item -->
    					<div class="carousel-item active">
    						<div class="card shadow mb-4">
    							<div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h3 class="font-weight-bold mb-4">
                                                <i class="fas fa-calendar-plus"></i> Następne koncerty
                                            </h3>
                                        </div>
                                        <!--col-->
                                        <!-- <div class="col-sm-5 text-end">
                                            <a href="{{ route('roles.create') }}" class="btn btn-outline-success"><i class="fas fa-edit"></i> Edytuj dane</a>
                                        </div> -->
                                    </div>
                                    <!--row-->
    								<p>
    									<b>LIPIEC 2022</b><br>
    									<s class="text-muted">
                                            <b>25.06-04.07</b> Mistrzostwa Europy w Rastede<br>
        									<b>07-10.07</b> Mistrzostwa Polski Orkiestr<br>
        									<b>26.07-02.08</b> World Music Contest - Holandia<br><br>
                                        </s>
                                        <b>SIERPIEŃ 2022</b><br><br>
    									<b>WRZESIEŃ 2022</b><br>
    									<em>
    										<b>11.09</b> Dni Jerozolimy - Miechów - do potw.<br>
    										<b>12-20</b> Bilbao Hiszpania - do potw.<br><br>
    									</em>
    									<b>LISTOPAD 2022</b><br>
    									<b>25-28.11</b> KONCERTY GALOWE<br>
    								</p>
    								<p>
    									<a href="{{ route('calendar') }}" class="btn btn-primary"><i class="fas fa-eye"></i> Zobacz więcej</a>
    								</p>
    								<!-- <p class="text-muted">Na razie nie zaplanowano żadnych koncertów</p> -->
    							</div>
    						</div>
    					</div>

    					<!-- Single item -->
    					<div class="carousel-item">
    						<div class="card shadow mb-4">
    							<div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h3 class="font-weight-bold mb-4">
                                                <i class="fas fa-music"></i> Plan prób
                                            </h3>
                                        </div>
                                        <!--col-->
                                        <!-- <div class="col text-end">
                                            <a href="{{ route('roles.create') }}" class="btn btn-outline-success"><i class="fas fa-edit"></i> Edytuj dane</a>
                                        </div> -->
                                    </div>
                                    <!--row-->
    								<p>
    									<b>2022</b><br>
    									<b>ŚRODA</b> 17-19 próba<br>
    									<b>SOBOTA</b> 9-13 próba jeśli sekcje to od 8:30<br>
    								</p>
    								<p>
    									<a href="{{ route('calendar') }}" class="btn btn-primary"><i class="fas fa-eye"></i> Zobacz więcej</a>
                                    </p>
    								<!-- <p class="text-muted">Na razie nie zaplanowano żadnych prób...</p> -->
    							</div>
    						</div>
    					</div>

    					<!-- Single item -->
    					<div class="carousel-item">
    						<div class="card shadow mb-4">
    							<div class="card-body text-center">
    								<h3 class="font-weight-bold mb-4"><i class="far fa-file-alt"></i> Repertuar</h3>
    								<!-- <p class="text-start mb-4">
    									<h5 class="mb-3">
    										<b>ŚRODA 13.04.22</b> - Dyplom Kacpra Kacy<br>
    									</h5>
    									<b>The Bluebells of Scotland</b> - Leroy Anderson<br><br>

    									<button class="btn btn-outline-success" name="button">Pobierz nuty</button>
    								</p>
    								<p class="text-start">
    									<h5 class="mb-3">
    										<b>Niedziela 16.01.22</b> - Koncert Noworoczny - KATEDRA<br>
    									</h5>
    									<b>You Raise Me Up</b> - Brendan Graham and Rolf Loviand Arr: Heintz Briege<br>

    									<b>Merry Christmas Everyone</b> - Shakin` Stevens, Bob Heatlie Arr.:FilipSandras<br><br>

    									<button class="btn btn-outline-success" name="button">Pobierz nuty</button>
    								</p> -->
    								<p class="text-muted">Brak nadchodzącego repertuaru</p>
    							</div>
    						</div>
    					</div>
    				</div>
    				<!-- Inner -->

    				<!-- Controls -->
                    <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
                        <span class="carousel-control-next-icon visually-hidden" aria-hidden="true"></span>
                        <span class="">Next</span>
                    </button>
    			</div>
			</div>
            <div class="col-md-12">
				<div class="card shadow mb-4">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-3">
                                <p>
                                    <img src="{{ asset('img/cropped-cropped-LOGO-GRANDIOSO-serwisy-internetowe-2.png')}}" class="img-fluid rounded" alt="logo grandioso"/>
                                </p>
							</div>
							<div class="col">
								<h3 class="font-weight-bold">Orkiestra Grandioso Radom</h3>
								ul. Słowackiego 17, 26-600 Radom<br>
								Dariusz Krajewski<br>
								Dyrygent & Prezes Stowarzyszenia Grandioso<br>
								+48 606 671 570<br>
								Pon. - Pt.:  9:00-19:00<br>
								orkiestra@grandioso.radom.pl<br>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" data-bs-backdrop="false" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <!-- head -->
            <div class="modal-header align-items-center">
              <h5 class="text-center w-100 m-0" id="exampleModalLabel">
                Create Post
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- body -->
            <div class="modal-body">
              <div class="my-1 p-1">
                <div class="d-flex flex-column">
                  <!-- name -->
                  <div class="d-flex align-items-center">
                    <div class="p-2">
                      <img src="{{ auth()->user()->getPicture() }}" alt="from fb" class="rounded-circle" style="
                          width: 38px;
                          height: 38px;
                          object-fit: cover;
                        ">
                    </div>
                    <div>
                      <p class="m-0 fw-bold">{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</p>
                      <select class="form-control select2 ">
                        <option selected="" value="1">Public</option>
                        <option value="2">Pin To Top</option>
                        <option value="3">Hide</option>
                      </select>
                    </div>
                  </div>
                  <!-- text -->
                  <div>
                    <textarea cols="30" rows="5" class="form-control border-0"></textarea>
                  </div>
                  <!-- emoji  -->
                  <div class="
                      d-flex
                      justify-content-between
                      align-items-center
                    ">
                    <img src="https://www.facebook.com/images/composer/SATP_Aa_square-2x.png" class="pointer" alt="fb text" style="
                        width: 30px;
                        height: 30px;
                        object-fit: cover;
                      ">
                    <i class="far fa-laugh-wink fs-5 text-muted pointer"></i>
                  </div>
                  <!-- options -->
                  <div class="
                      d-flex
                      justify-content-between
                      border border-1 border-light
                      rounded
                      p-3
                      mt-3
                    ">
                    <p class="m-0">Add to your post</p>
                    <div>
                      <i class="
                          fas
                          fa-images
                          fs-5
                          text-success
                          pointer
                          mx-1
                        "></i>
                      <i class="
                          fas
                          fa-user-check
                          fs-5
                          text-primary
                          pointer
                          mx-1
                        "></i>
                      <i class="
                          far
                          fa-smile
                          fs-5
                          text-warning
                          pointer
                          mx-1
                        "></i>
                      <i class="
                          fas
                          fa-map-marker-alt
                          fs-5
                          text-info
                          pointer
                          mx-1
                        "></i>
                      <i class="
                          fas
                          fa-microphone
                          fs-5
                          text-danger
                          pointer
                          mx-1
                        "></i>
                      <i class="
                          fas
                          fa-ellipsis-h
                          fs-5
                          text-muted
                          pointer
                          mx-1
                        "></i>
                    </div>
                  </div>
                </div>
              </div>

              <!-- end -->
            </div>
            <!-- footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-primary w-100">
                Post
              </button>
            </div>
          </div>
        </div>
      </div>
@endsection
