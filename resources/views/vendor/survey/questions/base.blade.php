<h4 class="card-title mb-0">Pytanie: {{ $question->content }}</h4>
<div class="mt-4">
    <div class="form-outline mt-4">
        {{ $slot }}
        @if($errors->has($question->key))
        <div class="text-danger mt-3">{{ $errors->first($question->key) }}</div>
        @endif
    </div>

    <div class="text-success">
        {{ $report ?? '' }}
    </div>
</div>
