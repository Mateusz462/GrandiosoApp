@extends('layouts.app')

@section('title')
    Dodaj nowy post - GrandiosoApp
@endsection

@section('custom-style')

@endsection

@section('content-header')
    <div class="container-fluid px-4 my-5">
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
    <div class="container-fluid px-4">

        <div class="row mt-4">
            @forelse ($sections as $row)
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card mb-4">
                        <!-- <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" style="height: 16rem;" class="card-img-top" alt="Fissure in Sandstone"/> -->
                        <div class="card-body">
                            <h2 class="card-title"><strong>{{ $row->name }}</strong></h2>
                            <h4 class="text-muted">Orkiestra Grandioso Radom</h4>
                            <ul class="list-unstyled text-muted mt-2">
                                <li class="mb-1"><i class="fas fa-users me-2"></i>Członków: <a href="" class="text-wrap text-reset lh-sm"><strong>12</strong></a></li>
                                <li class="mb-1"><i class="fas fa-user-tie me-2"></i>Opiekun sekcji: <a href="" class="text-wrap text-reset lh-sm"><strong>{{ $row->owner->firstname }} {{ $row->owner->lastname }}</strong></a></li>
                                <li class="mb-1">
                                    <i class="fas fa-lock me-2"></i>Prywatna
                                </li>
                                <li class="mb-1">
                                    <i class="fas fa-eye me-2"></i>Widoczna
                                </li>

                                <li class=""><i class="fas fa-clock me-2"></i>Data utworzenia: <a href="" class="text-wrap text-reset lh-sm"><strong>{{ $row->created_at->format('d M Y') }}</strong></a></li>
                            </ul>
                            <a href="/user/sections/{{ $row->id }}" class="btn btn-primary btn-block"><i class="fas fa-eye me-1"></i>Zobacz</a>
                            <button class="btn btn-secondary btn-block"><i class="fas fa-cogs me-1"></i>Zarządzaj</button>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="d-flex position-relative top-100 justify-content-center">
                        <div class="p-3">
                            <div class="first text-center">
                                <i class="fas fa-info-circle fa-6x"></i>
                                <h3 class="mt-3">Brak sekcji w bazie danych!</h3>
                                <p class="text-muted">
                                    Dodaj sekcje w ustawieniach
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection
