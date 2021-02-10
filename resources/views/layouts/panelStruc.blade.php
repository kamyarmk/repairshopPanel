<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap core CSS -->

</head>
<body>
    <div id="app">
        <div  id="page-wrapper">
            <!-- Top Bar Start -->
            <div class="topbar container" id="topnav">
                <!-- Top navbar -->
                <nav class="navbar navbar-expand-lg navbar-light bg-primary" role="navigation">
                    <!-- LOGO -->
                    <div class="topbar-left col-2">
                        <div class="">
                            <a href="index.html" class="logo">
                                <img src="{{ asset('/images/logo.png')}}" alt="logo" class="logo-lg img-fluid" />
                                <img src="{{ asset('/images/logo_sm.png')}}" alt="logo" class="logo-sm d-none" />
                            </a>
                        </div>
                    </div>

                    <div class="collapse navbar-collapse navbar-left col-8">
                        <div id="navigation">
                            <!-- Navigation Menu-->
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a href="{{ route('home') }}" class="nav-link">
                                        <span><i class="ti-home"></i></span><span> {{ __('Dashboard') }} </span> </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('RegisterDevice') }}" class="nav-link"> <span><i class="ti-files"></i></span><span> {{ __('Register Device') }} </span> </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('DeviceList') }}" class="nav-link"><span><i class="ti-spray"></i></span><span> {{ __('List Device') }} </span> </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('UserList') }}" class="nav-link"> <span><i class="ti-widget"></i></span><span> {{ __('Users') }} </span> </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('Devices') }}" class="nav-link"> <span><i class="ti-widget"></i></span><span> {{ __('Reports') }} </span> </a>

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
                                    <input type="text" placeholder="{{ __('Search...') }}" class="form-control">
                                    <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </li> -->
                            <li class="nav-item dropdown">
                                <a href="#" data-target="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-bell"></i> <span class="label label-danger">3</span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <!--<li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>-->
                                    <li class="list-group notification-list" style="height: 267px;">
                                    <div class="slimscroll">
                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left p-r-10">
                                                    <em class="fa fa-diamond bg-primary"></em>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
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

                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
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

                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
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

                                            <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left p-r-10">
                                                    <em class="fa fa-diamond bg-primary"></em>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
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
                                    <!--<li>-->
                                        <!--<a href="javascript:void(0);" class="list-group-item text-right">-->
                                            <!--<small class="font-600">See all notifications</small>-->
                                        <!--</a>-->
                                    <!--</li>-->
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="{{ asset('/images/users/avatar-1.jpg') }}" alt="user-img" class="rounded-circle w-50"> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="ti-user m-r-10"></i> Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-settings m-r-10"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-lock m-r-10"></i> Lock screen</a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"><i class="ti-power-off m-r-10"></i> Logout</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- Top Bar End -->
            </div>
            <main class="py-4">
                @yield('content')
            </main>
        </div>
        
    </div>


    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>

    <!--Morris Chart-->
    <script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('plugins/raphael/raphael-min.js') }}"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('pages/jquery.dashboard.js') }}"></script>

    <!-- App Js -->
    <script src="{{ asset('js/jquery.app.js') }}"></script>
    
</body>
</html>
