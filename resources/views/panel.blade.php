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
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <a href="#" class="card d-flex justify-content-center align-items-center border border-warning btn btn-warning shadow-sm rounded">
                            <div class="card-body">
                                <h2 class="mb-20"><span>{{ $openCondition }}</span></h2>
                                <h6 class="m-t-0 text-uppercase">{{ __('Device In Queue') }}</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="#" class="card d-flex justify-content-center align-items-center border border-info btn btn-info shadow-sm rounded">
                            <div class="card-body">
                                <h2 class="mb-20">{{ $repairingCondition }}</h2>
                                <h6 class="m-t-0 text-uppercase">{{ __('Under Repair') }}</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="#" class=" card d-flex justify-content-center align-items-center border border-primary btn btn-outline-primary shadow-sm rounded">
                            <div class="card-body">
                                <h2 class="mb-20">{{ $testingCondition }}</h2>
                                <h6 class="m-t-0 text-uppercase">{{ __('Under Test') }}</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="#" class=" card d-flex justify-content-center align-items-center border border-success btn btn-outline-success shadow-sm rounded">
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
                        <a href="#" class=" card d-flex bg-success justify-content-center align-items-center border border-success btn btn-success shadow-sm rounded">
                            <div class="card-body text-white">
                                <h6 class="text-white m-t-0 text-uppercase">{{ __('Delivered') }}</h6>
                                <h2 class="m-b-20"><span>{{ $deliveredCondition }}</span></h2>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="#" class=" card d-flex bg-warning justify-content-center align-items-center border border-warning btn btn-warning shadow-sm rounded">
                            <div class="card-body text-dark">
                                <h6 class="text-dark m-t-0 text-uppercase">{{ __('Late Delivery') }}</h6>
                                <h2 class="m-b-20">{{ $delayedCondition }}</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="#" class=" card bg-danger d-flex bg-warning justify-content-center align-items-center border border-danger btn btn-danger shadow-sm rounded">
                            <div class="card-body text-white">
                                <h6 class="text-white m-t-0 text-uppercase">{{ __('Delivery Problem') }}</h6>
                                <h2 class="m-b-20"><span>{{ $unsuccesfulCondition }}</span></h2>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-3 ">
                        <a href="#" class=" card bg-danger d-flex bg-warning justify-content-center align-items-center border border-danger btn btn-danger shadow-sm rounded">
                            <div class="card-body text-white">
                                <h6 class="text-white m-t-0 text-uppercase">{{ __('Refund') }}</h6>
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


        <div class="row bg-section bg-gradient p-5">
            <div class="col-lg-12">
                <div class="card-box">
                    <h4 class="m-t-0 text-right"><i class="fas fa-chart-line ml-3"></i>{{ __('Total Revenue') }}</h4>
                    <div class="dropdown-divider mb-5 text-white bg-white"></div>
                    <!-- <div id="dashboard-bar-stacked" style="height: 300px;"></div> -->
                    <canvas id="canvas"></canvas>
                    <script type="application/javascript">
                        var chartData = {
                        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                        datasets: [{
                            type: 'line',
                            label: 'Dataset 1',
                            borderColor: window.chartColors.blue,
                            borderWidth: 2,
                            fill: false,
                            data: [
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor()
                            ]
                        }, {
                            type: 'bar',
                            label: 'Dataset 2',
                            backgroundColor: window.chartColors.red,
                            data: [
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor()
                            ],
                            borderColor: 'white',
                            borderWidth: 2
                        }, {
                            type: 'bar',
                            label: 'Dataset 3',
                            backgroundColor: window.chartColors.green,
                            data: [
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor()
                            ]
                        }]

                        };
                        window.onload = function() {
                            var ctx = document.getElementById('canvas').getContext('2d');
                            window.myMixedChart = new Chart(ctx, {
                                type: 'bar',
                                data: chartData,
                                options: {
                                    responsive: true,
                                    title: {
                                        display: true,
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
                    <h4 class="m-t-0 text-right"><i class="fas fa-users ml-3"></i>{{ __('Users') }}</h4>
                    <div class="table-responsive">
                        <table class="table table-hover mails m-0 table table-actions-bar">
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
                                @foreach($users->all() as $user)
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
                                        <a href="" class="btn btn-danger">
                                            {{ __('Remove') }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-success">
                                            {{ __('Edit') }}
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
