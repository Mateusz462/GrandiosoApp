@extends('layouts.app')

@section('title')
    Sekcje - GrandiosoApp
@endsection

@section('custom-style')

@endsection

@section('content-header')
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-sm-10">
                <h1 class="m-0">Sekcje</h1>
            </div><!-- /.col -->
            <div class="col-sm-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item">Orkiestra Grandioso Radom</li>
                        <li class="breadcrumb-item active" aria-current="page">Sekcje</li>
                    </ol>
                </nav>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row mt-3">
                        <div class="col-md-7">
                            <h3 class="">Puzon</h3>
                            <h4 class="text-muted">Orkiestra Grandioso Radom</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="mt-3">
                        <div class="">
                            <h3 class="">Opiekun sekcji:</h3>
                            <p class="font-weight-bold">
                                <p class="mb-1">
                                    <img class="rounded-circle" width="24px" src="{{ Auth::user()->getPicture() }}" alt=""> Dariusz Krajewski
                                </p>
                            </p>
                        </div>
                        <div class="">
                            <h3 class="pt-2">Skład sekcji:</h3>
                            <p class="font-weight-bold">
                                <p class="mb-1">
                                    <img class="rounded-circle" width="24px" src="{{ Auth::user()->getPicture() }}" alt=""> Kacper 
                                </p>
                                <p class="mb-1">
                                    <img class="rounded-circle" width="24px" src="{{ Auth::user()->getPicture() }}" alt=""> Patrycja
                                </p>
                                <p class="mb-1">
                                    <img class="rounded-circle" width="24px" src="{{ Auth::user()->getPicture() }}" alt=""> Alicja
                                </p>
                                <p class="mb-1">
                                    <img class="rounded-circle" width="24px" src="{{ Auth::user()->getPicture() }}" alt=""> Mateusz Wydra
                                </p>
                                <p class="mb-1">
                                    <img class="rounded-circle" width="24px" src="{{ Auth::user()->getPicture() }}" alt=""> Mateusz
                                </p>
                                <p class="mb-1">
                                    <img class="rounded-circle" width="24px" src="{{ Auth::user()->getPicture() }}" alt=""> Marceli
                                </p>
                                <p class="mb-1">
                                    <img class="rounded-circle" width="24px" src="{{ Auth::user()->getPicture() }}" alt=""> Oskar
                                </p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-5">
                            <h3 class="font-weight-bold mb-2">
                                <i class="fas fa-info-circle"></i> Najważniejsze informacje
                            </h3>
                        </div>
                        <!--col-->
                        <div class="col text-end">
                            <a href="{{ route('roles.create') }}" class="btn btn-outline-success"><i class="fas fa-plus"></i> Dodaj</a>
                        </div>
                    </div>
                    <!--row-->

                    <div class="row mt-4">
                        <div class="col-4">
                            <div class="card bg-dark  shadow mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h3 class="font-weight-bold mb-2">
                                                <i class="fas fa-bullhorn"></i> Repertuar
                                            </h3>
                                        </div>
                                        <!--col-->
                                        <div class="col text-end">
                                            <a href="{{ route('roles.create') }}" class="btn btn-outline-success"><i class="fas fa-plus"></i> Dodaj</a>
                                        </div>
                                    </div>
                                    <!--row-->

                                    <div class="row mt-4">
                                        <p>
                                            <b>Poranek</b> - Edward Grieg<br>
                                            <b>Werble</b> - nabicie<br>
                                            <b>In Flight</b> - Samuel Hazo<br>
                                            <b>Solo werbli</b> - Tadeusz Krzyczkowski<br>
                                            <b>Wiwat</b> - Leon Landowski<br>
                                            <b>Noc na Łysej Górze</b> - Modest Mussorgski<br>
                                            <b>Mars</b> - Gustav Holst<br>
                                            <b>Dies Irae z Requiem</b> - Giuseppe Verdi<br>
                                            <b>Flower Duet z opery Lakme</b> - Leo Delibes<br>
                                            <b>Walking on Sunshine</b> - Kate and The Waves<br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card bg-dark  shadow mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h3 class="font-weight-bold mb-2">
                                                <i class="fas fa-bullhorn"></i> Repertuar
                                            </h3>
                                        </div>
                                        <!--col-->
                                        <div class="col text-end">
                                            <a href="{{ route('roles.create') }}" class="btn btn-outline-success"><i class="fas fa-plus"></i> Dodaj</a>
                                        </div>
                                    </div>
                                    <!--row-->

                                    <div class="row mt-4">
                                        <p>
                                            <b>Poranek</b> - Edward Grieg<br>
                                            <b>Werble</b> - nabicie<br>
                                            <b>In Flight</b> - Samuel Hazo<br>
                                            <b>Solo werbli</b> - Tadeusz Krzyczkowski<br>
                                            <b>Wiwat</b> - Leon Landowski<br>
                                            <b>Noc na Łysej Górze</b> - Modest Mussorgski<br>
                                            <b>Mars</b> - Gustav Holst<br>
                                            <b>Dies Irae z Requiem</b> - Giuseppe Verdi<br>
                                            <b>Flower Duet z opery Lakme</b> - Leo Delibes<br>
                                            <b>Walking on Sunshine</b> - Kate and The Waves<br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card bg-dark  shadow mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h3 class="font-weight-bold mb-2">
                                                <i class="fas fa-music"></i> Plan prób - Musztra
                                            </h3>
                                        </div>
                                        <!--col-->
                                        <div class="col text-end">
                                            <a href="{{ route('roles.create') }}" class="btn btn-outline-success"><i class="fas fa-plus"></i> Dodaj</a>
                                        </div>
                                    </div>
                                    <!--row-->

                                    <div class="row mt-4">
                                        <p>
                                            <b>2022</b><br>
                                            <b>ŚRODA</b> 17-19 próba<br>
                                            <b>SOBOTA</b> 9-13 próba jeśli sekcje to od 8:30<br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-5">
                            <h3 class="font-weight-bold mb-2">
                                <i class="fas fa-graduation-cap"></i> Materiały do nauki
                            </h3>
                        </div>
                        <!--col-->
                        <div class="col text-end">
                            <a href="{{ route('roles.create') }}" class="btn btn-outline-success"><i class="fas fa-plus"></i> Dodaj</a>
                        </div>
                    </div>
                    <!--row-->

                    <div class="row mt-4">
                        <div class="col-4">
                            <div class="card bg-dark shadow mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h3 class="font-weight-bold mb-2">
                                                <i class="fas fa-music"></i> Nuty
                                            </h3>
                                        </div>
                                        <!--col-->
                                        <div class="col text-end">
                                            <a href="{{ route('roles.create') }}" class="btn btn-outline-primary"><i class="fas fa-eye"></i> Zobacz</a>
                                        </div>
                                    </div>
                                    <!--row-->
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card bg-dark shadow mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h3 class="font-weight-bold mb-2">
                                                <i class="fas fa-video"></i> Video
                                            </h3>
                                        </div>
                                        <!--col-->
                                        <div class="col text-end">
                                            <a href="{{ route('roles.create') }}" class="btn btn-outline-primary"><i class="fas fa-eye"></i> Zobacz</a>
                                        </div>
                                    </div>
                                    <!--row-->
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card bg-dark shadow mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h3 class="font-weight-bold mb-2">
                                                <i class="fas fa-file"></i> Dokumenty
                                            </h3>
                                        </div>
                                        <!--col-->
                                        <div class="col text-end">
                                            <a href="{{ route('roles.create') }}" class="btn btn-outline-primary"><i class="fas fa-eye"></i> Zobacz</a>
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
    </div>
@endsection
