@extends('layouts.panelStruc')

@section('content')
<div class="wrapper">
    <div class="container ">

        <div class="row justify-content-md-center">
            <div class="col-sm-8">
                <h4 class="header-title m-t-0 m-b-40">{{ __('Device')}}</h4>
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
                    <div class="form-group">
                        <label class="col-md-2 col-form-label">{{ __('Device')}}</label>
                        <div class="col-md-10 input-group m-t-10">
                            <input name="DeviceName" type="text" class="form-control" value="{{ old('DeviceName') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 col-form-label">{{ __('Device Type')}}</label>
                        <div class="col-md-10 input-group m-t-10">
                            <input name="DeviceType" type="text" class="form-control" value="{{ old('DeviceType') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <input type="submit" class="form-control btn btn-primary" value="{{ __('Submit') }}">
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <!-- end row -->

        <div class="row card-box justify-content-md-center align-items-center">
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-hover mails m-0 table table-actions-bar">
                        <thead>
                            <tr>
                                <th>
                                    
                                </th>
                                <th>
                                    
                                </th>
                                <th>{{ __('Device Type') }}</th>
                                
                                <th>{{ __('Device Name') }}</th>
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
                            @foreach($Devices->all() as $device)
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
                                    {{$device->DeviceType}}
                                </td>
                                <td>
                                    {{$device->DeviceName}}
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

    </div> <!-- end container -->

</div>
@endsection
