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
                        <p class="mb-0 opacity-70">GraniosoAPP to aplikacja internetowa stworzona na potrzeby zarządzania polskimi zespołami muzycznymi, takimi jak orkiestry dęte.</p>
                        <p class="mb-0 opacity-70">Aplikacja demonstracyjna dostosowana jest do potrzeb Orkiestry GRANDIOSO z Radomia.</p>
                        <p class="mb-0 opacity-70">Administratorem i autorem GrandiosoAPP jest Mateusz Wydra.</p>
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
                <span class="me-1">Dlaczego jesteśmy</span>
                <u class="text-primary">najlepsi?</u>
            </h2>
            <div class="row gx-lg-5">
                <div class="col-md-4 mb-5 mb-md-0">
                    <div class="p-3 bg-primary rounded-4 shadow-2-strong d-inline-block mb-4">
                        <i class="fas fa-headset fa-lg text-white fa-fw"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Potęga danych</h5>
                    <p class="text-muted mb-0">
                        Wykorzystaj wszystkie dostępne dane i pomóż swojej społeczności rozwijać się.
                    </p>
                </div>
                <div class="col-md-4 mb-5 mb-md-0">
                    <div class="p-3 bg-primary rounded-4 shadow-2-strong d-inline-block mb-4">
                        <i class="fas fa-shield-alt fa-lg text-white fa-fw"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Zapomnij o papierach</h5>
                    <p class="text-muted mb-0">
                        Najprostszy sposób dzielenia się z wami repertuarem, zawsze dostępny.
                    </p>
                </div>
                <div class="col-md-4 mb-5 mb-md-0">
                    <div class="p-3 bg-primary rounded-4 shadow-2-strong d-inline-block mb-4">
                        <i class="fas fa-shipping-fast fa-lg text-white fa-fw"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Zaprojektowany dla muzyków</h5>
                    <p class="text-muted mb-0">
                        E-mail, Excel, Drive... Ile czasu zaoszczędziłbyś, korzystając z jednego narzędzia?
                    </p>
                </div>
            </div>
        </section>
    </section>
    <section draggable="false" class="container pt-5" data-v-271253ee="">
        <section class="mb-10 text-center">
            <h2 class="fw-bold mb-10">
                <span>Nasz</span>
                <u class="text-primary">zespół</u>
            </h2>
            <div class="row gx-lg-5">
                <div class="col-lg-4 mb-10 mb-lg-0">
                    <!-- <div class="card shadow-2-strong h-100">
                        <div class="d-flex justify-content-center" style="margin-top: -75px">
                            <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" class="rounded-circle shadow-5-strong" alt="" style="width: 150px; height: 150px;" data-builder-edit="image" data-builder-name="image1" aria-controls="#picker-editor">
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
                    </div> -->
                </div>
                <div class="col-lg-4 mb-10 mb-lg-0">
                    <div class="card shadow-2-strong h-100">
                        <div class="d-flex justify-content-center" style="margin-top: -75px">
                            <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" class="rounded-circle shadow-5-strong" alt="" style="width: 150px; height: 150px;" data-builder-edit="image" data-builder-name="image1" aria-controls="#picker-editor">
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
                    <!-- <div class="card shadow-2-strong h-100">
                        <div class="d-flex justify-content-center" style="margin-top: -75px">
                            <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" class="rounded-circle shadow-5-strong" alt="" style="width: 150px; height: 150px;" data-builder-edit="image" data-builder-name="image1" aria-controls="#picker-editor">
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
                    </div> -->
                </div>
            </div>
        </section>
    </section>
@endsection
