@extends('layouts.frontend.frontend_layout')

@section('title', 'Sign up')

@section('content')
@if(Auth::check())
    @php
        header("Location: " . URL::to('/dashboard'), true, 302);
        exit();
    @endphp
@endif
<link rel="stylesheet" type="text/css" href="{{asset('/')}}css/custom/login.css">

<!-- start login section -->
<div class="login_section" style="margin-bottom: 12px;">
    <div class="container">
        <div class="as_login">
             <h2>sign up</h2>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form_item line_hide_form_item">
                        <input type="text" placeholder="Name" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" >

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form_item line_hide_form_item">
                        <input type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form_item line_hide_form_item">
                        <input type="password" class="@error('password') is-invalid @enderror" name="password" placeholder="Password" >
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form_item line_hide_form_item">
                        <input type="password" class="@error('Repeat-password') is-invalid @enderror"  placeholder="Repeat password" name="password_confirmation">
                        @error('Repeat-password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="accountYet">

                <p style="margin-bottom: 37px;"><input required="" type="checkbox" name="terms" id="terms"/>  I agree to the <a target="_blank" href="{{ route('terms.show')}}">Terms of Service </a>& <a target="_blank" href="{{ route('policy.show') }}">Privecy policy</a></p>
            </div>
            @endif

            <div class="button_section text-center">
                 <button type="submit" class="button enable-ripple">Sign up</button>

                 <div class="accountYet">
                    <p> I have an account?  &nbsp; &nbsp;<a href="{{ route('login') }}">Sign in</a></p>
                 </div>
            </div>
        </form>
    </div>
</div>
<!-- end login section -->
@endsection