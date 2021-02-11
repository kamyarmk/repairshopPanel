<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>


    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/morris/morris.css')); ?>">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <!-- Bootstrap core CSS -->


</head>
<body>
    <div id="app">
        <div  id="page-wrapper">
            <!-- Top Bar Start -->
            <div class="topbar container-fluid bg-primary" id="topnav">
                <!-- Top navbar -->
                <nav class="navbar navbar-expand-lg navbar-light " role="navigation">
                    <!-- LOGO -->
                    <div class="topbar-left col-2">
                        <div class="">
                            <a href="index.html" class="logo">
                                <img src="<?php echo e(asset('/images/logo.png')); ?>" alt="logo" class="logo-lg img-fluid" />
                                <img src="<?php echo e(asset('/images/logo_sm.png')); ?>" alt="logo" class="logo-sm d-none" />
                            </a>
                        </div>
                    </div>

                    <div class="collapse navbar-collapse navbar-left col-8">
                        <div id="navigation">
                            <!-- Navigation Menu-->
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a href="<?php echo e(route('home')); ?>" class="nav-link text-light">
                                        <span class="mr-1"><i class="fas fa-tachometer-alt"></i></span><span> <?php echo e(__('Dashboard')); ?> </span> 
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?php echo e(route('RegisterDevice')); ?>" class="nav-link text-light">
                                        <span class="mr-1"><i class="fas fa-laptop-medical"></i></span><span> <?php echo e(__('Register Device')); ?> </span> 
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?php echo e(route('DeviceList')); ?>" class="nav-link text-light">
                                        <span class="mr-1"><i class="fas fa-tablet-alt"></i></span><span> <?php echo e(__('List Device')); ?> </span> 
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?php echo e(route('UserList')); ?>" class="nav-link text-light"> 
                                        <span class="mr-1"><i class="fas fa-users"></i></span><span> <?php echo e(__('Users')); ?> </span> 
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?php echo e(route('Devices')); ?>" class="nav-link text-light">
                                        <span class="mr-1"><i class="fas fa-file-alt"></i></span><span> <?php echo e(__('Reports')); ?> </span> 
                                    </a>

                                </li>

                            </ul>
                            <!-- End navigation menu  -->
                        </div>
                    </div>

                    <!-- Top nav Right menu -->
                    <div class="collapse navbar-collapse navbar-left col-2">
                        <ul class="navbar-nav mr-auto">
                            <li class="top-menu-item-xs">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>
                            <!-- <li class="hidden-xs">
                                <form role="search" class="navbar-left app-search pull-left">
                                    <input type="text" placeholder="<?php echo e(__('Search...')); ?>" class="form-control">
                                    <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </li> -->
                            <li class="nav-item dropdown justify-content-between d-flex align-items-center">
                                <a href="#" data-target="#" class="text-light mr-3" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell mt-3" style="font-size: 2em;"></i> <span class="badge badge-danger" style="position: absolute; top:15px; left: 1.2em;">3</span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="    right: 0em; left: unset; width: 300px !important;">
                                    <li class="notifi-title dropdown-item">
                                        <span class="label label-default pull-right font-700">New 3</span> Notification
                                    </li>
                                    <li class="dropdown-item list-group-item">
                                        <div>
                                            <a href="javascript:void(0);" class="">
                                                <div class="media">
                                                    <div class="media-left p-r-10">
                                                        <em class="fa fa-diamond bg-primary"></em>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">A new order has been placed</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="dropdown-item list-group-item">
                                        <div>
                                            <a href="javascript:void(0);" class="">
                                                <div class="media">
                                                    <div class="media-left p-r-10">
                                                        <em class="fa fa-cog bg-warning"></em>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">New settings</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="dropdown-item list-group-item">
                                        <div>
                                            <a href="javascript:void(0);" class="">
                                                <div class="media">
                                                    <div class="media-left p-r-10">
                                                        <em class="fa fa-bell-o bg-custom"></em>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">Updates</h5>
                                                        <p class="m-0">
                                                            <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="dropdown-item list-group-item">
                                        <div>
                                            <a href="javascript:void(0);" class="">
                                                <div class="media">
                                                    <div class="media-left p-r-10">
                                                        <em class="fa fa-user-plus bg-danger"></em>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">New user registered</h5>
                                                        <p class="m-0">
                                                            <small>You have 10 unread messages</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="dropdown-item list-group-item">
                                        <div>
                                            <a href="javascript:void(0);" class="">
                                                <div class="media">
                                                    <div class="media-left p-r-10">
                                                        <em class="fa fa-diamond bg-primary"></em>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">A new order has been placed</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="dropdown-item list-group-item">
                                        <div>
                                            <a href="javascript:void(0);" class="">
                                                <div class="media">
                                                    <div class="media-left p-r-10">
                                                        <em class="fa fa-cog bg-warning"></em>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">New settings</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="dropdown-item bg-primary list-group-item">
                                        <a href="javascript:void(0);" class="text-center text-light bg-primary">
                                            <small class="font-600">See all notifications</small>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown justify-content-between d-flex align-items-center">
                                <a href="" class="dropdown-toggle menu-right-item profile text-light" data-toggle="dropdown" aria-expanded="true"> 
                                    <i class="fas fa-user mt-3" style="font-size: 2em"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item"><a href="javascript:void(0)">
                                        <i class="fas fa-id-badge"></i> Profile</a>
                                    </li>
                                    <li class="dropdown-item"><a href="javascript:void(0)">
                                        <i class="fas fa-cog"></i> Settings</a>
                                    </li>
                                    <li class="dropdown-item"><a href="javascript:void(0)">
                                        <i class="fas fa-lock"></i> Lock screen</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-item"><a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- Top Bar End -->
            </div>
            <main class="py-4">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
        
    </div>


    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo e(asset('js/jquery-2.1.4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.slimscroll.min.js')); ?>"></script>

    <!--Morris Chart-->
    <script src="<?php echo e(asset('plugins/morris/morris.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/raphael/raphael-min.js')); ?>"></script>

    <!-- Dashboard init -->
    <script src="<?php echo e(asset('pages/jquery.dashboard.js')); ?>"></script>

    <!-- App Js -->
    <script src="<?php echo e(asset('js/jquery.app.js')); ?>"></script>
    
</body>
</html>
<?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/layouts/panelStruc.blade.php ENDPATH**/ ?>