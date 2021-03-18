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
            <search-regdev
                search-item="regdevicevue"
                search-text="{{ __('Search') }}"
                prop1="IMEI"
                prop1-name="{{ __('IMEI') }}"
                prop2="Device"
                prop2-name="{{ __('Device') }}"
                prop3="created_at"
                prop3-name="{{ __('Start Date') }}"
                prop4="finished_at"
                prop4-name="{{ __('End Date') }}"
                prop5="Condition"
                prop5-name="{{ __('Condition') }}"
                
                edit-text="{{ __('Edit') }}"
                submit-text="{{ __('Remove') }}"
            ></search-regdev>
    </div>
</div>
@endsection
