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
        <search-users
                search-item="UsersVue"
                search-text="{{ __('Search') }}"
                prop1="name"
                prop1-name="{{ __('Name') }}"
                prop2="email"
                prop2-name="{{ __('E-Mail Address') }}"
                prop3="phone_number"
                prop3-name="{{ __('Phone Number') }}"
                edit-text="{{ __('Edit') }}"
                submit-text="{{ __('Remove') }}"
            ></search-users>
    </div>
</div>
@endsection
