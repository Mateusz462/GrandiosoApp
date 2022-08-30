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
                                            <i class="fas fa-bullhorn"></i> Użytkownicy
                                        </h3>
                                    </div>
                                    <!--col-->
                                </div>
                                <!--row-->
                                <div class="row mt-3">
                                    @foreach ($section->users as $user)
                                        <div class="col-md-6 col-lg-4">
                                            <div class="card border bg-dark mb-2">
                                                <div class="card-body text-center">
                                                    <img class="rounded-circle" width="120px" src="{{ $user->getPicture() }}" alt="">
                                                    <p class="fw-bold h4 mt-3">{{ $user->firstname }} {{ $user->lastname }}</p>
                                                    <p class="mb-1">Orkiestra Grandioso Radom</p>
                                                    <p class="">
                                                        <span class="badge badge-light">
                                                            <i class="fas fa-shield-alt"></i>
                                                            @if($user->roletype == 'SuperAdmin')
                                                                Super Administrator
                                                            @elseif($user->roletype == 'Admin')
                                                                Administrator
                                                            @elseif($user->roletype == 'Employee')
                                                                Nauczyciel
                                                            @elseif($user->roletype == 'Parent')
                                                                Rodzic / Opiekun
                                                            @elseif($user->roletype == 'User')
                                                                Uczeń
                                                            @endif
                                                        </span>
                                                    </p>
                                                    <p class="pb-0 text-center">
                                                        @if(count($user->rolesections) < 1)
                                                            Brak danych!
                                                        @else
                                                            @foreach($user->rolesections as $key => $item)
                                                                <span class="badge badge-{{ $item->color }} mb-1">
                                                                    <img width="24px" src="{{ asset('/storage/instruments/'.$item->image ) }}" alt=""> {{ $item->name }}
                                                                </span>
                                                                <!-- https://cdn-icons-png.flaticon.com/512/836/836920.png -->
                                                            @endforeach
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
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
