@extends('layouts.app')

@section('title')
    Sekcje - GrandiosoApp
@endsection

@section('custom-style')
#chat3 .form-control {
border-color: transparent;
}

#chat3 .form-control:focus {
border-color: transparent;
box-shadow: inset 0px 0px 0px 1px transparent;
}

.badge-dot {
border-radius: 50%;
height: 10px;
width: 10px;
margin-left: 2.9rem;
margin-top: -.75rem;
}
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
    <div class="container-fluid">
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
                                        <img class="rounded-circle" width="24px" src="https://mdbcdn.b-cdn.net/img/new/avatars/1.webp" alt=""> Dariusz Krajewski
                                    </p>
                                </p>
                            </div>
                            <div class="">
                                <h3 class="pt-2">Skład sekcji:</h3>
                                <p class="font-weight-bold">
                                    <p class="mb-1">
                                        <img class="rounded-circle" width="24px" src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" alt=""> Kacper
                                    </p>
                                    <p class="mb-1">
                                        <img class="rounded-circle" width="24px" src="https://mdbcdn.b-cdn.net/img/new/avatars/4.webp" alt=""> Patrycja
                                    </p>
                                    <p class="mb-1">
                                        <img class="rounded-circle" width="24px" src="https://mdbcdn.b-cdn.net/img/new/avatars/5.webp" alt=""> Alicja
                                    </p>

                                    <p class="mb-1">
                                        <img class="rounded-circle" width="24px" src="https://mdbcdn.b-cdn.net/img/new/avatars/3.webp" alt=""> Mateusz
                                    </p>
                                    <p class="mb-1">
                                        <img class="rounded-circle" width="24px" src="https://mdbcdn.b-cdn.net/img/new/avatars/8.webp" alt=""> Marceli
                                    </p>
                                    <p class="mb-1">
                                        <img class="rounded-circle" width="24px" src="https://mdbcdn.b-cdn.net/img/new/avatars/3.webp" alt=""> Oskar
                                    </p>
                                    @if(auth()->user()->id == 1)
                                        <p class="mb-1">
                                            <img class="rounded-circle" width="24px" src="https://graph.facebook.com/v3.3/1330991870692266/picture?type=normal" alt=""> Mateusz Wydra
                                        </p>
                                    @else
                                        <p class="mb-1">
                                            <img class="rounded-circle" width="24px" src="{{ auth()->user()->getPicture() }}" alt=""> {{ auth()->user()->firstname }} {{ auth()->user()->lastname }}
                                        </p>
                                    @endif
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
                                <div class="card bg-dark  shadow mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <h3 class="font-weight-bold mb-2">
                                                    <i class="fas fa-music"></i> Plan prób
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
                            <div class="col-md-6 col-lg-8">
                                <div class="card bg-dark shadow mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <h3 class="font-weight-bold mb-2">
                                                    <i class="fas fa-users"></i> Czat
                                                </h3>
                                            </div>
                                            <!--col-->
                                        </div>
                                        <!--row-->
                                        <div class="col">

                                            <div class="pt-3 pe-3" data-mdb-perfect-scrollbar="true" style="max-height: 450px; overflow: auto;">

                                                <div class="d-flex flex-row justify-content-start">
                                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp" alt="avatar 1" style="width: 45px; height: 100%;">
                                                    <div>
                                                        <p class="small px-2 ms-2 mb-1">Johny Bullock</p>
                                                        <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #797b7e;">Lorem ipsum
                                                            dolor
                                                            sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                            dolore
                                                            magna aliqua.
                                                        </p>
                                                        <p class="small ms-3 mb-3 rounded-3 text-muted float-start">12:00 PM | Aug 13</p>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row justify-content-end">
                                                    <div>
                                                        <p class="text-end small px-2 me-2 mb-1">Johny Bullock</p>
                                                        <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">Ut enim ad minim veniam,
                                                            quis
                                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                        </p>
                                                        <p class="small me-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13</p>
                                                    </div>
                                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp" alt="avatar 1" style="width: 45px; height: 100%;">
                                                </div>


                                                <div class="d-flex flex-row justify-content-start">
                                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava5-bg.webp" alt="avatar 1" style="width: 45px; height: 100%;">
                                                    <div>
                                                        <p class="small px-2 ms-2 mb-1">Johny Bullock</p>
                                                        <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #797b7e;">Lorem ipsum
                                                            dolor
                                                            sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                            dolore
                                                            magna aliqua.
                                                        </p>
                                                        <p class="small ms-3 mb-3 rounded-3 text-muted float-start">12:00 PM | Aug 13</p>
                                                    </div>
                                                </div>


                                                <div class="d-flex flex-row justify-content-end">
                                                    <div>
                                                        <p class="text-end small px-2 me-2 mb-1">Johny Bullock</p>
                                                        <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">Ut enim ad minim veniam,
                                                            quis
                                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                        </p>
                                                        <p class="small me-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13</p>
                                                    </div>
                                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp" alt="avatar 1" style="width: 45px; height: 100%;">
                                                </div>

                                                <div class="d-flex flex-row justify-content-start">
                                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp" alt="avatar 1" style="width: 45px; height: 100%;">
                                                    <div>
                                                        <p class="small px-2 ms-2 mb-1">Johny Bullock</p>
                                                        <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #797b7e;">
                                                            Sed ut perspiciatis
                                                            unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                                                            rem
                                                            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                                                            dicta
                                                            sunt explicabo.
                                                        </p>
                                                        <p class="small ms-3 mb-3 rounded-3 text-muted float-start">12:00 PM | Aug 13</p>
                                                    </div>
                                                </div>


                                                <div class="d-flex flex-row justify-content-start">
                                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp" alt="avatar 1" style="width: 45px; height: 100%;">
                                                    <div>
                                                        <p class="small px-2 ms-2 mb-1">Johny Bullock</p>
                                                        <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #797b7e;">
                                                            Sed ut perspiciatis
                                                            unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                                                            rem
                                                            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                                                            dicta
                                                            sunt explicabo.
                                                        </p>
                                                        <p class="small ms-3 mb-3 rounded-3 text-muted float-start">12:00 PM | Aug 13</p>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row justify-content-start">
                                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp" alt="avatar 1" style="width: 45px; height: 100%;">
                                                    <div>
                                                        <p class="small px-2 ms-2 mb-1">Johny Bullock</p>
                                                        <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #797b7e;">Lorem ipsum
                                                            dolor
                                                            sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                            dolore
                                                            magna aliqua.
                                                        </p>
                                                        <p class="small ms-3 mb-3 rounded-3 text-muted float-start">12:00 PM | Aug 13</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-muted d-flex justify-content-start align-items-center pe-3 pt-3 mt-2">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp" alt="avatar 3" style="width: 40px; height: 100%;">
                                                <input type="text" class="form-control form-control-lg mx-2" id="exampleFormControlInput2" placeholder="Type message">
                                                <a class="ms-1 text-muted" href="#!"><i class="fas fa-paperclip"></i></a>
                                                <a class="ms-3 text-muted" href="#!"><i class="fas fa-smile"></i></a>
                                                <a class="ms-3" href="#!"><i class="fas fa-paper-plane"></i></a>
                                            </div>

                                        </div>
                                        <!-- <div class="row mt-4">
                                            <div class="row mb-4">
                                                <div class="d-flex justify-content-start">
                                                    <div class="position-relative d-flex align-items-center">
                                                        <img class="rounded-circle me-3" src="{{ asset('storage/avatars/1.webp') }}" width="45">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <span class="d-flex align-items-center font-weight-bold">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>
                                                            <span class="d-flex align-items-center">
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
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="card shadow mb-42">
                                                        <div class="card-body p-0 p-2">
                                                            <p class="mt-2 mb-1 text-muted">21.32</p>
                                                            <p class="mb-0"><b>ŚRODA</b> 17-19 próba</p>
                                                            <p class="mb-2"><b>SOBOTA</b> 9-13 próba jeśli sekcje to od 8:30</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="d-flex justify-content-start">
                                                <div class="position-relative d-flex align-items-center">
                                                    <img class="rounded-circle me-3" src="{{ asset('storage/avatars/1.webp') }}" width="45">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <span class="d-flex align-items-center font-weight-bold">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>
                                                        <span class="d-flex align-items-center">
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
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="card shadow mb-42">
                                                    <div class="card-body p-0 p-2">
                                                        <p class="mt-2 mb-1 text-muted">21.32</p>
                                                        <p class="mb-0">Hej</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
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
                            <div class="col-md-6 col-lg-4">
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
                                                <a href="{{ route('roles.create') }}" class="btn btn-outline-primary"><i class="fas fa-eye"></i> Zobacz</a>
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
    </div>
@endsection
