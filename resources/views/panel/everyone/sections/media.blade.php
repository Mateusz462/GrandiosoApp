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
                                            <i class="fas fa-photo-video"></i> Multimedia
                                        </h3>
                                    </div>
                                    <!--col-->
                                    <div class="col d-flex justify-content-end">
                                        <button type="button" class="btn btn-primary">
                                            <i class="fas fa-paper-plane me-2"></i>Prześlij zdjęcie
                                        </button>
                                    </div>
                                </div>
                                <!-- Tabs navs -->
                                <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
                                  <li class="nav-item" role="presentation">
                                    <a
                                      class="nav-link active"
                                      id="ex1-tab-1"
                                      data-mdb-toggle="tab"
                                      href="#ex1-tabs-1"
                                      role="tab"
                                      aria-controls="ex1-tabs-1"
                                      aria-selected="true"
                                      >Zdjęcia</a
                                    >
                                  </li>
                                  <li class="nav-item" role="presentation">
                                    <a
                                      class="nav-link"
                                      id="ex1-tab-2"
                                      data-mdb-toggle="tab"
                                      href="#ex1-tabs-2"
                                      role="tab"
                                      aria-controls="ex1-tabs-2"
                                      aria-selected="false"
                                      >Filmy</a
                                    >
                                  </li>

                                </ul>
                                <!-- Tabs navs -->
                                <!--row-->
                                <div class="row mt-4">
                                    @for ($i=150; $i<=250; $i++)
                                        <div class="col-md-2">
                                            <div class="card border bg-dark mb-2">
                                                <div class="bg-image hover-overlay hover-zoom hover-shadow ripple">
                                                <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/{{ $i }}.webp" style="" class="card-img" alt="Fissure in Sandstone"/>
                                                    <a href="#!">
                                                        <div class="mask" style="background-color: rgba(57, 192, 237, 0.2)"></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
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
