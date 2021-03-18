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
                            <div class="card-text mb-3"><strong>{{ __('User')}} : </strong>{{ $User->name }}</div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Device')}} : </strong>{{ $Device->devices->device_name }}</div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Device Model')}} : </strong>{{ $Device->DeviceType }}</div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Device Color')}} : </strong>{{ $Device->DeviceColor }}</div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('IMEI')}} : </strong>{{ $Device->IMEI }}</div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Device Problems')}} : </strong>{{ $Device->Problems }}</div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Decription')}} : </strong>{{ $Device->DeviceDescription }}</div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Password')}} : </strong>{{ $Device->password }}</div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Device Accessories')}} : </strong>{{ $Device->DeviceAccessories }}</div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Device Tips')}} : </strong>{{ $Device->Tips }}</div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Budget')}} : </strong>{{ $Device->MaxBudget }}</div>
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
                        </div>
                    
                </div>

            </div>
            <!-- end row -->
        </form>
    </div> <!-- end container -->

</div>
@endsection
