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
                        <div class="mb-3 col-6">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input type="text" name="name" class="form-control" value="{{ $User->name }}">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="company_name" class="form-label">{{ __('Company Name') }}</label>
                            <input type="text" name="company_name" class="form-control" value="{{ $User->usersDetails->company_name }}">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input type="email" name="email" class="form-control" value="{{ $User->email }}">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="phone_number" class="form-label">{{ __('Phone Number') }}</label>
                            <input type="text" name="phone_number" class="form-control" value="{{ $User->phone_number }}">
                        </div>
                        <div class="mb-3">
                            <label for="seccond_number" class="form-label">{{ __('Seccond Number') }}</label>
                            <input type="text" name="seccond_number" class="form-control" value="{{ $User->usersDetails->seccond_number }}">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="first_address" class="form-label">{{ __('First Address') }}</label>
                            <textarea class="form-control" placeholder="{{ $User->usersDetails->first_address }}" id="first_address" name="first_address" style="height: 100px">{{ $User->usersDetails->first_address }}</textarea>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="seccond_address" class="form-label">{{ __('Seccond Address') }}</label>
                            <textarea class="form-control" placeholder="{{ $User->usersDetails->seccond_address }}" id="seccond_address" name="seccond_address" style="height: 100px">{{ $User->usersDetails->seccond_address }}</textarea>
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
                            <thead class="text-light">
                                <tr>
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
