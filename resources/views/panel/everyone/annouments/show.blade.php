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
                <h1 class="m-0">{{ $annoument->title }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item">Orkiestra Grandioso Radom</li>
                        <li class="breadcrumb-item active" aria-current="page">Post</li>
                    </ol>
                </nav>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card bg-dark shadow mt-2 p-0">
                <div class="position-relative p-3">
                    <div class="d-flex justify-content-start">
                        <div class="position-relative d-flex align-items-center">
                            <img class="rounded-circle me-3" src="{{ $annoument->user->getPicture() }}" width="45">
                            <div class="d-flex flex-column justify-content-center">
                                <span class="d-flex align-items-center font-weight-bold">{{ $annoument->user->firstname }} {{ $annoument->user->lastname }}</span>
                                <span class="d-flex align-items-center">
                                    <span class="text-muted">
                                        @if($annoument->user->roletype == 'SuperAdmin')
                                            <span class="badge badge-light">Super Administrator</span>
                                        @elseif($annoument->user->roletype == 'Admin')
                                            <span class="badge badge-light">Administrator</span>
                                        @elseif($annoument->user->roletype == 'Employee')
                                            <span class="badge badge-light">Nauczyciel</span>
                                        @elseif($annoument->user->roletype == 'Parent')
                                            <span class="badge badge-light">Rodzic / Opiekun</span>
                                        @elseif($annoument->user->roletype == 'User')
                                            <span class="badge badge-light">Uczeń</span>
                                        @endif
                                        <span class="badge badge-secondary">Autor posta</span>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="col text-end">
                            <a href="{{ route('roles.edit', $annoument->id) }}" class="btn btn-outline-warning"><i class="fas fa-edit"></i> Edytuj post</a>
                        </div>
                    </div>
                </div>

                <div class="position-relative px-3 mt-2">
                    <div class="d-flex flex-column justify-content-center">
                        {!! $annoument->text !!}
                    </div>
                    <!-- <span>Zaginiony telefon wraz ładowarką jest do odebrania u mnie - po uiszczeniu opłaty za "dzikie ładowanie" 🤑</span> -->
                </div>
                <div class="position-relative px-3 mt-3">
                    <div class="d-flex align-items-center pb-2 border-bottom mb-2">
                        <a href="#" class="text-decoration-none text-white text-muted">
                            {{ $annoument->created_at->diffForHumans() }}
                            <!-- 1 godzinę temu -->
                        </a>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pb-2 border-bottom mb-2 mt-3">
                        <div class="d-flex align-items-center">
                            <i class="far fa-comment-alt"></i>
                            <span class="ms-2">0 komentarzy</span>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <i class="fas fa-share"></i>
                            <span class="ms-2">Udostępnij</span>
                        </div>
                    </div>
                </div>
                <div class="position-relative px-3 my-2">
                    <div class="d-flex align-items-center mb-2">
                        <div class="d-flex">
                            <div class="d-flex align-items-center">
                                <i class="far fa-thumbs-up"></i>
                                <span class="ms-1"> 1</span>
                            </div>
                            <div class="d-flex align-items-center ms-3">
                                <i class="far fa-heart"></i>
                                <span class="ms-1">0</span>
                            </div>
                            <div class="d-flex align-items-center ms-3">
                                <i class="far fa-thumbs-down"></i>
                                <span class="ms-1">0</span>
                            </div>
                        </div>
                        <!-- <i class="fas fa-tools"></i>
                        <span class="ms-2">W budowie</span> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mt-4">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-5">
                            <h3 class="font-weight-bold mb-2">
                                <i class="far fa-comment-alt"></i> Napisz komentarz
                            </h3>
                        </div>
                        <!--col-->
                    </div>
                    <!--row-->
                    <form class="mt-4">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <textarea class="form-control" id="comment" name="comment" rows="8" cols="80"></textarea>
                            <label class="form-label" for="comment"><i class="far fa-comment-alt"></i> Napisz komentarz</label>
                        </div>
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block">Zapisz</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12">
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
                        <div class="card bg-dark border mt-2 p-0">
                            <div class="position-relative p-3">
                                <div class="d-flex justify-content-start">
                                    <div class="position-relative d-flex align-items-center">
                                        <img class="rounded-circle me-3" src="{{ $annoument->user->getPicture() }}" width="45">
                                        <div class="d-flex flex-column justify-content-center">
                                            <span class="d-flex align-items-center font-weight-bold">{{ $annoument->user->firstname }} {{ $annoument->user->lastname }}</span>
                                            <span class="d-flex align-items-center">
                                                <span class="text-muted">
                                                    @if($annoument->user->roletype == 'SuperAdmin')
                                                        <span class="badge badge-light">Super Administrator</span>
                                                    @elseif($annoument->user->roletype == 'Admin')
                                                        <span class="badge badge-light">Administrator</span>
                                                    @elseif($annoument->user->roletype == 'Employee')
                                                        <span class="badge badge-light">Nauczyciel</span>
                                                    @elseif($annoument->user->roletype == 'Parent')
                                                        <span class="badge badge-light">Rodzic / Opiekun</span>
                                                    @elseif($annoument->user->roletype == 'User')
                                                        <span class="badge badge-light">Uczeń</span>
                                                    @endif
                                                    <span class="badge badge-secondary">Autor posta</span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative px-3 mt-2">
                                <div class="d-flex flex-column justify-content-center">
                                    <p>testowy komentarz</p>
                                </div>
                                <!-- <span>Zaginiony telefon wraz ładowarką jest do odebrania u mnie - po uiszczeniu opłaty za "dzikie ładowanie" 🤑</span> -->
                            </div>
                            <div class="position-relative px-3 mt-3">
                                <div class="d-flex align-items-center pb-2 border-bottom mb-2">
                                    <a href="#" class="text-decoration-none text-white text-muted">
                                        {{ $annoument->created_at->diffForHumans() }}
                                        <!-- 1 godzinę temu -->
                                    </a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pb-2 border-bottom mb-2 mt-3">
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-reply"></i>
                                            <span class="ms-2"> Odpowiedz</span>
                                        </div>
                                        <div class="d-flex align-items-center ms-3">
                                            <i class="fas fa-quote-left"></i>
                                            <span class="ms-2">Cytuj</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center">
                                        <i class="fas fa-share"></i>
                                        <span class="ms-2">Udostępnij</span>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative px-3 my-2">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center">
                                            <i class="far fa-thumbs-up"></i>
                                            <span class="ms-1"> 1</span>
                                        </div>
                                        <div class="d-flex align-items-center ms-3">
                                            <i class="far fa-heart"></i>
                                            <span class="ms-1">0</span>
                                        </div>
                                        <div class="d-flex align-items-center ms-3">
                                            <i class="far fa-thumbs-down"></i>
                                            <span class="ms-1">0</span>
                                        </div>
                                    </div>
                                    <!-- <i class="fas fa-tools"></i>
                                    <span class="ms-2">W budowie</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
