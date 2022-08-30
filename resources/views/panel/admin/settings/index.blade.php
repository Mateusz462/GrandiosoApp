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
                            <i class="fas fa-home"></i> Strona Główna
                        </h3>
                    </div>
                    <!--col-->
                </div>
                <div class="row mt-4">
                    <div class="col-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <!-- Avatar input -->
                                <div class="text-center">
                                    <p>
                                        <img class="mx-auto element rounded-circle" src="https://firebasestorage.googleapis.com/v0/b/glissandoo-6eb90.appspot.com/o/images%2Fgroup%2FStZftLWWqLT7kzADRxNa%2Foriginal.jpeg?alt=media&token=2a10679a-d3a1-4faa-b4b7-ba683d0adadc" style="width: 125px">
                                    </p>
                                    <p class="fw-bold h4 mt-3">Orkiestra Grandioso Radom</p>
                                    <p class="text-muted">orkiestra@grandioso.radom.pl</p>
                                </div>

                                <form class="mt-4">
                                    <!-- Name input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="name" name="name" class="form-control" value="Orkiestra Grandioso Radom" />
                                        <label class="form-label" for="name">Nazwa</label>
                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <input type="email" id="email" name="email" class="form-control" value="orkiestra@grandioso.radom.pl" />
                                        <label class="form-label" for="email">Email</label>
                                    </div>

                                    <!-- Address input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="address" name="address" class="form-control" value="ul. Słowackiego 17, 26-600 Radom" />
                                        <label class="form-label" for="address">Adres</label>
                                    </div>

                                    <!-- Phone input -->
                                    <div class="form-outline mb-4">
                                        <input type="phone" id="phone" name="phone" class="form-control" value="+48 606 671 570" />
                                        <label class="form-label" for="phone">Numer telefonu</label>
                                    </div>

                                    <!-- ABOUT YOU input -->
                                    <div class="form-outline mb-4">
                                        <textarea class="form-control" id="about" name="about" rows="8" cols="80"></textarea>
                                        <label class="form-label" for="about">O zespole</label>
                                    </div>
                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-block"><i class="far fa-save"></i> Zapisz</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <h3 class="font-weight-bold mb-2">
                                            <i class="far fa-trash-alt"></i> Usuwanie grupy
                                        </h3>
                                    </div>
                                    <!--col-->
                                </div>
                                <!--row-->
                                <!--row-->
                                <div class="mt-4">
                                    <p>
                                        Usuwając grupę, usuwasz wszelkie dane związane z grupą, wszelkie informacje o planie prób, koncertach zosatną usunięte. Czynność tą nie można cofnąć.
                                    </p>
                                    <div>
                                        <button class="btn btn-danger" type="button">
                                            <i class="far fa-trash-alt"></i> Usuń grupę
                                        </button>
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
