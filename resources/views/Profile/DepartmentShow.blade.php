@extends('layouts.panelStruc')

@section('content')
<div class="wrapper">
    <div class="container card p-4">

        <div class="row justify-content-md-center mb-5">
            <div class="col-sm-8">
                <h4 class="header-title m-t-0 mb-4 text-right"><i class="fas fa-user-edit ml-2"></i>{{ __('Edit Department')}} / {{$Department->department_name}}</h4>
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
                <form role="form" method="POST" action="{{ route('department.update', $Department->id) }}">
                    @method('PUT')
                    @csrf
                    <div class="row text-right">
                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input type="text" name="name" class="form-control" value="{{ $Department->department_name }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Level') }}</label>
                            <input type="email" name="email" class="form-control" value="{{ $Department->department_level }}">
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary" value="{{ __('Submit') }}">
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <!-- end row -->

    </div> <!-- end container -->

</div>
@endsection
