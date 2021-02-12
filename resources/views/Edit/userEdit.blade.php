@extends('layouts.panelStruc')

@section('content')
<div class="wrapper">
    <div class="container card p-4">

        <div class="row justify-content-md-center mb-5">
            <div class="col-sm-8">
                <h4 class="header-title m-t-0 mb-4 text-right"><i class="fas fa-laptop-medical ml-2"></i>{{ __('Register Device')}}</h4>
                <div class="dropdown-divider"></div>
            </div>
        </div>


        <div class="row justify-content-md-center align-items-center">
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
                <form class="form-horizontal" role="form" method="POST">
                    @csrf
                    <div class="row mb-4">
                        <label class="col-md-2 col-form-label">{{ __('User')}}</label>
                        <div class="col-md-10 input-group m-t-10">
                            <input name="user" type="text" class="form-control" value="{{ old('user') }}">
                            <button type="button" class="btn btn-primary"  style="overflow: hidden; position: relative;">{{ __('Add')}} </button>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">{{ __('Device')}}</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="Device">
                                @foreach ($Devices->all() as $device)
                                <option value="{{ $device->DeviceName }}">{{$device->DeviceName}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">{{ __('Device Model')}}</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="DeviceType">
                                <option value="1">1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">{{ __('Device Color')}}</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="DeviceColor">
                                <option value="1">1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 col-form-label">{{ __('IMEI')}}</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{ old('IMEI') }}" name="IMEI">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 col-form-label">{{ __('Device Problems')}}</label>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="5" name="Problems">{{ old('Problems') }}</textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 col-form-label">{{ __('Device Decription')}}</label>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="5" name="DeviceDescription">{{ old('DeviceDescription') }}</textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 col-form-label">{{ __('Password') }}</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{ old('password') }}" name="password">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                <label class="custom-control-label" for="customSwitch1">{{ __('Device Been Accepted Without Code') }}</label>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="row mb-4">
                        <label class="col-md-2 col-form-label">{{ __('Device Accessories')}}</label>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="5" name="DeviceAccessories">{{ old('Device Accessories') }}</textarea>
                        </div>
                    </div>            
                    <div class="row mb-4">
                        <label class="col-md-2 col-form-label">{{ __('Device Tips')}}</label>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="5" name="Tips">{{ old('Device Tips') }}</textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 col-form-label">{{ __('Budget') }}</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{ old('Budget') }}" name="MaxBudget">
                        </div>
                    </div>
                    <div class="row mb-4 d-flex justify-content-center">
                        <div class="col-md-6">
                            <input type="submit" class="form-control btn btn-primary" value="{{ __('Submit') }}">
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <!-- end row -->

    </div> <!-- end container -->

</div>
@endsection
