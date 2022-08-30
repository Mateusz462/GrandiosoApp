@extends('layouts.app')

@section('custom-style')
    #intro {
       height: 800px;
       /* Margin to fix overlapping fixed navbar */
       margin-top: 58px;
     }
     @media (max-width: 991px) {
             #intro {
             /* Margin to fix overlapping fixed navbar */
             margin-top: 45px;
       }
   }
@endsection

@section('header')
    <style>
        .background-radial-gradient { background-color: hsl(218, 41%, 15%); background-image: radial-gradient( 650px circle at 0% 0%, hsl(218, 41%, 35%) 15%, hsl(218, 41%, 30%) 35%, hsl(218, 41%, 20%) 75%, hsl(218, 41%, 19%) 80%, transparent 100% ), radial-gradient( 1250px circle at 100% 100%, hsl(218, 41%, 45%) 15%, hsl(218, 41%, 30%) 35%, hsl(218, 41%, 20%) 75%, hsl(218, 41%, 19%) 80%, transparent 100% ); } #radius-shape-1 { height: 220px; width: 220px; top: -60px; left: -    130px; background: radial-gradient(#44006b, #ad1fff); overflow: hidden; } #radius-shape-2 { border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%; bottom: -60px; right: -110px; width: 300px; height: 300px; background: radial-gradient(#44006b, #ad1fff); overflow: hidden; } .bg-glass { background-color: hsla(0, 0%, 100%, 0.9) !important; backdrop-filter: saturate(200%) blur(25px); }
    </style>
    <div  class="p-5 mt-0 text-center bg-image shadow-1-strong mb-10 background-radial-gradient overflow-hidden" >
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-3 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        <span>GrandiosoAPP</span> <br>
                        <span style="color: hsl(218, 81%, 75%)">twój najlepszy wybór!</span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                        <p class="mb-0 opacity-70">
                            Przejmij kontrolę nad swoim zespółem, zaoszczędź czas na organizacji i wykorzystaj wszystkie dostępne dane do rozwoju swojego zespołu. <br> Wszystko z jednego miejsca!
                        </p>
                    </p>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
                    <div class="card bg-dark">
                        <div class="card-body px-4 py-5 px-md-5">
                            <!-- <form>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1" class="form-control">
                                            <label class="form-label" for="form3Example1" style="margin-left: 0px;">First name</label>
                                            <div class="form-notch">
                                                <div class="form-notch-leading" style="width: 9px;"></div>
                                                <div class="form-notch-middle" style="width: 68.8px;"></div>
                                                <div class="form-notch-trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example2" class="form-control">
                                            <label class="form-label" for="form3Example2" style="margin-left: 0px;">Last name</label>
                                            <div class="form-notch">
                                                <div class="form-notch-leading" style="width: 9px;"></div>
                                                <div class="form-notch-middle" style="width: 68px;"></div>
                                                <div class="form-notch-trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="email" id="form3Example3" class="form-control">
                                        <label class="form-label" for="form3Example3" style="margin-left: 0px;">Email address</label>
                                        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 88.8px;"></div><div class="form-notch-trailing"></div></div>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="password" id="form3Example4" class="form-control">
                                        <label class="form-label" for="form3Example4" style="margin-left: 0px;">Password</label>
                                        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 64.8px;"></div><div class="form-notch-trailing"></div></div>
                                    </div>
                                    <div class="form-check d-flex justify-content-center mb-4">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked="">
                                        <label class="form-check-label" for="form2Example33">Subscribe to our newsletter</label>
                                    </div>
                                    <button type="submit" class="btn  btn-primary btn-block mb-4" aria-controls="#picker-editor">Sign up</button>

                                    <div class="text-center">
                                        <p>or sign up with:</p>
                                        <button type="button" class="btn btn-link btn-floating mx-1">
                                            <i class="fab fa-facebook-f" aria-controls="#picker-editor"></i>
                                        </button>
                                        <button type="button" class="btn btn-link btn-floating mx-1">
                                            <i class="fab fa-google" aria-controls="#picker-editor"></i>
                                        </button>
                                        <button type="button" class="btn btn-link btn-floating mx-1">
                                            <i class="fab fa-twitter" aria-controls="#picker-editor"></i>
                                        </button>
                                        <button type="button" class="btn btn-link btn-floating mx-1">
                                            <i class="fab fa-github" aria-controls="#picker-editor"></i>
                                        </button>
                                    </div>
                                </div>
                            </form> -->
                            <!-- comming soon -->
                            <div class="text-center text-white px-4">
                                <h1 class="mb-3">Wkrótce!</h1>
                                <p>Ciężko pracujemy, aby dokończyć rozwój tej aplikacji.</p>
                                <p>Do tego czasu obserwuj nasze sociale:</p>
                                <a class="btn btn-outline-light btn-lg m-2" href="#" role="button" rel="nofollow">Facebook</a>
                                <a class="btn btn-outline-light btn-lg m-2" href="#" role="button">Instagram</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="container pt-5">
        <section class="mb-10 text-center">
            <h2 class="fw-bold mb-5 text-center">
                <span class="me-1">Co oferujemy?</span>
            </h2>
            <div class="row gx-lg-5">
                <div class="col-md-4 mb-5 mb-md-0">
                    <div class="p-3 bg-primary rounded-4 shadow-2-strong d-inline-block mb-4">
                        <i class="fas fa-copy fa-lg text-white fa-fw"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Orginalność</h5>
                    <p class="text-muted mb-0">
                        Jesteśmy jedyną polską aplikacją do zarządzania orkiestrą. Stosujemy własne orginalne rozwiązania.
                    </p>
                </div>
                <div class="col-md-4 mb-5 mb-md-0">
                    <div class="p-3 bg-primary rounded-4 shadow-2-strong d-inline-block mb-4">
                        <i class="fas fa-edit fa-lg text-white fa-fw"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Unikalny design</h5>
                    <p class="text-muted mb-0">
                        Cechujemy się przejrzystością i dbałością o każdy szczegół. Wygląd strony jest bardzo starannie wykonany i dobrze przemyślany
                    </p>
                </div>
                <div class="col-md-4 mb-5 mb-md-0">
                    <div class="p-3 bg-primary rounded-4 shadow-2-strong d-inline-block mb-4">
                        <i class="fas fa-cogs fa-lg text-white fa-fw"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Funkcjonalność</h5>
                    <p class="text-muted mb-0">
                        E-mail, Excel, Drive... Ile czasu zaoszczędziłbyś, korzystając z jednego narzędzia?
                    </p>
                </div>
            </div>
        </section>
    </section>
    <section class="container pt-5">
        <section class="mb-10">
            <h2 class="fw-bold mb-5 text-center">
                Zobacz jak wygląda GrandiosoAPP
            </h2>
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="bg-image hover-overlay ripple shadow-4-strong rounded-4 mb-4" data-mdb-ripple-color="light">
                        <img src="https://media.discordapp.net/attachments/964876530792685668/1013183607734554724/unknown.png" class="w-100" alt="" "image">
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-md-0">
                    <h3 class="fw-bold">
                        Witamy w GrandiosoAPP!
                    </h3>
                    <div class="mb-2 text-danger small">
                        <i class="fas fa-globe-americas me-2"></i>
                        <span>Strona Główna</span>
                    </div>
                    <p class="text-muted">
                        GraniosoAPP to aplikacja internetowa do zarządzania orkiestrami dętych. <br>
                        Pomysł stworzenia tego typu aplikacji zrodził się podczas <strong>III Ogólnopolskiej Konferencji Orkiestr Dętych.</strong>
                        Autorem GrandiosoAPP, odpowiedzialny jest <strong>Mateusz Wydra.</strong><br>
                        Projekt zakłada późniejszą rozbudowę wersji internetowej aplikacji do dedykowanych aplikacji na urządzenia mobilne.
                    </p>
                </div>
            </div>
            <div class="row gx-lg-5 align-items-center mb-5 flex-lg-row-reverse">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="bg-image hover-overlay ripple shadow-4-strong rounded-4 mb-4" data-mdb-ripple-color="light">
                        <img src="https://media.discordapp.net/attachments/964876530792685668/994649559366123550/unknown.png" class="w-100 border shadow-5-strong" alt="">
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-md-0">
                    <h3 class="fw-bold">
                        Przejrzysty grafik
                    </h3>
                    <div class="mb-2 text-primary small">
                        <i class="fas fa-calendar-alt me-2"></i>
                        <span>Kalendarz</span>
                    </div>
                    <p class="text-muted">
                        Grafik jest to przejrzysty kalendarz, w którym znajdziesz wszelkie informacje dotyczące najbliższych (i nie tylko) prób i koncertów. Gdy w danym dniu, odbędzie się próba, pojawi się ikonka <i class="fas fa-calendar-check"></i>. <br> Po jej kliknięciu wyświetlą się szczegóły wydarzenia, takie jak: <br>
                        <strong>Data, godziny rozpoczęcia i zakończenia, miejsce, rodzaj próby, informacje dodatkowe.</strong><br>W przyszłości będzie moża zadeklarować swoją obecność.
                    </p>
                </div>
            </div>
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="bg-image hover-overlay ripple shadow-4-strong rounded-4 mb-4" data-mdb-ripple-color="light">
                        <img src="https://media.discordapp.net/attachments/964876530792685668/1012065800938606673/unknown.png" class="w-100" alt="" "image">
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-md-0">
                    <h3 class="fw-bold">
                        Niesamowite sekcje
                    </h3>
                    <div class="mb-2 text-success small">
                        <i class="fas fa-users me-2"></i>
                        <span>Sekcje</span>
                    </div>
                    <p class="text-muted">
                        W tym miejscu znajdują się informacje o sekcji w której grasz. Znajdziesz tutaj wewnętrzne ogłoszenia, czaty, multimedia czy też materiały do nauki: nuty, filmiki video itp.
                    </p>
                </div>
            </div>
        </section>
    </section>
    <section class="container pt-5">
        <section class="mb-10">
            <h2 class="fw-bold text-center mb-5">
                Cennik
            </h2>
            <div class="row gx-lg-5 d-flex justify-content-center">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <div class="card h-100">
                        <div class="card-header text-center pt-4">
                            <p class="text-uppercase">
                                <strong>Podstawowy</strong>
                            </p>
                            <h3 class="mb-4">
                                <strong>$ 129</strong>
                                <small class="text-muted" style="font-size: 16px">/rok</small>
                            </h3>
                            <button type="button" class="btn btn-primary w-100 mb-3">Kup</button>
                        </div>
                        <div class="card-body">
                            <ol class="list-unstyled mb-0">
                                <li class="mb-3">
                                    <i class="fas fa-check text-success me-3"></i>
                                    <span>Unlimited updates</span>
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-check text-success me-3"></i>
                                    <span>Git repository</span>
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-check text-success me-3"></i>
                                    <span>npm installation</span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <div class="card h-100">
                        <div class="card-header text-center pt-4">
                            <p class="text-uppercase">
                                <strong>Podstawowy</strong>
                            </p>
                            <h3 class="mb-4">
                                <strong>$ 129</strong>
                                <small class="text-muted" style="font-size: 16px">/rok</small>
                            </h3>
                            <button type="button" class="btn btn-primary w-100 mb-3">Kup</button>
                        </div>
                        <div class="card-body">
                            <ol class="list-unstyled mb-0">
                                <li class="mb-3">
                                    <i class="fas fa-check text-success me-3"></i>
                                    <span>Unlimited updates</span>
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-check text-success me-3"></i>
                                    <span>Git repository</span>
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-check text-success me-3"></i>
                                    <span>npm installation</span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="container pt-5">
        <section class="mb-10 text-center">
            <h2 class="fw-bold mb-10">
                <span>Nasz</span>
                <u class="text-primary">zespół</u>
            </h2>
            <div class="row gx-lg-5">
                <div class="col-lg-4 mb-10 mb-lg-0">
                    <div class="card shadow-2-strong h-100">
                        <div class="d-flex justify-content-center" style="margin-top: -75px">
                            <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" class="rounded-circle shadow-5-strong" alt="" style="width: 150px; height: 150px;">
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold">Mateusz Wydra</h5>
                            <p class="text-muted">Frontend Developer</p>
                            <ul class="list-unstyled mb-0">
                                <a href="#!" class="px-1">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="#!" class="px-1">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#!" class="px-1">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-10 mb-lg-0">
                    <div class="card shadow-2-strong h-100">
                        <div class="d-flex justify-content-center" style="margin-top: -75px">
                            <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" class="rounded-circle shadow-5-strong" alt="" style="width: 150px; height: 150px;">
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold">Mateusz Wydra</h5>
                            <p class="text-muted">Backend Developer</p>
                            <ul class="list-unstyled mb-0">
                                <a href="#!" class="px-1">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="#!" class="px-1">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#!" class="px-1">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-10 mb-lg-0">
                    <div class="card shadow-2-strong h-100">
                        <div class="d-flex justify-content-center" style="margin-top: -75px">
                            <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" class="rounded-circle shadow-5-strong" alt="" style="width: 150px; height: 150px;">
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold">Mateusz Wydra</h5>
                            <p class="text-muted">Marketing expert</p>
                            <ul class="list-unstyled mb-0">
                                <a href="#!" class="px-1">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="#!" class="px-1">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#!" class="px-1">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
