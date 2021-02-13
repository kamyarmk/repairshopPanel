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
            <div class="col-md-4 card text-white bg-primary text-right">
                <div class="card-header">{{ __('info') }}</div>
                <div class="card-body">
                    <div class="card-text mb-3"><strong>{{ __('User')}} : </strong>{{ $Device->userId }}</div>
                    <div class="dropdown-divider"></div>
                    <div class="card-text mb-3"><strong>{{ __('Device')}} : </strong>{{ $Device->Device }}</div>
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
            <div class="col-md-5 card-box m-b-20">
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
                        <label class="col-sm-4 col-form-label">{{ __('Condition')}}</label>
                        <div class="col-sm-8">
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
                        <label class="col-sm-4 col-form-label">{{ __('QC Testing')}}</label>
                        <div class="col-sm-8">
                            <textarea name="qCTesting" class="form-control" cols="15" rows="5" ></textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-4 col-form-label">{{ __('Notes')}}</label>
                        <div class="col-sm-8">
                            <textarea name="qCTesting" class="form-control" cols="15" rows="5" ></textarea>
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
