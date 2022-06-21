@component('survey::questions.base', compact('question'))
    <input type="text" name="{{ $question->key }}" id="{{ $question->key }}" class="form-control"
           value="{{ $value ?? old($question->key) }}" {{ ($disabled ?? false) ? 'disabled' : '' }}>
           <label class="form-label" for="{{ $question->key }}" style="margin-left: 0px;">{{ $question->content }}</label>
@endcomponent
