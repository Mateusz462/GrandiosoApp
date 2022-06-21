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
        <!-- LISTA RASTEDE 2022:
        Termin: 29.06-05.07.2022
        Koszt max: 800 zł (CZEKAMY NA WSPARCIE MIASTA)
        Wpłata do końca maja - 31.05.2022 razem z II wpłatą za Kerkrade.
        UCZESTNICY:
        FAGOT:
        Witkowska Wiktoria
        FLET:
        Bartold Michalina
        Czubak  Oliwia
        Derleta  Nina
        Gregorczyk  Gabriela
        Gutkowska Zofia
        Karpeta  Karolina
        Mamla  Łucja
        Rychlicka  Alicja
        Sobólska Aleksandra
        Sieroń  Aleksandra
        KLARNET:
        Fokt  Natalia
        Gorzewska Amelia
        Gregorczyk  Igor
        Kowalski Piotr
        Krasowska  Zuzanna
        Latała  Michał
        Magiera  Lena
        Morton Kalina
        Pacyna  Adam
        Tarabasz  Oliwia
        Krawczyk Zuzanna
        OBÓJ:
        Kamizela  Patrycja
        Walczak Maria
        PERKUSJA:
        Debowska  Milena
        Michalski Piotr
        Milczarski Cezary
        Pietrzyk Łucja
        Sowa  Nikola
        Stępniewski Igor
        Zimnicka  Roza
        PUZON:
        Chruslak Piotr
        Jarmuż Oskar
        Kaca Kacper
        Michalska Patrycja
        Wasilewski Mateusz
        Wrocławski Marceli
        Wydra Mateusz
        Zioło Alicja
        SAKSOFON ALT:
        Baran Julia
        Dębicka Wiktoria
        Sieradz Magda
        Wesołowski  Patryk
        Wydra Zuzanna
        Delikat Mikołaj
        SAKSOFON TENOR:
        Dobrowolska Angelika
        Gorzewski Tobiasz
        TAMBURMAJORKA:
        Banasiak  Michalina
        TRĄBKA:
        Gorczyca Jan
        Kaca Karol
        Piątek Maksymilian
        Sieroń  Dominik
        Sułkowski  Adam
        Szczęsna  Wiktoria
        Umięcka Anna
        Umięcki  Kacper
        Wielogórski Iwo
        TUBA:
        Barszcz  Filip
        Rybak Rozalia
        Wójcicki Jakub
        WALTORNIA:
        Biernacka  Ada
        WERBLE:
        Firlej Aleksandra
        Gosiewska Julia
        Hulewicz Oliwia
        Katana-Słomka Antonina
        Kupiec Natalia
        Stanios  Sandra
        Świniarska Róża
        Zwierzchowska  Natalia

        LISTA WMC KERKRADE:
Koszt całkowity max 1200 zł (czekamy na wsparcie miasta)
Daty orientacyjne wyjazdu: 27.07-02.08.2022
Wpłaty: 600 zł do 27.04.2022
II wpłata do 31 maja 2022 (razem z wpłatą na Rastede)
Uczestnicy:
FAGOT:
Witkowska Wiktoria
FLET:
Sieroń  Aleksandra
Sobólska Aleksandra
Gregorczyk  Gabriela
Biernacka  Hanna
Kraszewska  Julia
Fatek Magdalena
Mucha  Marcin
Bartold Michalina
Derleta  Nina
Czubak  Oliwia
Tomaszewska Wiktoria
Gutkowska Zofia
KLARNET:
Pacyna Adam
Gorzewska Amelia
Gregorczyk  Igor
Morton Kalina
Magiera  Lena
Latała  Michał
Fokt  Natalia
Tarabasz  Oliwia
Kowalski Piotr
Baćkowska Wiktoria
Jakóbowska  Zuzanna
Łukawska  Zuzanna
Krawczyk Zuzanna
OBÓJ:
Walczak Maria
Kamizela  Patrycja
PERKUSJA:
Milczarski Cezary
Stępniewski Igor
Pietrzyk Łucja
Dębowska  Milena
Sowa  Nikola
Michalski Piotr
Zimnicka  Róża
PUZON:
Zioło Alicja
Kaca Kacper
Wrocławski Marceli
Wasilewski Mateusz
Wydra Mateusz
Jarmuż Oskar
Michalska Patrycja
Chruslak Piotr
SAKSHORN:
Galek Michal
SAKSOFON ALT:
Baran Julia
Sieradz Magda
Wesołowski  Patryk
Dębicka Wiktoria
Wydra Zuzanna
Delikat Mikołaj
SAKSOFON TENOR:
Dalton  Aleksandra
Minda Mikołaj
Gorzewski Tobiasz
TAMBURMAJORKA:
Banasiak  Michalina
TRĄBKA:
Sułkowski  Adam
Umięcka Anna
Sieroń  Dominik
Wielogórski Iwo
Gorczyca Jan
Umięcki  Kacper
Kaca Karol
Piątek Maksymilian
Szczęsna  Wiktoria
TUBA:
Barszcz  Filip
Wójcicki Jakub
Rybak Rozalia
WALTORNIA:
Biernacka  Ada
WERBLE:
Katana-Słomka Antonina
Kowalczyk Dominika
Figarska Magdalena
Firlej Aleksandra
Kupiec Natalia
Zwierzchowska  Nikola
Hulewicz Oliwia
Świniarska Róża
Stanios  Sandra -->
		<div class="row">
            @forelse($travels as $survey)
                <div class="col-3">
                    <div class="card shadow mb-4">
    					<div class="card-body">
                            <p>
                                <img src="http://grandioso.pl/wp-content/uploads/2020/03/cropped-cropped-LOGO-GRANDIOSO-serwisy-internetowe-2.png" class="img-fluid rounded" alt="Cliff Above a Stormy Sea"/>
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
                                <p class="mb-0"><b>Status:</b> <span class="badge badge-warning"><i class="fas fa-question"></i> Do potwierdzenia</span></p>
                                <p class="mb-2"><b>Dodano:</b> {{ $survey->created_at->format('d.m.Y H:i') }}</p>
                                <p class="mb-0"><b>Pozostało:</b> {{ $diff = Carbon\Carbon::parse('2022-06-29 00:00:00')->diffInDays(Carbon\Carbon::now()) }} dni</p>

                            <?php else: ?>
                                <p class="mb-0"><b>Termin:</b> 27.07-02.08.2022</p>
                                <p class="mb-0"><b>Miejsce:</b> Kerkrade HOLANDIA</p>
                                <p class="mb-0"><b>Koszt max:</b> 1200 zł (czekamy na wsparcie miasta)</p>
                                <p class="mb-0"><b>Wpłaty:</b> I rata - 600 zł do 27.04.2022, II wpłata do 31 maja 2022 (razem z wpłatą na Rastede)</p>
                                <p class="mb-2"><b>Uczestnicy:</b> Zobacz więcej</p>
                                <p class="mb-0"><b>Autor:</b> <span class="badge badge-light">Administrator</span></p>
                                <p class="mb-0"><b>Status:</b> <span class="badge badge-success"><i class="fas fa-check"></i> Potwierdzony</span></p>
                                <p class="mb-2"><b>Dodano:</b> {{ $survey->created_at->format('d.m.Y H:i') }}</p>
                                <p class="mb-0"><b>Pozostało:</b> {{ $diff = Carbon\Carbon::parse('2022-07-27 00:00:00')->diffInDays(Carbon\Carbon::now()) }} dni</p>
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
