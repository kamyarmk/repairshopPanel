@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="wrapper-page">
                
                <div class="m-t-40 card-box">
                    <div class="text-center">
                        <h2 class="text-uppercase m-t-0 m-b-30">
                            <a href="index.html" class="text-success">
                                <span><img src="{{ asset('/images/logo_dark.png')}}" alt="" height="30"></span>
                            </a>
                        </h2>
                        <!--<h4 class="text-uppercase font-bold m-b-0">{{ __('Login') }}</h4>-->
                    </div>

                    <div class="account-content">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group m-b-20">
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

                            <div class="form-group m-b-20">
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

                            <div class="form-group m-b-30">
                                <div class="col-12">
                                    <div class="checkbox checkbox-primary">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group account-btn text-center m-t-10">
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
                @if (Route::has('register'))
                    <div class="row m-t-50">
                        <div class="col-sm-12 text-center">
                            <p class="text-muted">Don't have an account? <a href="{{ route('register') }}" class="text-dark m-l-5">{{ __('Register') }}</a></p>
                        </div>
                    </div>
                @endif
                
            </div>
            
        </div>
    </div>
</div>
@endsection
