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
                <h1 class="m-0">Dodaj nowy post</h1>
            </div><!-- /.col -->
            <div class="col-sm-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item">Orkiestra Grandioso Radom</li>
                        <li class="breadcrumb-item active" aria-current="page">Dodaj nowy post</li>
                    </ol>
                </nav>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection

@section('content')
    <div class="row">
		<div class="col-12">
			<div class="card mb-4">
				<div class="card-body">
                    <div class="row">
                        <div class="col-sm-5">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-plus"></i> Dodaj nowy post
                            </h4>
                        </div>
                        <!--col-->
                    </div>
                    <!--row-->

                    <div class="mt-4">
                        <form action="{{ route('annouments.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="card mb-4 bg-dark">
                                        <div class="card-body">
                                            <h4 class="card-title mb-0">
                                                <i class="fas fa-database"></i> Podstawowe dane
                                            </h4>
                                            <div class="mt-4">
                                                <div class="form-outline mt-4">
                                                    <input type="text" id="title" name="title" class="form-control" />
                                                    <label class="form-label" for="title">Tytuł</label>
                                                </div>

                                                <div class="form-group mt-4">
                                                    <label class="form-label" for="role">Dodaj etykiety:</label> <span class="text-muted">pole nieobowiązkowe</span>
                                                    <select class="form-control @error('tags') is-invalid @enderror" name="tags[]" id="tags" multiple disabled>
                                                        @for($i=1; $i<=4; $i++)
                                                            <option value="{{ $i }}" >{{ $i }}</option>
                                                        @endfor
                                                    </select>
                                                    @if($errors->has('tags'))
                                                        <div class="invalid-feedback">
                                                            {{ $errors->first('tags') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group mt-4">
                                                    <label class="form-label" for="role">Dodaj grupy:</label> <span class="text-muted">pole nieobowiązkowe</span>
                                                    <select class="form-control @error('roles') is-invalid @enderror" name="roles[]" id="roles" multiple disabled>
                                                        @foreach($roles as $id => $roles)
                                                            <option value="{{ $id }}" {{ in_array($id, old('roles', [])) ? 'selected' : '' }}>{{ $roles }}</option>
                                                        @endforeach
                                                    </select>
                                                    @if($errors->has('roles'))
                                                        <div class="invalid-feedback">
                                                            {{ $errors->first('roles') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="mt-4">
                                                    <div class="col-auto">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" name="is_pinned" id="is_pinned" />
                                                            <label class="form-check-label" for="is_pinned">
                                                                Przypnij w aktualnościach
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" name="status" id="status" />
                                                            <label class="form-check-label" for="status">
                                                                Opublikuj
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-6">
                                    <div class="card mb-4 bg-dark">
                                        <div class="card-body">
                                            <h4 class="card-title mb-0">
                                                <i class="fas fa-heading"></i> Treść
                                            </h4>
                                            <div class="mt-4">
                                                <div class="form-outline">
                                                    <textarea class="form-control ckeditor" id="text" name="text" rows="16">tradsa</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-success"><i class="far fa-save"></i> Zapisz</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--row-->
				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div>
	</div>
@endsection

@section('javascript')
@endsection
