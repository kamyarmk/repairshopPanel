

<?php $__env->startSection('content'); ?>

    <!-- Hero -->
    <div class="content">
        <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-left">
            <div>
                <h1 class="h2 mb-1">
                    <?php echo e(__('Dashboard')); ?>

                </h1>
                <p class="mb-0">
                    <?php echo e(__('Welcome')); ?>, <?php echo e(Auth::user()->user_name); ?>!.
                </p>
            </div>
           
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Overview -->
        <main-datas
            last30day="<?php echo e(__('Last 30 days')); ?>"
            this-week="<?php echo e(__('This Week')); ?>"
            prev-week="<?php echo e(__('Previous Week')); ?>"
            this-month="<?php echo e(__('This Month')); ?>"
            prev-month="<?php echo e(__('Previous Month')); ?>"
            
            Income="<?php echo e(__('Income')); ?>"
            see-report="<?php echo e(__('See the')); ?> <?php echo e(__(' Reports')); ?>"
            accepted="<?php echo e(__('Accepted Devices')); ?>"
            checkit="<?php echo e(__('Check it out')); ?>"
            Delivered="<?php echo e(__('Delivered')); ?>"
            view="<?php echo e(__('View All')); ?>"
            not-delivered="<?php echo e(__('Not Delivered')); ?>"

            Waiting="<?php echo e(__('Waiting')); ?>"
            Ready="<?php echo e(__('Ready To pay')); ?>"
            Paid="<?php echo e(__('Paid')); ?>"
            over-due="<?php echo e(__('Over Due')); ?>"

        ></main-datas>

        <!-- END Overview -->

        <!-- Store Growth -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    <?php echo e(__('Store Growth')); ?>

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
                                <div class="font-w600"><?php echo e(__('Your Income Over Week')); ?></div>
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
                                <div class="font-w600"><?php echo e(__('Requests Per Week')); ?></div>
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
                                data-mon="<?php echo e(__('Mon')); ?>"
                                data-tue="<?php echo e(__('Tue')); ?>"
                                data-wed="<?php echo e(__('Wed')); ?>"
                                data-thu="<?php echo e(__('Thu')); ?>"
                                data-fri="<?php echo e(__('Fri')); ?>"
                                data-sat="<?php echo e(__('Sat')); ?>"
                                data-sun="<?php echo e(__('Sun')); ?>"

                                data-device="<?php echo e(__('Devices')); ?>"
                                data-income="<?php echo e(__('Incomes')); ?>"

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
                Latest-orders="<?php echo e(__('Latest Orders')); ?>"

                Pending="<?php echo e(__('Open')); ?>"
                Canceled="<?php echo e(__('Delivered')); ?>"
                Completed="<?php echo e(__('Refund')); ?>"
                View-all="<?php echo e(__('View All')); ?>"

                Device="<?php echo e(__('Device')); ?>"
                Device-date="<?php echo e(__('Date')); ?>"
                Status="<?php echo e(__('Status')); ?>"
                User="<?php echo e(__('User')); ?>"
                View-all="<?php echo e(__('View All')); ?> <?php echo e(__('Orders')); ?>"
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
                            <div class="text-success font-size-h1 font-w700"><?php echo e($Devices->where('condition', '=', 'Delivered')->count()); ?></div>
                            <div class="text-black mb-3"><?php echo e(__('Completed Orders')); ?></div>
                            
                        </div>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                        <a class="font-w500" href="/report/general">
                            <?php echo e(__('See Full Report')); ?>

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
                            <div class="text-danger font-size-h1 font-w700"><?php echo e($Devices->where('condition', '=', 'Refund')->count()); ?></div>
                            <div class="text-black mb-3"><?php echo e(__('Delayed Requests')); ?></div>
                            
                        </div>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                        <a class="font-w500" href="/project/list">
                            <?php echo e(__('Get On to It')); ?>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/dashboard.blade.php ENDPATH**/ ?>