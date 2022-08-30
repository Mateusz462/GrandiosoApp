@extends('layouts.app')

@section('title')
    Dodaj nowy post - GrandiosoApp
@endsection

@section('custom-style')

@endsection

@section('content-header')
    <div class="container-fluid px-4 my-5">
        <div class="row">
            <div class="col-sm-10">
                <h1 class="m-0">Musztra</h1>
            </div><!-- /.col -->
            <div class="col-sm-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item">Orkiestra Grandioso Radom</li>
                        <li class="breadcrumb-item active" aria-current="page">Musztra</li>
                    </ol>
                </nav>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection

@section('content')
    <div class="container-fluid px-4">
        <div class="row">
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
                                <a href="#" class="btn btn-outline-success"><i class="fas fa-plus"></i> Dodaj</a>
                            </div>
                        </div>
                        <!--row-->

                        <div class="row mt-4">
                            <div class="col-md-6 col-lg-4">
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
                                                <a href="#" class="btn btn-outline-success"><i class="fas fa-plus"></i> Dodaj</a>
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
                            <div class="col-md-6 col-lg-4">
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
                                                <a href="#" class="btn btn-outline-success"><i class="fas fa-plus"></i> Dodaj</a>
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

                            <div class="col-md-6 col-lg-4">
                                <div class="card bg-dark shadow mb-4">
                                    <div class="card-body text-muted">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <h3 class="font-weight-bold mb-2">
                                                    <i class="fas fa-tools"></i>
                                                    <span class="ms-2">W budowie</span>
                                                </h3>
                                            </div>
                                            <!--col-->
                                            <div class="col text-end">
                                                <a href="#" class="btn btn-success disabled"><i class="fas fa-plus"></i> Dodaj post</a>
                                            </div>
                                        </div>
                                        <!--row-->

                                        <div class="row">
                                            <div class="position-relative pt-3">
                                                <p class="mb-0">Zdecyduj co ma się tutaj znaleść!</p>
                                                <p class="mb-0"><a href="mailto:mtszwydra@gmail.com">Napisz do nas!</a></p>
                                            </div>
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
                                <a href="#" class="btn btn-outline-success"><i class="fas fa-plus"></i> Dodaj</a>
                            </div>
                        </div>
                        <!--row-->

                        <div class="row mt-4">
                            <div class="col-md-6 col-lg-4">
                                <div class="card bg-dark shadow mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h3 class="font-weight-bold mb-2">
                                                    <i class="fas fa-film"></i> Video-symulacje
                                                </h3>
                                            </div>
                                            <!--col-->
                                            <div class="col text-end">
                                                <a href="#" class="btn btn-outline-primary"><i class="fas fa-eye"></i> Zobacz</a>
                                            </div>
                                        </div>
                                        <!--row-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
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
                                                <a href="#" class="btn btn-outline-primary"><i class="fas fa-eye"></i> Zobacz</a>
                                            </div>
                                        </div>
                                        <!--row-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
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
                                                <a href="#" class="btn btn-outline-primary"><i class="fas fa-eye"></i> Zobacz</a>
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
    </div>
@endsection
