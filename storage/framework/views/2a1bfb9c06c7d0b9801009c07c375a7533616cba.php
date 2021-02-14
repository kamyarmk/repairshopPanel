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
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <a href="<?php echo e(route('DeviceList')); ?>/?Condition=Open" class="card d-flex justify-content-center align-items-center border border-orangeSection btn btn-outline-orangeSection shadow-sm rounded">
                            <div class="card-body">
                                <h2 class="mb-20"><span><?php echo e($openCondition); ?></span></h2>
                                <h6 class="m-t-0 text-uppercase"><?php echo e(__('Device In Queue')); ?></h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="<?php echo e(route('DeviceList')); ?>/?Condition=Repairing" class="card d-flex justify-content-center align-items-center border border-purpleSection btn btn-outline-purpleSection shadow-sm rounded">
                            <div class="card-body">
                                <h2 class="mb-20"><?php echo e($repairingCondition); ?></h2>
                                <h6 class="m-t-0 text-uppercase"><?php echo e(__('Under Repair')); ?></h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="<?php echo e(route('DeviceList')); ?>/?Condition=Testing" class=" card d-flex justify-content-center align-items-center border border-warning btn btn-outline-warning shadow-sm rounded">
                            <div class="card-body">
                                <h2 class="mb-20"><?php echo e($testingCondition); ?></h2>
                                <h6 class="m-t-0 text-uppercase"><?php echo e(__('Under Test')); ?></h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="<?php echo e(route('DeviceList')); ?>/?Condition=Repaired" class=" card d-flex justify-content-center align-items-center border border-success btn btn-outline-success shadow-sm rounded">
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
                        <a href="<?php echo e(route('DeviceList')); ?>/?Condition=Delivered" class=" card d-flex bg-success justify-content-center align-items-center border border-success btn btn-success shadow-sm rounded">
                            <div class="card-body">
                                <h6 class="m-t-0 text-uppercase"><?php echo e(__('Delivered')); ?></h6>
                                <h2 class="m-b-20"><span><?php echo e($deliveredCondition); ?></span></h2>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="<?php echo e(route('DeviceList')); ?>/?Condition=Delayed" class=" card d-flex bg-warning justify-content-center align-items-center border border-warning btn btn-warning shadow-sm rounded">
                            <div class="card-body">
                                <h6 class="m-t-0 text-uppercase"><?php echo e(__('Late Delivery')); ?></h6>
                                <h2 class="m-b-20"><?php echo e($delayedCondition); ?></h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="<?php echo e(route('DeviceList')); ?>/?Condition=Unsuccessful" class=" card bg-danger d-flex bg-warning justify-content-center align-items-center border border-danger btn btn-danger shadow-sm rounded">
                            <div class="card-body">
                                <h6 class="m-t-0 text-uppercase"><?php echo e(__('Delivery Problem')); ?></h6>
                                <h2 class="m-b-20"><span><?php echo e($unsuccesfulCondition); ?></span></h2>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-3 ">
                        <a href="<?php echo e(route('DeviceList')); ?>/?Condition=Refund" class=" card bg-section d-flex bg-warning justify-content-center align-items-center border border-section btn btn-section shadow-sm rounded">
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
                            label: 'مرجوعی',
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
                        },
                        {
                            type: 'bar',
                            label: 'تحویل گرفته شده',
                            backgroundColor: window.chartColors.yellow,
                            data: [
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor()
                            ]
                        }
                        , {
                            type: 'bar',
                            label: 'تحویل داده شده',
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
                    <h4 class="m-t-0 text-right"><i class="fas fa-users ml-3"></i><?php echo e(__('Search')); ?></h4>
                    <div class="row mb-5 mt-5">
                        <div class="col-md-12">
                            <form action="">
                            <?php echo csrf_field(); ?>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-md-8 input-group input-group-lg btn btn-outline-transparent p-0 shadow-sm">
                                        <input type="text" class="form-controll col-10" placeholder="<?php echo e(__('Search...')); ?>" />
                                        <input type="submit" class="btn btn-outline-primary col-2 m-0" value="<?php echo e(__('Search')); ?>" />
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                    
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
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><?php echo e(__('Action')); ?><i class="caret"></i></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </th>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('E-Mail Address')); ?></th>
                                    <th><?php echo e(__('Phone Number')); ?></th>
                                    <th>
                                        
                                    </th>
                                    <th>
                                        
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $users->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <div class="checkbox checkbox-primary m-r-15">
                                            <input id="checkbox2" type="checkbox">
                                            <label for="checkbox2"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <?php echo e($user->name); ?>

                                    </td>
                                    <td>
                                        <a href="mailto:<?php echo e($user->email); ?>" class="text-muted"><?php echo e($user->email); ?></a>
                                    </td>
                                    <td>
                                        <b><a href="" class="text-dark"><b><?php echo e($user->created_at); ?></b></a> </b>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-danger">
                                            <?php echo e(__('Remove')); ?>

                                        </a>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-success">
                                            <?php echo e(__('Edit')); ?>

                                        </a>
                                    </td>

                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panelStruc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/panel.blade.php ENDPATH**/ ?>