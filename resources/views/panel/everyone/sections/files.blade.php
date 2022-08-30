@extends('layouts.app')

@section('custom-style')
@include('panel.everyone.sections.includes.style')

<style type="text/css">
    .icon-circle {
        height: 4rem;
        width: 4rem;
        border-radius: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
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
                                            <i class="fas fa-file-alt me-2"></i>Pliki
                                        </h3>
                                    </div>
                                    <!--col-->
                                    <div class="col d-flex justify-content-end">
                                        <div class="form-group d-flex justify-content-end">
                                            <div class="input-group-text bg-gray border-0 rounded-pill me-3" style="min-height: 40px; min-width: 230px">
                                                <i class="fas fa-search me-2 text-muted"></i>
                                                <input type="text" class="form-control rounded-pill border-0 bg-gray" placeholder="Szukaj plików"/>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary">
                                            <i class="fas fa-paper-plane me-2"></i>Prześlij plik
                                        </button>
                                    </div>
                                </div>
                                <!--row-->
                                <div class="row mt-3 border-top pt-4">
                                    <div class="col-12">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <button class="btn btn-light btn-block" name="button">Nazwa pliku</button>
                                            </div>
                                            <div class="col-md-2">
                                                <button class="btn btn-light btn-block" name="button">TYP</button>
                                            </div>
                                            <div class="col-md-3">
                                                <button class="btn btn-light btn-block" name="button">Ostatnia modyfikacja</button>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <div class="card bg-dark">
                                                    <div class="card-body">
                                                        @for ($i=1; $i<=7; $i++)
                                                            <div class="row mb-5">
                                                                <div class="col-md-6">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="d-flex align-items-center justify-content-center border rounded-pill  bg-primary" style="height: 4rem; width: 4rem;">
                                                                            <i class="fas fa-file-alt text-white fa-lg"></i>
                                                                        </div>
                                                                        <div class="ms-3">
                                                                            <h5 class="fw-bold">nazwa_pliku{{ $i }}.pdf</h5>
                                                                            <span class="text-muted">465 MG</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <h6>PDF</h6>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="d-flex align-items-center ms-2">
                                                                        <div class="">
                                                                            <h6 class="fw-bold">14 października 2021 14:26</h6>
                                                                            <h6 class="text-muted">przez: Dariusz Krajewski</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <button type="button" class="btn btn-primary btn-block">
                                                                        <i class="fas fa-paper-plane"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        @endfor
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="d-flex align-items-center justify-content-center border rounded-pill  bg-primary" style="height: 4rem; width: 4rem;">
                                                                        <i class="fas fa-file-alt text-white fa-lg"></i>
                                                                    </div>
                                                                    <div class="ms-3">
                                                                        <h5 class="fw-bold">nazwa_pliku.pdf</h5>
                                                                        <span class="text-muted">465 MG</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <h6>PDF</h6>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="d-flex align-items-center ms-2">
                                                                    <div class="">
                                                                        <h6 class="fw-bold">14 października 2021 14:26</h6>
                                                                        <h6 class="text-muted">przez: Dariusz Krajewski</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <button type="button" class="btn btn-primary btn-block">
                                                                    <i class="fas fa-paper-plane"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
