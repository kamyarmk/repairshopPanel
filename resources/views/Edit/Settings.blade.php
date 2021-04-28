@extends('layouts.panelStruc')

@section('content')
<div class="wrapper">
    <div class="container card p-4">

        <div class="row justify-content-md-center mb-5">
            <div class="col-sm-8">
                <h4 class="header-title m-t-0 mb-4 text-right"><i class="fas fa-user-edit ml-2"></i>{{ __('Settings') }}</h4>
                <div class="dropdown-divider"></div>
            </div>
        </div>


        <div class="row justify-content-md-center align-items-center mb-5">
            <div class="col-md-8 card-box m-b-20">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form role="form" method="POST" action="{{ route('settings.update') }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row text-right">
                        <div class="mb-3 col-6">
                            <label for="mobile_username" class="form-label">{{ __('SMS API Password') }}</label>
                            <input type="text" name="mobile_username" class="form-control" value="{{ $Settings->mobile_username }}">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="mobile_password" class="form-label">{{ __('SMS API Password') }}</label>
                            <input type="text" name="mobile_password" class="form-control" value="{{ $Settings->mobile_password }}">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="mobile_senderNumber" class="form-label">{{ __('SMS API Sender Number') }}</label>
                            <input type="text" name="mobile_senderNumber" class="form-control" value="{{ $Settings->mobile_senderNumber }}">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="invoice_sms" class="form-label">{{ __('SMS Text') }}</label>
                            <input type="text" name="invoice_sms" class="form-control" value="{{ $Settings->invoice_sms }}">
                        </div>
                        <div class="mb-3">
                            <label for="admin_email" class="form-label">{{ __('Admin Email') }}</label>
                            <input type="email" name="admin_email" class="form-control" value="{{ $Settings->admin_email }}">
                        </div>
                        <div class="mb-3">
                            <label for="admin_mobilenumber" class="form-label">{{ __('Admin Mobile Number') }}</label>
                            <input type="text" name="admin_mobilenumber" class="form-control" value="{{ $Settings->admin_mobilenumber }}">
                        </div>
                        <div class="mb-3 col-6">
                            <img src="{{ asset('images/' . $Settings->logo_address) }}" alt="" class="w-25">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="logo_address" class="form-label">{{ __('Logo') }}</label>
                            <input type="file" name="logo_address" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label for="company_name" class="form-label">{{ __('Company Name') }}</label>
                            <input type="text" name="company_name" class="form-control" value="{{ $Settings->company_name }}">
                        </div>
                        <div class="mb-3">
                            <label for="compny_address" class="form-label">{{ __('Company Address') }}</label>
                            <input type="text" name="compny_address" class="form-control" value="{{ $Settings->compny_address }}">
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary" value="{{ __('Submit') }}">
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <!-- end row -->

    </div> <!-- end container -->

</div>
@endsection
