@extends('layouts.panelStruc')

@section('content')
<div class="wrapper">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10">
                <form action="" class="form-row align-item-center">
                    <div class="form-group col-md-2 pt-4">
                        <input type="submit" class="form-control btn btn-primary" value="{{ __('Search') }}">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">{{ __('Condition') }}</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">{{ __('End Date') }}</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">{{ __('Start Date') }}</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">{{ __('Device') }}</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">{{ __('IMEI') }}</label>
                        <input type="text" class="form-control">
                    </div>
                    
                </form>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-10 card-box">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <h4 class="m-t-0">{{ __('Device List') }}</h4>
                            <div class="table-responsive">
                                <table class="table table-hover mails m-0 table table-actions-bar">
                                    <thead>
                                        <tr>
                                            <th>
                                                
                                            </th>
                                            <th>
                                                
                                            </th>
                                            <th>{{ __('Start Date') }}</th>
                                            <th>{{ __('Condition') }}</th>
                                            <th>{{ __('Device') }}</th>
                                            
                                            <th>{{ __('IMEI') }}</th>
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
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($Devices->all() as $device)
                                        <tr>
                                            <td>
                                                <a href="" class="btn btn-danger">
                                                    {{ __('Remove') }}
                                                </a>
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-success">
                                                    {{ __('Edit') }}
                                                </a>
                                            </td>
                                            <td>
                                                <b><a href="" class="text-dark"><b>{{$device->created_at}}</b></a> </b>
                                            </td>
                                            
                                            <td>
                                                <b><a href="" class="text-dark"><b>{{$device->Condition}}</b></a> </b>
                                            </td>

                                            <td>
                                                <a href="#" class="text-muted">{{$device->Device}}</a>
                                            </td>

                                            <td>
                                                {{$device->IMEI}}
                                            </td>

                                            <td>
                                                <div class="checkbox checkbox-primary m-r-15">
                                                    <input id="checkbox2" type="checkbox">
                                                    <label for="checkbox2"></label>
                                                </div>
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
