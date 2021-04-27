@extends('layouts.panelStruc')

@section('content')
<div class="wrapper">
    <div class="container card p-4">
        
        <div class="row mb-3">
            <div class="col-md-12">
                <h4 class="header-title mt-0 mb-3 text-right"><i class="fas fa-receipt ml-3"></i>{{ __('Invoices') }}</h4>
                <div class="dropdown-divider"></div>
            </div>
        </div>
        <search-invoice
                search-item="invoicesvue"
                search-text="{{ __('Search') }}"
                prop1="user_name"
                prop1-name="{{ __('User') }}"
                prop2="device_imei"
                prop2-name="{{ __('IMEI') }}"
                prop3="created_at"
                prop3-name="{{ __('Created At') }}"
                prop4="invoiceID"
                prop4-name="{{ __('ID') }}"
                prop5="Condition"
                prop5-name="{{ __('Condition') }}"
                edit-text="{{ __('Edit') }}"
                submit-text="{{ __('Remove') }}"
                send-sms="{{ __('Send SMS') }}"
                print="{{ __('Print') }}"
            ></search-invoice>
    </div>
</div>
@endsection
