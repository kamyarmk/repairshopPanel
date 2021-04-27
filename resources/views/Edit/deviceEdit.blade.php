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
        <div class="row">
            <div class="col-md-12">
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
        <form role="form" method="POST" action="{{ route('deviceList.update', $Device->id) }}">
        @method('PUT')
        @csrf
            <div class="row justify-content-md-evenly align-items-center">
                <div class="col-md-5">
                    <div class="card mb-4 text-right">
                        <div class="card-header">{{ __('Condition')}}</div>
                        <div class="card-body">
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
                    <div class="card text-right">
                        <div class="card-header">{{ __('info') }}</div>
                        <div class="card-body">
                            <div class="card-text mb-3"><strong>{{ __('User')}} : </strong>
                                
                                <user-autocomplete
                                user={{ $User->name }}
                                user-id={{ $User->id }}
                                ></user-autocomplete>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Device')}} : </strong>
                                <select class="form-select" name="Device">
                                    @foreach ($DeviceType->all() as $device)
                                        @if($device->id == $Device->devices->id)
                                            <option value="{{ $device->id }}" selected>{{$device->device_name}}</option>
                                        @else
                                            <option value="{{ $device->id }}">{{$device->device_name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Device Model')}} : </strong>
                                <select class="form-select" name="DeviceType">
                                    <option value="Mobile">{{ __('Mobile') }}</option>
                                    <option value="Tablet">{{ __('Tablet') }}</option>
                                    <option value="Laptop">{{ __('Laptop') }}</option>
                                    <option value="Other">{{ __('Other') }}</option>
                                    <option value="{{ $Device->DeviceType }}" selected>{{ $Device->DeviceType }}</option>
                                </select>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Device Color')}} : </strong>
                                <input type="text" class="form-control" value="{{ $Device->DeviceColor }}" name="DeviceColor">
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('IMEI')}} : </strong>
                                <input type="text" class="form-control" value="{{ $Device->IMEI }}" name="IMEI">
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Device Problems')}} : </strong>
                                <textarea class="form-control" rows="5" name="Problems">{{ $Device->Problems }}</textarea>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Decription')}} : </strong>
                                <textarea class="form-control" rows="5" name="DeviceDescription">{{ $Device->DeviceDescription }}</textarea>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Password')}} : </strong>
                                <input type="text" class="form-control" value="{{ $Device->password }}" name="password">
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Device Accessories')}} : </strong>
                                <textarea class="form-control" rows="1" name="DeviceAccessories">{{ $Device->DeviceAccessories }}</textarea>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Device Tips')}} : </strong>
                                <textarea class="form-control" rows="5" name="Tips">{{ $Device->Tips }}</textarea>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Budget')}} : </strong>
                                <input type="text" class="form-control" value="{{ $Device->MaxBudget }}" name="MaxBudget">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 card-box m-b-20 mt-5">
                        <div class="row mb-4 card">
                            <div class="card-header text-right">{{ __('QC Testing')}}</div>
                            <div class="card-body">
                                <form class="form" action="">
                                    <div class="flex-row d-flex justify-content-center align-items-center align-self-stretch flex-wrap">
                                        @foreach($Device->devices->device__configs as $deviceConf)
                                            <div class="col-md-6">
                                                <div class="form-check form-switch row">
                                                    <input type="checkbox" class="form-check-input col-md-6" id="checkbox-{{ $deviceConf->name}}">
                                                    <label for="checkbox-{{ $deviceConf->name}}" class="form-check-label col-md-6">{{ $deviceConf->name}}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row mb-4 card">
                            <div class="card-header text-right">{{ __('Seccond QC')}}</div>
                            <div class="card-body">
                                <form class="form" action="">
                                    <div class="flex-row d-flex justify-content-center align-items-center align-self-stretch flex-wrap">
                                        @foreach($Device->devices->device__configs as $deviceConf)
                                            <div class="col-md-6">
                                                <div class="form-check form-switch row">
                                                    <input type="checkbox" class="form-check-input col-md-6" id="checkbox-{{ $deviceConf->name}}">
                                                    <label for="checkbox-{{ $deviceConf->name}}" class="form-check-label col-md-6">{{ $deviceConf->name}}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex justify-content-center">
                            <div class="col-md-6">
                                <input type="submit" class="form-control btn btn-primary" value="{{ __('Submit') }}">
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('registerDevice.print', $Device->id) }}" class="btn btn-orangeSection w-100">{{ __('Lable Print') }}</a>
                            </div>
                        </div>
                    
                </div>

            </div>
            <!-- end row -->
        </form>
    </div> <!-- end container -->

</div>
@endsection
