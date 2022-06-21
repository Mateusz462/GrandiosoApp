@if (config('services.facebook.active') || config('services.google.active'))
<p>lub zaloguj się przez :</p>
@endif
@if (config('services.facebook.active'))
    <a href='{{ route('social.login', 'facebook') }}' class='btn btn-primary btn-floating mx-1'><i class='fab fa-facebook-f'></i></a>
@endif

@if (config('services.google.active'))
    <a href='{{ route('social.login', 'google') }}' class='btn btn-primary btn-floating mx-1'><i class="fab fa-google"></i></a>
@endif
