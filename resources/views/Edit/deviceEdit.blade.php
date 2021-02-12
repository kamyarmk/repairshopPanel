@extends('layouts.panelStruc')

@section('content')
<div class="wrapper">
    <div class="container card p-4">

        <div class="row justify-content-md-center mb-5">
            <div class="col-sm-8">
                <h4 class="header-title m-t-0 mb-4 text-right"><i class="fas fa-laptop-medical ml-2"></i>{{ __('Edit Device')}} / {{ $Device->IMEI }}</h4>
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
                        <label class="col-sm-2 col-form-label">{{ __('Condition')}}</label>
                        <div class="col-sm-10">
                            <select name="Condition" class="form-select" >
                                <option value="Open" {{ $Device->Condition == 'Open' ? 'selected' : '' }} >{{ __('Device In Queue') }}</option>
                                <option value="Repairing" {{ $Device->Condition == 'Repairing' ? 'selected' : '' }} >{{ __('Under Repair') }}</option>
                                <option value="Testing" {{ $Device->Condition == 'Testing' ? 'selected' : '' }} >{{ __('Under Test') }}</option>
                                <option value="Repaired" {{ $Device->Condition == 'Repaired' ? 'selected' : '' }} >{{ __('Repaired') }}</option>
                                <option value="Delivered" {{ $Device->Condition == 'Delivered' ? 'selected' : '' }} >{{ __('Delivered') }}</option>
                                <option value="Delayed" {{ $Device->Condition == 'Delayed' ? 'selected' : '' }} >{{ __('Late Delivery') }}</option>
                                <option value="Unsuccessful" {{ $Device->Condition == 'Unsuccessful' ? 'selected' : '' }} >{{ __('Delivery Problem') }}</option>
                                <option value="Refund" {{ $Device->Condition == 'Refund' ? 'selected' : '' }} >{{ __('Refund') }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 col-form-label">{{ __('User')}}</label>
                        <div class="col-md-10 input-group m-t-10">
                            <input name="user" type="text" class="form-control" value="{{ $Device->userId }}">
                            <button type="button" class="btn btn-primary"  style="overflow: hidden; position: relative;">{{ __('Add')}} </button>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">{{ __('Device')}}</label>
                        <div class="col-sm-10">
                            <input name="Device" type="text" class="form-control" value="{{ $Device->Device }}">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">{{ __('Device Model')}}</label>
                        <div class="col-sm-10">
                            <input name="DeviceType" type="text" class="form-control" value="{{ $Device->DeviceType }}">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">{{ __('Device Color')}}</label>
                        <div class="col-sm-10">
                            <input name="DeviceColor" type="text" class="form-control" value="{{ $Device->DeviceColor }}">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 col-form-label">{{ __('IMEI')}}</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{ $Device->IMEI }}" name="IMEI">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 col-form-label">{{ __('Device Problems')}}</label>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="5" name="Problems">{{ $Device->Problems }}</textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 col-form-label">{{ __('Device Decription')}}</label>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="5" name="DeviceDescription">{{ $Device->DeviceDescription }}</textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 col-form-label">{{ __('Password') }}</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{ $Device->password }}" name="password">
                        </div>
                    </div>
                    
                    <div class="row mb-4">
                        <label class="col-md-2 col-form-label">{{ __('Device Accessories')}}</label>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="5" name="DeviceAccessories">{{ $Device->DeviceAccessories }}</textarea>
                        </div>
                    </div>            
                    <div class="row mb-4">
                        <label class="col-md-2 col-form-label">{{ __('Device Tips')}}</label>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="5" name="Tips">{{ $Device->Tips }}</textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 col-form-label">{{ __('Budget') }}</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{ $Device->MaxBudget }}" name="MaxBudget">
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
