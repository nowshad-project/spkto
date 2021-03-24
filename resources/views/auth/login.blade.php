@extends('layouts.frontend.frontend_layout')

@section('title', 'Login')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('/')}}css/custom/login.css">
<!-- start login section -->
<div class="login_section">
    <div class="container">
        <div class="as_login">
             <h2>Sign in</h2>
        </div>

        <div class="col">
            <a href="#" class="fb btn">
              <i class="fa fa-facebook fa-fw"></i> Login with Facebook
             </a>
            <a href="#" class="twitter btn">
              <i class="fa fa-twitter fa-fw"></i> Login with Twitter
            </a>
            <a href="#" class="google btn"><i class="fa fa-google fa-fw">
              </i> Login with Google+
            </a>
        </div>

        <div class="form-separator"><span>OR</span></div>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form_item line_hide_form_item">
                <input type="text" placeholder="Email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" name="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            </div>
            <div class="form_item line_hide_form_item">
                <input type="password" class="@error('password') is-invalid @enderror" placeholder="password" value="{{ old('password') }}" name="password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

            <div class="form-check">
                <label class=" inline-block f-s">
                    {{ __('Remember Me') }}
                    <input class="checkbox" type="checkbox" name="remember" id="remember">
                    <span class="checkmark" style="top:3px; left:-5px;"></span>
                  </label>
            </div>
            <div class="button_section text-center">
                <button class="button enable-ripple">Sign in</button>
                <div class="Forgot_btn">
                    <a class="btn" style="color: #95bf42;" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
                <div class="accountYet">
                    <p> Don't have an account yet? &nbsp; &nbsp;<a href="{{ route('register') }}">Sign up</a></p>
                </div>

            </div>
        </form>
    </div>
</div>
<!-- end login section -->
       
@endsection
