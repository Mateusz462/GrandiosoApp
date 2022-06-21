@extends('layouts.app')

@section('content-header')
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-sm-10">
                <h1 class="m-0">Ankiety</h1>
            </div><!-- /.col -->
            <div class="col-sm-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item">Orkiestra Grandioso Radom</li>
                        <li class="breadcrumb-item active" aria-current="page">Ankiety</li>
                    </ol>
                </nav>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection

@section('content')
    <div class="container-fluid">
        <!-- row -->
		<div class="row">
            @forelse($surveys as $survey)
                <div class="col-3">
                    <div class="card shadow mb-4">
    					<div class="card-body">
                            <p>
                                <img src="http://grandioso.pl/wp-content/uploads/2020/03/cropped-cropped-LOGO-GRANDIOSO-serwisy-internetowe-2.png" class="img-fluid rounded" alt="Cliff Above a Stormy Sea"/>
                            </p>
    						<h3 class="font-weight-bold">{{ $survey->name }}</h3>
                            <p class="mb-0"><b>Autor:</b> <span class="badge badge-light">Administrator</span></p>
                            <p class="mb-4"><b>Dodano:</b> {{ $survey->created_at->format('d.m.Y H:i') }}</p>
                            <p class="mb-0"><b>Opis:</b> {{ $survey->descrioption }}</p>
                            <br>
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
