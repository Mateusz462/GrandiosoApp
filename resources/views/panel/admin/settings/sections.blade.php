@extends('layouts.app')

@section('title')
    Sekcje - GrandiosoApp
@endsection

@section('custom-style')

@endsection

@section('content-header')
    <div class="container-fluid px-4 my-5">
        <div class="row">
            <div class="col-sm-10">
                <h1 class="m-0">Ustawienia - Orkiestra Grandioso Radom</h1>
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
        <div class="row">
            <div class="col-3">
                <div class="card mb-4">
                    <div class="card-body">
                        @include('panel.admin.settings.sidebar')
                    </div>
                </div>
            </div>

            <div class="col-9">
                <div class="row">
                    <div class="col-sm-10">
                        <h3 class="font-weight-bold mb-2">
                            <i class="fas fa-users"></i> Sekcje
                        </h3>
                    </div>
                    <!--col-->
                    <div class="col text-end">
                        <a href="{{ route('roles.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Dodaj sekcje</a>
                    </div>
                </div>

                <div class="row mt-4">
                    @foreach ($sections as $row)
                        <div class="col-md-6 col-lg-4">
                            <div class="card mb-4">
                                <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" style="height: 16rem;" class="card-img-top" alt="Fissure in Sandstone"/>
                                <div class="card-body">
                                    <h2 class="card-title"><strong>{{ $row->name }}</strong></h2>
                                    <h4 class="text-muted">Orkiestra Grandioso Radom</h4>
                                    <ul class="list-unstyled text-muted mt-2">
                                        <li class="mb-1"><i class="fas fa-users me-2"></i>Członków: <a href="" class="text-wrap text-reset lh-sm"><strong>12</strong></a></li>
                                        <li class="mb-1"><i class="fas fa-user-tie me-2"></i>Opiekun sekcji: <a href="" class="text-wrap text-reset lh-sm"><strong>{{ $row->owner->firstname }} {{ $row->owner->lastname }}</strong></a></li>
                                        <!-- <li class="mb-1">
                                            <i class="fas fa-lock me-2"></i>Prywatna
                                        </li>
                                        <li class="mb-1">
                                            <i class="fas fa-eye me-2"></i>Widoczna
                                        </li> -->

                                        <li class=""><i class="fas fa-clock me-2"></i>Data utworzenia: <a href="" class="text-wrap text-reset lh-sm"><strong>{{ $row->created_at->format('d M Y') }}</strong></a></li>
                                    </ul>
                                    <a href="/user/sections/{{ $row->id }}" class="btn btn-primary btn-block"><i class="fas fa-eye me-1"></i>Zobacz</a>
                                    <button class="btn btn-secondary btn-block"><i class="fas fa-cogs me-1"></i>Zarządzaj</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-md-6 col-lg-4">
                        <div class="card mb-4">
                            <div class="bg-image preview d-none text-center">
                                <img id="img-preview" src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" style="height: 16rem;" class="card-img-top d-none" alt="Fissure in Sandstone"/>
                                <div class="mask" style="background-color: rgba(0, 0, 0, 0.0)">
                                    <button id="img-btn-trash" type="button" class="btn btn-white btn-rounded shadow-3 position-absolute top-0 end-0 mt-3 me-3">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <div class="d-flex justify-content-center align-items-center h-100 mt-5">
                                        <div class="text-center mt-5 p-5">
                                            <button type="button" class="btn btn-white btn-rounded shadow-3" onclick="imgupload()">
                                                <i class="fas fa-edit me-2"></i>Zmień zdjęcie podglądowe
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div  onclick="imgupload" id="img-upload" class="card-header border-0 text-center p-5 form" style="background-color: hsl(210, 26%, 84%)">
                                <input type="file" class="input-file" name="" value="" hidden>
                                <i class="fas fa-image fa-5x text-white mb-4 d-block"></i>
                                <button type="button" class="btn btn-white btn-rounded shadow-3">
                                    <i class="fas fa-plus me-2"></i>Dodaj zdjęcie podglądowe
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="form-outline card-title">
                                    <input type="text" class="form-control" id="name" name="" value="">
                                    <label class="form-label" for="name">Nazwa sekcji</label>
                                </div>
                                <div class="form-outline card-title">
                                    <input type="text" class="form-control" disabled>
                                    <label class="form-label" for="name">Orkiestra Grandioso Radom</label>
                                </div>
                                <div class="form-outline card-title">
                                    <textarea type="text" class="form-control" rows="5"></textarea>
                                    <label class="form-label" for="name">Opis</label>
                                </div>

                                <button class="btn btn-success btn-block"><i class="fas fa-plus me-1"></i>Utwórz</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        const form = document.querySelector('.form'),
        fileInput = form.querySelector('.input-file'),
        img = document.querySelector('#img-preview'),
        imgbtntrash = document.querySelector("#img-btn-trash");

        form.addEventListener("click", ()=>{
            fileInput.click();
        });

        function imgupload() {
            fileInput.click();
        }

        fileInput.onchange = ({target}) => {
            const file = target.files[0];
            if(file){
                const reader = new FileReader();
                reader.onload = function(){
                    const result = reader.result;
                    img.src = result;
                    $("#img-upload").addClass('d-none');
                    $(".preview").removeClass('d-none');
                    $("#img-preview").removeClass('d-none');
                }
                imgbtntrash.addEventListener("click", ()=>{
                    img.src = '';
                    $("#img-upload").removeClass('d-none');
                    $(".preview").addClass('d-none');
                    $("#img-preview").addClass('d-none');
                });
                reader.readAsDataURL(file);
            }
        }

    </script>
@endsection
