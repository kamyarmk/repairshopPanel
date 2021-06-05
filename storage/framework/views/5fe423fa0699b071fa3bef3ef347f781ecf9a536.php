<?php $__env->startSection('content'); ?>
    <!-- Navigation -->
    <div class="bg-white">
        <div class="content">
            <!-- Toggle Main Navigation -->
            <div class="d-lg-none push">
                <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                <button type="button" class="btn btn-block btn-light d-flex justify-content-between align-items-center" data-toggle="class-toggle" data-target="#main-navigation" data-class="d-none">
                    Menu
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <!-- END Toggle Main Navigation -->

            <!-- Main Navigation -->
            <div id="main-navigation" class="d-none d-lg-block push">
                <ul class="nav-main nav-main-horizontal nav-main-hover">
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="db_analytics.html">
                            <i class="nav-main-link-icon fa fa-chart-pie"></i>
                            <span class="nav-main-link-name">General</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">Manage</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="/report/any">
                            <i class="nav-main-link-icon fa fa-mobile"></i>
                            <span class="nav-main-link-name">Devices</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link " href="/report/any">
                            <i class="nav-main-link-icon fa fa-users"></i>
                            <span class="nav-main-link-name">Customers</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">Account</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link " href="/report/any">
                            <i class="nav-main-link-icon fa fa-wallet"></i>
                            <span class="nav-main-link-name">Billing &amp; Account</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link " href="/report/any">
                            <i class="nav-main-link-icon fa fa-user"></i>
                            <span class="nav-main-link-name">Staffs</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Main Navigation -->
        </div>
    </div>
    <!-- END Navigation -->

    <!-- Page Content -->
    <div class="content content-full">
        <!-- Overview -->
        <div class="d-flex justify-content-between align-items-center py-3">
            <h2 class="h3 font-w400 mb-0">Overview</h2>
            <div class="dropdown">
                <button type="button" class="btn btn-sm btn-light px-3" id="dropdown-analytics-overview" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Last 30 days <i class="fa fa-fw fa-angle-down"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right font-size-sm" aria-labelledby="dropdown-analytics-overview">
                    <a class="dropdown-item" href="javascript:void(0)">This Week</a>
                    <a class="dropdown-item" href="javascript:void(0)">Previous Week</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="javascript:void(0)">This Month</a>
                    <a class="dropdown-item" href="javascript:void(0)">Previous Month</a>
                </div>
            </div>
        </div>
        <div class="row row-deck">
            <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear">
                <a class="block block-rounded block-fx-pop text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="item item-circle bg-primary-lighter mx-auto my-3">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="text-black display-4 font-w700">35.8k</div>
                        <div class="text-muted mt-1">Visitors</div>
                        <div class="py-3 font-size-h4 font-w700 text-success">
                            <i class="fa fa-caret-up mr-1"></i>
                            15.7%
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear" data-timeout="150">
                <a class="block block-rounded block-fx-pop text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="item item-circle bg-xinspire-lighter mx-auto my-3">
                            <i class="fa fa-eye text-xinspire-dark"></i>
                        </div>
                        <div class="text-black display-4 font-w700">98.5k</div>
                        <div class="text-muted mt-1">Page views</div>
                        <div class="py-3 font-size-h4 font-w700 text-danger">
                            <i class="fa fa-caret-down mr-1"></i>
                            2.4%
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear" data-timeout="300">
                <a class="block block-rounded block-fx-pop text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="item item-circle bg-xsmooth-lighter mx-auto my-3">
                            <i class="fa fa-columns text-xsmooth"></i>
                        </div>
                        <div class="text-black display-4 font-w700">25</div>
                        <div class="text-muted mt-1">Pages per visit</div>
                        <div class="py-3 font-size-h4 font-w700 text-success">
                            <i class="fa fa-caret-up mr-1"></i>
                            52.5%
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear" data-timeout="450">
                <a class="block block-rounded block-fx-pop text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="item item-circle bg-xplay-lighter mx-auto my-3">
                            <i class="fa fa-level-up-alt text-xplay"></i>
                        </div>
                        <div class="text-black display-4 font-w700">12.5%</div>
                        <div class="text-muted mt-1">Bounce Rate</div>
                        <div class="py-3 font-size-h4 font-w700 text-danger">
                            <i class="fa fa-caret-down mr-1"></i>
                            5.7%
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Overview -->

        <!-- Visitors Growth -->
        <div class="d-flex justify-content-between align-items-center pt-5 pb-3">
            <h2 class="h3 font-w400 mb-0">Visitors Growth</h2>
            <div class="dropdown">
                <button type="button" class="btn btn-sm btn-light px-3" id="dropdown-analytics-visitors-growth" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    This Week <i class="fa fa-fw fa-angle-down"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right font-size-sm" aria-labelledby="dropdown-analytics-visitors-growth">
                    <a class="dropdown-item" href="javascript:void(0)">Last 30 days</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="javascript:void(0)">Previous Week</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="javascript:void(0)">This Month</a>
                    <a class="dropdown-item" href="javascript:void(0)">Previous Month</a>
                </div>
            </div>
        </div>
        <div class="block block-rounded block-fx-pop invisible" data-toggle="appear">
            <div class="block-content block-content-full">
                <div class="row">
                    <div class="col-md-5 col-lg-4 d-md-flex align-items-md-center">
                        <div class="p-md-2 p-lg-3">
                            <div class="text-black display-4 font-w700">3,687</div>
                            <div class="font-size-lg font-w700">Your new website visitors</div>
                            <div class="py-3 d-flex align-items-center">
                                <div class="bg-success-lighter px-2 py-1 rounded mr-3">
                                    <i class="fa fa-fw fa-caret-up text-success"></i>
                                </div>
                                <p class="mb-0">
                                    You have a <span class="font-w600 text-success">25% Growth</span> in the last 30 days. Keep it up!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-8">
                        <div class="p-md-2 p-lg-3">
                            <!-- Bars Chart Container -->
                            <!-- Chart.js Chart is initialized in js/pages/db_analytics.min.js which was auto compiled from _js/pages/db_analytics.js -->
                            <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                            <canvas class="js-chartjs-analytics-bars"
                                data-mon="Mon"
                                data-tue="Tue"
                                data-wed="Wed"
                                data-thu="Thu"
                                data-fri="Fri"
                                data-sat="Sat"
                                data-sun="sun"

                                data-device="Devices"
                                data-income="Incomes"

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
        <!-- END Visitors Growth -->

        <!-- Lines Chart -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Lines</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                    </button>
                </div>
            </div>
            <div class="block-content block-content-full text-center">
                <div class="py-3"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <!-- Lines Chart Container -->
                    <canvas class="js-chartjs-lines chartjs-render-monitor" width="930" height="464" style="display: block; height: 232px; width: 465px;"></canvas>
                </div>
            </div>
        </div>
        <!-- END Lines Chart -->

        <!-- Carts -->
        <div class="row">
            <div class="col-6">
                <!-- Pie Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Pie</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full text-center">
                        <div class="py-3"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                            <!-- Pie Chart Container -->
                            <canvas class="js-chartjs-pie chartjs-render-monitor" width="930" height="464" style="display: block; height: 232px; width: 465px;"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Pie Chart -->
            </div>

            <div class="col-6">
                <!-- Pie Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Pie</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full text-center">
                        <div class="py-3"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                            <!-- Pie Chart Container -->
                            <canvas class="js-chartjs-pie chartjs-render-monitor" width="930" height="464" style="display: block; height: 232px; width: 465px;"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Pie Chart -->
            </div>
        </div>
        <!-- END Carts -->

        <!-- Quick Statistics -->
        <div class="d-flex justify-content-between align-items-center pt-5 pb-3">
            <h2 class="h3 font-w400 mb-0">Quick Statistics</h2>
            <div class="dropdown">
                <button type="button" class="btn btn-sm btn-light px-3" id="dropdown-analytics-quick-stats" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Last 30 days <i class="fa fa-fw fa-angle-down"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right font-size-sm" aria-labelledby="dropdown-analytics-quick-stats">
                    <a class="dropdown-item" href="javascript:void(0)">This Week</a>
                    <a class="dropdown-item" href="javascript:void(0)">Previous Week</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="javascript:void(0)">This Month</a>
                    <a class="dropdown-item" href="javascript:void(0)">Previous Month</a>
                </div>
            </div>
        </div>
        <div class="row row-deck">
            <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear">
                <a class="block block-rounded block-fx-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-lg font-w600 text-muted mb-3">Followers</div>
                        <div class="text-black font-size-h1 font-w700">1,500</div>
                        <div class="font-size-h4 font-w700 text-success">
                            <i class="fa fa-caret-up mr-1"></i>
                            25.6%
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear" data-timeout="150">
                <a class="block block-rounded block-fx-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-lg font-w600 text-muted mb-3">Comments</div>
                        <div class="text-black font-size-h1 font-w700">910</div>
                        <div class="font-size-h4 font-w700 text-success">
                            <i class="fa fa-caret-up mr-1"></i>
                            18.6%
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear" data-timeout="300">
                <a class="block block-rounded block-fx-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-lg font-w600 text-muted mb-3">Downloads</div>
                        <div class="text-black font-size-h1 font-w700">57.5k</div>
                        <div class="font-size-h4 font-w700 text-success">
                            <i class="fa fa-caret-up mr-1"></i>
                            14.9%
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear" data-timeout="450">
                <a class="block block-rounded block-fx-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-lg font-w600 text-muted mb-3">Tickets</div>
                        <div class="text-black font-size-h1 font-w700">75</div>
                        <div class="font-size-h4 font-w700 text-danger">
                            <i class="fa fa-caret-down mr-1"></i>
                            1.7%
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear">
                <a class="block block-rounded block-fx-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-lg font-w600 text-muted mb-3">Likes</div>
                        <div class="text-black font-size-h1 font-w700">39.6k</div>
                        <div class="font-size-h4 font-w700 text-success">
                            <i class="fa fa-caret-up mr-1"></i>
                            39.8%
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear" data-timeout="150">
                <a class="block block-rounded block-fx-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-lg font-w600 text-muted mb-3">Errors</div>
                        <div class="text-black font-size-h1 font-w700">3</div>
                        <div class="font-size-h4 font-w700 text-danger">
                            <i class="fa fa-caret-down mr-1"></i>
                            25%
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear" data-timeout="300">
                <a class="block block-rounded block-fx-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-lg font-w600 text-muted mb-3">Apps</div>
                        <div class="text-black font-size-h1 font-w700">290</div>
                        <div class="font-size-h4 font-w700 text-success">
                            <i class="fa fa-caret-up mr-1"></i>
                            1.2%
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear" data-timeout="450">
                <a class="block block-rounded block-fx-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-lg font-w600 text-muted mb-3">New Accounts</div>
                        <div class="text-black font-size-h1 font-w700">6,300</div>
                        <div class="font-size-h4 font-w700 text-success">
                            <i class="fa fa-caret-up mr-1"></i>
                            3.7%
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Quick Statistics -->
    </div>
    <!-- END Page Content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js_after'); ?>
<!-- Page JS Code -->
<script src="<?php echo e(asset('js/pages/be_comp_charts.min.js')); ?>"></script>

<!-- Page JS Helpers (Easy Pie Chart + jQuery Sparkline Plugins) -->
<script>jQuery(function(){Dashmix.helpers(['easy-pie-chart', 'sparkline']);});</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/reports/general.blade.php ENDPATH**/ ?>