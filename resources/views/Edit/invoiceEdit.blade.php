@extends('layouts.panelStruc')

@section('content')
<div class="wrapper">
    <div class="container card p-4">

        <div class="row justify-content-md-center mb-5">
            <div class="col-sm-6">
                <h4 class="header-title m-t-0 mb-4 text-right"><i class="fas fa-laptop-medical ml-2"></i>{{ __('Invoice')}} / {{ $Invoice->id }}</h4>
            </div>
            <div class="col-sm-6">
                <h4 class="header-title m-t-0 mb-4 text-left btn
                                                    @if($Invoice->Condition == 'Open')
                                                        btn-outline-orangeSection
                                                    @endif
                                                    @if($Invoice->Condition == 'Repairing')
                                                        btn-outline-purpleSection
                                                    @endif
                                                    @if($Invoice->Condition == 'Testing')
                                                        btn-outline-warning
                                                    @endif
                                                    @if($Invoice->Condition == 'Repaired')
                                                        btn-outline-success
                                                    @endif
                                                    @if($Invoice->Condition == 'Delivered')
                                                        btn-success
                                                    @endif
                                                    @if($Invoice->Condition == 'Delayed')
                                                        btn-orangeSection
                                                    @endif
                                                    @if($Invoice->Condition == 'Unsuccessful')
                                                        btn-danger
                                                    @endif
                                                    @if($Invoice->Condition == 'Refund')
                                                        btn-section
                                                    @endif
                ">{{ $Invoice->Condition }}</h4>
            </div>
            <div class="dropdown-divider"></div>
        </div>


        <div class="row justify-content-md-center align-items-center">
            <div class="col-md-12">
                <!-- General Infos -->
                <div class="row mb-3 d-flex justify-content-evenly">
                    <div class="col-md-5 card text-white bg-primary text-right">
                        <div class="card-header">{{ __('info') }}</div>
                        <div class="card-body">
                            <div class="card-text mb-3"><strong>{{ __('User')}} : </strong>{{ $Invoice->users->name }}</div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Phone Number')}} : </strong>{{ $Invoice->users->phone_number }}</div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Email')}} : </strong>{{ $Invoice->users->email }}</div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('User')}} : </strong>{{ $Invoice->users->name }}</div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('IMEI')}} : </strong>{{ $Invoice->registered_devices->IMEI }}</div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Device')}} : </strong>{{ $Invoice->registered_devices->device_name }}</div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Device Model')}} : </strong>{{ $Invoice->registered_devices->DeviceType }}</div>
                        </div>
                    </div>
                    <div class="col-md-5 card text-white bg-primary text-right">
                        <div class="card-header">{{ __('info') }}</div>
                        <div class="card-body">
                            <div class="card-text mb-3"><strong>{{ __('Device Color')}} : </strong>{{ $Invoice->registered_devices->DeviceColor }}</div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Device Problems')}} : </strong>{{ $Invoice->registered_devices->Problems }}</div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Decription')}} : </strong>{{ $Invoice->registered_devices->DeviceDescription }}</div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Password')}} : </strong>{{ $Invoice->registered_devices->password }}</div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Device Accessories')}} : </strong>{{ $Invoice->registered_devices->DeviceAccessories }}</div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Device Tips')}} : </strong>{{ $Invoice->registered_devices->Tips }}</div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong>{{ __('Budget')}} : </strong>{{ $Invoice->registered_devices->MaxBudget }}</div>
                        </div>
                    </div>
                </div>

                <!-- QC Reports -->
                <div class="row mb-3 d-flex justify-content-evenly">
                    <div class="col-md-5 card text-white bg-orangeSection text-right">
                        <div class="card-header">{{ __('QC Testing')}}</div>
                        <div class="card-body">
                            <div class="card-text mb-3">{{ $Invoice->registered_devices->FirstQC }}</div>
                        </div>
                    </div>
                    <div class="col-md-5 card text-white bg-orangeSection text-right">
                        <div class="card-header">{{ __('Seccond Testing')}}</div>
                        <div class="card-body">
                            <div class="card-text mb-3">{{ $Invoice->registered_devices->SeccondQC }}</div>
                        </div>
                    </div>
                </div>

                <!-- Invoice Detailes -->
                <div class="row">
                    <div class="col-md-12 card-box">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('invoice.update', $Invoice->id) }}">
                            @method('PUT')
                            @csrf
                            <div class="row d-flex justify-content-evenly">
                                <div class="col-md-5">
                                    <div class="row mb-4">
                                        <label class="col-form-label text-right">{{ __('Condition')}}</label>
                                        <select name="Condition" class="form-select" >
                                            <option value="Open" {{ $Invoice->Condition == 'Open' ? 'selected' : '' }} >{{ __('Invoice In Queue') }}</option>
                                            <option value="Repairing" {{ $Invoice->Condition == 'Repairing' ? 'selected' : '' }} >{{ __('Under Repair') }}</option>
                                            <option value="Testing" {{ $Invoice->Condition == 'Testing' ? 'selected' : '' }} >{{ __('Under Test') }}</option>
                                            <option value="Repaired" {{ $Invoice->Condition == 'Repaired' ? 'selected' : '' }} >{{ __('Repaired') }}</option>
                                            <option value="Delivered" {{ $Invoice->Condition == 'Delivered' ? 'selected' : '' }} >{{ __('Delivered') }}</option>
                                            <option value="Delayed" {{ $Invoice->Condition == 'Delayed' ? 'selected' : '' }} >{{ __('Late Delivery') }}</option>
                                            <option value="Unsuccessful" {{ $Invoice->Condition == 'Unsuccessful' ? 'selected' : '' }} >{{ __('Delivery Problem') }}</option>
                                            <option value="Refund" {{ $Invoice->Condition == 'Refund' ? 'selected' : '' }} >{{ __('Refund') }}</option>
                                        </select>
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-form-label text-right">{{ __('Notes')}}</label>
                                        <textarea name="SqCTesting" class="form-control" cols="15" rows="5" >{{ $Invoice->Notes }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row mb-4">
                                        <label class="col-form-label text-right">{{ __('Price')}}</label>
                                        <input type="text" class="form-control" value="{{ $Invoice->Price }}">
                                    </div>
                                    <div class="row mb-4 justify-content-evenly">
                                        <div class="col-md-4">
                                            <a href="{{route('invoice.print', $Invoice->id)}}" target="_Blank" class="btn btn-orangeSection col-md-12">{{ __('Print') }}</a>
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-purpleSection col-md-12">{{ __('Send Invoice') }}</button>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="{{route('invoice.print', $Invoice->id)}}" target="_Blank" class="btn btn-section col-md-12">{{ __('Send SMS') }}</a>
                                        </div>
                                    </div>        
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <input type="submit" class="form-control btn btn-primary" value="{{ __('Submit') }}">
                                        </div>
                                    </div>        
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- end row -->

    </div> <!-- end container -->

</div>
@endsection
