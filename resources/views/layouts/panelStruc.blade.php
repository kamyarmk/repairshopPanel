<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.0/Chart.min.js"></script>
    <script src="{{ asset('js/utils.js') }}" defer></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
	canvas {
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}
	</style>


    <!--Morris Chart CSS -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- Bootstrap core CSS -->


</head>
<body>
    <div id="app">
        <div  id="page-wrapper">
            <!-- Top Bar Start -->
            <div class="topbar container bg-white p-1 border-1 rounded-bottom border" id="topnav">
                <!-- Top navbar -->
                <nav class="navbar navbar-expand-lg navbar-dark text-menu" role="navigation">
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
                                <li class="nav-item ml-3">
                                    <a href="{{ route('home') }}" class="nav-link text-dark fw-bold">
                                        <span class="ml-1"><i class="fas fa-tachometer-alt"></i></span><span> {{ __('Dashboard') }} </span> 
                                    </a>
                                </li>

                                <li class="nav-item ml-3">
                                    <a href="{{ route('RegisterDevice') }}" class="nav-link text-dark fw-bold">
                                        <span class="ml-1"><i class="fas fa-laptop-medical"></i></span><span> {{ __('Register Device') }} </span> 
                                    </a>
                                </li>

                                <li class="nav-item ml-3">
                                    <a href="{{ route('DeviceList') }}" class="nav-link text-dark fw-bold">
                                        <span class="ml-1"><i class="fas fa-tablet-alt"></i></span><span> {{ __('List Device') }} </span> 
                                    </a>
                                </li>

                                <li class="nav-item ml-3">
                                    <a href="{{ route('UserList') }}" class="nav-link text-dark fw-bold"> 
                                        <span class="ml-1"><i class="fas fa-users"></i></span><span> {{ __('Users') }} </span> 
                                    </a>
                                </li>

                                <li class="nav-item ml-3">
                                    <a href="{{ route('Devices') }}" class="nav-link text-dark fw-bold">
                                        <span class="ml-1"><i class="fas fa-file-alt"></i></span><span> {{ __('Reports') }} </span> 
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
                                    <input type="text" placeholder="{{ __('Search...') }}" class="form-control">
                                    <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </li> -->
                            <li class="nav-item ml-3 dropdown justify-content-between d-flex align-items-center">
                                <a href="#" data-target="#" class="text-dark fw-bold ml-3" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell mt-3" style="font-size: 1.5em;"></i> <span class="badge badge-danger" style="position: absolute; top:14px; left: 1.2em; color: #fff;">3</span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 300px !important;">
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

                            <li class="nav-item ml-3 dropdown justify-content-between d-flex align-items-center">
                                <a href="" class="dropdown-toggle menu-right-item profile text-dark fw-bold" data-toggle="dropdown" aria-expanded="true"> 
                                    <i class="fas fa-user mt-3" style="font-size: 1.5em"></i>
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
                                    <li class="dropdown-item"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
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
    

    <!-- Dashboard init -->
    

    <!-- App Js -->
    <script src="{{ asset('js/jquery.app.js') }}"></script>
    
</body>
</html>
