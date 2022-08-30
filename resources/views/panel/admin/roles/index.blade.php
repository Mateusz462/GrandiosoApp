@extends('layouts.app')

@section('title')
    Rangi - Panel Zarządzania Wirtualnego Pomorza
@endsection

@section('content-header')
    <div class="container-fluid px-4 my-5">
        <div class="row">
            <div class="col-sm-10">
                <h1 class="m-0">Zarządzanie rangami</h1>
            </div><!-- /.col -->
            <div class="col-sm-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item">Orkiestra Grandioso Radom</li>
                        <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Administracja</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Zarządzanie rangami</li>
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
    		<div class="col">
                <div class="row">
                    <div class="col-sm-5">
                        <h3 class="font-weight-bold mb-2">
                            <i class="fas fa-theater-masks"></i> Rangi
                        </h3>
                    </div>
                    <!--col-->
                    <div class="col text-end">
                        <a href="{{ route('roles.create') }}" class="btn btn-outline-success"><i class="fas fa-plus"></i> Stwórz range</a>
                    </div>
                </div>
    			<div class="row card mt-4 mb-4">
    				<div class="card-body">
                        <div class="mt-4 d-block">
                            @if(count($roles) > 0)
                                <div class="row">
                                    @foreach ($roles as $row)
                                        <div class="col-md-6 col-xl-4 col-xxl-2">
                                            <div class="  mb-4">
                                                <div class="card card-body bg-dark text-center">
                                                    <p class="mt-1">
                                                        <span class="badge badge-{{ $row->color }} mb-1">
                                                            <img width="24px" src="{{ asset('/storage/instruments/'.$row->image ) }}" alt=""> {{ $row->name }}
                                                        </span>
                                                    </p>
                                                    <p class="mt-1">Uprawnienia: <span class="badge badge-danger">{{ $row->permissions->count() }}</span></p>
                                                    <p class="mt-1">

                                                    </p>
                                                    <p class="card-text">
                                                        <div>
                                                            <a href="{{ route('roles.show', $row->id)}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                                            @if($row->prefix != 1)
                                                                <a href="{{ route('roles.edit', $row->id) }}" class="btn btn-info"><i class="far fa-edit"></i></a>
                                                                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                                            @endif
                                                        </div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="col-lg-12">
                                    <div class="card shadow mb-4 bg-warning">
                                        <div class="card-body text-center">
                                            <i class="fas fa-exclamation-triangle"></i> Brak Danych!
                                        </div>
                                    </div>
                                </div>
                            @endif
                            {{ $roles->links() }}
                        </div>
                        <!--row-->
    				</div>
    				<!-- /.card-body -->
    			</div>
    			<!-- /.card -->
    		</div>
    	</div>
    </div>
@endsection
