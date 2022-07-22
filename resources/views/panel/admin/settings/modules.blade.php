@extends('layouts.app')

@section('title')
    Dodaj nowy post - GrandiosoApp
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
                        <li class="breadcrumb-item active" aria-current="page">Ustawienia</li>
                    </ol>
                </nav>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection

@section('content')
    <div class="container-fluid">
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
                    <div class="col-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <h3 class="font-weight-bold mb-2">
                                            <i class="far fa-comments"></i> Komentarze
                                        </h3>
                                    </div>
                                    <!--col-->
                                    <div class="col">
                                        <!-- Checked switch -->
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked />
                                        </div>
                                    </div>
                                </div>
                                <!--row-->
                                <div class="col-12">
                                    <p>
                                        Forms allows you to build your own set of questions for your server
                                        members/users to fill out and receive submissions straight into your
                                        Discord server!
                                    </p>
                                    <div>
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
                                    <div class="col-sm-5">
                                        <h3 class="font-weight-bold mb-2">
                                            <i class="far fa-comments"></i> Komentarze
                                        </h3>
                                    </div>
                                    <!--col-->
                                </div>
                                <!--row-->
                                <div class="col-12">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h3 class="font-weight-bold mb-2">
                                            <i class="far fa-comments"></i> Komentarze
                                        </h3>
                                    </div>
                                    <!--col-->
                                </div>
                                <!--row-->
                                <div class="col-12">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
