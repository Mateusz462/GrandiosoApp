@extends('layouts.app')

@section('content-header')

@endsection

@section('custom-style')
    .card-img-overlay {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        padding: 1.25rem;
        border-radius: calc(0.35rem - 1px);
    }

    .container {
        max-width: 1140px;
    }
@endsection

@section('content')
        <section class="bg-dark mb-4 shadow-2">
            <div class="container">
                <!-- section image -->
                <section class="pb-5 border-bottom">
                    <div class="bg-image">
                        <div class="p-5 text-center bg-image shadow-1-strong rounded"
                            style="
                                background-image: url('{{ asset("/img/tlo.png")}}');
                                height:400px;
                                "
                        >
                        </div>
                        <div class="mask" style="background-color: rgba(0, 0, 0, 0.2)"></div>
                    </div>
                    <!-- <div class="p-5 text-center bg-image shadow-1-strong rounded" style="background-image: url('{{ asset("/img/tlo.png")}}'); height:400px;"></div> -->
                    <div class="d-flex justify-content-start ms-5">
                        <img class="rounded-circle shadow-1-strong position-absolute border border-primary border-5" width="168px" src="{{ auth()->user()->getPicture() }}" style="margin-top: -140px">
                    </div>
                    <div class="d-flex justify-content-start">
                        <div class="row d-flex justify-content-start position-absolute" style="margin-left: 240px;  margin-top: -120px">
                            <h2><strong>{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</strong></h2>
                            <p class="mb-1">Orkiestra Grandioso Radom</p>
                            <p class="mb-0">
                                <span class="badge badge-light">
                                    <i class="fas fa-shield-alt"></i>
                                    @if(Auth::user()->roletype == 'SuperAdmin')
                                        Super Administrator
                                    @elseif(Auth::user()->roletype == 'Admin')
                                        Administrator
                                    @elseif(Auth::user()->roletype == 'Employee')
                                        Nauczyciel
                                    @elseif(Auth::user()->roletype == 'Parent')
                                        Rodzic / Opiekun
                                    @elseif(Auth::user()->roletype == 'User')
                                        Uczeń
                                    @endif
                                </span>
                            </p>

                        </div>
                    </div>
                </section>
                <section class="py-3 d-flex justify-content-between align-items-center ">
                    <!-- left elements -->
                    <div class="d-none d-md-block">
                        <button type="button" class="btn btn-link active" data-mdb-ripple-color="dark">
                            Informacje <small class="text-muted d-none">420</small>
                        </button>

                        <div class="dropdown d-inline-block d-none">
                            <button class="btn btn-link  text-reset dropdown-toggle" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                                Więcej
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- right elements -->
                    <div class="">
                        <button type="button" class="btn btn-light bg-light px-3 me-2">
                            <i class="fas fa-edit me-1"></i>Edytuj profil
                        </button>
                        <button type="button" class="btn btn-light bg-light px-3 me-2">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button type="button" class="btn btn-light bg-light px-3 me-2">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>

                </section>
            </div>
        </section>
        <section class="mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 mb-4 mb-md-0">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title mb-3"><strong>Prezentacja</strong></h5>
                                <ul class="list-unstyled text-muted">
                                    <li class="mb-1"><i class="fas fa-briefcase me-2"></i>Puzonista w <a href="" class="text-wrap text-reset lh-sm"><strong>Orkiestra Grandioso Radom</strong></a></li>
                                    <li class="mb-1"><i class="fas fa-graduation-cap me-2"></i>Uczęszcza do: <a href="" class="text-wrap text-reset lh-sm"><strong>Zespół Szkół Technicznych im. Tadeusza Kościuszki</strong></a></li>
                                    <li class="mb-1"><i class="fas fa-graduation-cap me-2"></i>Uczęszcza do: <a href="" class="text-wrap text-reset lh-sm"><strong>Zespół Szkół Muzycznych im. Oskara Kolberga w Radomiu</strong></a></li>
                                    <li class=""><i class="fas fa-clock me-2"></i>Data dołączenia: <a href="" class="text-wrap text-reset lh-sm"><strong>{{ auth()->user()->created_at->format('m Y') }}</strong></a></li>
                                </ul>
                                <button class="btn btn-dark btn-block">Edytuj szczegóły</button>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><strong>Odznaki w grupie</strong></h5>
                                <ul class="list-unstyled text-muted">
                                    <li class="mb-2">
                                        Ranga: <br>
                                        <span class="badge badge-light fs-6">
                                            <i class="fas fa-shield-alt"></i>
                                            @if(Auth::user()->roletype == 'SuperAdmin')
                                                Super Administrator
                                            @elseif(Auth::user()->roletype == 'Admin')
                                                Administrator
                                            @elseif(Auth::user()->roletype == 'Employee')
                                                Nauczyciel
                                            @elseif(Auth::user()->roletype == 'Parent')
                                                Rodzic / Opiekun
                                            @elseif(Auth::user()->roletype == 'User')
                                                Uczeń
                                            @endif
                                        </span>
                                    </li>
                                    <li class="mb-1">
                                        Instrumenty: <br>
                                        @forelse(auth()->user()->rolesections as $key => $item)
                                            <span class="badge badge-{{ $item->color }} mb-1">
                                                <img width="24px" src="{{ asset('/storage/instruments/'.$item->image ) }}" alt=""> {{ $item->name }}
                                            </span>
                                            <!-- https://cdn-icons-png.flaticon.com/512/836/836920.png -->
                                        @empty
                                            <span class="text-white">brak</span>
                                        @endforelse
                                    </li>
                                </ul>
                                <button class="btn btn-dark btn-block">Edytuj listę instrumentów</button>
                            </div>
                        </div>
                        <div class="d-inline text-muted">
                            <a href="{{ route('policies.terms') }}" class="text-decoration-none text-muted">
                                Regulamin &nbsp;
                            </a>
                            <span> · </span>&nbsp;
                            <a href="{{ route('policies.privacy') }}" class="text-decoration-none text-muted">
                                Polityka prywatności &nbsp;
                            </a>
                            <span> · </span>&nbsp;
                            <a href="{{ route('policies.privacy') }}" class="text-decoration-none text-muted">
                                Pliki Cookie &nbsp;
                            </a>
                            GrandiosoApp © 2022 by Mateusz Wydra
                        </div>
                    </div>
                    <div class="col-md-7 mb-4 mb-md-0">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title mb-3"><strong>Statystyki</strong></h5>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                Obecnosci w tym miesiącu:
                                                <ul class="list-unstyled text-muted">
                                                    <li class="mb-2">
                                                        Obecność <br>
                                                        <span class="badge bg-success mb-1 fs-6">
                                                            100%
                                                        </span>
                                                    </li>
                                                    <li class="mb-2">
                                                        Nieobecności <br>
                                                        <span class="badge bg-danger mb-1 fs-6">
                                                            0%
                                                        </span>
                                                    </li>
                                                    <li class="mb-2">
                                                        Usprawidliwione <br>
                                                        <span class="badge bg-secondary mb-1 fs-6">
                                                            0%
                                                        </span>
                                                    </li>
                                                    <li class="mb-1">
                                                        Punktualność <br>
                                                        <span class="badge bg-info mb-1 fs-6">
                                                            100%
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col">
                                                Obecnosci w poprzednim miesiącu:
                                                <ul class="list-unstyled text-muted">
                                                    <li class="mb-2">
                                                        Obecność <br>
                                                        <span class="badge bg-success mb-1 fs-6">
                                                            93%
                                                        </span>
                                                    </li>
                                                    <li class="mb-2">
                                                        Nieobecności <br>
                                                        <span class="badge bg-danger mb-1 fs-6">
                                                            5%
                                                        </span>
                                                    </li>
                                                    <li class="mb-2">
                                                        Usprawidliwione <br>
                                                        <span class="badge bg-secondary mb-1 fs-6">
                                                            2%
                                                        </span>
                                                    </li>
                                                    <li class="mb-1">
                                                        Punktualność <br>
                                                        <span class="badge bg-info mb-1 fs-6">
                                                            100%
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col mt-2">
                                        <canvas id="chart-line"></canvas>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- <div class="mt-5 mb-5 d-flex justify-content-center">
                            <div class="p-3">
                                <div class="first text-center">
                                    <i class="fas fa-tools fa-6x"></i>
                                    <h3 class="mt-3">W budowie</h3>
                                    <p class="text-muted">
                                        To jest początek tego dzieła!
                                    </p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>


            </div>
        </section>
        <script src=
"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
        <script type="text/javascript">
        var ctx = document.getElementById("chart-line").getContext("2d");
    var myChart = new Chart(ctx, {
      type: "line",
      data: {
        labels: [
          "Styczeń",
          "Luty",
          "Marzec",
          "Kwiecień",
          "Maj",
          "Czerwiec",
        ],
        datasets: [
          {


            label: "Obecność",
            data: [10, 11, 9, 12, 11, 6],
            backgroundColor: "rgba(0, 184, 74, 0.41)",
          },
          {
            label: "Nieobecności",
            data: [1, 0, 2, 0, 0, 3],
            backgroundColor: "rgba(249, 48, 84, 0.85)",
          },
          {
            label: "Usprawidliwione",
            data: [0, 0, 1, 0, 0, 4],
            backgroundColor: "#B23CFD",
          },
        ],
      },
    });
        </script>
@endsection
