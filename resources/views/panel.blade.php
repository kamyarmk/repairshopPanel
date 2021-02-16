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
                <h4 class="m-t-0 text-right header-title"><i class="fas fa-chart-line ml-3"></i>{{ __('Quick Access') }}</h4>
                <div class="dropdown-divider mb-5 text-white bg-white"></div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <a href="{{ route('DeviceList')}}/?Condition=Open" class="card d-flex justify-content-center align-items-center border border-orangeSection btn btn-outline-orangeSection shadow-sm rounded">
                            <div class="card-body">
                                <h2 class="mb-20"><span>{{ $openCondition }}</span></h2>
                                <h6 class="m-t-0 text-uppercase">{{ __('Device In Queue') }}</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="{{ route('DeviceList')}}/?Condition=Repairing" class="card d-flex justify-content-center align-items-center border border-purpleSection btn btn-outline-purpleSection shadow-sm rounded">
                            <div class="card-body">
                                <h2 class="mb-20">{{ $repairingCondition }}</h2>
                                <h6 class="m-t-0 text-uppercase">{{ __('Under Repair') }}</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="{{ route('DeviceList')}}/?Condition=Testing" class=" card d-flex justify-content-center align-items-center border border-warning btn btn-outline-warning shadow-sm rounded">
                            <div class="card-body text-dark">
                                <h2 class="mb-20">{{ $testingCondition }}</h2>
                                <h6 class="m-t-0 text-uppercase">{{ __('Under Test') }}</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="{{ route('DeviceList')}}/?Condition=Repaired" class=" card d-flex justify-content-center align-items-center border border-success btn btn-outline-success shadow-sm rounded">
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
                        <a href="{{ route('DeviceList')}}/?Condition=Delivered" class=" card d-flex bg-success justify-content-center align-items-center border border-success btn btn-success shadow-sm rounded">
                            <div class="card-body">
                                <h6 class="m-t-0 text-uppercase">{{ __('Delivered') }}</h6>
                                <h2 class="m-b-20"><span>{{ $deliveredCondition }}</span></h2>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="{{ route('DeviceList')}}/?Condition=Delayed" class=" card d-flex bg-orangeSection justify-content-center align-items-center border border-orangeSection btn btn-orangeSection shadow-sm rounded">
                            <div class="card-body">
                                <h6 class="m-t-0 text-uppercase">{{ __('Late Delivery') }}</h6>
                                <h2 class="m-b-20">{{ $delayedCondition }}</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="{{ route('DeviceList')}}/?Condition=Unsuccessful" class=" card bg-danger d-flex bg-warning justify-content-center align-items-center border border-danger btn btn-danger shadow-sm rounded">
                            <div class="card-body">
                                <h6 class="m-t-0 text-uppercase">{{ __('Delivery Problem') }}</h6>
                                <h2 class="m-b-20"><span>{{ $unsuccesfulCondition }}</span></h2>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-3 ">
                        <a href="{{ route('DeviceList')}}/?Condition=Refund" class=" card bg-section d-flex bg-warning justify-content-center align-items-center border border-section btn btn-section shadow-sm rounded">
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
                                20,
                                10,
                                30,
                                40,
                                50,
                                25,
                                45
                            ]
                        }, {
                            type: 'bar',
                            label: 'مرجوعی',
                            backgroundColor: window.chartColors.red,
                            data: [
                                10,
                                5,
                                25,
                                45,
                                32,
                                60,
                                12
                            ],
                            borderColor: 'white',
                            borderWidth: 2
                        },
                        {
                            type: 'bar',
                            label: 'تحویل گرفته شده',
                            backgroundColor: window.chartColors.yellow,
                            data: [
                                15,
                                30,
                                60,
                                70,
                                75,
                                62,
                                35
                            ]
                        }
                        , {
                            type: 'bar',
                            label: 'تحویل داده شده',
                            backgroundColor: window.chartColors.green,
                            data: [
                                30,
                                40,
                                55,
                                42,
                                56,
                                72,
                                28
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

        <div class="dropdown-divider mb-5"></div>

        <div class="row p-5">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="m-t-0 text-right header-title"><i class="fas fa-search ml-3"></i>{{ __('Search Invoice') }}</h4>
                    <div class="row mb-5 mt-5">
                        <div class="col-md-12">
                            <form action="">
                            @csrf
                                <div class="row d-flex justify-content-center">
                                    <div class="col-md-8 input-group input-group-lg btn btn-outline-transparent p-0">
                                        <input type="text" class="form-controll rounded" placeholder="{{ __('Search...') }}" />
                                        <button type="submit" class="btn" >
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">

                                </div>
                                <div class="col-md-6">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-6">
                                
                            </div>
                        </div>
                        <div class="col-md-12">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end container -->



    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div>
                        <strong>Simple Admin</strong> - Copyright &copy; 2017
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
