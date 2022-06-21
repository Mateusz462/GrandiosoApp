<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<meta name="description" content="">
    	<meta name="author" content="">
        <title>@yield('title')</title>
        <meta name="csrf-token" value="{{ csrf_token() }}"/>
    	<!-- MDB -->
        <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/>
    	<link rel="icon" type="image/png" sizes="96x96" href="https://wirtualne-pomorze.pl/portal/img/WP-logo250.png">
    	<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
        <!-- Font Awesome-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
        <!-- Custom style -->
    	<style type="text/css">
            body {
                margin: 0;
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
            }
            footer {
                width: 100%;
                margin-top: auto;
            }
        </style>
        <style type="text/css">
            @yield('custom-style');
        </style>
    </head>
    <body>
        <div id="app">
            <header>
                <!-- Navbar-->
                @include('layouts.includes.nav')
                <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-top">
                    <div class="container-fluid px-4 my-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Panel Wirtualnego Pomorza</li>
                                <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Menedżer firmy</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Rangi</li>
                            </ol>
                        </nav>
                        <nav aria-label="breadcrumb">
                            <div class="breadcrumb-menu dropdown me-3 me-lg-1">
            					<a class="breadcrumb-item dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
            						Wszystkie Rangi
            					</a>
            					<ul class="dropdown-menu dropdown-menu-start dropdown-menu-lg-end" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('roles.index') }}">Wszystkie Rangi</a>
                                    <a class="dropdown-item" href="{{ route('roles.create') }}">Stwórz range</a>
            					</ul>
            				</div>
                        </nav>
                    </div>
                </nav> -->
                <!-- Navbar -->
                <div class="p-4 text-center bg-warning">
			        <h1 class="mb-3">Kominikat Administratora Systemu</h1>
			        <p class="mb-0">Korzystasz z testowej wersji systemu, w związku z tym część funkcji jest nie dostępna.</p>
                    <p class="mb-0">Znalazłeś/aś błąd? Napisz do nas <a href="#" class="text-link">wiadomość</a>.</p>
                    <p class="mb-0">Zachęcamy do pomocy w rozwoju! Skontaktuj się z nami wypełniając <a href="#" class="text-link">formularz</a>.</p>
			    </div>
				<!-- Jumbotron -->
            </header>
            <main id="content" class="my-5 d-flex flex-column px-4">
                <section class="content-header ">
                    @yield('content-header')
                </section>
                <section class="content">
                    @yield('content')
                </section>
            </main>
        </div>
        <!--Footer-->
        @include('layouts.includes.footer')
		<!--Footer-->

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        {!! Toastr::message() !!}
        <!-- Custom scripts -->
		<script type="text/javascript">
			@yield('javascript')
		</script>
		@yield('js-files')
    </body>
</html>
