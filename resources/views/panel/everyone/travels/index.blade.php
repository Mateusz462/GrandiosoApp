@extends('layouts.app')

@section('content-header')
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="m-0">Wyjazdy</h1>
            </div><!-- /.col -->
            <div class="col-sm-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Orkiestra Grandioso Radom</li>
                        <li class="breadcrumb-item active" aria-current="page">Wyjazdy</li>
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
            @forelse($travels as $survey)
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-3">
                    <div class="card shadow mb-4">
    					<div class="card-body">
                            <p>
                                <img src="{{ asset('img/cropped-cropped-LOGO-GRANDIOSO-serwisy-internetowe-2.png') }}" class="img-fluid rounded" alt="Cliff Above a Stormy Sea"/>
                            </p>
                            <?php if ($survey->id == 1): ?>
                                <h3 class="font-weight-bold">Mistrzostwa Europy Rastade 2022 NIEMCY</h3>
                            <?php else: ?>
                                <h3 class="font-weight-bold">World Music Contest Kerkrade 2021 HOLANDIA</h3>
                            <?php endif; ?>
                            <?php if ($survey->id == 1): ?>
                                <p class="mb-0"><b>Termin:</b> 29.06-05.07.2022</p>
                                <p class="mb-0"><b>Miejsce:</b> Rastade NIEMCY</p>
                                <p class="mb-0"><b>Koszt max:</b> 800 zł (CZEKAMY NA WSPARCIE MIASTA)</p>
                                <p class="mb-0"><b>Wpłaty:</b> I rata do końca maja - 31.05.2022 razem z II wpłatą za Kerkrade.</p>
                                <p class="mb-2"><b>Uczestnicy:</b> Zobacz więcej</p>
                                <p class="mb-0"><b>Autor:</b> <span class="badge badge-light">Administrator</span></p>
                                <p class="mb-0"><b>Status:</b> <span class="badge badge-success"><i class="fas fa-check"></i> Potwierdzony</span> <span class="badge badge-danger"><i class="fas fa-exclamation"></i> PILNE</span></p>
                                <p class="mb-2"><b>Dodano:</b> {{ $survey->created_at->format('d.m.Y H:i') }}</p>
                                <p class="mb-0"><b>Pozostało:</b>
                                    @if(Carbon\Carbon::parse('2022-06-29 00:00:00') >= Carbon\Carbon::today())
                                        {{ $diff = Carbon\Carbon::parse('2022-06-29 00:00:00')->diffInDays(Carbon\Carbon::now()) }} dni do wyjazdu!
                                    @else
                                        Wyjazd odbył się {{ $diff = Carbon\Carbon::parse('2022-06-29 00:00:00')->diffInDays(Carbon\Carbon::now()) }} dni temu!
                                    @endif
                                </p>

                            <?php else: ?>
                                <p class="mb-0"><b>Termin:</b> 27.07-02.08.2022</p>
                                <p class="mb-0"><b>Miejsce:</b> Kerkrade HOLANDIA</p>
                                <p class="mb-0"><b>Koszt max:</b> 1200 zł (czekamy na wsparcie miasta)</p>
                                <p class="mb-0"><b>Wpłaty:</b> I rata - 600 zł do 27.04.2022, II wpłata do 31 maja 2022 (razem z wpłatą na Rastede)</p>
                                <p class="mb-2"><b>Uczestnicy:</b> Zobacz więcej</p>
                                <p class="mb-0"><b>Autor:</b> <span class="badge badge-light">Administrator</span></p>
                                <p class="mb-0"><b>Status:</b> <span class="badge badge-success"><i class="fas fa-check"></i> Potwierdzony</span></p>
                                <p class="mb-2"><b>Dodano:</b> {{ $survey->created_at->format('d.m.Y H:i') }}</p>
                                <p class="mb-0"><b>Pozostało:</b>
                                    @if(Carbon\Carbon::parse('2022-07-27 00:00:00') >= Carbon\Carbon::today())
                                        {{ $diff = Carbon\Carbon::parse('2022-07-27 00:00:00')->diffInDays(Carbon\Carbon::now()) }} dni do wyjazdu!
                                    @else
                                        Wyjazd odbył się {{ $diff = Carbon\Carbon::parse('2022-07-27 00:00:00')->diffInDays(Carbon\Carbon::now()) }} dni temu!
                                    @endif
                                </p>
                            <?php endif; ?>
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
