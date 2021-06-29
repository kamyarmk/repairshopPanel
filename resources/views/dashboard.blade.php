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
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    {{ __('Store Growth') }}
                </h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                    </button>
                    <button type="button" class="btn-block-option">
                        <i class="si si-wrench"></i>
                    </button>
                </div>
            </div>
            <div class="block-content block-content-full">
                <div class="row">
                    <div class="col-md-5 col-xl-4 d-md-flex align-items-md-center">
                        <div class="p-md-2 p-lg-3">
                            <div class="py-3">
                                <div class="text-black font-size-h1 font-w700">$1,430</div>
                                <div class="font-w600">{{ __('Your Income Over Week') }}</div>
                                <div class="py-3 d-flex align-items-center">
                                    <div class="bg-success-lighter p-2 rounded mr-3">
                                        <i class="fa fa-fw fa-arrow-up text-success"></i>
                                    </div>
                                    <p class="mb-0">
                                        You have a <span class="font-w600 text-success">12% customer growth</span> in the last 30 days. This is amazing, keep it up!
                                    </p>
                                </div>
                            </div>
                            <div class="py-3">
                                <div class="text-black font-size-h1 font-w700">65</div>
                                <div class="font-w600">{{ __('Requests Per Week') }}</div>
                                <div class="py-3 d-flex align-items-center">
                                    <div class="bg-success-lighter p-2 rounded mr-3">
                                        <i class="fa fa-fw fa-arrow-up text-success"></i>
                                    </div>
                                    <p class="mb-0">
                                        You’ve managed to add <span class="font-w600 text-success">12% more products</span> in the last 30 days. Store’s portfolio is growing!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-xl-8 d-md-flex align-items-md-center">
                        <div class="p-md-2 p-lg-3 w-100">
                            <!-- Bars Chart Container -->
                            <!-- Chart.js Chart is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
                            <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                            <canvas class="js-chartjs-analytics-bars"
                                data-mon="{{ __('Mon') }}"
                                data-tue="{{ __('Tue') }}"
                                data-wed="{{ __('Wed') }}"
                                data-thu="{{ __('Thu') }}"
                                data-fri="{{ __('Fri') }}"
                                data-sat="{{ __('Sat') }}"
                                data-sun="{{ __('Sun') }}"

                                data-device="{{ __('Devices') }}"
                                data-income="{{ __('Incomes') }}"

                                data-fd="73"
                                data-sd="68"
                                data-td="69"
                                data-fod="53"
                                data-fid="60"
                                data-sid="72"
                                data-sev="82"

                                data-ffd="62"
                                data-ssd="32"
                                data-ttd="59"
                                data-ffod="55"
                                data-ffid="52"
                                data-ssid="56"
                                data-ssev="73"
                            ></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
