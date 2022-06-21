@extends('layouts.app')

@section('content-header')

@endsection

@section('content')
    <div class="container">
        <!-- row -->
		<div class="row">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <h3 class="font-weight-bold mb-4">{{ __('Verify Your Email Address') }}</h3>
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
                    <p class="mb-0">{{ __('Before proceeding, please check your email for a verification link.') }}</p>
                    <p>{{ __('If you did not receive the email') }},</p>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary align-baseline">{{ __('click here to request another') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
