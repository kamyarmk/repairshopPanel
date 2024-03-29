<?php $__env->startSection('content'); ?>
<!-- Page content start -->
<div class="page-contentbar">

<!-- START PAGE CONTENT -->
<div id="page-right-content">

    <div class="container card p-4">
        <div class="row mb-3">
            <div class="col-sm-12">
                <h4 class="header-title mt-0 mb-3 text-right"><i class="fas fa-tachometer-alt ml-3"></i><?php echo e(__('Dashboard')); ?></h4>
                <div class="dropdown-divider"></div>
            </div>
        </div> <!-- end row -->

        <div class="row p-5">
            <div class="col-md-12">
                <h4 class="m-t-0 text-right header-title"><i class="fas fa-chart-line ml-3"></i><?php echo e(__('Monthly Report')); ?></h4>
                <div class="dropdown-divider mb-5 text-white bg-white"></div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <a href="<?php echo e(route('deviceList.index')); ?>/?Condition=Open" class="card d-flex justify-content-center align-items-center border border-orangeSection btn btn-outline-orangeSection shadow-sm rounded">
                            <div class="card-body">
                                <h2 class="mb-20"><span><?php echo e($openCondition); ?></span></h2>
                                <h6 class="m-t-0 text-uppercase"><?php echo e(__('Device In Queue')); ?></h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="<?php echo e(route('deviceList.index')); ?>/?Condition=Repairing" class="card d-flex justify-content-center align-items-center border border-purpleSection btn btn-outline-purpleSection shadow-sm rounded">
                            <div class="card-body">
                                <h2 class="mb-20"><?php echo e($repairingCondition); ?></h2>
                                <h6 class="m-t-0 text-uppercase"><?php echo e(__('Under Repair')); ?></h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="<?php echo e(route('deviceList.index')); ?>/?Condition=Testing" class=" card d-flex justify-content-center align-items-center border border-warning btn btn-outline-warning shadow-sm rounded">
                            <div class="card-body text-dark">
                                <h2 class="mb-20"><?php echo e($testingCondition); ?></h2>
                                <h6 class="m-t-0 text-uppercase"><?php echo e(__('Under Test')); ?></h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="<?php echo e(route('deviceList.index')); ?>/?Condition=Repaired" class=" card d-flex justify-content-center align-items-center border border-success btn btn-outline-success shadow-sm rounded">
                            <div class="card-body">
                                <h2 class="mb-20"><?php echo e($repairedCondition); ?></h2>
                                <h6 class="m-t-0 text-uppercase"><?php echo e(__('Repaired')); ?></h6>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end row -->

                <div class="row mb-5">
                    <div class="col-sm-3">
                        <a href="<?php echo e(route('deviceList.index')); ?>/?Condition=Delivered" class=" card d-flex bg-success justify-content-center align-items-center border border-success btn btn-success shadow-sm rounded">
                            <div class="card-body">
                                <h6 class="m-t-0 text-uppercase"><?php echo e(__('Delivered')); ?></h6>
                                <h2 class="m-b-20"><span><?php echo e($deliveredCondition); ?></span></h2>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="<?php echo e(route('deviceList.index')); ?>/?Condition=Delayed" class=" card d-flex bg-orangeSection justify-content-center align-items-center border border-orangeSection btn btn-orangeSection shadow-sm rounded">
                            <div class="card-body">
                                <h6 class="m-t-0 text-uppercase"><?php echo e(__('Late Delivery')); ?></h6>
                                <h2 class="m-b-20"><?php echo e($delayedCondition); ?></h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="<?php echo e(route('deviceList.index')); ?>/?Condition=Unsuccessful" class=" card bg-danger d-flex bg-warning justify-content-center align-items-center border border-danger btn btn-danger shadow-sm rounded">
                            <div class="card-body">
                                <h6 class="m-t-0 text-uppercase"><?php echo e(__('Delivery Problem')); ?></h6>
                                <h2 class="m-b-20"><span><?php echo e($unsuccesfulCondition); ?></span></h2>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-3 ">
                        <a href="<?php echo e(route('deviceList.index')); ?>/?Condition=Refund" class=" card bg-section d-flex bg-warning justify-content-center align-items-center border border-section btn btn-section shadow-sm rounded">
                            <div class="card-body">
                                <h6 class="m-t-0 text-uppercase"><?php echo e(__('Refund')); ?></h6>
                                <h2 class="m-b-20"><span><?php echo e($refundCondition); ?></span></h2>
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
                        search-term="<?php echo e(__('Search')); ?>"
                        invoice-search="<?php echo e(__('Invoice')); ?>"
                        user-search="<?php echo e(__('Users')); ?>"
                        device-search="<?php echo e(__('Device')); ?>"
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
                    <h4 class="m-t-0 text-right header-title"><i class="fas fa-chart-line ml-3"></i><?php echo e(__('Total Work')); ?></h4>
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
                                <?php echo e($chartInfo['sat']['paid']); ?>,
                                <?php echo e($chartInfo['sun']['paid']); ?>,
                                <?php echo e($chartInfo['mon']['paid']); ?>,
                                <?php echo e($chartInfo['tue']['paid']); ?>,
                                <?php echo e($chartInfo['wed']['paid']); ?>,
                                <?php echo e($chartInfo['thu']['paid']); ?>,
                                <?php echo e($chartInfo['fri']['paid']); ?>

                            ]
                        }, {
                            type: 'bar',
                            label: 'مرجوعی',
                            backgroundColor: window.chartColors.red,
                            data: [
                                <?php echo e($chartInfo['sat']['refund']); ?>,
                                <?php echo e($chartInfo['sun']['refund']); ?>,
                                <?php echo e($chartInfo['mon']['refund']); ?>,
                                <?php echo e($chartInfo['tue']['refund']); ?>,
                                <?php echo e($chartInfo['wed']['refund']); ?>,
                                <?php echo e($chartInfo['thu']['refund']); ?>,
                                <?php echo e($chartInfo['fri']['refund']); ?>

                            ],
                            borderColor: 'white',
                            borderWidth: 2
                        },
                        {
                            type: 'bar',
                            label: 'تحویل گرفته شده',
                            backgroundColor: window.chartColors.yellow,
                            data: [
                                <?php echo e($chartInfo['sat']['open']); ?>,
                                <?php echo e($chartInfo['sun']['open']); ?>,
                                <?php echo e($chartInfo['mon']['open']); ?>,
                                <?php echo e($chartInfo['tue']['open']); ?>,
                                <?php echo e($chartInfo['wed']['open']); ?>,
                                <?php echo e($chartInfo['thu']['open']); ?>,
                                <?php echo e($chartInfo['fri']['open']); ?>

                            ]
                        }
                        , {
                            type: 'bar',
                            label: 'تحویل داده شده',
                            backgroundColor: window.chartColors.green,
                            data: [
                                <?php echo e($chartInfo['sat']['delivered']); ?>,
                                <?php echo e($chartInfo['sun']['delivered']); ?>,
                                <?php echo e($chartInfo['mon']['delivered']); ?>,
                                <?php echo e($chartInfo['tue']['delivered']); ?>,
                                <?php echo e($chartInfo['wed']['delivered']); ?>,
                                <?php echo e($chartInfo['thu']['delivered']); ?>,
                                <?php echo e($chartInfo['fri']['delivered']); ?>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panelStruc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/panel.blade.php ENDPATH**/ ?>