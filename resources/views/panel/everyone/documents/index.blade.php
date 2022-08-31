@extends('layouts.app')

@section('content-header')
    <div class="container-fluid px-4 my-5">
        <div class="row">
            <div class="col-sm-10">
                <h1 class="m-0">Dokumety</h1>
            </div><!-- /.col -->
            <div class="col-sm-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item">Orkiestra Grandioso Radom</li>
                        <li class="breadcrumb-item active" aria-current="page">Dokumety</li>
                    </ol>
                </nav>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection

@section('content')
    <div class="container-fluid px-4">
        <!-- row -->
		<div class="row">
            @forelse($travels as $survey)
                <div class="col-3">
                    <div class="card shadow mb-4">
    					<div class="card-body">
    						<h3 class="font-weight-bold mb-2">{{ $survey->name }}</h3>
                            <p class="mb-0"><b>Autor:</b> <span class="badge badge-light">Administrator</span></p>
                            <p class="mb-4"><b>Dodano:</b> {{ $survey->created_at->format('d.m.Y H:i') }}</p>
                            <a href="{{ route('user.surveys.show', $survey->id) }}" class="btn btn-primary"><i class="fas fa-eye"></i> Zobacz więcej</a>
    					</div>
    				</div>
                </div>
            @empty
                <b>Brak ankiet</b>
            @endforelse
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
@endsection
