@extends('layouts.frontend.frontend_layout')

@section('title', 'Reset Password')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('/')}}css/custom/login.css">
<!-- start login section -->
<div class="login_section">
    <div class="container">
        <div class="as_login">
             <h2>Reset Password</h2>
        </div>
        @if (session('status'))
            <div style="color: #3c763d; background-color: #dff0d8;border: 1px solid transparent; border-color: #d6e9c6; border-radius: 4px;">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form_item line_hide_form_item">
                <input type="text" placeholder="Email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" name="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            </div>
            <div class="button_section text-center">
                <button class="button enable-ripple">Email Password Reset Link</button>
                <div class="Forgot_btn">
                    <a class="btn" style="color: #95bf42;" href="{{ route('login') }}">
                        {{ __('Sign in') }}
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>       
@endsection


