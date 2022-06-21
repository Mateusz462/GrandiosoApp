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
                        <h4 class="mb-4">Zarejestruj się w panelu!</h4>
                    </div>
                    @include('layouts.includes.alert')
                    <form method="POST" action="{{ route('register') }}" class="@if($errors->count() > 0) was-validated @endif">
                        @csrf
                        <div class="row mb-4">
                            <div class="col">
                                <!-- First name input -->
                                <div class="form-outline">
                                    <input type="text" name="firstname" value="{{ old('firstname') }}" id="firstname" class="form-control @error('firstname')is-invalid active @enderror" placeholder="Imię" required >
                                    <label class="form-label" for="firstname">Imię</label>
                                    @error('firstname')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <!-- Last name input -->
                                <div class="form-outline">
                                    <input type="text" name="lastname" value="{{ old('lastname') }}" id="lastname" class="form-control @error('lastname')is-invalid active @enderror" placeholder="Nazwisko" required >
                                    <label class="form-label" for="lastname">Nazwisko</label>
                                    @error('lastname')
                                        <div class="invalid-feedback">{! $message !}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- E-mail input -->
                        <div class="form-outline mb-4">
                            <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control  @error('email')is-invalid active @enderror" placeholder="E-mail" required>
                            <label class="form-label" for="email">E-mail</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" name="password" value="{{ old('password') }}" id="password" class="form-control @error('password') is-invalid active @enderror" placeholder="Hasło" required>
                            <label class="form-label" for="password">Hasło</label>

                            @error('password')
                                <div class="invalid-feedback">
                                    {!! $message !!}.
                                </div>
                            @enderror
                        </div>

                        <!-- Code input -->
                        <div class="form-outline mb-4">
                            <input type="text" value="GRANDIOSO" id="code" class="form-control is-valid" placeholder="GRANDIOSO" disabled>
                            <label class="form-label" for="password">Kod grupy</label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4"><i class="fas fa-sign-in-alt"></i> Zarejestruj się</button>

                        <!-- Register buttons -->
                        <div class="text-center">
                            @include('layouts.includes.socialite')
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


<script type="text/javascript">
// // Example starter JavaScript for disabling form submissions if there are invalid fields
// (() => {
// 'use strict';
//
// // Fetch all the forms we want to apply custom Bootstrap validation styles to
// const forms = document.querySelectorAll('.needs-validation');
//
// // Loop over them and prevent submission
// Array.prototype.slice.call(forms).forEach((form) => {
// form.addEventListener('submit', (event) => {
//   if (!form.checkValidity()) {
//     event.preventDefault();
//     event.stopPropagation();
//   }
//   form.classList.add('was-validated');
// }, false);
// });
// })();
</script>
@endsection
