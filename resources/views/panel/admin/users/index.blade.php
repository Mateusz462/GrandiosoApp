@extends('layouts.app')

@section('title')
    Użytkownicy - Panel Zarządzania Wirtualnego Pomorza
@endsection

@section('custom-style')

@endsection

@section('content-header')
    <div class="container-fluid px-4 my-5">
        <div class="row">
            <div class="col-sm-10">
                <h1 class="m-0">Użytkownicy</h1>
            </div><!-- /.col -->
            <div class="col-sm-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item">Orkiestra Grandioso Radom</li>
                        <li class="breadcrumb-item active" aria-current="page">Użytkownicy</li>
                    </ol>
                </nav>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection

@section('content')
    <div class="container-fluid px-4">
        <div class="row mb-4">
            <form action="{{ route('users.index') }}" method="get" class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="form-outline">
                                <input type="text" id="filter_login" name="filter_login" class="form-control" />
                                <label class="form-label" for="filter_login">Login</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="form-outline">
                                <input type="text" id="filter_email" name="filter_email" class="form-control" />
                                <label class="form-label" for="filter_email">Email</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="form-outline">
                                <input type="text" id="filter_code" name="filter_code" class="form-control" />
                                <label class="form-label" for="filter_code">Kod</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-search"></i> Szukaj</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
    		<div class="col-12">
    			<div class="card mb-4">
    				<div class="card-body">
                        <div class="row">
                            <div class="col-sm-5">
                                <h3 class="font-weight-bold mb-2">
                                    <i class="fas fa-users"></i> Użytkownicy
                                </h3>
                            </div>
                            <!--col-->
                            <div class="col text-end">
                                <a href="{{ route('users.create') }}" class="btn btn-outline-success"><i class="fas fa-plus"></i> Dodaj użytkownika</a>
                            </div>
                        </div>

                        <!--row-->

                        <div class="mt-4">
                            @if(count($users) > 0)
                                <div class="table-responsive">
                                    <table class="table "  id="users-table">
                                        <thead>
                                            <tr>
                                                <th>Imię i Nazwisko</th>

                                                <th>Email</th>

                                                <th>Rangi</th>
                                                <th>Data rejestracji</th>
                                                <th>Status konta</th>
                                                <th>Obecności</th>
                                                <th>Statystyki</th>
                                                <th>Akcje</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($users as $row)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-start">
                                                        <img src="{{ $row->getPicture() }}" class="rounded-circle" height="48" alt="" loading="lazy">
                                                        <div class="ms-3">
                                                            <p class="fw-bold mb-0" style="color:">
                                                                <span class="gdpr">
                                                                    <span class="name">{{$row->firstname}} {{$row->lastname}}</span>
                                                                    <span style="padding: 0 2px; background-color: #000; color: #f93154;" class="censor d-none">UKRYTO</span>
                                                                </span>
                                                            </p>
                                                            <p class="mb-0">
                                                                <span class="badge badge-light">
                                                                    <i class="fas fa-shield-alt"></i>
                                                                    @if($row->roletype == 'SuperAdmin')
                                                                        Super Administrator
                                                                    @elseif($row->roletype == 'Admin')
                                                                        Administrator
                                                                    @elseif($row->roletype == 'Employee')
                                                                        Nauczyciel
                                                                    @elseif($row->roletype == 'Parent')
                                                                        Rodzic / Opiekun
                                                                    @elseif($row->roletype == 'User')
                                                                        Uczeń
                                                                    @endif
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    @if(auth()->user()->roletype == 'SuperAdmin')
                                                        <p class="mb-0">
                                                            <span class="gdpr">
                                                                <span class="name">{{$row->email}}</span>
                                                                <span style="padding: 0 2px; background-color: #000; color: #f93154;" class="censor d-none">UKRYTO</span>
                                                            </span>
                                                        </p>
                                                    @else
                                                        <span style="padding: 0 2px; background-color: #000; color: #f93154;" class="censor">UKRYTO</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <p class="fw-bold mb-1">
                                                        @if(count($row->rolesections) < 1)
                                                            Brak danych!
                                                        @else
                                                            @foreach($row->rolesections as $key => $item)
                                                                <span class="badge badge-{{ $item->color }} mb-1">
                                                                    <img width="24px" src="{{ asset('/storage/instruments/'.$item->image ) }}" alt=""> {{ $item->name }}
                                                                </span>
                                                            @endforeach
                                                        @endif
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="mb-0">
                                                        {{$row->created_at->format('d.m.Y')}}
                                                    </p>
                                                    <p class="mb-0">
                                                        {{ $row->updated_at->diffForHumans() }}
                                                    </p>
                                                </td>
                                                <td>
                                                    @if($row->isActive())
                                                        <span class="badge badge-success rounded-pill">Aktywne</span>
                                                    @else
                                                        <span class="badge badge-danger rounded-pill">Nie aktywne</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <p class="mb-0">Obecności: <span class="badge bg-success rounded-pill">13</span></p>
                                                    <p class="mb-0">Nieobecności: <span class="badge bg-danger rounded-pill">3</span></p>
                                                    <p class="mb-0">Usprawidliwione: <span class="badge bg-secondary rounded-pill">2</span></p>
                                                    <!-- <p class="mb-0">Oczekujące na ocenę: <span class="badge bg-warning rounded-pill">1</span></p>
                                                    <p class="mb-0">Oczekujące na złożenie: <span class="badge bg-primary rounded-pill">3</span></p> -->
                                                </td>
                                                <td>
                                                    <p class="mb-0">Punkty za obecność: <span class="badge bg-secondary rounded-pill">130 pkt</span></p>
                                                    <p class="mb-0">Punkty dodatkowe: <span class="badge bg-primary rounded-pill">50 pkt</span></p>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a href="#" class="btn btn-primary"><i class="fas fa-eye"></i></a><!--  podgląd danych -->
                                                        <a href="#" class="btn btn-secondary"><i class="fas fa-chart-line"></i></a>
                                                        <a href="#" class="btn btn-success"><i class="far fa-address-card"></i></a>
                                                        @if(auth()->user()->id == $row->id || auth()->user()->roletype == 'SuperAdmin')
                                                            <a href="{{ route('users.edit', $row->id) }}" class="btn btn-info"><i class="far fa-edit"></i></a>
                                                        @endif
                                                        @if(auth()->user()->roletype == 'SuperAdmin')
                                                            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                                        @endif
                                                    </div>
                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!--table-->
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
                            {{ $users->links() }}
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

@section('js-files')
    <script src="{{ asset('js/users_filter.js') }}"></script>
@endsection
