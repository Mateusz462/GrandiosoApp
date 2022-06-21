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
                                                <a href="#" style="color: #3cbeda">[P-001] BREZES</a>
                                            </p>
                                            <p class="text-center">
                                                <a href="#" style="color: #3cbeda">Prezes WP</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card bg-dark shadow mb-4">
                                        <div class="card-body">
                                            <p class="text-center">
                                                <a href="#" style="color: #00b76c">[KZ-022] Koper</a>
                                            </p>
                                            <p class="text-center">
                                                <a href="#" style="color: #00b76c">Kierownik zajezdni</a>
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
                                    <div class="card mb-4">

                                        <!--card-header-->
                                        <div class="card-body">
                                            <h4><i class="fas fa-user-secret"></i> Zalogowani użytkownicy</h4>
                                            <div class="row mt-4">
                                                <div class="col-md-6 col-lg-4 col-xxl-3 mt-3">
                                                        <div class="card bg-dark">
                                                            <div class="card-body">
                                                                <div class="d-flex align-items-start">
                                                                    <img src="https://wirtualne-pomorze.pl/storage/avatars/avatar.jpeg" class="rounded-circle" height="77" alt="" loading="lazy">
                                                                    <div class="ms-3">
                                                                        <p class="fw-bold mb-0">[25] masło123</p>
                                                                        <p class="mb-0">
                                                                            <span class="gdpr">
                                                                                <span class="name">Marian Masło</span>
                                                                                <span style="padding: 0 2px; background-color: #000; color: #f93154;" class="censor d-none">UKRYTO</span>
                                                                            </span>
                                                                        </p>
                                                                        <p class="text-muted mb-0">
                                                                            <span class="gdpr">
                                                                                <span class="name">admin@admin.com</span>
                                                                                <span style="padding: 0 2px; background-color: #000; color: #f93154;" class="censor d-none">UKRYTO</span>
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-3 d-grid gap-2 d-md-block">


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                                                    <div class="col-md-6 col-lg-4 col-xxl-3 mt-3">
                                                        <div class="card bg-dark">
                                                            <div class="card-body">
                                                                <div class="d-flex align-items-start">
                                                                    <img src="https://wirtualne-pomorze.pl/storage/avatars/avatar.jpeg" class="rounded-circle" height="77" alt="" loading="lazy">
                                                                    <div class="ms-3">
                                                                        <p class="fw-bold mb-0">[64] Warzywko</p>
                                                                        <p class="mb-0">
                                                                            <span class="gdpr">
                                                                                <span class="name">Piotr Warzywko</span>
                                                                                <span style="padding: 0 2px; background-color: #000; color: #f93154;" class="censor d-none">UKRYTO</span>
                                                                            </span>
                                                                        </p>
                                                                        <p class="text-muted mb-0">
                                                                            <span class="gdpr">
                                                                                <span class="name">warzywo@gmail.com</span>
                                                                                <span style="padding: 0 2px; background-color: #000; color: #f93154;" class="censor d-none">UKRYTO</span>
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-3 d-grid gap-2 d-md-block">
                                                                    <a class="btn btn-success" href="https://wirtualne-pomorze.pl/admin.auth.user.login-as/2">
                    <i class="fa fa-lock" data-toggle="tooltip" data-placement="top" title="buttons.backend.auth.users.login_as"></i>
                    Zaloguj się jako
                </a>

            <a href="https://wirtualne-pomorze.pl/admin.auth.user.clear-session/2" class="btn btn-danger" name="confirm_item">
                <i class="fas fa-user-times"></i>
                Wyczyść sesję
            </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                                                    <div class="col-md-6 col-lg-4 col-xxl-3 mt-3">
                                                        <div class="card bg-dark">
                                                            <div class="card-body">
                                                                <div class="d-flex align-items-start">
                                                                    <img src="https://wirtualne-pomorze.pl/storage/avatars/avatar.jpeg" class="rounded-circle" height="77" alt="" loading="lazy">
                                                                    <div class="ms-3">
                                                                        <p class="fw-bold mb-0">[99] Fagaty</p>
                                                                        <p class="mb-0">
                                                                            <span class="gdpr">
                                                                                <span class="name">Agata Fagata</span>
                                                                                <span style="padding: 0 2px; background-color: #000; color: #f93154;" class="censor d-none">UKRYTO</span>
                                                                            </span>
                                                                        </p>
                                                                        <p class="text-muted mb-0">
                                                                            <span class="gdpr">
                                                                                <span class="name">fakt@fakty123.com</span>
                                                                                <span style="padding: 0 2px; background-color: #000; color: #f93154;" class="censor d-none">UKRYTO</span>
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-3 d-grid gap-2 d-md-block">
                                                                    <a class="btn btn-success" href="https://wirtualne-pomorze.pl/admin.auth.user.login-as/3">
                    <i class="fa fa-lock" data-toggle="tooltip" data-placement="top" title="buttons.backend.auth.users.login_as"></i>
                    Zaloguj się jako
                </a>

            <a href="https://wirtualne-pomorze.pl/admin.auth.user.clear-session/3" class="btn btn-danger" name="confirm_item">
                <i class="fas fa-user-times"></i>
                Wyczyść sesję
            </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                                                    <div class="col-md-6 col-lg-4 col-xxl-3 mt-3">
                                                        <div class="card bg-dark">
                                                            <div class="card-body">
                                                                <div class="d-flex align-items-start">
                                                                    <img src="https://wirtualne-pomorze.pl/storage/avatars/avatar.jpeg" class="rounded-circle" height="77" alt="" loading="lazy">
                                                                    <div class="ms-3">
                                                                        <p class="fw-bold mb-0">[0] ania123</p>
                                                                        <p class="mb-0">
                                                                            <span class="gdpr">
                                                                                <span class="name">Ania Gala</span>
                                                                                <span style="padding: 0 2px; background-color: #000; color: #f93154;" class="censor d-none">UKRYTO</span>
                                                                            </span>
                                                                        </p>
                                                                        <p class="text-muted mb-0">
                                                                            <span class="gdpr">
                                                                                <span class="name">ania@ania.com</span>
                                                                                <span style="padding: 0 2px; background-color: #000; color: #f93154;" class="censor d-none">UKRYTO</span>
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-3 d-grid gap-2 d-md-block">
                                                                    <a class="btn btn-success" href="https://wirtualne-pomorze.pl/admin.auth.user.login-as/4">
                    <i class="fa fa-lock" data-toggle="tooltip" data-placement="top" title="buttons.backend.auth.users.login_as"></i>
                    Zaloguj się jako
                </a>

            <a href="https://wirtualne-pomorze.pl/admin.auth.user.clear-session/4" class="btn btn-danger" name="confirm_item">
                <i class="fas fa-user-times"></i>
                Wyczyść sesję
            </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                                                    <div class="col-md-6 col-lg-4 col-xxl-3 mt-3">
                                                        <div class="card bg-dark">
                                                            <div class="card-body">
                                                                <div class="d-flex align-items-start">
                                                                    <img src="https://wirtualne-pomorze.pl/storage/avatars/avatar.jpeg" class="rounded-circle" height="77" alt="" loading="lazy">
                                                                    <div class="ms-3">
                                                                        <p class="fw-bold mb-0">[100] test</p>
                                                                        <p class="mb-0">
                                                                            <span class="gdpr">
                                                                                <span class="name">test nazwisko</span>
                                                                                <span style="padding: 0 2px; background-color: #000; color: #f93154;" class="censor d-none">UKRYTO</span>
                                                                            </span>
                                                                        </p>
                                                                        <p class="text-muted mb-0">
                                                                            <span class="gdpr">
                                                                                <span class="name">test@test.com</span>
                                                                                <span style="padding: 0 2px; background-color: #000; color: #f93154;" class="censor d-none">UKRYTO</span>
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-3 d-grid gap-2 d-md-block">
                                                                    <a class="btn btn-success" href="https://wirtualne-pomorze.pl/admin.auth.user.login-as/5">
                    <i class="fa fa-lock" data-toggle="tooltip" data-placement="top" title="buttons.backend.auth.users.login_as"></i>
                    Zaloguj się jako
                </a>

            <a href="https://wirtualne-pomorze.pl/admin.auth.user.clear-session/5" class="btn btn-danger" name="confirm_item">
                <i class="fas fa-user-times"></i>
                Wyczyść sesję
            </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                                                    <div class="col-md-6 col-lg-4 col-xxl-3 mt-3">
                                                        <div class="card bg-dark">
                                                            <div class="card-body">
                                                                <div class="d-flex align-items-start">
                                                                    <img src="https://cdn.discordapp.com/avatars/735848665956089893/5854bcd783ec75a288f8f9a65b8864d9.png" class="rounded-circle" height="77" alt="" loading="lazy">
                                                                    <div class="ms-3">
                                                                        <p class="fw-bold mb-0">[11] komunikacja_radom_omsi_2</p>
                                                                        <p class="mb-0">
                                                                            <span class="gdpr">
                                                                                <span class="name">komunikacja_radom_omsi_2 </span>
                                                                                <span style="padding: 0 2px; background-color: #000; color: #f93154;" class="censor d-none">UKRYTO</span>
                                                                            </span>
                                                                        </p>
                                                                        <p class="text-muted mb-0">
                                                                            <span class="gdpr">
                                                                                <span class="name">mtszwydra@gmail.com</span>
                                                                                <span style="padding: 0 2px; background-color: #000; color: #f93154;" class="censor d-none">UKRYTO</span>
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-3 d-grid gap-2 d-md-block">
                                                                    <a class="btn btn-success" href="https://wirtualne-pomorze.pl/admin.auth.user.login-as/6">
                    <i class="fa fa-lock" data-toggle="tooltip" data-placement="top" title="buttons.backend.auth.users.login_as"></i>
                    Zaloguj się jako
                </a>

            <a href="https://wirtualne-pomorze.pl/admin.auth.user.clear-session/6" class="btn btn-danger" name="confirm_item">
                <i class="fas fa-user-times"></i>
                Wyczyść sesję
            </a>
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
