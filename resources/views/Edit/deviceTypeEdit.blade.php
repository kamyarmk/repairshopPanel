@extends('layouts.panelStruc')

@section('content')
<div class="wrapper">
    <div class="container card p-4">

        <div class="row justify-content-md-center mb-5">
            <div class="col-sm-6">
                <h4 class="header-title m-t-0 mb-4 text-right"><i class="fas fa-laptop-medical ml-2"></i>{{ __('Edit Device Type')}} / {{ $Device->device_name }}</h4>
            </div>
            <div class="col-sm-6">
                <h4 class="header-title m-t-0 mb-4 text-left">{{ $Device->device_type }}</h4>
            </div>
            <div class="dropdown-divider"></div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row justify-content-evenly align-items-top">
            <div class="col-md-5 card text-right">
                <div class="card-header text-right">{{ __('Device Configs') }}</div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($Device->device__configs->all() as $deviceConf)
                            <li class="list-group-item">
                                <form action="" class="row" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="col-md-6">
                                        <div class="row">
                                            <label
                                                class="col-md-3"
                                            >
                                                {{ __('Name') }}
                                            </label>
                                            <input 
                                                type="text" 
                                                placeholder="{{ __('Name') }}" 
                                                value="{{ $deviceConf->name }}"
                                                class="form-control col-md-9"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row justify-content-evenly">
                                            <button 
                                                type="submit"
                                                class="btn btn-success col-5"
                                            >
                                                {{ __('Submit') }}
                                            </button>
                                            <button 
                                                href="#"
                                                class="btn btn-danger col-5"
                                            >
                                                {{ __('Destroy') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        @endforeach
                        <li class="list-group-item">
                            <form action="" class="row" method="POST">
                                @csrf
                                <div class="col-md-6">
                                    <div class="row">
                                        <label
                                            class="col-md-3"
                                        >
                                            {{ __('Name') }}
                                        </label>
                                        <input 
                                            type="text" 
                                            placeholder="{{ __('Name') }}" 
                                            class="form-control col-md-9"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row justify-content-center">
                                        <button 
                                            type="submit"
                                            class="btn btn-success col-md-6"
                                        >
                                            {{ __('Submit') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ul>
                    
                </div>
            </div>
            <div class="col-md-5 card-box m-b-20">
                <div class="card-header text-right">{{ __('Registered Devices') }}</div>
                <div class="card-body">
                    <table class="table table-hover mails m-0 table table-actions-bar text-right">
                        <thead>
                            <tr>
                                <th>{{ __('IMEI') }}</th>
                                <th>{{ __('Condition') }}</th>
                                <th>
                                    
                                </th>
                                <th>
                                    
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($Device->registered_devices->all() as $device)
                            <tr>
                                <td>
                                    {{$device->IMEI}}
                                </td>
                                <td>
                                    <b><a href="" class="btn
                                        @if($device->Condition == 'Open')
                                            btn-outline-orangeSection
                                        @endif
                                        @if($device->Condition == 'Repairing')
                                            btn-outline-purpleSection
                                        @endif
                                        @if($device->Condition == 'Testing')
                                            btn-outline-warning
                                        @endif
                                        @if($device->Condition == 'Repaired')
                                            btn-outline-success
                                        @endif
                                        @if($device->Condition == 'Delivered')
                                            btn-success
                                        @endif
                                        @if($device->Condition == 'Delayed')
                                            btn-orangeSection
                                        @endif
                                        @if($device->Condition == 'Unsuccessful')
                                            btn-danger
                                        @endif
                                        @if($device->Condition == 'Refund')
                                            btn-section
                                        @endif
                                    "><b>{{$device->Condition}}</b></a> </b>
                                </td>
                                <td>
                                    <a href="{{ route('deviceList.show', [ 'device' => $device->id ]) }}" class="btn btn-primary">
                                        {{ __('View') }}
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- end row -->

    </div> <!-- end container -->

</div>
@endsection
