@extends('layouts.panelStruc')

@section('content')
<div class="wrapper">
    <div class="container card p-4">
        
        <div class="row mb-3">
            <div class="col-md-12">
                <h4 class="header-title mt-0 mb-3 text-right"><i class="fas fa-users ml-3"></i>{{ __('Users') }}</h4>
                <div class="dropdown-divider"></div>
            </div>
        </div>
        <form action="" class="row d-flex align-items-center justify-content-center text-right mb-5">
            <div class="col-md-3">
                <label for="">{{ __('Name') }}</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="">{{ __('E-Mail Address') }}</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="">{{ __('Phone Number') }}</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-md-3">
                <label for=""></label>
                <input type="submit" class="form-control btn btn-primary" value="{{ __('Search') }}">
            </div>
        </form>
        
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
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('E-Mail Address') }}</th>
                                            <th>{{ __('Phone Number') }}</th>
                                            <th>
                                                
                                            </th>
                                            <th>
                                                
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($Users->all() as $user)
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-primary m-r-15">
                                                    <input id="checkbox2" type="checkbox">
                                                    <label for="checkbox2"></label>
                                                </div>
                                            </td>
                                            <td>
                                                {{$user->name}}
                                            </td>
                                            <td>
                                                <a href="mailto:{{$user->email}}" class="text-muted">{{$user->email}}</a>
                                            </td>
                                            <td>
                                                <b><a href="" class="text-dark"><b>{{$user->created_at}}</b></a> </b>
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-success">
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