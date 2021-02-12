@extends('layouts.panelStruc')

@section('content')
<div class="wrapper">
    <div class="container card p-4">
        <div class="row mb-4">
            <div class="col-md-12">
                <h4 class="header-title mt-0 mb-3 text-right"><i class="fas fa-tablet-alt ml-3"></i>{{ __('Device List') }}</h4>
                <div class="dropdown-divider"></div>
            </div>
        </div>
        <div class="row justify-content-md-center mb-5">
            <div class="col-md-12">
                <form action="" class="row d-flex align-items-center justify-content-center text-right">
                    <div class="col-md-2">
                        <label for="">{{ __('IMEI') }}</label>
                        <input type="text" class="form-control" name="IMEI" value="{{ old('IMEI') }}">
                    </div>
                    <div class="col-md-2">
                        <label for="">{{ __('Device') }}</label>
                        <input type="text" class="form-control" name="Device" value="{{ old('Device') }}">
                    </div>
                    <div class="col-md-2">
                        <label for="">{{ __('Start Date') }}</label>
                        <input type="text" class="form-control" name="created_at" value="{{ old('created_at') }}">
                    </div>
                    <div class="col-md-2">
                        <label for="">{{ __('End Date') }}</label>
                        <input type="text" class="form-control" name="finished_at" value="{{ old('finished_at') }}">
                    </div>
                    <div class="col-md-2">
                        <label for="">{{ __('Condition') }}</label>
                        <select class="form-select" name="Condition" id="form_condition">
                            <option value="">{{ __('Please Select') }}</option>
                            <option value="Open">{{ __('Device In Queue') }}</option>
                            <option value="Repairing">{{ __('Under Repair') }}</option>
                            <option value="Testing">{{ __('Under Test') }}</option>
                            <option value="Repaired">{{ __('Repaired') }}</option>
                            <option value="Delivered">{{ __('Delivered') }}</option>
                            <option value="Delayed">{{ __('Late Delivery') }}</option>
                            <option value="Unsuccessful">{{ __('Delivery Problem') }}</option>
                            <option value="Refund">{{ __('Refund') }}</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for=""></label>
                        <input type="submit" class="form-control btn btn-primary" value="{{ __('Search') }}">
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-12 card-box">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            
                            <div class="table-responsive">
                                <table class="table table-hover mails m-0 table table-actions-bar text-right">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 100px;">
                                                <div class="checkbox checkbox-primary checkbox-single m-r-15">
                                                    <input id="action-checkbox" type="checkbox">
                                                    <label for="action-checkbox"></label>
                                                </div>
                                                <div class="btn-group dropdown">
                                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">{{ __('Action') }}<i class="caret"></i></button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Action</a></li>
                                                        <li><a href="#">Another action</a></li>
                                                        <li><a href="#">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </th>
                                            <th>{{ __('IMEI') }}</th>
                                            <th>{{ __('Device') }}</th>
                                            <th>{{ __('Condition') }}</th>
                                            <th>{{ __('Start Date') }}</th>
                                            <th>
                                                
                                            </th>
                                            <th>
                                                
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($Devices->all() as $device)
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-primary m-r-15">
                                                    <input id="checkbox2" type="checkbox">
                                                    <label for="checkbox2"></label>
                                                </div>
                                            </td>
                                            <td>
                                                {{$device->IMEI}}
                                            </td>
                                            <td>
                                                <a href="#" class="text-muted">{{$device->Device}}</a>
                                            </td>
                                            <td>
                                                <b><a href="" class="text-dark"><b>{{$device->Condition}}</b></a> </b>
                                            </td>
                                            <td>
                                                <b><a href="" class="text-dark"><b>{{$device->created_at}}</b></a> </b>
                                            </td>
                                            <td>
                                                <a href="{{ route('deviceEdit', [ 'DeviceID' => $device->id ]) }}" class="btn btn-success">
                                                    {{ __('Edit') }}
                                                </a>
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-danger">
                                                    {{ __('Remove') }}
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
