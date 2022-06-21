<div class="card mb-4 bg-dark">
    <div class="card-body">
        <h3 class="">{{ $section->name }}</h3>
    </div>
</div>
@foreach($section->questions as $question)
    @include('survey::questions.single')
@endforeach
