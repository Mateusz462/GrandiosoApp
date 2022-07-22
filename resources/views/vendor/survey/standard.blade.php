<div class="card mb-4">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ $survey->name }}
                </h4>
            </div>
            <!--col-->
        </div>
        <div class="mt-4">
            <p class="mb-0"><b>Informacje:</b></p>
            <p class="mb-0"><b>Tytuł:</b> {{ $survey->name }}</p>
            <p class="mb-0"><b>Opis:</b> {{ $survey->descrioption }}</p>
            <p class="mb-4"><b>Stworzył:</b> <span class="badge badge-light">Administrator</span>
                <!-- <img class="rounded-circle" width="24px" src="{{ $survey->user->getPicture() }}" alt=""> {{ $survey->user->firstname }} {{ $survey->user->lastname }} --><br>
            </p>
            @if($eligible)
                <form action="{{ route('surveys.store', $survey->id)}}" method="post">
                    @csrf
            @endif
                @if($eligible)
                    <p>
                        Akceptujemy tylko
                        <strong>{{ $survey->limitPerParticipant() }} {{ \Str::plural('wejście', $survey->limitPerParticipant()) }}</strong>
                        na osobę
                    </p>
                @endif

                @if($lastEntry)
                    <p>
                        Ostatnio przesłałeś swoją odpowiedź
                        <strong>{{ $lastEntry->created_at->diffForHumans() }}</strong>.
                    </p>
                @endif

                @if(!$survey->acceptsGuestEntries() && auth()->guest())
                    <p>
                        Zaloguj się, aby dołączyć do tej ankiety.
                    </p>
                @else
                    @foreach($survey->sections as $section)
                        @include('survey::sections.single')
                    @endforeach

                    @foreach($survey->questions()->withoutSection()->get() as $question)
                        @include('survey::questions.single')
                    @endforeach
                    @if(count($survey->questions()->withoutSection()->get()) == 0 && count($survey->sections) == 0)
                        <p>
                            <b>Brak pytań!</b>
                        </p>
                    @endif
                    @if($eligible)
                        @if(count($survey->questions()->withoutSection()->get()) > 0 || count($survey->sections) > 0)
                            <button class="btn btn-primary"><i class="far fa-paper-plane"></i> Prześlij</button>
                        @else
                            <a href="{{ route('user.surveys') }}" class="btn btn-danger"><i class="fas fa-reply"></i> Powrót</a>
                        @endif
                    @endif
                @endif
            @if($eligible)
                </form>
            @endif
        </div>
    </div>
</div>
