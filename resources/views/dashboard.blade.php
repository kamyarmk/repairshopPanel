@extends('layouts.backend')

@section('content')

    <!-- Hero -->
    <div class="content">
        <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-left">
            <div>
                <h1 class="h2 mb-1">
                    {{ __('Dashboard') }}
                </h1>
                <p class="mb-0">
                    {{ __('Welcome') }}, {{ Auth::user()->user_name }}!.
                </p>
            </div>
           
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Overview -->
        <main-datas
            last30day="{{ __('Last 30 days') }}"
            this-week="{{ __('This Week') }}"
            prev-week="{{ __('Previous Week') }}"
            this-month="{{ __('This Month') }}"
            prev-month="{{ __('Previous Month') }}"
            
            Income="{{ __('Income') }}"
            see-report="{{ __('See the') }} {{ __(' Reports') }}"
            accepted="{{ __('Accepted Devices') }}"
            checkit="{{ __('Check it out') }}"
            Delivered="{{ __('Delivered') }}"
            view="{{ __('View All')}}"
            not-delivered="{{ __('Not Delivered')}}"

            Waiting="{{ __('Waiting') }}"
            Ready="{{ __('Ready To pay') }}"
            Paid="{{ __('Paid') }}"
            over-due="{{ __('Over Due') }}"

        ></main-datas>

        <!-- END Overview -->

        <!-- Store Growth -->
        <dash_chart
            store-growth="{{ __('Store Growth') }}"
            Your-income-over-week="{{ __('Your Income Over Week') }}"
            Requests-per-week="{{ __('Requests Per Week') }}"
            Mon="{{ __('Mon') }}"
            Tue="{{ __('Tue') }}"
            Wed="{{ __('Wed') }}"
            Thu="{{ __('Thu') }}"
            Fri="{{ __('Fri') }}"
            Sat="{{ __('Sat') }}"
            Sun="{{ __('Sun') }}"
            Devices="{{ __('Devices') }}"
            Incomes="{{ __('Incomes') }}"
        ></dash_chart>
        <!-- END Store Growth -->

        <!-- Latest Orders + Stats -->
        <div class="row">
            <div class="col-md-9">
                <!--  Latest Orders -->
                <dash_device_list
                Latest-orders="{{ __('Latest Orders') }}"

                Pending="{{__('Open')}}"
                Canceled="{{__('Delivered')}}"
                Completed="{{__('Refund')}}"
                View-all="{{__('View All')}}"

                Device="{{__('Device')}}"
                Device-date="{{__('Date')}}"
                Status="{{__('Status')}}"
                User="{{__('User')}}"
                View-all="{{ __('View All') }} {{ __('Orders') }}"
                ></dash_device_list>
                <!-- END Latest Orders -->
            </div>
            <div class="col-md-3 d-flex flex-column">
                <!-- Stats -->
                <div class="block block-rounded text-center d-flex flex-column flex-grow-1">
                    <div class="block-content block-content-full d-flex align-items-center flex-grow-1">
                        <div class="w-100">
                            <div class="item rounded-lg bg-body-dark mx-auto my-2">
                                <i class="fa fa-check text-muted"></i>
                            </div>
                            <div class="text-success font-size-h1 font-w700">{{ $Devices->where('condition', '=', 'Delivered')->count() }}</div>
                            <div class="text-black mb-3">{{ __('Completed Orders') }}</div>
                            
                        </div>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                        <a class="font-w500" href="/report/general">
                            {{ __('See Full Report') }}
                            <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                        </a>
                    </div>
                </div>
                <div class="block block-rounded text-center d-flex flex-column flex-grow-1">
                    <div class="block-content block-content-full d-flex align-items-center flex-grow-1">
                        <div class="w-100">
                            <div class="item rounded-lg bg-body-dark mx-auto my-2">
                                <i class="fa fa-exclamation-triangle text-muted"></i>
                            </div>
                            <div class="text-danger font-size-h1 font-w700">{{ $Devices->where('condition', '=', 'Refund')->count() }}</div>
                            <div class="text-black mb-3">{{ __('Delayed Requests') }}</div>
                            
                        </div>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                        <a class="font-w500" href="/project/list">
                            {{ __('Get On to It') }}
                            <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                        </a>
                    </div>
                </div>
                <!-- END Stats -->
            </div>
        </div>
        <!-- END Latest Orders + Stats -->
    </div>
    <!-- END Page Content -->
@endsection
