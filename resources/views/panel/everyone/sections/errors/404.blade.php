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
                        <div class="d-flex position-relative top-100 justify-content-center">
                            <div class="p-3">
                                <div class="first text-center">
                                    <i class="fas fa-info-circle fa-6x"></i>
                                    <h3 class="mt-3">Błąd ładowania strony</h3>
                                    <p class="text-muted">
                                        Spróbuj ponownie później
                                    </p>
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
