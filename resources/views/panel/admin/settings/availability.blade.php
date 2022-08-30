@extends('layouts.app')

@section('title')
    Sekcje - GrandiosoApp
@endsection

@section('custom-style')

@endsection

@section('content-header')
    <div class="container-fluid px-4 my-5">
        <div class="row">
            <div class="col-sm-10">
                <h1 class="m-0">Ustawienia - Orkiestra Grandioso Radom</h1>
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
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-3">
                <div class="card mb-4">
                    <div class="card-body">
                        @include('panel.admin.settings.sidebar')
                    </div>
                </div>
            </div>

            <div class="col-9">
                <div class="row">
                    <div class="col-sm-10">
                        <h3 class="font-weight-bold mb-2">
                            <i class="fas fa-shield-alt"></i> Dostępność
                        </h3>
                    </div>
                    <!--col-->
                </div>

                <div class="row mt-4">
                    <div class="col-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="font-weight-bold mb-2 text-center"><i class="fas fa-user-check"></i> Dołączanie do zespołu</h3>
                                <br>
                                <h3 class="text-center">Status: <span class="badge badge-success bg-lg">OTWARTE</span></h3>
                                <form action="#" method="" class="mt-4">
                                    <input type="hidden" value="0" name="status">
                                    <!-- Reason input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="reason" name="reason" class="form-control"/>
                                        <label class="form-label" for="reason">Powód</label>
                                    </div>
                                    <p class="text-center mt-4">
                                        <button type="submit" class="btn btn-outline-danger btn-lg">
                                            <i class="fas fa-power-off"></i> Zamknij
                                        </button>
                                    </p>
                                </form>
                                <p class="text-muted pt-3">Zablokuj możliwość rejestracji / przyjmowania nowych członków do zespołu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="font-weight-bold mb-2 text-center"><i class="fas fa-user-lock"></i>  Użytkownicy z pozwoleniem na wejście podczas przerwy technicznej</h3>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <div class="card bg-dark shadow mb-4">
                                            <div class="card-body">
                                                <p class="text-center">
                                                    <a href="#" style="">Mati Wydra</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
