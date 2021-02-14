@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="wrapper-page">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="mt-4 card col-md-6" style="max-width: 520px; border: 2px solid rgba(98, 103, 115, 0.3); padding: 30px; border-radius: 9px;">
                        <div class="text-center">
                            <h2 class="text-uppercase mt-0 mb-4">
                                <a href="index.html" class="text-success">
                                    <span><img src="{{ asset('/images/logo_dark.png')}}" alt="" height="30"></span>
                                </a>
                            </h2>
                            <!--<h4 class="text-uppercase font-bold m-b-0">{{ __('Login') }}</h4>-->
                        </div>

                        <div class="account-content">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group mb-2">
                                    <div class="col-12">
                                        <label for="email">{{ __('E-Mail Address') }}</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group mb-2">
                                    <div class="col-12">
                                        <label for="password">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <div class="col-12">
                                        <div class="checkbox checkbox-primary">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group account-btn text-center mt-5">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link btn-block" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                @if (Route::has('register'))
                    <div class="row mt-5">
                        <div class="col-sm-12 text-center">
                            <p class="text-muted">{{ __('Dont have an account?') }} <a href="{{ route('register') }}" class="text-dark m-l-5">{{ __('Register') }}</a></p>
                        </div>
                    </div>
                @endif
                
            </div>
            
        </div>
    </div>
</div>
@endsection
