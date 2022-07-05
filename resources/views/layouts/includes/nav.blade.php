<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid justify-content-between px-4">
        <!-- Left elements -->
        <div class="d-flex">
            <!-- Brand -->
            <a class="navbar-brand " href="{{ route('home') }}">
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
                    <a class="nav-link" href="{{ url('/') }}">Strona główna</a>
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
                <!-- main menu -->
                <div class="rounded-circle p-1 d-flex align-items-center justify-content-center text-muted" style="width: 38px; height: 38px" type="button" id="secondMenu" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                    <i class="fas fa-plus-circle fa-lg"></i>
                </div>
                <ul class="dropdown-menu border-0 shadow p-3" aria-labelledby="secondMenu" style="max-height: 600px; overflow-y: auto; width: 23em; position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-20px, 49px, 0px);" data-popper-placement="bottom-end">
                    <!-- header -->
                    <li class="p-1 mx-2">
                        <h2>Menu</h2>
                    </li>
                    <!-- search -->
                    <li class="p-1">
                        <div class="input-group-text bg-gray border-0 rounded-pill" style="min-height: 40px; min-width: 230px">
                            <i class="fas fa-search me-2 text-muted"></i>
                            <input type="text" class="form-control rounded-pill border-0 bg-gray" placeholder="Search Menu"/>
                        </div>
                    </li>
                    <!-- header admin -->
                    <li class="mt-2 mx-2">
                      <h6>Administrator</h6>
                    </li>
                    <!-- admin users -->
                    <li class="dropdown-item nav-item p-1 my-1 rounded" type="button">
                        <a href="{{ route('users.index') }}" class="d-flex text-decoration-none text-white">
                            <i class="fas fa-users bg-gray p-2 rounded-circle"></i>
                            <div class="ms-3 d-flex justify-content-between align-items-center w-100">
                                <p class="m-0">Użytkownicy</p>
                            </div>
                        </a>
                    </li>
                    <!-- admin roles -->
                    <li class="dropdown-item nav-item p-1 my-1 rounded" type="button">
                        <a href="{{ route('roles.index') }}" class="d-flex text-decoration-none text-white">
                            <i class="fas fa-theater-masks bg-gray p-2 rounded-circle"></i>
                            <div class="ms-3 d-flex justify-content-between align-items-center w-100">
                                <p class="m-0">Rangi</p>
                            </div>
                        </a>
                    </li>
                    <!-- admin permissions -->
                    <li class="dropdown-item nav-item p-1 my-1 rounded" type="button">
                        <a href="{{ route('permissions.index') }}" class="d-flex text-decoration-none text-white">
                            <i class="fas fa-fingerprint bg-gray p-2 rounded-circle"></i>
                            <div class="ms-3 d-flex justify-content-between align-items-center w-100">
                                <p class="m-0">Uprawnienia</p>
                            </div>
                        </a>
                    </li>
                    <!-- admin settings -->
                    <li class="dropdown-item nav-item p-1 my-1 rounded" type="button">
                        <a href="{{ route('settings.index') }}" class="d-flex text-decoration-none text-white">
                            <i class="fas fa-cogs bg-gray p-2 rounded-circle"></i>
                            <div class="ms-3 d-flex justify-content-between align-items-center w-100">
                                <p class="m-0">Ustawienia</p>
                            </div>
                        </a>
                    </li>
                    <hr>
                    <!-- options -->
                    <!-- header employee -->
                    <li class="mt-2 mx-2">
                      <h6>Nauczyciel</h6>
                    </li>
                    <!-- admin users -->
                    <li class="dropdown-item nav-item p-1 my-1 rounded" type="button">
                        <a href="{{ route('users.index') }}" class="d-flex text-decoration-none text-white">
                            <i class="fas fa-users bg-gray p-2 rounded-circle"></i>
                            <div class="ms-3 d-flex justify-content-between align-items-center w-100">
                                <p class="m-0">Uczniowie</p>
                            </div>
                        </a>
                    </li>
                    <!-- admin roles -->
                    <li class="dropdown-item nav-item p-1 my-1 rounded" type="button">
                        <a href="#" class="d-flex text-decoration-none text-white">
                            <i class="fas fa-users bg-gray p-2 rounded-circle"></i>
                            <div class="ms-3 d-flex justify-content-between align-items-center w-100">
                                <p class="m-0">Próby / sekcje</p>
                            </div>
                        </a>
                    </li>
                    <!-- admin permissions -->
                    <li class="dropdown-item nav-item p-1 my-1 rounded" type="button">
                        <a href="#" class="d-flex text-decoration-none text-white">
                            <i class="fas fa-check-square bg-gray p-2 rounded-circle"></i>
                            <div class="ms-3 d-flex justify-content-between align-items-center w-100">
                                <p class="m-0">Lista obecności</p>
                            </div>
                        </a>
                    </li>
                    <!-- admin settings -->
                    <li class="dropdown-item nav-item p-1 my-1 rounded" type="button">
                        <a href="{{ route('settings.index') }}" class="d-flex text-decoration-none text-white">
                            <i class="fas fa-cogs bg-gray p-2 rounded-circle"></i>
                            <div class="ms-3 d-flex justify-content-between align-items-center w-100">
                                <p class="m-0">Ustawienia</p>
                            </div>
                        </a>
                    </li>
                    <hr>
                    <!-- header user -->
                    <li class="mt-2 mx-2">
                      <h6>Uczeń</h6>
                    </li>
                    <!-- admin users -->
                    <li class="dropdown-item nav-item p-1 my-1 rounded" type="button">
                        <a href="{{ route('users.index') }}" class="d-flex text-decoration-none text-white">
                            <i class="fas fa-calendar-alt bg-gray p-2 rounded-circle"></i>
                            <div class="ms-3 d-flex justify-content-between align-items-center w-100">
                                <p class="m-0">Grafik prób i koncertów</p>
                            </div>
                        </a>
                    </li>
                    <!-- admin roles -->
                    <li class="dropdown-item nav-item p-1 my-1 rounded" type="button">
                        <a href="#" class="d-flex text-decoration-none text-white">
                            <i class="fas fa-users bg-gray p-2 rounded-circle"></i>
                            <div class="ms-3 d-flex justify-content-between align-items-center w-100">
                                <p class="m-0">Sekcje</p>
                            </div>
                        </a>
                    </li>
                    <!-- admin permissions -->
                    <li class="dropdown-item nav-item p-1 my-1 rounded" type="button">
                        <a href="#" class="d-flex text-decoration-none text-white">
                            <i class="fas fa-file bg-gray p-2 rounded-circle"></i>
                            <div class="ms-3 d-flex justify-content-between align-items-center w-100">
                                <p class="m-0">Repertuar</p>
                            </div>
                        </a>
                    </li>
                    <!-- feedback -->
                    <li class="dropdown-item p-1 rounded d-flex align-items-center" type="button">
                        <i class="fas fa-exclamation-circle bg-gray p-2 rounded-circle"></i>
                        <div class="ms-3">
                            <p class="m-0">Przekaż opinię</p>
                            <p class="m-0 text-muted fs-7">
                                Pomóż nam ulepszyć GrandiosoApp.
                            </p>
                        </div>
                    </li>
                </ul>
                <!-- main menu -->
                <!-- message menu -->
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
                            <a class="" href="#"><i class="fas fa-envelope fa-lg"></i>
                            <span class="badge rounded-pill badge-notification bg-danger">999+</span></a>
                        </li>
                    </ul>
                </li>
                <!-- notifications -->
                <div class="rounded-circle d-flex align-items-center justify-content-center me-3 me-lg-1 text-muted" style="width: 38px; height: 38px" type="button" id="notMenu" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                    <div class="position-relative">
                        <i class="fas fa-bell fa-lg"></i>
                        <span class="badge rounded-pill badge-notification bg-danger">99+</span>
                    </div>
                </div>
                <!-- notifications dd -->
                <ul class="dropdown-menu border-0 shadow p-3" aria-labelledby="notMenu" style="width: 25em; position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-20px, 49px, 0px); max-height: 600px; overflow-y: auto;" data-popper-placement="bottom-end">
                    <!-- header -->
                    <li class="p-1">
                        <div class="" data-bs-toggle="dropdown">
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <h2>Powiadomienia</h2>
                                <i class="fas fa-ellipsis-h pointer p-2 rounded-circle bg-gray"></i>
                            </div>
                        </div>
                        <ul style="" class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                            <li class="dropdown-item d-flex align-items-center" type="button">
                                <i class="fas fa-check me-3 text-muted"></i>
                                <p class="m-0">Oznacz wszystkie jako przeczytane</p>
                            </li>
                            <li class="dropdown-item d-flex align-items-center" type="button">
                                <i class="fas fa-cog me-3 text-muted"></i>
                                <p class="m-0">Kontrola prywatności</p>
                            </li>
                            <li class="dropdown-item d-flex align-items-center" type="button">
                                <i class="fas fa-desktop me-3 text-muted"></i>
                                <p class="m-0">Skróty dotyczące prywatności</p>
                            </li>
                        </ul>
                        <div class="d-flex" type="button">
                            <p class="rounded-pill bg-gray p-2">Wszystkie</p>
                            <p class="ms-3 rounded-pill bg-primary p-2 text-white">Nieprzeczytane</p>
                        </div>
                    </li>
                    <!-- news -->
                    <div class="d-flex justify-content-between mx-2">
                        <h5>Nowe</h5>
                        <a href="#" class="text-decoration-none">Zobacz wszystko</a>
                    </div>
                    <!-- news 1 -->
                    <li class="my-2 p-1">
                        <a href="#" class="d-flex align-items-center justify-content-evenly text-decoration-none text-white">
                            <div class="d-flex align-items-center justify-content-evenly">
                                <div class="p-2 ps-0">
                                    <img
                                    src="https://source.unsplash.com/random/1"
                                    alt="avatar"
                                    class="rounded-circle"
                                    style="width: 58px; height: 58px; object-fit: cover"
                                    />
                                </div>
                                <div>
                                    <p class="fs-7 m-0">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Harum unde amet at nulla quae porro.
                                    </p>
                                    <span class="fs-7 text-primary">about an hour ago</span>
                                </div>
                            </div>
                            <i class="fas fa-circle fs-7 text-primary"></i>
                        </a>
                    </li>
                    <!-- news 2 -->
                    <li class="my-2 p-1">
                        <a href="#" class="d-flex align-items-center justify-content-evenly text-decoration-none text-white">
                            <div class="d-flex align-items-center justify-content-evenly">
                                <div class="p-2 ps-0">
                                    <img
                                    src="https://source.unsplash.com/random/2"
                                    alt="avatar"
                                    class="rounded-circle"
                                    style="width: 58px; height: 58px; object-fit: cover"
                                    />
                                </div>
                                <div>
                                    <p class="fs-7 m-0">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Harum unde amet at nulla quae porro.
                                    </p>
                                    <span class="fs-7 text-primary">about an hour ago</span>
                                </div>
                            </div>
                            <i class="fas fa-circle fs-7 text-primary"></i>
                        </a>
                    </li>
                    <!-- news 3 -->
                    <li class="my-2 p-1">
                        <a href="#" class="d-flex align-items-center justify-content-evenly text-decoration-none text-white">
                            <div class="d-flex align-items-center justify-content-evenly">
                                <div class="p-2 ps-0">
                                    <img
                                    src="https://source.unsplash.com/random/3"
                                    alt="avatar"
                                    class="rounded-circle"
                                    style="width: 58px; height: 58px; object-fit: cover"
                                    />
                                </div>
                                <div>
                                    <p class="fs-7 m-0">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Harum unde amet at nulla quae porro.
                                    </p>
                                    <span class="fs-7 text-primary">about an hour ago</span>
                                </div>
                            </div>
                            <i class="fas fa-circle fs-7 text-primary"></i>
                        </a>
                    </li>
                    <!-- news 4 -->
                    <li class="my-2 p-1">
                        <a href="#" class="d-flex align-items-center justify-content-evenly text-decoration-none text-white">
                            <div class="d-flex align-items-center justify-content-evenly">
                                <div class="p-2 ps-0">
                                    <img
                                    src="https://source.unsplash.com/random/4"
                                    alt="avatar"
                                    class="rounded-circle"
                                    style="width: 58px; height: 58px; object-fit: cover"
                                    />
                                </div>
                                <div>
                                    <p class="fs-7 m-0">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Harum unde amet at nulla quae porro.
                                    </p>
                                    <span class="fs-7 text-primary">about an hour ago</span>
                                </div>
                            </div>
                            <i class="fas fa-circle fs-7 text-primary"></i>
                        </a>
                    </li>
                    <!-- news 5 -->
                    <li class="my-2 p-1">
                        <a href="#" class="d-flex align-items-center justify-content-evenly text-decoration-none text-white">
                            <div class="d-flex align-items-center justify-content-evenly">
                                <div class="p-2 ps-0">
                                    <img
                                    src="https://source.unsplash.com/random/5"
                                    alt="avatar"
                                    class="rounded-circle"
                                    style="width: 58px; height: 58px; object-fit: cover"
                                    />
                                </div>
                                <div>
                                    <p class="fs-7 m-0">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Harum unde amet at nulla quae porro.
                                    </p>
                                    <span class="fs-7 text-primary">about an hour ago</span>
                                </div>
                            </div>
                            <i class="fas fa-circle fs-7 text-primary"></i>
                        </a>
                    </li>
                </ul>

                <!-- profile menu button -->
                <div class="rounded-circle p-1 d-flex align-items-center justify-content-center text-muted" style="width: 38px; height: 38px" type="button" id="secondMenu" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                    <i class="fas fa-chevron-circle-down fa-lg"></i>
                </div>
                <ul class="dropdown-menu border-0 shadow p-3" aria-labelledby="secondMenu" style="width: 23em; position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-20px, 49px, 0px);" data-popper-placement="bottom-end">
                    <!-- avatar -->
                    <a href="{{ route('profile.index') }}" class="dropdown-item p-1 rounded d-flex" type="button">
                        <img src="{{ Auth::user()->getPicture() }}" alt="avatar" class="rounded-circle me-2" style="width: 45px; height: 45px; object-fit: cover">
                        <div>
                            <p class="m-0">{{ Auth::user()->firstname }}</p>
                            <p class="m-0 text-muted">Zobacz swój profil</p>
                        </div>
                    </a>
                    <hr>
                    <!-- feedback -->
                    <li class="dropdown-item p-1 rounded d-flex align-items-center" type="button">
                        <i class="fas fa-exclamation-circle bg-gray p-2 rounded-circle"></i>
                        <div class="ms-3">
                            <p class="m-0">Przekaż opinię</p>
                            <p class="m-0 text-muted fs-7">
                                Pomóż nam ulepszyć GrandiosoApp.
                            </p>
                        </div>
                    </li>
                    <hr>
                    <!-- options -->
                    <!-- 1 -->
                    <li class="dropdown-item p-1 my-1 rounded" type="button">
                        <ul class="list-unstyled">
                            <li class="nav-item">
                                <div class="d-flex" data-bs-toggle="dropdown">
                                    <i class="fas fa-cog bg-gray p-2 rounded-circle"></i>
                                    <div class="ms-3 d-flex justify-content-between align-items-center w-100">
                                        <p class="m-0">Ustawienia i prywatność</p>
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </div>
                                <!-- nested menu -->
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center me-2" style="width: 38px; height: 38px">
                                                <i class="fas fa-cog"></i>
                                            </div>
                                            <p class="m-0">Ustawienia</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center me-2" style="width: 38px; height: 38px">
                                                <i class="fas fa-lock"></i>
                                            </div>
                                            <p class="m-0">Kontrola prywatności</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center me-2" style="width: 38px; height: 38px">
                                                <i class="fas fa-unlock-alt"></i>
                                            </div>
                                            <p class="m-0">Skróty dotyczące prywatności</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center me-2" style="width: 38px; height: 38px">
                                                <i class="fas fa-list"></i>
                                            </div>
                                            <p class="m-0">Dziennik aktywności</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center me-2" style="width: 38px; height: 38px">
                                                <i class="fas fa-globe"></i>
                                            </div>
                                            <p class="m-0">Język</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- 2 -->
                    <li class="dropdown-item p-1 my-1 rounded" type="button">
                        <ul class="list-unstyled">
                            <li class="nav-item">
                                <div class="d-flex" data-bs-toggle="dropdown">
                                    <i class="fas fa-question-circle bg-gray p-2 rounded-circle"></i>
                                    <div class="ms-3 d-flex justify-content-between align-items-center w-100">
                                        <p class="m-0">Pomoc i wsparcie</p>
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </div>
                                <!-- nested menu -->
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center me-2" style="width: 38px; height: 38px">
                                                <i class="fas fa-question-circle"></i>
                                            </div>
                                            <p class="m-0">Centrum pomocy</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center me-2" style="width: 38px; height: 38px">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <p class="m-0">Skrzynka odbiorcza Panelu Pomocy</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center me-2" style="width: 38px; height: 38px">
                                                <i class="fas fa-exclamation-circle"></i>
                                            </div>
                                            <p class="m-0">Zgłoś problem</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- 4 -->
                    <li class="dropdown-item p-1 my-1 mb-3 rounded" type="button">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{ route('logout') }}" class="d-flex text-decoration-none text-white" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" style="cursor: pointer;">
                                    <i class="fas fa-sign-out-alt bg-gray p-2 rounded-circle"></i>
                                    <div class="ms-3 d-flex justify-content-between align-items-center w-100">
                                        <p class="m-0">Wyloguj się</p>
                                    </div>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    <div class="d-inline text-muted">
                        <a href="#" class="text-decoration-none text-muted">
                            Regulamin &nbsp;
                        </a>
                        <span> · </span>&nbsp;
                        <a href="#" class="text-decoration-none text-muted">
                            Polityka prywatności &nbsp;
                        </a>
                        GrandiosoApp © 2021 by Mateusz Wydra
                    </div>
                </ul>
            </ul>
            <!-- Right elements -->

        @endguest
    </div>
</nav>
