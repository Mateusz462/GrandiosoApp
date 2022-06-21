@extends('layouts.app')

@section('content-header')
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-sm-10">
                <h1 class="m-0">Profil</h1>
            </div><!-- /.col -->
            <div class="col-sm-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item">Profil użytkownika</li>
                        <li class="breadcrumb-item active" aria-current="page">Mateusz</li>
                    </ol>
                </nav>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection

@section('content')
    <div class="container-fluid">
        <!-- row -->

        <div class="row">
            <div class="col-5">
                <div class="card bg-dark mb-4">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center">
                            <img class="rounded-circle" height="100px" width="100px" src="{{ auth()->user()->getPicture() }}" alt="">
                            <p class="fw-bold h4 mt-3">{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</p>
                            <p class="text-muted">
                                @if(auth()->user()->roletype == 'SuperAdmin')
                                    <span class="badge badge-light">Super Administrator</span>
                                @elseif(auth()->user()->roletype == 'Admin')
                                    <span class="badge badge-light">Administrator</span>
                                @elseif(auth()->user()->roletype == 'Employee')
                                    <span class="badge badge-light">Nauczyciel</span>
                                @elseif(auth()->user()->roletype == 'Parent')
                                    <span class="badge badge-light">Rodzic / Opiekun</span>
                                @elseif(auth()->user()->roletype == 'User')
                                    <span class="badge badge-light">Uczeń</span>
                                @endif
                            </p>
                            <p class="mb-3">
                                @if(count(auth()->user()->rolesections) < 1)
                                    Brak danych!
                                @else
                                    @foreach(auth()->user()->rolesections as $key => $item)
                                        <span class="badge badge-{{ $item->color }} mb-1">
                                            <img width="24px" src="{{ asset('/storage/instruments/'.$item->image ) }}" alt=""> {{ $item->name }}
                                        </span>
                                    @endforeach
                                @endif
                            </p>
                            <div class="d-flex ">
                                <div class="btn btn-primary follow me-2">Obserwuj</div>
                                <div class="btn btn-outline-primary message">Wiadomość</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-dark mb-4">
                    <div class="card-body">
                        <h4 class="fw-bold py-2 px-3">Social Media</h4>
                        <div class="d-flex justify-content-between border-bottom py-2 px-3">
                            <p><i class="fas fa-globe me-2"></i>Strona internetowa</p>
                            <a href="#">https://bootdey.com</a>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2 px-3">
                            <p><i class="fab fa-twitter me-2"></i>Twitter</p>
                            <a href="">@bootdey</a>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2 px-3">
                            <p><i class="fab fa-instagram me-2"></i>Instagram</p>
                            <a href="">bootdey</a>
                        </div>
                        <div class="d-flex justify-content-between py-2 px-3">
                            <p><i class="fab fa-facebook-f me-2"></i>Facebook</p>
                            <a href="">bootdey</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="card bg-dark mb-4">
                    <div class="card-body">
                        <h4 class="fw-bold py-2 px-3">Dane kontaktowe</h4>
                        <div class="d-flex align-items-center justify-content-between border-bottom px-3">
                            <p class="py-2">Imię i nazwisko</p>
                            <p class="py-2 text-muted">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom px-3">
                            <p class="py-2">Email</p>
                            <p class="py-2 text-muted">{{ Auth::user()->email }}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom px-3">
                            <p class="py-2">Telefon</p>
                            <p class="py-2 text-muted">(239) 816-9029</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between px-3">
                            <p class="py-2">Adres</p>
                            <p class="py-2 text-muted"> Soma,San Francisco,CA</p>
                        </div>
                    </div>
                </div>
                <div class="card bg-dark mb-4">
                    <div class="card-body">
                        <h4 class="fw-bold py-2 px-3">Statystyki</h4>
                        <div class="position-relative px-3 my-2">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-tools"></i>
                                <span class="ms-2">W budowie</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
