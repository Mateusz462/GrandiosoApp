<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid justify-content-between px-4">
        <!-- Left elements -->
        <div class="d-flex">
            <!-- Brand -->
            <a class="navbar-brand " href="{{ url('/') }}">
                <div class="h3 me-2 mb-1 d-flex align-items-center">
                    <span class="me-2">Grandioso App</span> <i class="fas fa-music text-success"></i>
                </div>
                <!-- <img
                src="img/logo.png"
                height="90"
                alt="MDB Logo"
                loading="lazy"
                style="margin-top: 2px;"
                /> -->
            </a>
        </div>
        @guest
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Strona główna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Logowanie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Rejestracja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">O stronie</a>
                </li>
            </ul>
        @else
            <!-- Center elements -->
            <ul class="navbar-nav flex-row d-none d-md-flex">
                <li class="nav-item me-3 me-lg-1 active">
                    <a class="nav-link" href="{{ route('home') }}">
                        <span><i class="fas fa-home fa-lg"></i></span>
                        <span class="badge rounded-pill badge-notification bg-danger">1</span>
                    </a>
                </li>

                <li class="nav-item me-3 me-lg-1">
                    <a class="nav-link" href="#">
                        <span><i class="fas fa-flag fa-lg"></i></span>
                    </a>
                </li>

                <li class="nav-item me-3 me-lg-1">
                    <a class="nav-link" href="#">
                        <span><i class="fas fa-video fa-lg"></i></span>
                    </a>
                </li>

                <li class="nav-item me-3 me-lg-1">
                    <a class="nav-link" href="#">
                        <span><i class="fas fa-shopping-bag fa-lg"></i></span>
                    </a>
                </li>

                <li class="nav-item me-3 me-lg-1">
                    <a class="nav-link" href="{{ route('users.index') }}">
                        <span><i class="fas fa-users fa-lg"></i></span>
                        <span class="badge rounded-pill badge-notification bg-danger">2</span>
                    </a>
                </li>
            </ul>
            <!-- Center elements -->

            <!-- Right elements -->
            <ul class="navbar-nav flex-row">
                <li class="nav-item me-3 me-lg-1">
                    <a class="nav-link d-sm-flex align-items-sm-center" href="{{ route('profile.index') }}">
                        <img src="{{ Auth::user()->getPicture() }}" class="rounded-circle" height="22" alt="" loading="lazy"/>
                        <strong class="d-none d-sm-block ms-2"> {{Auth::user()->firstname}}</strong>
                    </a>
                </li>
                <li class="nav-item dropdown me-3 me-lg-1 position-static">
                    <a href="#" class="nav-link dropdown-toggle hidden-arrow" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <span><i class="fas fa-plus-circle fa-lg"></i></span>
                    </a>
                    <ul class="dropdown-menu overflow-hidden me-md-4 dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink" style="max-width: 450px;">
                        <h4 class="text-center pt-3 mb-5">Menu</h4>
                        <div class="container px-5 pb-4">
                            <div class="row gx-xl-5">
                                <div class="mb-4">
                                    <h6 class="mb-3">Administrator</h6>
                                    <div class="col-md-12 card card-body bg-dark">
                                        <a href="{{ route('users.index') }}" class="d-flex align-items-start text-reset mb-4 pe-5">
                                            <div>
                                                <i class="fas fa-users fa-lg text-primary da-fw"></i>
                                            </div>
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1 d-flex align-items-center">
                                                    Użytkownicy
                                                    <span class="badge rounded-pill badge-danger ms-2">new</span>
                                                </p>
                                                <p class="text-muted mb-0 text-nowrap">
                                                    80+ useful components
                                                </p>
                                            </div>
                                        </a>
                                        <a href="{{ route('roles.index') }}" class="d-flex align-items-start text-reset mb-4 pe-5">
                                            <div>
                                                <i class="fas fa-theater-masks fa-lg text-primary da-fw"></i>
                                            </div>
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1 d-flex align-items-center">
                                                    Rangi
                                                </p>
                                                <p class="text-muted mb-0 text-nowrap">
                                                    80+ useful components
                                                </p>
                                            </div>
                                        </a>
                                        <a href="{{ route('permissions.index') }}" class="d-flex align-items-start text-reset mb-4 pe-5">
                                            <div>
                                                <i class="fas fa-fingerprint fa-lg text-primary da-fw"></i>
                                            </div>
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1 d-flex align-items-center">
                                                    Permisje
                                                </p>
                                                <p class="text-muted mb-0 text-nowrap">
                                                    80+ useful components
                                                </p>
                                            </div>
                                        </a>
                                        <a href="{{ route('settings.index') }}" class="d-flex align-items-start text-reset mb-4 pe-5">
                                            <div>
                                                <i class="fas fa-cogs fa-lg text-primary da-fw"></i>
                                            </div>
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1 d-flex align-items-center">
                                                    Ustawienia
                                                </p>
                                                <p class="text-muted mb-0 text-nowrap">
                                                    80+ useful components
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h6 class="mb-3">Nauczyciel</h6>
                                    <div class="col-md-12 card card-body bg-dark">
                                        <a href="{{ route('users.index') }}" class="d-flex align-items-start text-reset mb-4 pe-5">
                                            <div>
                                                <i class="fas fa-users fa-lg text-primary da-fw"></i>
                                            </div>
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1 d-flex align-items-center">
                                                    Próby / sekcje
                                                    <span class="badge rounded-pill badge-danger ms-2">new</span>
                                                </p>
                                                <p class="text-muted mb-0 text-nowrap">
                                                    80+ useful components
                                                </p>
                                            </div>
                                        </a>
                                        <a href="{{ route('roles.index') }}" class="d-flex align-items-start text-reset mb-4 pe-5">
                                            <div>
                                                <i class="fas fa-check-square fa-lg text-primary da-fw"></i>
                                            </div>
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1 d-flex align-items-center">
                                                    Lista obecności
                                                </p>
                                                <p class="text-muted mb-0 text-nowrap">
                                                    80+ useful components
                                                </p>
                                            </div>
                                        </a>
                                        <a href="{{ route('settings.index') }}" class="d-flex align-items-start text-reset mb-4 pe-5">
                                            <div>
                                                <i class="fas fa-cogs fa-lg text-primary da-fw"></i>
                                            </div>
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1 d-flex align-items-center">
                                                    Ustawienia
                                                </p>
                                                <p class="text-muted mb-0 text-nowrap">
                                                    80+ useful components
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h6 class="mb-3">Uczeń</h6>
                                    <div class="col-md-12 card card-body bg-dark">
                                        <a href="{{ route('users.index') }}" class="d-flex align-items-start text-reset mb-4 pe-5">
                                            <div>
                                                <i class="fas fa-calendar-alt fa-lg text-primary da-fw"></i>
                                            </div>
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1 d-flex align-items-center">
                                                    Grafik
                                                    <span class="badge rounded-pill badge-danger ms-2">new</span>
                                                </p>
                                                <p class="text-muted mb-0 text-nowrap">
                                                    Grafik prób i koncertów
                                                </p>
                                            </div>
                                        </a>
                                        <a href="{{ route('roles.index') }}" class="d-flex align-items-start text-reset mb-4 pe-5">
                                            <div>
                                                <i class="fas fa-users fa-lg text-primary da-fw"></i>
                                            </div>
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1 d-flex align-items-center">
                                                    Sekcje
                                                </p>
                                                <p class="text-muted mb-0 text-wrap">
                                                    Strona z informacjami o sekcjach do których należysz
                                                </p>
                                            </div>
                                        </a>
                                        <a href="{{ route('permissions.index') }}" class="d-flex align-items-start text-reset mb-4 pe-5">
                                            <div>
                                                <i class="fas fa-file fa-lg text-primary da-fw"></i>
                                            </div>
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1 d-flex align-items-center">
                                                    Repertuar
                                                </p>
                                                <p class="text-muted mb-0 text-nowrap">
                                                    Spis utworów
                                                </p>
                                            </div>
                                        </a>
                                        <a href="{{ route('settings.index') }}" class="d-flex align-items-start text-reset mb-4 pe-5">
                                            <div>
                                                <i class="fas fa-cogs fa-lg text-primary da-fw"></i>
                                            </div>
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1 d-flex align-items-center">
                                                    Ustawienia
                                                </p>
                                                <p class="text-muted mb-0 text-nowrap">
                                                    80+ useful components
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- <div class="col-md-6 card card-body bg-dark">
                                    <h6 class="mt-5 mb-3">Administrator</h6>
                                    <a href="#" class="d-flex align-items-start text-reset mb-4 pe-5">
                                        <div>
                                            <i class="fas fa-users fa-lg text-primary da-fw"></i>
                                        </div>
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1 d-flex align-items-center">
                                                Użytkownicy
                                                <span class="badge rounded-pill badge-danger ms-2">new</span>
                                            </p>
                                            <p class="text-muted mb-0 text-nowrap">
                                                80+ useful components
                                            </p>
                                        </div>
                                    </a>
                                    <a href="#" class="d-flex align-items-start text-reset mb-4 pe-5">
                                        <div>
                                            <i class="fas fa-theater-masks fa-lg text-primary da-fw"></i>
                                        </div>
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1 d-flex align-items-center">
                                                Rangi
                                            </p>
                                            <p class="text-muted mb-0 text-nowrap">
                                                80+ useful components
                                            </p>
                                        </div>
                                    </a>
                                    <a href="#" class="d-flex align-items-start text-reset mb-4 pe-5">
                                        <div>
                                            <i class="fas fa-fingerprint fa-lg text-primary da-fw"></i>
                                        </div>
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1 d-flex align-items-center">
                                                Permisje
                                            </p>
                                            <p class="text-muted mb-0 text-nowrap">
                                                80+ useful components
                                            </p>
                                        </div>
                                    </a>
                                    <a href="#" class="d-flex align-items-start text-reset mb-4 pe-5">
                                        <div>
                                            <i class="fas fa-cogs fa-lg text-primary da-fw"></i>
                                        </div>
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1 d-flex align-items-center">
                                                Ustawienia
                                            </p>
                                            <p class="text-muted mb-0 text-nowrap">
                                                80+ useful components
                                            </p>
                                        </div>
                                    </a>
                                </div> -->
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="nav-item dropdown me-3 me-lg-1">
                    <a href="#" class="nav-link dropdown-toggle hidden-arrow" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-comments fa-lg"></i>
                        <span class="badge rounded-pill badge-notification bg-danger">6</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="#">Some news</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Another news</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown me-3 me-lg-1">
                    <a href="#" class="nav-link dropdown-toggle hidden-arrow" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bell fa-lg"></i>
                        <span class="badge rounded-pill badge-notification bg-danger">12</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="#">Some news</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Another news</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown me-3 me-lg-1">
                    <a href="#" class="nav-link dropdown-toggle hidden-arrow" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-chevron-circle-down fa-lg"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="#">Some news</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Another news</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item me-3 me-lg-1">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" style="cursor: pointer;">
                        Wyloguj
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
            <!-- Right elements -->

        @endguest
    </div>
</nav>
