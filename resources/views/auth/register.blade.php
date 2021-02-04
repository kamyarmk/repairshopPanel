@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="wrapper-page">
                <div class="m-t-40 card-box">
                    <div class="text-center">
                        <h2 class="text-uppercase m-t-0 m-b-30">
                            <a href="index.html" class="text-success">
                                <span><img src="{{asset('/images/logo_dark.png')}}" alt="" height="30"></span>
                            </a>
                        </h2>
                        <!--<h4 class="text-uppercase font-bold m-b-0">{{ __('Register') }}</h4>-->
                    </div>

                    <div class="account-content">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group m-b-20">
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

                            <div class="form-group m-b-20">
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

                            <div class="form-group m-b-20">
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

                            <div class="form-group m-b-20">
                                <div class="col-12">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group m-b-30">
                                <div class="col-12">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox5" type="checkbox">
                                        <label for="checkbox5">
                                            <a href="#">{{ __('I accept Terms and Conditions') }}</a>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group account-btn text-center m-t-10">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-lg btn-primary btn-block">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end card-box-->

                @if (Route::has('login'))
                    <div class="row m-t-50">
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
