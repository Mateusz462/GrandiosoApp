@extends('layouts.app')

@section('content')
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-4">
            <div class="card shadow">
                <div class="card-body p-5">
                    <p class="text-center">
                        <img class="mx-auto element rounded-circle" src="https://firebasestorage.googleapis.com/v0/b/glissandoo-6eb90.appspot.com/o/images%2Fgroup%2FStZftLWWqLT7kzADRxNa%2Foriginal.jpeg?alt=media&token=2a10679a-d3a1-4faa-b4b7-ba683d0adadc" style="width: 125px">
                    </p>
                    <div class="text-center">
                        <h4 class="mb-4">Zaloguj się do panelu!</h4>
                    </div>
                    @include('layouts.includes.alert')
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-outline mb-4">
                            <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" >
                            <label class="form-label" for="email">E-mail</label>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" name="password" value="{{ old('password') }}" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Hasło" >
                            <label class="form-label" for="password">Hasło</label>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- 2 column grid layout -->
                        <div class="row mb-4">
                            <div class="col-md-6 d-flex justify-content-center">
                                <!-- Checkbox -->
                                <div class="form-check mb-3 mb-md-0">
                                    <input class="form-check-input" type="checkbox" value="" name="remember" id="loginCheck" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="loginCheck"> Zapamiętaj mnie </label>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex justify-content-center">
                                <!-- Simple link -->
                                <a href="{{ route('password.request') }}">Nie pamiętasz hasła?</a>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4"><i class="fas fa-sign-in-alt"></i> Zaloguj się</button>

                        <!-- Register buttons -->
                        <div class="text-center">
                            @if(Route::has('register'))
                                <p>Nie masz konta?  <a href="{{ route('register') }}">Zarejestruj się</a></p>
                            @endif
                            @include('layouts.includes.socialite')
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
