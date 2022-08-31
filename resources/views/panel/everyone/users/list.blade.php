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
@endsection

@section('content-header')
    <div class="container-fluid px-4 my-5">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="m-0">Użytkownicy</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Orkiestra Grandioso Radom</li>
                        <li class="breadcrumb-item active" aria-current="page">Użytkownicy</li>
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
            <!-- <div class="col-12">
                <div class="alert alert-warning mt-2 mb-2" role="alert">
                    <i class="fas fa-info-circle fa-lg"></i> <b>Kalendarz</b> jest specjalnie ustawiony na maj w celu lepszego zapoznania się z możliwymi funkcjami
                </div>
            </div> -->
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="row d-none">
                            <h1 class="mb-3">Użytkownicy <small class="text-muted">wszyscy</small></h1>
                            <p class="px-2">
                                <button class="btn btn-outline-success me-2"><i class="fas fa-calendar-alt fa-lg"></i>&nbsp; Wszyscy</button>
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
                                @foreach ($users as $user)
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="card border bg-dark mb-2">
                                            <div class="card-body text-center">
                                                <img class="rounded-circle" width="120px" src="{{ $user->getPicture() }}" alt="">
                                                <p class="fw-bold h4 mt-3">{{ $user->firstname }} {{ $user->lastname }}</p>
                                                <p class="mb-1">Orkiestra Grandioso Radom</p>
                                                <p class="">
                                                    <span class="badge badge-light">
                                                        <i class="fas fa-shield-alt"></i>
                                                        @if($user->roletype == 'SuperAdmin')
                                                            Super Administrator
                                                        @elseif($user->roletype == 'Admin')
                                                            Administrator
                                                        @elseif($user->roletype == 'Employee')
                                                            Nauczyciel
                                                        @elseif($user->roletype == 'Parent')
                                                            Rodzic / Opiekun
                                                        @elseif($user->roletype == 'User')
                                                            Uczeń
                                                        @endif
                                                    </span>
                                                </p>
                                                <p class="pb-0 text-center">
                                                    @if(count($user->rolesections) < 1)
                                                        Brak danych!
                                                    @else
                                                        @foreach($user->rolesections as $key => $item)
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
                                @endforeach
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
                                                @foreach(Auth::user()->rolesections as $key => $item)
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
                    <div id="modal-podglad-loading" class="text-center row" style="display: block">
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
                        </div>
                        <div id="modal-podglad-event-row-error" class="text-center row" style="display: none">
                            <br><br><div class="col-12">
                                Brak wydarzeń!
                            </div><br><br>
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
