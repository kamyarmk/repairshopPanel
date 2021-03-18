@extends('layouts.panelStruc')

@section('content')
<div class="wrapper">
    <div class="container card p-4">
        <div class="row mb-4">
            <div class="col-md-12">
                <h4 class="header-title mt-0 mb-3 text-right"><i class="fas fa-tablet ml-3"></i>{{ __('Device') }}</h4>
                <div class="dropdown-divider"></div>
            </div>
        </div>
            <search-devices
                search-item="devicevuew"
                search-text="{{ __('search')}}"
                prop1="device_name"
                prop1-name="{{ __('Device')}}"
                prop2="device_type"
                prop2-name="{{ __('Device Type') }}"
                edit-text="{{ __('Edit') }}"
                submit-text="{{ __('Remove') }}"
            ></search-devices>
    </div>
</div>
@endsection
