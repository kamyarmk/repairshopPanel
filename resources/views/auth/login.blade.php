@extends('layouts.app')

@section('content')
<!-- Page Content -->
<div class="bg-image" style="background-image: url('{{ asset('media/photos/photo19@2x.jpg') }}');">
    <div class="row no-gutters bg-primary-op">
        <!-- Main Section -->
        <div class="hero-static col-md-6 d-flex align-items-center bg-white">
            <div class="p-3 w-100">
                <!-- Header -->
                <div class="mb-3 text-center">
                    <a class="link-fx font-w700 font-size-h1" href="index.html">
                        <span class="text-dark">Dash</span><span class="text-primary">mix</span>
                    </a>
                    <p class="text-uppercase font-w700 font-size-sm text-muted">Sign In</p>
                </div>
                <!-- END Header -->

                <!-- Sign In Form -->
                <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                <div class="row no-gutters justify-content-center">
                    <div class="col-sm-8 col-xl-6">
                        <form class="js-validation-signin" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="py-3">
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control form-control-lg form-control-alt @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail Address') }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg form-control-alt @error('password') is-invalid @enderror" id="password" name="password" placeholder="{{ __('Password') }}">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-hero-lg btn-hero-primary">
                                    <i class="fa fa-fw fa-sign-in-alt mr-1"></i> {{ __('Login') }}
                                </button>
                                <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-sm btn-light d-block d-lg-inline-block mb-1"  href="{{ route('password.request') }}">
                                            <i class="fa fa-exclamation-triangle text-muted mr-1"></i> {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Sign In Form -->
            </div>
        </div>
        <!-- END Main Section -->

        <!-- Meta Info Section -->
        <div class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
            <div class="p-3">
                <p class="display-4 font-w700 text-white mb-3">
                    Welcome to the future
                </p>
                <p class="font-size-lg font-w600 text-white-75 mb-0">
                    Copyright &copy; <span data-toggle="year-copy"></span>
                </p>
            </div>
        </div>
        <!-- END Meta Info Section -->
    </div>
</div>
<!-- END Page Content -->
@endsection
