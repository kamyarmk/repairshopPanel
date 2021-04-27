@extends('layouts.panelStruc')

@section('content')
<div class="wrapper">
    <div class="container card p-4">

        <div class="row justify-content-md-center mb-5">
            <div class="col-sm-12">
                <h4 class="header-title m-t-0 mb-4 text-right"><i class="fas fa-laptop-medical ml-2"></i>{{ __('Register Device')}}</h4>
                <div class="dropdown-divider"></div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-12 d-flex justify-content-md-center">
                <button type="button" class="btn btn-primary text-decoration-none w-25 ml-2" data-bs-toggle="modal" data-bs-target="#exampleModal"  style="overflow: hidden; position: relative;">{{ __('Add New User')}} </button>
                <button type="button" class="btn btn-primary text-decoration-none w-25 mr-2" data-bs-toggle="modal" data-bs-target="#deviceModal"  style="overflow: hidden; position: relative;">{{ __('Add New Device Type')}} </button>
            </div>
        </div>


        <div class="row justify-content-md-center align-items-center">
            <div class="col-md-12">
                <!-- Error Area -->
                <div class="row">
                    <div class="col-md-12 text-right fw-bolder">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                <!-- Device Registration Area -->
                <form class="form-horizontal" role="form" method="POST">
                    @csrf
                    <div class="row text-right fw-bold text-decoration-underline">   
                        <div class="col-md-6 m-b-20">
                            <div class="row mb-4">
                                    <label class=" col-form-label">{{ __('User')}}</label>
                                    <div class=" input-group m-t-10 d-flex">
                                        <user-autocomplete></user-autocomplete>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-form-label">{{ __('Device')}}</label>
                                    <div class="">
                                        <select class="form-select" name="Device">
                                            @foreach ($Devices->all() as $device)
                                            <option value="{{ $device->id }}">{{$device->device_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-form-label">{{ __('Device Model')}}</label>
                                    <div class="">
                                        <select class="form-select" name="DeviceType">
                                            <option value="Mobile">{{ __('Mobile') }}</option>
                                            <option value="Tablet">{{ __('Tablet') }}</option>
                                            <option value="Laptop">{{ __('Laptop') }}</option>
                                            <option value="Other">{{ __('Other') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-form-label">{{ __('Device Color')}}</label>
                                    <div class="">
                                        <input type="text" class="form-control" value="{{ old('DeviceColor') }}" name="DeviceColor">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class=" col-form-label">{{ __('IMEI')}}</label>
                                    <div class="">
                                        <input type="text" class="form-control" value="{{ old('IMEI') }}" name="IMEI">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class=" col-form-label">{{ __('Device Problems')}}</label>
                                    <div class="">
                                        <textarea class="form-control" rows="5" name="Problems">{{ old('Problems') }}</textarea>
                                    </div>
                                </div>
                        </div>    
                        <div class="col-md-6 m-b-20">
                                
                                <div class="row mb-4">
                                    <label class=" col-form-label">{{ __('Device Decription')}}</label>
                                    <div class="">
                                        <textarea class="form-control" rows="5" name="DeviceDescription">{{ old('DeviceDescription') }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class=" col-form-label">{{ __('Password') }}</label>
                                    <div class="">
                                        <input type="text" class="form-control" value="{{ old('password') }}" name="password">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                            <label class="custom-control-label" for="customSwitch1">{{ __('Device Been Accepted Without Code') }}</label>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="row mb-4">
                                    <label class=" col-form-label">{{ __('Device Accessories')}}</label>
                                    <div class="">
                                        <textarea class="form-control" rows="1" name="DeviceAccessories">{{ old('Device Accessories') }}</textarea>
                                    </div>
                                </div>            
                                <div class="row mb-4">
                                    <label class=" col-form-label">{{ __('Device Tips')}}</label>
                                    <div class="">
                                        <textarea class="form-control" rows="5" name="Tips">{{ old('Device Tips') }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class=" col-form-label">{{ __('Budget') }}</label>
                                    <div class="">
                                        <input type="text" class="form-control" value="{{ old('Budget') }}" name="MaxBudget">
                                    </div>
                                </div>
                                <div class="row mb-4 d-flex justify-content-center">
                                    <div class="col-md-6">
                                        <input type="submit" class="form-control btn btn-primary" value="{{ __('Submit') }}">
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </form>
            </div>
            

        </div>
        <!-- end row -->

    </div> <!-- end container -->

</div>

<!-- User Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" ref="exampleModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ __('Register New User')}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <user-create 
        user-title="{{ __('User')}}"
        phone-title="{{ __('Phone Number')}}"
        email-title="{{ __('Email')}}"
        send-title="{{ __('Submit') }}"
        close-title="{{ __('Close') }}"
        company-name="{{ __('Company Name') }}"
        address-name="{{ __('Address') }}"
      >
        @csrf
      </user-create>
    </div>
  </div>
</div>

<div class="modal fade" id="deviceModal" tabindex="-1" aria-labelledby="deviceModalLabel" aria-hidden="true" ref="deviceModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deviceModalLabel">{{ __('Register New Device')}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <quick-devicereg
        device-name="{{ __('Device Name') }}"
        device-type="{{ __('Device Type') }}"
        device-config="{{ __('Device Config') }}"
        name="{{ __('Name') }}"
        destroy="{{ __('Destroy') }}"
        send-title="{{ __('Submit') }}"
        close-title="{{ __('Close') }}"
      >
        @csrf
      </quick-devicereg>
    </div>
  </div>
</div>
@endsection
