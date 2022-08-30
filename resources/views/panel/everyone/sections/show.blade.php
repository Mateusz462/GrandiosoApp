@extends('layouts.app')

@section('custom-style')
@include('panel.everyone.sections.includes.style')
@endsection

@section('content')
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-top border-end border-bottom bg-dark" id="sidebar-wrapper">
            @include('panel.everyone.sections.includes.sidebar')
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper" class="border-bottom">
            <!-- Top navigation-->
            @include('panel.everyone.sections.includes.nav')
            <!-- Page content-->
            <div class="container-fluid px-4">
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h3 class="font-weight-bold mb-2">
                                            <i class="fas fa-info-circle"></i> Informacje
                                        </h3>
                                    </div>
                                    <!--col-->
                                </div>
                                <!--row-->

                                <div class="row mt-4">
                                    <div class="col-xl-4">
                                        <div class="card bg-dark  shadow mb-4">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <h3 class="font-weight-bold mb-2">
                                                            <i class="far fa-file-alt"></i> Repertuar
                                                        </h3>
                                                    </div>
                                                    <!--col-->
                                                    <div class="col text-end">
                                                        <a href="{{ route('roles.create') }}" class="btn btn-outline-secondary"><i class="fas fa-edit"></i> Edytuj</a>
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
                                                        <a href="{{ route('roles.create') }}" class="btn btn-outline-secondary"><i class="fas fa-edit"></i> Edytuj</a>
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
                                    <div class="col-xl-8">
                                        <div class="card bg-dark shadow mb-4">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <h3 class="font-weight-bold mb-2">
                                                            <i class="fas fa-bullhorn"></i> Ogłoszenia
                                                        </h3>
                                                    </div>
                                                    <!--col-->
                                                </div>
                                                <!--row-->
                                                <div class="row mt-3">
                                                    <div class="pe-3" data-mdb-perfect-scrollbar="true" style="max-height: 500px; overflow: hidden auto;">
                                                        <div style="height: 100%;">
                                                            <div class="card border mt-2 p-0 mb-4" style="background-color: rgba(177, 59, 252, 0.54)">
                                                                <div class="position-relative p-3 pb-0">
                                                                    <div class="d-flex justify-content-start">
                                                                        <div class="position-relative d-flex align-items-center">
                                                                            <img class="rounded-circle me-3" src="{{ auth()->user()->getPicture() }}" width="45">
                                                                            <div class="d-flex flex-column justify-content-center">
                                                                                <span class="d-flex align-items-center font-weight-bold"> {{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</span>
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="badge badge-light me-2">
                                                                                        <i class="fas fa-shield-alt"></i>
                                                                                        @if(auth()->user()->roletype == 'SuperAdmin')
                                                                                            Super Administrator
                                                                                        @elseif(auth()->user()->roletype == 'Admin')
                                                                                            Administrator
                                                                                        @elseif(auth()->user()->roletype == 'Employee')
                                                                                            Nauczyciel
                                                                                        @elseif(auth()->user()->roletype == 'Parent')
                                                                                            Rodzic / Opiekun
                                                                                        @elseif(auth()->user()->roletype == 'User')
                                                                                            Uczeń
                                                                                        @endif
                                                                                    </div>
                                                                                    <span> · </span>&nbsp;
                                                                                    <div class="ms-1" data-mdb-toggle="tooltip" data-mdb-html="true" title="21:37 21.12.2022">
                                                                                        25.06.2022
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="position-relative px-3 my-3">
                                                                    <div class="d-flex flex-column justify-content-center g-2">
                                                                        <p>
                                                                            Wydział Przewozów Wirtualnego Zarządu Transportu Miejskiego informuje, że w związku z wprowadzeniem zmian w układzie komunikacyjnym, zostają zaktualizowane zasady identyfikacji wizualnej numerów linii wyświetlanych na tablicach z ciemnym tłem.
                                                                            <br />
                                                                            Szczegóły w dokumencie poniżej.
                                                                            <br />
                                                                            <strong>UWAGA! ROZPORZĄDZENIE OBOWIĄZUJE OD 07.02.2022 r.</strong>
                                                                            <br />
                                                                            <a href="https://www.vztm.pl/wp-content/uploads/2022/02/vZTM060222D1.pdf">Rozporządzenie Dyrektora ds. Przewozów ws. zmiany w zasadach funkcjonowania Systemu Informacji Pasażerskiej</a>
                                                                            <br />
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card border mt-2 p-0 mb-4">
                                                                <div class="position-relative p-3 pb-0">
                                                                    <div class="d-flex justify-content-start">
                                                                        <div class="position-relative d-flex align-items-center">
                                                                            <img class="rounded-circle me-3" src="{{ auth()->user()->getPicture() }}" width="45">
                                                                            <div class="d-flex flex-column justify-content-center">
                                                                                <span class="d-flex align-items-center font-weight-bold"> {{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</span>
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="badge badge-light me-2">
                                                                                        <i class="fas fa-shield-alt"></i>
                                                                                        @if(auth()->user()->roletype == 'SuperAdmin')
                                                                                            Super Administrator
                                                                                        @elseif(auth()->user()->roletype == 'Admin')
                                                                                            Administrator
                                                                                        @elseif(auth()->user()->roletype == 'Employee')
                                                                                            Nauczyciel
                                                                                        @elseif(auth()->user()->roletype == 'Parent')
                                                                                            Rodzic / Opiekun
                                                                                        @elseif(auth()->user()->roletype == 'User')
                                                                                            Uczeń
                                                                                        @endif
                                                                                    </div>
                                                                                    <span> · </span>&nbsp;
                                                                                    <div class="ms-1" data-mdb-toggle="tooltip" data-mdb-html="true" title="21:37 21.12.2022">
                                                                                        25.06.2022
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="position-relative px-3 my-3">
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <p>
                                                                            SAKSOFONY🎷 ktoś z was chyba zgubił teczke z nutami.
                                                                            <br>
                                                                            Jak sie znajdzie chętny to w środe będą do odbioru u mnie
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card border mt-2 p-0 mb-4">
                                                                <div class="position-relative p-3 pb-0">
                                                                    <div class="d-flex justify-content-start">
                                                                        <div class="position-relative d-flex align-items-center">
                                                                            <img class="rounded-circle me-3" src="{{ auth()->user()->getPicture() }}" width="45">
                                                                            <div class="d-flex flex-column justify-content-center">
                                                                                <span class="d-flex align-items-center font-weight-bold"> {{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</span>
                                                                                <span class="d-flex align-items-center">
                                                                                    <span class="badge badge-light">
                                                                                        <i class="fas fa-shield-alt"></i>
                                                                                        @if(auth()->user()->roletype == 'SuperAdmin')
                                                                                        Super Administrator
                                                                                        @elseif(auth()->user()->roletype == 'Admin')
                                                                                        Administrator
                                                                                        @elseif(auth()->user()->roletype == 'Employee')
                                                                                        Nauczyciel
                                                                                        @elseif(auth()->user()->roletype == 'Parent')
                                                                                        Rodzic / Opiekun
                                                                                        @elseif(auth()->user()->roletype == 'User')
                                                                                        Uczeń
                                                                                        @endif
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <p class="text-muted p-3 pb-0">
                                                                    <i class="fas fa-clock"></i> 21:37 21.12.2022
                                                                </p>
                                                                <div class="position-relative px-3 mb-3">
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        Witajcie,
                                                                        W dniu dzisiejszym tj. 14.09.2021 ogłaszamy zawieszenie firmy na czas nieokreślony. Dziękujemy wszystkim a szczególnie kierowcom za poświęcony czas oraz chęci do pracy.
                                                                        \n Do zobaczenia!
                                                                        \n Ekipa WP
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <a href="{{ route('roles.create') }}" class="btn btn-secondary"><i class="fas fa-edit"></i> Dodaj</a>
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
                                                        <a href="{{ route('roles.create') }}" class="btn btn-outline-secondary"><i class="fas fa-eye"></i> Zobacz</a>
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
                                                        <a href="{{ route('roles.create') }}" class="btn btn-outline-secondary"><i class="fas fa-eye"></i> Zobacz</a>
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
                                                        <a href="{{ route('roles.create') }}" class="btn btn-outline-secondary"><i class="fas fa-eye"></i> Zobacz</a>
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
        </div>
    </div>
@endsection

@section('javascript')

@endsection
