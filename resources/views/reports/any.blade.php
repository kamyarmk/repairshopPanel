@extends('layouts.backend')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Statistics</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Widgets</li>
                        <li class="breadcrumb-item active" aria-current="page">Statistics</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Simple -->
        <h2 class="content-heading">Simple</h2>
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fa fa-2x fa-arrow-up text-primary"></i>
                        </div>
                        <div class="ml-3 text-right">
                            <p class="font-size-h3 font-w300 mb-0">
                                + 30%
                            </p>
                            <p class="text-muted mb-0">
                                Earnings
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <div>
                            <i class="far fa-2x fa-user-circle text-success"></i>
                        </div>
                        <div class="ml-3 text-right">
                            <p class="font-size-h3 font-w300 mb-0">
                                +78%
                            </p>
                            <p class="text-muted mb-0">
                                Users
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <div class="mr-3">
                            <p class="font-size-h3 font-w300 mb-0">
                                960
                            </p>
                            <p class="text-muted mb-0">
                                Sales
                            </p>
                        </div>
                        <div>
                            <i class="fa fa-2x fa-chart-area text-danger"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <div class="mr-3">
                            <p class="font-size-h3 font-w300 mb-0">
                                359
                            </p>
                            <p class="text-muted mb-0">
                                Projects
                            </p>
                        </div>
                        <div>
                            <i class="fa fa-2x fa-box text-warning"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-shadow bg-primary" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fa fa-2x fa-arrow-alt-circle-up text-primary-lighter"></i>
                        </div>
                        <div class="ml-3 text-right">
                            <p class="text-white font-size-h3 font-w300 mb-0">
                                + 45%
                            </p>
                            <p class="text-white-75 mb-0">
                                Earnings
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-shadow bg-success" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <div>
                            <i class="far fa-2x fa-user text-success-light"></i>
                        </div>
                        <div class="ml-3 text-right">
                            <p class="text-white font-size-h3 font-w300 mb-0">
                                +98%
                            </p>
                            <p class="text-white-75 mb-0">
                                Users
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-shadow bg-danger" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <div class="mr-3">
                            <p class="text-white font-size-h3 font-w300 mb-0">
                                450
                            </p>
                            <p class="text-white-75 mb-0">
                                Sales
                            </p>
                        </div>
                        <div>
                            <i class="fa fa-2x fa-chart-line text-black-50"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-shadow bg-warning" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <div class="mr-3">
                            <p class="text-white font-size-h3 font-w300 mb-0">
                                63
                            </p>
                            <p class="text-white-75 mb-0">
                                Projects
                            </p>
                        </div>
                        <div>
                            <i class="fa fa-2x fa-boxes text-black-50"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="row text-center">
                            <div class="col-4">
                                <div class="py-3 border-right">
                                    <div class="item item-circle bg-body-light mx-auto">
                                        <i class="fa fa-briefcase text-primary"></i>
                                    </div>
                                    <p class="font-size-h3 font-w300 mt-3 mb-0">
                                        61
                                    </p>
                                    <p class="text-muted mb-0">
                                        Projects
                                    </p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="py-3 border-right">
                                    <div class="item item-circle bg-body-light mx-auto">
                                        <i class="fa fa-chart-line text-primary"></i>
                                    </div>
                                    <p class="font-size-h3 font-w300 mt-3 mb-0">
                                        50
                                    </p>
                                    <p class="text-muted mb-0">
                                        Sales
                                    </p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="py-3">
                                    <div class="item item-circle bg-body-light mx-auto">
                                        <i class="fa fa-users text-primary"></i>
                                    </div>
                                    <p class="font-size-h3 font-w300 mt-3 mb-0">
                                        15
                                    </p>
                                    <p class="text-muted mb-0">
                                        Clients
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a class="block block-rounded bg-gd-sublime" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="row text-center">
                            <div class="col-4">
                                <div class="py-3 border-right border-black-op">
                                    <div class="item item-circle bg-black-25 mx-auto">
                                        <i class="fa fa-briefcase text-white"></i>
                                    </div>
                                    <p class="text-white font-size-h3 font-w300 mt-3 mb-0">
                                        61
                                    </p>
                                    <p class="text-white-75 mb-0">
                                        Projects
                                    </p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="py-3 border-right border-black-op">
                                    <div class="item item-circle bg-black-25 mx-auto">
                                        <i class="fa fa-chart-line text-white"></i>
                                    </div>
                                    <p class="text-white font-size-h3 font-w300 mt-3 mb-0">
                                        50
                                    </p>
                                    <p class="text-white-75 mb-0">
                                        Sales
                                    </p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="py-3">
                                    <div class="item item-circle bg-black-25 mx-auto">
                                        <i class="fa fa-users text-white"></i>
                                    </div>
                                    <p class="text-white font-size-h3 font-w300 mt-3 mb-0">
                                        15
                                    </p>
                                    <p class="text-white-75 mb-0">
                                        Clients
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Simple -->
        
    </div>
    <!-- END Page Content -->
@endsection