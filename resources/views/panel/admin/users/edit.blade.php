@extends('layouts.app')

@section('title')
    Edytuj konto użytkownika - Panel Zarządzania Wirtualnego Pomorza
@endsection

@section('custom-style')
.select2-container--default .select2-selection--single {
    background-color: #4f4f4f;
    border: 1px solid #495057;

}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #fff;
}

.select2-container--default .select2-search--dropdown .select2-search__field {
    background-color: #4f4f4f;
    color: #fff;
}
@endsection

@section('header')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-top">
        <div class="container-fluid px-4 my-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Panel Wirtualnego Pomorza</li>
                    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Ustawienia</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Użytkownicy</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edytuj konto użytkownika</li>
                </ol>
            </nav>
            <nav aria-label="breadcrumb">
                <div class="breadcrumb-menu dropdown me-3 me-lg-1">
					<a class="breadcrumb-item dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
						Edytuj konto użytkownika
					</a>
					<ul class="dropdown-menu dropdown-menu-start dropdown-menu-lg-end" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('users.create') }}">Edytuj konto użytkownika</a>
                        <a class="dropdown-item" href="{{ route('users.index') }}">Wszyscy Użytkownicy</a>
                        <a class="dropdown-item" href="{{ url('admin.auth.user.deactivated') }}">Dezaktywowowani użytkownicy</a>
                        <a class="dropdown-item" href="{{ url('admin.auth.user.deleted') }}">Zwolnieni użytkownicy</a>
					</ul>
				</div>
            </nav>
        </div>
    </nav>
@endsection

@section('content')
    <div class="container-fluid px-4">
        <div class="row">
    		<div class="col-12">
    			<div class="card mb-4">
    				<div class="card-body">
                        <div class="row">
                            <div class="col-sm-5">
                                <h4 class="card-title mb-0">
                                    Edytuj konto użytkownika
                                </h4>
                            </div>
                            <!--col-->
                        </div>
                        <!--row-->

                        <div class="mt-4">
                            <form action="{{ route('users.update', $user->id) }}" method="post">
                                @method('PATCH')
                                @csrf
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card mb-4 bg-dark">
                                            <div class="card-body">
                                                <h4 class="card-title mb-0">
                                                    Dane osobowe
                                                </h4>
                                                <div class="mt-4">
                                                    <div class="form-outline mt-4">
                                                        <input type="text" id="firstname" name="firstname" class="form-control @error('firstname') is-invalid @enderror" value="{{ old('firstname', $user->firstname) }}" autocomplete="firstname"/>
                                                        <label class="form-label" for="firstname">Imie</label>
                                                        @error('firstname')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-outline mt-4">
                                                        <input type="text" id="lastname" name="lastname" class="form-control @error('lastname') is-invalid @enderror" value="{{ old('lastname', $user->lastname) }}" autocomplete="lastname"/>
                                                        <label class="form-label" for="lastname">Nazwisko</label>
                                                        @error('lastname')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-outline mt-4">
                                                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}" autocomplete="email"/>
                                                        <label class="form-label" for="email">E-mail</label>
                                                        @error('email')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card mb-4 bg-dark">
                                            <div class="card-body">
                                                <h4 class="card-title mb-0">
                                                    Rangi i uprawnienia
                                                </h4>
                                                <div class="mt-4">
                                                    <div class="form-group mt-4">
                                                        <label class="form-label" for="roletype">Rangi globalne:</label>
                                                        @if(auth()->user()->roletype == 'SuperAdmin')
                                                            <select class="form-control select2 {{ $errors->has('roletype') ? 'is-invalid' : '' }}" name="roletype" id="roletype">
                                                                @foreach($roletype as $id => $roletype)
                                                                    <option value="{{ $id }}" {{ ( $user->roletype == $id) ? 'selected' : '' }}>{{ $roletype }}</option>
                                                                @endforeach
                                                            </select>
                                                            @if($errors->has('roletype'))
                                                                <div class="invalid-feedback">
                                                                    {{ $errors->first('roletype') }}
                                                                </div>
                                                            @endif
                                                        @endif
                                                    </div>
                                                    <div class="form-group mt-4">
                                                        <label class="form-label" for="role">Sekcje:</label>
                                                        <select class="form-control select2 {{ $errors->has('rolesections') ? 'is-invalid' : '' }}" name="rolesections[]" id="rolesections" multiple>
                                                            @foreach($rolesections as $id => $rolesections)
                                                                <option value="{{ $id }}" {{ (in_array($id, old('rolesections', [])) || $user->rolesections->contains($id)) ? 'selected' : '' }}>{{ $rolesections }}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('rolesections'))
                                                            <div class="invalid-feedback">
                                                                {{ $errors->first('rolesections') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-outline mt-4">
                                                        <input type="text" id="company" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}" autocomplete="name"/>
                                                        <label class="form-label" for="company">Przewoźnik</label>
                                                        @error('company')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mt-4">
                                                        <label class="form-label" for="perm">Dodatkowe uprawnienia:</label>
                                                        <select class="form-select" id="perm" name="perm" multiple>
                                                            <option value="1">Poniedziałek</option>
                                                            <option value="2">Wtorek</option>
                                                            <option value="3">Środa</option>
                                                            <option value="4">Czwartek</option>
                                                            <option value="5">Piątek</option>
                                                            <option value="6">Sobota</option>
                                                            <option value="7">Niedziela</option>
                                                        </select>
                                                        @error('perm')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                    <div class="card mb-4 bg-dark">
                                        <div class="card-body">
                                            <h4 class="card-title mb-0">
                                                Informacje konta
                                            </h4>
                                            <div class="mt-4">
                                                <div class="col-auto">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="status" checked />
                                                        <label class="form-check-label" for="status">
                                                            Status konta
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="status_block" checked />
                                                        <label class="form-check-label" for="status_block">
                                                            Blokada edycji konta
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="technic_access" checked />
                                                        <label class="form-check-label" for="technic_access">
                                                            Pozwól na wejście podczas prac technicznych
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="card mb-4 bg-dark">
                                            <div class="card-body">
                                                <h4 class="card-title mb-0">
                                                    Uwagi konta
                                                </h4>
                                                <div class="mt-4">
                                                    <div class="form-outline mt-4">
                                                        <input type="text" id="account_notes" class="form-control" />
                                                        <label class="form-label" for="account_notes">Uwagi konta</label>
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
    </div>
@endsection

@section('javascript')
    <script type="text/javascript">
        $('select').select2();
    </script>
@endsection
