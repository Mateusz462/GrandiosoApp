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
                <h1 class="m-0">Posty</h1>
            </div><!-- /.col -->
            <div class="col-sm-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item">Orkiestra Grandioso Radom</li>
                        <li class="breadcrumb-item active" aria-current="page">Posty</li>
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
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-5">
                                <h3 class="font-weight-bold mb-2">
                                    <i class="fas fa-bullhorn"></i> Posty
                                </h3>
                            </div>
                            <!--col-->
                            <div class="col text-end">
                                <a href="{{ route('annouments.create') }}" class="btn btn-outline-success"><i class="fas fa-plus"></i> Dodaj post</a>
                            </div>
                        </div>
                        <!--row-->

                        <div class="row">
                            @if(count($annouments) > 0)
                                @foreach ($annouments as $row)
                                    @if($row->isActive())
                                        <a href="{{ route('annouments.show', $row->id ) }}" class="text-decoration-none text-white">
                                            <div class="col-md-12">
                                                <div class="card bg-dark border mt-2 p-0">
                                                    <div class="position-relative p-3">
                                                        <div class="d-flex justify-content-start">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <img class="rounded-circle me-3" src="{{ $row->user->getPicture() }}" width="45">
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <span class="d-flex align-items-center font-weight-bold">{{ $row->user->firstname }} {{ $row->user->lastname }}</span>
                                                                    <span class="d-flex align-items-center">
                                                                        <span class="badge badge-light">
                                                                            <i class="fas fa-shield-alt"></i>
                                                                            @if($row->user->roletype == 'SuperAdmin')
                                                                                Super Administrator
                                                                            @elseif($row->user->roletype == 'Admin')
                                                                                Administrator
                                                                            @elseif($row->user->roletype == 'Employee')
                                                                                Nauczyciel
                                                                            @elseif($row->user->roletype == 'Parent')
                                                                                Rodzic / Opiekun
                                                                            @elseif($row->user->roletype == 'User')
                                                                                Uczeń
                                                                            @endif
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col text-end">
                                                                <button href="{{ route('annouments.edit', $row->id) }}" class="btn btn-outline-warning">
                                                                    <i class="fas fa-edit"></i> Edytuj post
                                                                </button>
                                                                <button class="btn btn-outline-danger">
                                                                    <i class="fas fa-trash-alt"></i> Usuń post
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="position-relative px-3">
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <h3 class="font-weight-bold">{{ $row->title }}</h3>
                                                            </div>
                                                            <!--col-->
                                                            @if($row->is_pinned)
                                                                <div class="col text-end">
                                                                    <h5><span class="badge badge-danger">Ważne!</span></h5>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div  class="position-relative px-3 mt-2" style="max-height: 550px; scrollbar-gutter: stable; overflow: auto;">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            {!! $row->text !!}
                                                        </div>
                                                    </div>
                                                    <div class="position-relative px-3 mt-3">
                                                        <div class="d-flex align-items-center pb-2 border-bottom mb-2">
                                                            <a href="#" class="text-decoration-none text-white text-muted">
                                                                {{ $row->created_at->diffForHumans() }}
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
                                                                    <span class="ms-1">0</span>
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
                                        </a>
                                    @endif
                                @endforeach
                            @else
                                <div class="col-md-12">
                                    <div class="card bg-dark border mt-2 p-0">
                                        <div class="position-relative p-5 text-center">
                                            <h3 class="font-weight-bold">
                                                <i class="far fa-times-circle"></i>
                                                Brak postów do wyświetlenia!
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
