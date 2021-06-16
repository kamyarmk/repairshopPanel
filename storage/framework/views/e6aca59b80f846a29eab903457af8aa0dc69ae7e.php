<!doctype html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Dashmix - Bootstrap 4 Admin Template &amp; UI Framework</title>

        <meta name="description" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <!-- Icons -->
        <link rel="shortcut icon" href="<?php echo e(asset('media/favicons/favicon.png')); ?>">
        <link rel="icon" sizes="192x192" type="image/png" href="<?php echo e(asset('media/favicons/favicon-192x192.png')); ?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('media/favicons/apple-touch-icon-180x180.png')); ?>">

        <!-- Fonts and Styles -->
        <?php echo $__env->yieldContent('css_before'); ?>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
        <link rel="preconnect" href="https://fonts.gstatic.com"> 
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" id="css-main" href="<?php echo e(mix('css/dashmix.css')); ?>">

        <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="<?php echo e(mix('css/themes/xwork.css')); ?>"> -->

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('js/plugins/bootstrap-tourist/bootstrap-tourist.css')); ?>">

        <?php echo $__env->yieldContent('css_after'); ?>

        <!-- Scripts -->
        <script>window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?>;</script>
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-dark'                              Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header


        Footer

            ''                                          Static Footer if no class is added
            'page-footer-fixed'                         Fixed Footer (please have in mind that the footer has a specific height when is fixed)

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-dark'                          Dark themed Header
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-dark'         Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="sidebar-o enable-page-overlay sidebar-dark side-scroll 
            <?php if(session()->get('locale') == 'fa'): ?>
                sidebar-r
            <?php endif; ?>
         page-header-fixed main-content-narrow">
            <!-- Side Overlay-->
            <aside id="side-overlay">
                <!-- Side Header -->
                <div class="bg-image" style="background-image: url('<?php echo e(asset('media/various/bg_side_overlay_header.jpg')); ?>');">
                    <div class="bg-primary-op">
                        <div class="content-header">
                            <!-- User Avatar -->
                            <a class="img-link mr-1" href="javascript:void(0)">
                                <img class="img-avatar img-avatar48" src="<?php echo e(asset('media/avatars/avatar10.jpg')); ?>" alt="">
                            </a>
                            <!-- END User Avatar -->

                            <!-- User Info -->
                            <div class="ml-2">
                                <a class="text-white font-w600" href="javascript:void(0)">George Taylor</a>
                                <div class="text-white-75 font-size-sm">Full Stack Developer</div>
                            </div>
                            <!-- END User Info -->

                            <!-- Close Side Overlay -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="ml-auto text-white" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                                <i class="fa fa-times-circle"></i>
                            </a>
                            <!-- END Close Side Overlay -->
                        </div>
                    </div>
                </div>
                <!-- END Side Header -->

                <!-- Side Content -->
                <div class="content-side">
                    <div class="block pull-x mb-0">
                        <!-- Color Themes -->
                        <!-- Toggle Themes functionality initialized in Template._uiHandleTheme() -->
                        <div class="block-content block-content-sm block-content-full bg-body">
                            <span class="text-uppercase font-size-sm font-w700">Color Themes</span>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row gutters-tiny text-center">
                                <div class="col-4 mb-1">
                                    <a class="d-block py-3 text-white font-size-sm font-w600 bg-default" data-toggle="theme" data-theme="default" href="#">
                                        Default
                                    </a>
                                </div>
                                <div class="col-4 mb-1">
                                    <a class="d-block py-3 text-white font-size-sm font-w600 bg-xwork" data-toggle="theme" data-theme="<?php echo e(mix('css/themes/xwork.css')); ?>" href="#">
                                        xWork
                                    </a>
                                </div>
                                <div class="col-4 mb-1">
                                    <a class="d-block py-3 text-white font-size-sm font-w600 bg-xmodern" data-toggle="theme" data-theme="<?php echo e(mix('css/themes/xmodern.css')); ?>" href="#">
                                        xModern
                                    </a>
                                </div>
                                <div class="col-4 mb-1">
                                    <a class="d-block py-3 text-white font-size-sm font-w600 bg-xeco" data-toggle="theme" data-theme="<?php echo e(mix('css/themes/xeco.css')); ?>" href="#">
                                        xEco
                                    </a>
                                </div>
                                <div class="col-4 mb-1">
                                    <a class="d-block py-3 text-white font-size-sm font-w600 bg-xsmooth" data-toggle="theme" data-theme="<?php echo e(mix('css/themes/xsmooth.css')); ?>" href="#">
                                        xSmooth
                                    </a>
                                </div>
                                <div class="col-4 mb-1">
                                    <a class="d-block py-3 text-white font-size-sm font-w600 bg-xinspire" data-toggle="theme" data-theme="<?php echo e(mix('css/themes/xinspire.css')); ?>" href="#">
                                        xInspire
                                    </a>
                                </div>
                                <div class="col-4 mb-1">
                                    <a class="d-block py-3 text-white font-size-sm font-w600 bg-xdream" data-toggle="theme" data-theme="<?php echo e(mix('css/themes/xdream.css')); ?>" href="#">
                                        xDream
                                    </a>
                                </div>
                                <div class="col-4 mb-1">
                                    <a class="d-block py-3 text-white font-size-sm font-w600 bg-xpro" data-toggle="theme" data-theme="<?php echo e(mix('css/themes/xpro.css')); ?>" href="#">
                                        xPro
                                    </a>
                                </div>
                                <div class="col-4 mb-1">
                                    <a class="d-block py-3 text-white font-size-sm font-w600 bg-xplay" data-toggle="theme" data-theme="<?php echo e(mix('css/themes/xplay.css')); ?>" href="#">
                                        xPlay
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END Color Themes -->

                        <!-- Sidebar -->
                        <div class="block-content block-content-sm block-content-full bg-body">
                            <span class="text-uppercase font-size-sm font-w700">Sidebar</span>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row gutters-tiny text-center">
                                <div class="col-6 mb-1">
                                    <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="sidebar_style_dark" href="javascript:void(0)">Dark</a>
                                </div>
                                <div class="col-6 mb-1">
                                    <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="sidebar_style_light" href="javascript:void(0)">Light</a>
                                </div>
                            </div>
                        </div>
                        <!-- END Sidebar -->

                        <!-- Header -->
                        <div class="block-content block-content-sm block-content-full bg-body">
                            <span class="text-uppercase font-size-sm font-w700">Header</span>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row gutters-tiny text-center mb-2">
                                <div class="col-6 mb-1">
                                    <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="header_style_dark" href="javascript:void(0)">Dark</a>
                                </div>
                                <div class="col-6 mb-1">
                                    <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="header_style_light" href="javascript:void(0)">Light</a>
                                </div>
                                <div class="col-6 mb-1">
                                    <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="header_mode_fixed" href="javascript:void(0)">Fixed</a>
                                </div>
                                <div class="col-6 mb-1">
                                    <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="header_mode_static" href="javascript:void(0)">Static</a>
                                </div>
                            </div>
                        </div>
                        <!-- END Header -->

                        <!-- Content -->
                        <div class="block-content block-content-sm block-content-full bg-body">
                            <span class="text-uppercase font-size-sm font-w700">Content</span>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row gutters-tiny text-center">
                                <div class="col-6 mb-1">
                                    <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="content_layout_boxed" href="javascript:void(0)">Boxed</a>
                                </div>
                                <div class="col-6 mb-1">
                                    <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="content_layout_narrow" href="javascript:void(0)">Narrow</a>
                                </div>
                                <div class="col-12 mb-1">
                                    <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="content_layout_full_width" href="javascript:void(0)">Full Width</a>
                                </div>
                            </div>
                        </div>
                        <!-- END Content -->
                    </div>
                    <div class="block pull-x mb-0">
                        <!-- Content -->
                        <div class="block-content block-content-sm block-content-full bg-body">
                            <span class="text-uppercase font-size-sm font-w700">Heading</span>
                        </div>
                        <div class="block-content">
                            <p>
                                Content..
                            </p>
                        </div>
                        <!-- END Content -->
                    </div>
                </div>
                <!-- END Side Content -->
            </aside>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <!--
                Sidebar Mini Mode - Display Helper classes

                Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

                Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
                Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
                Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
            -->
            <nav id="sidebar" aria-label="Main Navigation">
                <!-- Side Header -->
                <div class="bg-header-dark">
                    <div class="content-header bg-white-10">
                        <!-- Logo -->
                        <a class="font-w600 text-white tracking-wide" href="/">
                            <span class="smini-visible">
                                D<span class="opacity-75">x</span>
                            </span>
                            <span class="smini-hidden">
                                Dash<span class="opacity-75">mix</span>
                            </span>
                        </a>
                        <!-- END Logo -->

                        <!-- Options -->
                        <div>
                            <!-- Toggle Sidebar Style -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                            <a class="js-class-toggle text-white-75" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');" href="javascript:void(0)">
                                <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                            </a>
                            <!-- END Toggle Sidebar Style -->

                            <!-- Close Sidebar, Visible only on mobile screens -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="d-lg-none text-white ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                                <i class="fa fa-times-circle"></i>
                            </a>
                            <!-- END Close Sidebar -->
                        </div>
                        <!-- END Options -->
                    </div>
                </div>
                <!-- END Side Header -->

                <!-- Sidebar Scrolling -->
                <div class="js-sidebar-scroll">
                <!-- Side Navigation -->
                    <div class="content-side content-side-full">
                        <ul class="nav-main">
                            <li class="nav-main-item">
                                <a class="nav-main-link<?php echo e(request()->is('dashboard') ? ' active' : ''); ?>" href="/dashboard">
                                    <i class="nav-main-link-icon fa fa-tachometer-alt"></i>
                                    <span class="nav-main-link-name"><?php echo e(__('Dashboard')); ?></span>
                                    <span class="nav-main-link-badge badge badge-pill badge-success">5</span>
                                </a>
                            </li>
                            
                            <!-- Management Area -->
                            <li class="nav-main-heading"><?php echo e(__('Management')); ?></li>
                            <li class="nav-main-item<?php echo e(request()->is('admins/*') ? ' open' : ''); ?>">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                    <i class="nav-main-link-icon fa fa-user"></i>
                                    <span class="nav-main-link-name"><?php echo e(__('Users')); ?></span>
                                </a>
                                <!-- Admins Area -->
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link<?php echo e(request()->is('admins/list') ? ' active' : ''); ?>" href="/admins/list">
                                            <span class="nav-main-link-name"><?php echo e(__('All Users')); ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link<?php echo e(request()->is('admins/add') ? ' active' : ''); ?>" href="/admins/add">
                                            <span class="nav-main-link-name"><?php echo e(__('Add New')); ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link<?php echo e(request()->is('admins/department') ? ' active' : ''); ?>" href="/admins/department">
                                            <span class="nav-main-link-name"><?php echo e(__('Departments')); ?></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item<?php echo e(request()->is('customer/*') ? ' open' : ''); ?>">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                    <i class="nav-main-link-icon fa fa-users"></i>
                                    <span class="nav-main-link-name"><?php echo e(__('Customers')); ?></span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link<?php echo e(request()->is('customer/list') ? ' active' : ''); ?>" href="/customer/list">
                                            <span class="nav-main-link-name"><?php echo e(__('All Customers')); ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link<?php echo e(request()->is('customer/add') ? ' active' : ''); ?>" href="/customer/add">
                                            <span class="nav-main-link-name"><?php echo e(__('Add New')); ?></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item<?php echo e(request()->is('project/*') ? ' open' : ''); ?>">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                    <i class="nav-main-link-icon fa fa-mobile"></i>
                                    <span class="nav-main-link-name"><?php echo e(__('Devices')); ?></span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link<?php echo e(request()->is('project/list') ? ' active' : ''); ?>" href="/project/list">
                                            <span class="nav-main-link-name"><?php echo e(__('All Devices')); ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link<?php echo e(request()->is('project/add') ? ' active' : ''); ?>" href="/project/add">
                                            <span class="nav-main-link-name"><?php echo e(__('Add New')); ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link<?php echo e(request()->is('project/category') ? ' active' : ''); ?>" href="/project/category">
                                            <span class="nav-main-link-name"><?php echo e(__('Categories')); ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link<?php echo e(request()->is('project/variable') ? ' active' : ''); ?>" href="/project/variable">
                                            <span class="nav-main-link-name"><?php echo e(__('Variables')); ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link<?php echo e(request()->is('project/problems') ? ' active' : ''); ?>" href="/project/problems">
                                            <span class="nav-main-link-name"><?php echo e(__('Problems')); ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link<?php echo e(request()->is('project/qc') ? ' active' : ''); ?>" href="/project/qc">
                                            <span class="nav-main-link-name"><?php echo e(__('Quality Check')); ?></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item<?php echo e(request()->is('product/*') ? ' open' : ''); ?>">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                    <i class="nav-main-link-icon fa fa-boxes"></i>
                                    <span class="nav-main-link-name"><?php echo e(__('Products')); ?></span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link<?php echo e(request()->is('product/list') ? ' active' : ''); ?>" href="/product/list">
                                            <span class="nav-main-link-name"><?php echo e(__('All Products')); ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link<?php echo e(request()->is('product/add') ? ' active' : ''); ?>" href="/product/add">
                                            <span class="nav-main-link-name"><?php echo e(__('Add New')); ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link<?php echo e(request()->is('product/category') ? ' active' : ''); ?>" href="/product/category">
                                            <span class="nav-main-link-name"><?php echo e(__('Categories')); ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link<?php echo e(request()->is('product/tags') ? ' active' : ''); ?>" href="/product/tags">
                                            <span class="nav-main-link-name"><?php echo e(__('Tags')); ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link<?php echo e(request()->is('product/attributes') ? ' active' : ''); ?>" href="/product/attributes">
                                            <span class="nav-main-link-name"><?php echo e(__('Attributes')); ?></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item<?php echo e(request()->is('invoice/*') ? ' open' : ''); ?>">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                    <i class="nav-main-link-icon fa fa-wallet"></i>
                                    <span class="nav-main-link-name"><?php echo e(__('Accounting')); ?></span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link<?php echo e(request()->is('invoice/list') ? ' active' : ''); ?>" href="/invoice/list">
                                            <span class="nav-main-link-name"><?php echo e(__('All Invoices')); ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link<?php echo e(request()->is('invoice/add') ? ' active' : ''); ?>" href="/invoice/add">
                                            <span class="nav-main-link-name"><?php echo e(__('New Invoice')); ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link<?php echo e(request()->is('invoice/details') ? ' active' : ''); ?>" href="/invoice/details">
                                            <span class="nav-main-link-name"><?php echo e(__('Reports')); ?></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link<?php echo e(request()->is('report/general') ? ' active' : ''); ?>" href="/report/general">
                                    <i class="nav-main-link-icon fa fa-chart-pie"></i>
                                    <span class="nav-main-link-name"><?php echo e(__('Reports')); ?></span>
                                </a>
                            </li>

                            <li class="nav-main-heading"><?php echo e(__('Support')); ?></li>
                            <li class="nav-main-item">
                                <a class="nav-main-link<?php echo e(request()->is('message') ? ' active' : ''); ?>" href="/message">
                                    <i class="nav-main-link-icon fa fa-comments"></i>
                                    <span class="nav-main-link-name"><?php echo e(__('Message')); ?></span>
                                    <span class="nav-main-link-badge badge badge-pill badge-success">25</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link<?php echo e(request()->is('notifications') ? ' active' : ''); ?>" href="/notifications">
                                    <i class="nav-main-link-icon fa fa-bell"></i>
                                    <span class="nav-main-link-name"><?php echo e(__('Notifications')); ?></span>
                                    <span class="nav-main-link-badge badge badge-pill badge-success">45</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link<?php echo e(request()->is('bulkmessage') ? ' active' : ''); ?>" href="/bulkmessage">
                                    <i class="nav-main-link-icon fa fa-bullhorn"></i>
                                    <span class="nav-main-link-name"><?php echo e(__('Bulk Messaging')); ?></span>
                                </a>
                            </li>

                            <li class="nav-main-heading">Various</li>
                            <li class="nav-main-item<?php echo e(request()->is('pages/*') ? ' open' : ''); ?>">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                    <i class="nav-main-link-icon fa fa-lightbulb"></i>
                                    <span class="nav-main-link-name">Examples</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="/pages/datatables">
                                            <span class="nav-main-link-name">DataTables</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link<?php echo e(request()->is('pages/slick') ? ' active' : ''); ?>" href="/pages/slick">
                                            <span class="nav-main-link-name">Slick Slider</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link<?php echo e(request()->is('pages/blank') ? ' active' : ''); ?>" href="/pages/blank">
                                            <span class="nav-main-link-name">Blank</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-heading"><?php echo e(__('System')); ?></li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                    <i class="nav-main-link-icon fa fa-globe"></i>
                                    <span class="nav-main-link-name">Language</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="/language/en">
                                            <span class="nav-main-link-name">English</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="/language/fa">
                                            <span class="nav-main-link-name">Persian</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li class="nav-main-item">
                                <a class="nav-main-link<?php echo e(request()->is('settings') ? ' active' : ''); ?>" href="/settings">
                                    <i class="nav-main-link-icon fa fa-cog"></i>
                                    <span class="nav-main-link-name"><?php echo e(__('Settings')); ?></span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="/">
                                    <i class="nav-main-link-icon fa fa-clipboard-check"></i>
                                    <span class="nav-main-link-name"><?php echo e(__('Logs')); ?></span>
                                </a>
                            </li>
                            <li class="nav-main-heading"><?php echo e(__('Resepto Support')); ?></li>
                            <li class="nav-main-item<?php echo e(request()->is('pages/*') ? ' open' : ''); ?>">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                    <i class="nav-main-link-icon fa fa-ticket-alt"></i>
                                    <span class="nav-main-link-name"><?php echo e(__('Support')); ?></span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link<?php echo e(request()->is('pages/datatables') ? ' active' : ''); ?>" href="/pages/datatables">
                                            <span class="nav-main-link-name"><?php echo e(__('Send An Email')); ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link<?php echo e(request()->is('pages/slick') ? ' active' : ''); ?>" href="/pages/slick">
                                            <span class="nav-main-link-name"><?php echo e(__('Send a Ticket')); ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link<?php echo e(request()->is('pages/blank') ? ' active' : ''); ?>" href="/pages/blank">
                                            <span class="nav-main-link-name"><?php echo e(__('Call Us')); ?></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link<?php echo e(request()->is('planchange') ? ' active' : ''); ?>" href="/planchange">
                                    <i class="nav-main-link-icon fa fa-layer-group"></i>
                                    <span class="nav-main-link-name"><?php echo e(__('planchange')); ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>
                <!-- END Sidebar Scrolling -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="row">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <div class="co-1">
                            <button type="button" class="btn btn-dual" data-toggle="layout" data-action="sidebar_toggle">
                                <i class="fa fa-fw fa-bars"></i>
                            </button>
                        </div>
                        <!-- END Toggle Sidebar -->

                        <!-- Open Search Section -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <div class="col-5">
                            <button type="button" class="btn btn-dual" data-toggle="layout" data-action="header_search_on">
                                <i class="fa fa-fw fa-search"></i> <span class="ml-1 d-none d-sm-inline-block"><?php echo e(__('Search')); ?></span>
                            </button>
                        </div>
                        
                        <!-- END Open Search Section -->
                        <!-- Quick Device Add Button -->
                        <div class="col-5">
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary dropdown-toggle" id="dropdown-default-hero-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="ml-1 d-none d-sm-inline-block"><?php echo e(__('Add New')); ?></span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdown-default-hero-primary" style="">
                                    <a class="dropdown-item" href="/project/add"><?php echo e(__('Device')); ?></a>
                                    <a class="dropdown-item" href="/customer/add"><?php echo e(__('Customer')); ?></a>
                                    <a class="dropdown-item" href="/invoice/add"><?php echo e(__('Invoice')); ?></a>
                                    <a class="dropdown-item" href="/admins/add"><?php echo e(__('Staff')); ?></a>
                                </div>
                            </div>
                        </div>
                        <!-- Quick Device Add Button -->

                        

                        
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div>
                        <!-- Update Button -->
                        <a href="/update" class="btn btn-dual bg-warning text-white" data-toggle="layout" data-action="updatepanel">
                            <i class="fa fa-sync fa-spin text-xsmooth-dark"></i>
                        </a>
                        <!-- Update Button -->
                        <!-- Tour Button -->
                            <button type="button" class="btn btn-dual bg-success text-white" onclick="startTour()">
                                <i class="fa fa-hands-helping"></i> <span class="ml-1 d-none d-sm-inline-block">Tour</span>
                            </button>
                        <!-- Tour Button -->
                        <!-- User Dropdown -->
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-fw fa-user d-sm-none"></i>
                                <span class="d-none d-sm-inline-block">Admin</span>
                                <i class="fa fa-fw fa-angle-down ml-1 d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="page-header-user-dropdown">
                                <div class="p-2">
                                    <a class="dropdown-item" href="/settings">
                                        <i class="far fa-fw fa-user mr-1"></i> Profile
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                        <span><i class="far fa-fw fa-envelope mr-1"></i> Inbox</span>
                                        <span class="badge badge-primary">3</span>
                                    </a>
                                    <a class="dropdown-item" href="/settings">
                                        <i class="far fa-fw fa-file-alt mr-1"></i> Billing
                                    </a>
                                    <a class="dropdown-item" href="/settings">
                                        <i class="far fa-fw fa-shield-alt mr-1"></i> Security
                                    </a>

                                    <div role="separator" class="dropdown-divider"></div>
                                    <form action="/logout" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <button class="dropdown-item">
                                            <i class="far fa-fw fa-arrow-alt-circle-left mr-1"></i> Sign Out    
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- END User Dropdown -->

                        <!-- Notifications Dropdown -->
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-dual" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-fw fa-bell"></i>
                                <span class="badge badge-secondary badge-pill">5</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                                <div class="bg-primary-darker rounded-top font-w600 text-white text-center p-3">
                                   Notifications
                                </div>
                                <ul class="nav-items my-2">
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mx-3">
                                                <i class="fa fa-fw fa-check-circle text-success"></i>
                                            </div>
                                            <div class="media-body font-size-sm pr-2">
                                                <div class="font-w600">App was updated to v5.6!</div>
                                                <div class="text-muted font-italic">3 min ago</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mx-3">
                                                <i class="fa fa-fw fa-user-plus text-info"></i>
                                            </div>
                                            <div class="media-body font-size-sm pr-2">
                                                <div class="font-w600">New Subscriber was added! You now have 2580!</div>
                                                <div class="text-muted font-italic">10 min ago</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mx-3">
                                                <i class="fa fa-fw fa-times-circle text-danger"></i>
                                            </div>
                                            <div class="media-body font-size-sm pr-2">
                                                <div class="font-w600">Server backup failed to complete!</div>
                                                <div class="text-muted font-italic">30 min ago</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mx-3">
                                                <i class="fa fa-fw fa-exclamation-circle text-warning"></i>
                                            </div>
                                            <div class="media-body font-size-sm pr-2">
                                                <div class="font-w600">You are running out of space. Please consider upgrading your plan.</div>
                                                <div class="text-muted font-italic">1 hour ago</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mx-3">
                                                <i class="fa fa-fw fa-plus-circle text-primary"></i>
                                            </div>
                                            <div class="media-body font-size-sm pr-2">
                                                <div class="font-w600">New Sale! + $30</div>
                                                <div class="text-muted font-italic">2 hours ago</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="p-2 border-top">
                                    <a class="btn btn-light btn-block text-center" href="/notifications">
                                        <i class="fa fa-fw fa-eye mr-1"></i> View All
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END Notifications Dropdown -->

                        <!-- Toggle Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-dual" data-toggle="layout" data-action="side_overlay_toggle">
                            <i class="far fa-fw fa-list-alt"></i>
                        </button>
                        <!-- END Toggle Side Overlay -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header bg-primary">
                    <div class="content-header">
                        <form class="w-100" action="/dashboard" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <button type="button" class="btn btn-primary" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-fw fa-times-circle"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control border-0" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                            </div>
                        </form>
                   </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-primary-darker">
                    <div class="content-header">
                        <div class="w-100 text-center">
                            <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="bg-body-light">
                <div class="content py-0">
                    <div class="row font-size-sm">
                        <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-right">
                            Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                        </div>
                        <div class="col-sm-6 order-sm-1 text-center text-sm-left">
                            <a class="font-w600" href="https://1.envato.market/r6y" target="_blank">Dashmix</a> &copy; <span data-toggle="year-copy"></span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Dashmix Core JS -->
        
        <script src="<?php echo e(mix('js/dashmix.app.js')); ?>"></script>
        

        <!-- Laravel Scaffolding JS -->
        <!-- <script src="<?php echo e(mix('/js/laravel.app.js')); ?>"></script> -->

        <!-- Page JS Plugins -->
        <script src="<?php echo e(asset('js/plugins/jquery-sparkline/jquery.sparkline.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/plugins/chart.js/Chart.bundle.min.js')); ?>"></script>

        <!-- Page JS Code -->
        <!-- <script src="<?php echo e(asset('js/pages/be_pages_dashboard_v1.min.js')); ?>"></script> -->
        <!-- Page JS Code -->
        <!-- public/ -->
        <script src="<?php echo e(asset('js/chart.app.js')); ?>"></script>


        <!-- Page JS Plugins -->
        <script src="<?php echo e(asset('js/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/plugins/datatables/dataTables.bootstrap4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/plugins/datatables/buttons/dataTables.buttons.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/plugins/datatables/buttons/buttons.print.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/plugins/datatables/buttons/buttons.html5.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/plugins/datatables/buttons/buttons.flash.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/plugins/datatables/buttons/buttons.colVis.min.js')); ?>"></script>
        
        
        
        <script src="<?php echo e(asset('js/dataTables.app.js')); ?>"></script>

        <!-- Page JS Plugins -->
        <script src="<?php echo e(asset('js/plugins/bootstrap-tourist/bootstrap-tourist.min.js')); ?>"></script>

        <!-- Page JS Code -->
        <!-- <script src="<?php echo e(asset('js/pages/be_comp_tour.min.js')); ?>"></script> -->
        

        <!-- Page JS Helpers (jQuery Sparkline plugin) -->
        <script>jQuery(function(){Dashmix.helpers('sparkline');});</script>

        <script>
            let tour = new Tour({
            framework: 'bootstrap4',
            storage: false, // set storage to true to show the tour once
            showProgressBar: false,
            template: `<div class="popover" role="tooltip">
                <div class="arrow"></div>
                <h3 class="popover-header"></h3>
                <div class="popover-body"></div>
                <div class="popover-navigation">
                    <div class="btn-group mr-1">
                        <button class="btn btn-sm btn-primary" data-role="prev">
                            <i class="fa fa-arrow-left mr-1"></i> Previous
                        </button>
                        <button class="btn btn-sm btn-primary" data-role="next">
                            Next <i class="fa fa-arrow-right ml-1"></i>
                        </button>
                        <button class="btn btn-sm btn-primary" data-role="pause-resume" data-pause-text="Pause" data-resume-text="Resume">
                            Pause
                        </button>
                    </div>
                    <button class="btn btn-sm btn-alt-danger" data-role="end">
                        Skip
                    </button>
                </div>
            </div>`,
            steps: [{
                    placement: 'bottom',
                    element: '#page-header',
                    title: 'Page Header',
                    content: 'This is your page header. All your vital account and UI settings can be managed from here.'
                },
                {
                    placement: 'right',
                    element: '#sidebar',
                    title: 'Sidebar',
                    content: 'Your main navigation can be found here. You can use it to navigate through all available pages.'
                },
                {
                    placement: 'bottom',
                    element: '#example-page-heading',
                    title: 'Page Heading',
                    content: 'This is your main heading with vital info regarding your existing page.'
                },
                {
                    placement: 'top',
                    element: '#page-footer',
                    title: 'Page Footer',
                    content: 'This is where your page footer exists. All non vital information can be put in here.'
                }
            ]
        });
        

        function startTour(){
            tour.start();
        }
        </script>
        
        

        <?php echo $__env->yieldContent('js_after'); ?>
    </body>
</html>
<?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/layouts/backend.blade.php ENDPATH**/ ?>