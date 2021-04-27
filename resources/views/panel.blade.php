@extends('layouts.panelStruc')

@section('content')
<!-- Page content start -->
<div class="page-contentbar">

<!-- START PAGE CONTENT -->
<div id="page-right-content">

    <div class="container card p-4">
        <div class="row mb-3">
            <div class="col-sm-12">
                <h4 class="header-title mt-0 mb-3 text-right"><i class="fas fa-tachometer-alt ml-3"></i>{{ __('Dashboard') }}</h4>
                <div class="dropdown-divider"></div>
            </div>
        </div> <!-- end row -->

        <div class="row p-5">
            <div class="col-md-12">
                <h4 class="m-t-0 text-right header-title"><i class="fas fa-chart-line ml-3"></i>{{ __('Monthly Report') }}</h4>
                <div class="dropdown-divider mb-5 text-white bg-white"></div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <a href="{{ route('deviceList.index')}}/?Condition=Open" class="card d-flex justify-content-center align-items-center border border-orangeSection btn btn-outline-orangeSection shadow-sm rounded">
                            <div class="card-body">
                                <h2 class="mb-20"><span>{{ $openCondition }}</span></h2>
                                <h6 class="m-t-0 text-uppercase">{{ __('Device In Queue') }}</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="{{ route('deviceList.index')}}/?Condition=Repairing" class="card d-flex justify-content-center align-items-center border border-purpleSection btn btn-outline-purpleSection shadow-sm rounded">
                            <div class="card-body">
                                <h2 class="mb-20">{{ $repairingCondition }}</h2>
                                <h6 class="m-t-0 text-uppercase">{{ __('Under Repair') }}</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="{{ route('deviceList.index')}}/?Condition=Testing" class=" card d-flex justify-content-center align-items-center border border-warning btn btn-outline-warning shadow-sm rounded">
                            <div class="card-body text-dark">
                                <h2 class="mb-20">{{ $testingCondition }}</h2>
                                <h6 class="m-t-0 text-uppercase">{{ __('Under Test') }}</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="{{ route('deviceList.index')}}/?Condition=Repaired" class=" card d-flex justify-content-center align-items-center border border-success btn btn-outline-success shadow-sm rounded">
                            <div class="card-body">
                                <h2 class="mb-20">{{ $repairedCondition }}</h2>
                                <h6 class="m-t-0 text-uppercase">{{ __('Repaired') }}</h6>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end row -->

                <div class="row mb-5">
                    <div class="col-sm-3">
                        <a href="{{ route('deviceList.index')}}/?Condition=Delivered" class=" card d-flex bg-success justify-content-center align-items-center border border-success btn btn-success shadow-sm rounded">
                            <div class="card-body">
                                <h6 class="m-t-0 text-uppercase">{{ __('Delivered') }}</h6>
                                <h2 class="m-b-20"><span>{{ $deliveredCondition }}</span></h2>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="{{ route('deviceList.index')}}/?Condition=Delayed" class=" card d-flex bg-orangeSection justify-content-center align-items-center border border-orangeSection btn btn-orangeSection shadow-sm rounded">
                            <div class="card-body">
                                <h6 class="m-t-0 text-uppercase">{{ __('Late Delivery') }}</h6>
                                <h2 class="m-b-20">{{ $delayedCondition }}</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="{{ route('deviceList.index')}}/?Condition=Unsuccessful" class=" card bg-danger d-flex bg-warning justify-content-center align-items-center border border-danger btn btn-danger shadow-sm rounded">
                            <div class="card-body">
                                <h6 class="m-t-0 text-uppercase">{{ __('Delivery Problem') }}</h6>
                                <h2 class="m-b-20"><span>{{ $unsuccesfulCondition }}</span></h2>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-3 ">
                        <a href="{{ route('deviceList.index')}}/?Condition=Refund" class=" card bg-section d-flex bg-warning justify-content-center align-items-center border border-section btn btn-section shadow-sm rounded">
                            <div class="card-body">
                                <h6 class="m-t-0 text-uppercase">{{ __('Refund') }}</h6>
                                <h2 class="m-b-20"><span>{{ $refundCondition }}</span></h2>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="dropdown-divider mb-5"></div>

        <div class="row p-5">
            <div class="col-sm-12">
                <div class="card-box">
                    <home-search
                        search-term="{{ __('Search') }}"
                        invoice-search="{{ __('Invoice') }}"
                        user-search="{{ __('Users') }}"
                        device-search="{{ __('Device') }}"
                    >
                    </home-search>
                </div>
            </div>
        </div>

        <!-- main Data  -->

        <div class="dropdown-divider mb-5"></div>


        <div class="row bg-gradient p-5">
            <div class="col-lg-12">
                <div class="card-box">
                    <h4 class="m-t-0 text-right header-title"><i class="fas fa-chart-line ml-3"></i>{{ __('Total Work') }}</h4>
                    <div class="dropdown-divider mb-5 text-white bg-white"></div>
                    <!-- <div id="dashboard-bar-stacked" style="height: 300px;"></div> -->
                    <canvas id="canvas"></canvas>
                    <script type="application/javascript">
                        var chartData = {
                        labels: ['شنبه', 'یکشنبه', 'دوشنبه', 'سه شنبه', 'چهارشنبه', 'پنج شنبه', 'جمعه'],
                        datasets: [{
                            type: 'line',
                            label: 'درآمد',
                            borderColor: window.chartColors.blue,
                            borderWidth: 2,
                            fill: false,
                            data: [
                                {{ $chartInfo['sat']['paid'] }},
                                {{ $chartInfo['sun']['paid'] }},
                                {{ $chartInfo['mon']['paid'] }},
                                {{ $chartInfo['tue']['paid'] }},
                                {{ $chartInfo['wed']['paid'] }},
                                {{ $chartInfo['thu']['paid'] }},
                                {{ $chartInfo['fri']['paid'] }}
                            ]
                        }, {
                            type: 'bar',
                            label: 'مرجوعی',
                            backgroundColor: window.chartColors.red,
                            data: [
                                {{ $chartInfo['sat']['refund'] }},
                                {{ $chartInfo['sun']['refund'] }},
                                {{ $chartInfo['mon']['refund'] }},
                                {{ $chartInfo['tue']['refund'] }},
                                {{ $chartInfo['wed']['refund'] }},
                                {{ $chartInfo['thu']['refund'] }},
                                {{ $chartInfo['fri']['refund'] }}
                            ],
                            borderColor: 'white',
                            borderWidth: 2
                        },
                        {
                            type: 'bar',
                            label: 'تحویل گرفته شده',
                            backgroundColor: window.chartColors.yellow,
                            data: [
                                {{ $chartInfo['sat']['open'] }},
                                {{ $chartInfo['sun']['open'] }},
                                {{ $chartInfo['mon']['open'] }},
                                {{ $chartInfo['tue']['open'] }},
                                {{ $chartInfo['wed']['open'] }},
                                {{ $chartInfo['thu']['open'] }},
                                {{ $chartInfo['fri']['open'] }}
                            ]
                        }
                        , {
                            type: 'bar',
                            label: 'تحویل داده شده',
                            backgroundColor: window.chartColors.green,
                            data: [
                                {{ $chartInfo['sat']['delivered'] }},
                                {{ $chartInfo['sun']['delivered'] }},
                                {{ $chartInfo['mon']['delivered'] }},
                                {{ $chartInfo['tue']['delivered'] }},
                                {{ $chartInfo['wed']['delivered'] }},
                                {{ $chartInfo['thu']['delivered'] }},
                                {{ $chartInfo['fri']['delivered'] }}
                            ]
                        }]

                        };
                        window.onload = function() {
                            var ctx = document.getElementById('canvas').getContext('2d');
                            Chart.defaults.global.defaultFontFamily = 'IRANSans';
                            window.myMixedChart = new Chart(ctx, {
                                type: 'bar',
                                data: chartData,
                                options: {
                                    responsive: true,
                                    title: {
                                        display: false,
                                        text: 'Chart.js Combo Bar Line Chart'
                                    },
                                    tooltips: {
                                        mode: 'index',
                                        intersect: true
                                    }
                                }
                            });
                        };

                        document.getElementById('randomizeData').addEventListener('click', function() {
                            chartData.datasets.forEach(function(dataset) {
                                dataset.data = dataset.data.map(function() {
                                    return randomScalingFactor();
                                });
                            });
                            window.myMixedChart.update();
                        });
                    </script>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        

    </div>
    <!-- end container -->



    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div>
                        <strong>طراحی و توسعه توسط دارت وب</strong> - پنل مدیریتی رسپیتو &copy; 2021
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end footer -->

</div>
<!-- End #page-right-content -->

<div class="clearfix"></div>

</div>
<!-- end .page-contentbar -->
@endsection
