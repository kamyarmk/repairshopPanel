@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="wrapper-page">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 mt-4 card" style="max-width: 520px; border: 2px solid rgba(98, 103, 115, 0.3); padding: 30px; border-radius: 9px;">
                        <div class="text-center">
                            <h2 class="text-uppercase mt-0 mb-4">
                                <a href="index.html" class="text-success">
                                    <span><img src="{{asset('assets/logo.png')}}" alt="" height="60"></span>
                                </a>
                            </h2>
                            <!--<h4 class="text-uppercase font-bold m-b-0">{{ __('Register') }}</h4>-->
                        </div>

                        <div class="account-content">
                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group mb-2">
                                    <div class="col-12">
                                        <label for="name">{{ __('Name') }}</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group mb-2">
                                    <div class="col-12">
                                        <label for="email">{{ __('E-Mail Address') }}</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group mb-2">
                                    <div class="col-12">
                                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="col-12">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox5" type="checkbox">
                                            <label for="checkbox5">
                                                <a href="#">{{ __('I accept Terms and Conditions') }}</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group account-btn text-center mt-1">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- end card-box-->

                @if (Route::has('login'))
                    <div class="row mt-5">
                        <div class="col-sm-12 text-center">
                            <p class="text-muted">{{ __('Already have an account?') }} <a href="{{ route('login') }}" class="text-dark m-l-5">{{ __('Login') }}</a></p>
                        </div>
                    </div>
                @endif
                
            </div>
            <!-- end wrapper -->
        </div>
    </div>
</div>
@endsection
