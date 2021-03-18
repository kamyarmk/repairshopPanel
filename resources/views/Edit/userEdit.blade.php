@extends('layouts.panelStruc')

@section('content')
<div class="wrapper">
    <div class="container card p-4">

        <div class="row justify-content-md-center mb-5">
            <div class="col-sm-8">
                <h4 class="header-title m-t-0 mb-4 text-right"><i class="fas fa-user-edit ml-2"></i>{{ __('Edit User')}} / {{$User->name}}</h4>
                <div class="dropdown-divider"></div>
            </div>
        </div>


        <div class="row justify-content-md-center align-items-center mb-5">
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
                <form role="form" method="POST" action="{{ route('userList.update', $User->id) }}">
                    @method('PUT')
                    @csrf
                    <div class="row text-right">
                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input type="text" name="name" class="form-control" value="{{ $User->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input type="email" name="email" class="form-control" value="{{ $User->email }}">
                        </div>
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">{{ __('Phone Number') }}</label>
                            <input type="text" name="phone_number" class="form-control" value="{{ $User->phone_number }}">
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary" value="{{ __('Submit') }}">
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <!-- end row -->

        <div class="row justify-content-md-center mb-5">
            <div class="col-sm-8">
                <h4 class="header-title m-t-0 mb-4 text-right"><i class="fas fa-laptop ml-2"></i>{{ __('Device List')}}</h4>
                <div class="dropdown-divider"></div>
            </div>
        </div>

        <div class="row justify-content-md-center">
            <div class="col-sm-8">
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
                                        <a href="{{ route('deviceList.show', [ 'device' => $device->id ]) }}" class="btn btn-success">
                                            {{ __('Edit') }}
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('deviceList.destroy', [ 'device' => $device->id ]) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <input type="submit" value="{{ __('Remove') }}" class="btn btn-danger">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- end container -->

</div>
@endsection
