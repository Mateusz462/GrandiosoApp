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
                        <i class="fas fa-users"></i> Sekcje
                    </h3>
                </div>
                <!--col-->
                <div class="col text-end">
                    <a href="{{ route('roles.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Dodaj sekcje</a>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h3 class="font-weight-bold mb-2">
                                        Sekcja dęta drewniana
                                    </h3>
                                </div>
                                <!--col-->
                            </div>
                            <!--row-->
                            <div class="col-12 mt-2">
                                <h5 class="font-weight-bold mb-2">
                                    Instrumenty:
                                </h5>
                                <p class="mb-3">
                                    <span class="badge badge-primary">
                                        <img width="21px" src="https://cdn-icons-png.flaticon.com/512/836/836920.png" alt=""> Flet
                                    </span>
                                    <span class="badge badge-danger">
                                        <img width="21px" src="https://cdn-icons-png.flaticon.com/512/836/836920.png" alt=""> Klarnet
                                    </span>
                                    <span class="badge badge-success">
                                        <img width="21px" src="https://cdn-icons-png.flaticon.com/512/836/836920.png" alt=""> Obój
                                    </span>
                                </p>
                                <div class="pt-2">
                                    <a href="/manage/789602173323313162/modules/forms" class="btn btn-primary">
                                        <i class="fa fa-cog"></i> Settings
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h3 class="font-weight-bold mb-2">
                                        Sekcja dęta blaszana
                                    </h3>
                                </div>
                                <!--col-->
                            </div>
                            <!--row-->
                            <div class="col-12 mt-2">
                                <h5 class="font-weight-bold mb-2">
                                    Instrumenty:
                                </h5>
                                <p class="mb-3">
                                    <span class="badge badge-primary">
                                        <img width="21px" src="https://cdn-icons-png.flaticon.com/512/836/836920.png" alt=""> Puzon
                                    </span>
                                    <span class="badge badge-danger">
                                        <img width="21px" src="https://cdn-icons-png.flaticon.com/512/836/836920.png" alt=""> Trąbka
                                    </span>
                                    <span class="badge badge-success">
                                        <img width="21px" src="https://cdn-icons-png.flaticon.com/512/836/836920.png" alt=""> Tuba
                                    </span>
                                </p>
                                <div class="pt-2">
                                    <a href="/manage/789602173323313162/modules/forms" class="btn btn-primary">
                                        <i class="fa fa-cog"></i> Settings
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h3 class="font-weight-bold mb-2">
                                        Sekcja perkusji
                                    </h3>
                                </div>
                                <!--col-->
                            </div>
                            <!--row-->
                            <div class="col-12 mt-2">
                                <h5 class="font-weight-bold mb-2">
                                    Instrumenty:
                                </h5>
                                <p class="mb-3">
                                    <span class="badge badge-primary">
                                        <img width="21px" src="https://cdn-icons-png.flaticon.com/512/836/836920.png" alt=""> Perkusja
                                    </span>
                                </p>
                                <div class="pt-2">
                                    <a href="/manage/789602173323313162/modules/forms" class="btn btn-primary">
                                        <i class="fa fa-cog"></i> Settings
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h3 class="font-weight-bold mb-2">
                                        Marionetki / Color Guards
                                    </h3>
                                </div>
                                <!--col-->
                            </div>
                            <!--row-->
                            <div class="col-12 mt-2">
                                <h5 class="font-weight-bold mb-2">
                                    Instrumenty:
                                </h5>
                                <p class="mb-3">
                                    <span class="badge badge-primary">
                                        <img width="21px" src="https://cdn-icons-png.flaticon.com/512/836/836920.png" alt=""> Marionetki
                                    </span>
                                    <span class="badge badge-primary">
                                        <img width="21px" src="https://cdn-icons-png.flaticon.com/512/836/836920.png" alt=""> Color Guards
                                    </span>
                                </p>
                                <div class="pt-2">
                                    <a href="/manage/789602173323313162/modules/forms" class="btn btn-primary">
                                        <i class="fa fa-cog"></i> Settings
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h3 class="font-weight-bold mb-2">
                                        FAGOT
                                    </h3>
                                </div>
                                <!--col-->
                            </div>
                            <!--row-->
                            <div class="col-12 mt-2">
                                <h5 class="font-weight-bold mb-2">
                                    Instrumenty:
                                </h5>
                                <p class="mb-3">
                                    <span class="badge badge-primary">
                                        <img width="21px" src="https://cdn-icons-png.flaticon.com/512/836/836920.png" alt=""> FAGOT
                                    </span>
                                </p>
                                <div class="pt-2">
                                    <a href="/manage/789602173323313162/modules/forms" class="btn btn-primary">
                                        <i class="fa fa-cog"></i> Settings
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h3 class="font-weight-bold mb-2">
                                        FLET
                                    </h3>
                                </div>
                                <!--col-->
                            </div>
                            <!--row-->
                            <div class="col-12 mt-2">
                                <h5 class="font-weight-bold mb-2">
                                    Instrumenty:
                                </h5>
                                <p class="mb-3">
                                    <span class="badge badge-primary">
                                        <img width="21px" src="https://cdn-icons-png.flaticon.com/512/836/836920.png" alt=""> FLET
                                    </span>
                                </p>
                                <div class="pt-2">
                                    <a href="/manage/789602173323313162/modules/forms" class="btn btn-primary">
                                        <i class="fa fa-cog"></i> Settings
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h3 class="font-weight-bold mb-2">
                                        KLARNET
                                    </h3>
                                </div>
                                <!--col-->
                            </div>
                            <!--row-->
                            <div class="col-12 mt-2">
                                <h5 class="font-weight-bold mb-2">
                                    Instrumenty:
                                </h5>
                                <p class="mb-3">
                                    <span class="badge badge-primary">
                                        <img width="21px" src="https://cdn-icons-png.flaticon.com/512/836/836920.png" alt=""> KLARNET
                                    </span>
                                </p>
                                <div class="pt-2">
                                    <a href="/manage/789602173323313162/modules/forms" class="btn btn-primary">
                                        <i class="fa fa-cog"></i> Settings
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h3 class="font-weight-bold mb-2">
                                        OBÓJ
                                    </h3>
                                </div>
                                <!--col-->
                            </div>
                            <!--row-->
                            <div class="col-12 mt-2">
                                <h5 class="font-weight-bold mb-2">
                                    Instrumenty:
                                </h5>
                                <p class="mb-3">
                                    <span class="badge badge-primary">
                                        <img width="21px" src="https://cdn-icons-png.flaticon.com/512/836/836920.png" alt=""> OBÓJ
                                    </span>
                                </p>
                                <div class="pt-2">
                                    <a href="/manage/789602173323313162/modules/forms" class="btn btn-primary">
                                        <i class="fa fa-cog"></i> Settings
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h3 class="font-weight-bold mb-2">
                                        PERKUSJA
                                    </h3>
                                </div>
                                <!--col-->
                            </div>
                            <!--row-->
                            <div class="col-12 mt-2">
                                <h5 class="font-weight-bold mb-2">
                                    Instrumenty:
                                </h5>
                                <p class="mb-3">
                                    <span class="badge badge-primary">
                                        <img width="21px" src="https://cdn-icons-png.flaticon.com/512/836/836920.png" alt=""> PERKUSJA
                                    </span>
                                </p>
                                <div class="pt-2">
                                    <a href="/manage/789602173323313162/modules/forms" class="btn btn-primary">
                                        <i class="fa fa-cog"></i> Settings
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h3 class="font-weight-bold mb-2">
                                        PUZON
                                    </h3>
                                </div>
                                <!--col-->
                            </div>
                            <!--row-->
                            <div class="col-12 mt-2">
                                <h5 class="font-weight-bold mb-2">
                                    Instrumenty:
                                </h5>
                                <p class="mb-3">
                                    <span class="badge badge-primary">
                                        <img width="21px" src="https://cdn-icons-png.flaticon.com/512/836/836920.png" alt=""> PUZON
                                    </span>
                                </p>
                                <div class="pt-2">
                                    <a href="/manage/789602173323313162/modules/forms" class="btn btn-primary">
                                        <i class="fa fa-cog"></i> Settings
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h3 class="font-weight-bold mb-2">
                                        SAKSOFONY
                                    </h3>
                                </div>
                                <!--col-->
                            </div>
                            <!--row-->
                            <div class="col-12 mt-2">
                                <h5 class="font-weight-bold mb-2">
                                    Instrumenty:
                                </h5>
                                <p class="mb-3">
                                    <span class="badge badge-primary">
                                        <img width="21px" src="https://cdn-icons-png.flaticon.com/512/836/836920.png" alt=""> SAKSOFON ALT
                                    </span>
                                    <span class="badge badge-primary">
                                        <img width="21px" src="https://cdn-icons-png.flaticon.com/512/836/836920.png" alt=""> SAKSOFON TENOR
                                    </span>
                                </p>
                                <div class="pt-2">
                                    <a href="/manage/789602173323313162/modules/forms" class="btn btn-primary">
                                        <i class="fa fa-cog"></i> Settings
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h3 class="font-weight-bold mb-2">
                                        TRĄBKA
                                    </h3>
                                </div>
                                <!--col-->
                            </div>
                            <!--row-->
                            <div class="col-12 mt-2">
                                <h5 class="font-weight-bold mb-2">
                                    Instrumenty:
                                </h5>
                                <p class="mb-3">
                                    <span class="badge badge-primary">
                                        <img width="21px" src="https://cdn-icons-png.flaticon.com/512/836/836920.png" alt=""> TRĄBKA
                                    </span>
                                </p>
                                <div class="pt-2">
                                    <a href="/manage/789602173323313162/modules/forms" class="btn btn-primary">
                                        <i class="fa fa-cog"></i> Settings
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h3 class="font-weight-bold mb-2">
                                        TUBA
                                    </h3>
                                </div>
                                <!--col-->
                            </div>
                            <!--row-->
                            <div class="col-12 mt-2">
                                <h5 class="font-weight-bold mb-2">
                                    Instrumenty:
                                </h5>
                                <p class="mb-3">
                                    <span class="badge badge-primary">
                                        <img width="21px" src="https://cdn-icons-png.flaticon.com/512/836/836920.png" alt=""> TUBA
                                    </span>
                                </p>
                                <div class="pt-2">
                                    <a href="/manage/789602173323313162/modules/forms" class="btn btn-primary">
                                        <i class="fa fa-cog"></i> Settings
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h3 class="font-weight-bold mb-2">
                                        WALTORNIA
                                    </h3>
                                </div>
                                <!--col-->
                            </div>
                            <!--row-->
                            <div class="col-12 mt-2">
                                <h5 class="font-weight-bold mb-2">
                                    Instrumenty:
                                </h5>
                                <p class="mb-3">
                                    <span class="badge badge-primary">
                                        <img width="21px" src="https://cdn-icons-png.flaticon.com/512/836/836920.png" alt=""> WALTORNIA
                                    </span>
                                </p>
                                <div class="pt-2">
                                    <a href="/manage/789602173323313162/modules/forms" class="btn btn-primary">
                                        <i class="fa fa-cog"></i> Settings
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h3 class="font-weight-bold mb-2">
                                        WERBLE/MAŻORETKI/TAMB.
                                    </h3>
                                </div>
                                <!--col-->
                            </div>
                            <!--row-->
                            <div class="col-12 mt-2">
                                <h5 class="font-weight-bold mb-2">
                                    Instrumenty:
                                </h5>
                                <p class="mb-3">
                                    <span class="badge badge-primary">
                                        <img width="21px" src="https://cdn-icons-png.flaticon.com/512/836/836920.png" alt=""> WERBLE
                                    </span>
                                    <span class="badge badge-primary">
                                        <img width="21px" src="https://cdn-icons-png.flaticon.com/512/836/836920.png" alt=""> MAŻORETKI
                                    </span>
                                    <span class="badge badge-primary">
                                        <img width="21px" src="https://cdn-icons-png.flaticon.com/512/836/836920.png" alt=""> TAMBURMAJORKA
                                    </span>
                                </p>
                                <div class="pt-2">
                                    <a href="/manage/789602173323313162/modules/forms" class="btn btn-primary">
                                        <i class="fa fa-cog"></i> Settings
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection
