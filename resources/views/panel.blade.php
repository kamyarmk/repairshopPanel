@extends('layouts.panelStruc')

@section('content')
<!-- Page content start -->
<div class="page-contentbar">

<!-- START PAGE CONTENT -->
<div id="page-right-content">

    <div class="container card p-4">
        <div class="row mb-3">
            <div class="col-sm-12">
                <h4 class="header-title mt-0 mb-3"><i class="fas fa-tachometer-alt mr-3"></i>{{ __('Dashboard') }}</h4>
                <div class="dropdown-divider"></div>
            </div>
        </div> <!-- end row -->

        <div class="row mb-3">
            <div class="col-sm-3">
                <a href="#" class="card d-flex justify-content-center align-items-center border border-warning btn btn-warning shadow-sm rounded">
                    <div class="card-body">
                        <h2 class="mb-20">$<span>22.56</span></h2>
                        <h6 class="text-muted m-t-0 text-uppercase">{{ __('Device In Queue') }}</h6>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="#" class="card d-flex justify-content-center align-items-center border border-info btn btn-info shadow-sm rounded">
                    <div class="card-body">
                        <h2 class="mb-20">9,754</h2>
                        <h6 class="text-muted m-t-0 text-uppercase">{{ __('Under Repair') }}</h6>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="#" class=" card d-flex justify-content-center align-items-center border border-primary btn btn-primary shadow-sm rounded">
                    <div class="card-body">
                        <h2 class="mb-20 text-muted">1,890</h2>
                        <h6 class="text-muted m-t-0 text-uppercase">{{ __('Under Test') }}</h6>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="#" class=" card d-flex justify-content-center align-items-center border border-success btn btn-success shadow-sm rounded">
                    <div class="card-body">
                        <h2 class="mb-20 text-muted">$ 22.56</h2>
                        <h6 class="text-muted m-t-0 text-uppercase">{{ __('Repaired') }}</h6>
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
                        <h2 class="m-b-20">$<span>22.56</span></h2>
                    </div>
                </a>
            </div>

            <div class="col-sm-3">
                <a href="#" class=" card d-flex bg-warning justify-content-center align-items-center border border-warning btn btn-warning shadow-sm rounded">
                    <div class="card-body text-dark">
                        <h6 class="text-dark m-t-0 text-uppercase">{{ __('Late Delivery') }}</h6>
                        <h2 class="m-b-20">9,754</h2>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="#" class=" card bg-danger d-flex bg-warning justify-content-center align-items-center border border-danger btn btn-danger shadow-sm rounded">
                    <div class="card-body text-white">
                        <h6 class="text-white m-t-0 text-uppercase">{{ __('Delivery Problem') }}</h6>
                        <h2 class="m-b-20"><span>1,890</span></h2>
                    </div>
                </a>
            </div>

            <div class="col-sm-3 ">
                <a href="#" class=" card bg-danger d-flex bg-warning justify-content-center align-items-center border border-danger btn btn-danger shadow-sm rounded">
                    <div class="card-body text-white">
                        <h6 class="text-white m-t-0 text-uppercase">{{ __('Refund') }}</h6>
                        <h2 class="m-b-20">$<span>22.56</span></h2>
                    </div>
                </a>
            </div>

        </div>
        <!-- end row -->

        <!-- main Data  -->



        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="m-t-0">{{ __('Total Revenue') }}</h4>
                    <div class="text-center">
                        <ul class="list-inline chart-detail-list">
                            <li>
                                <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-primary"></i>Series A</h5>
                            </li>
                            <li>
                                <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-muted"></i>Series B</h5>
                            </li>
                        </ul>
                    </div>
                    <div id="dashboard-bar-stacked" style="height: 300px;"></div>
                </div>
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="m-t-0">{{ __('Device Comparison') }}</h4>
                    <div class="text-center">
                        <ul class="list-inline chart-detail-list">
                            <li>
                                <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-primary"></i>Mobiles</h5>
                            </li>
                            <li>
                                <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-info"></i>Tablets</h5>
                            </li>
                        </ul>
                    </div>
                    <div id="dashboard-line-chart" style="height: 300px;"></div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->


        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="m-t-0">{{ __('Users') }}</h4>
                    <div class="table-responsive">
                        <table class="table table-hover mails m-0 table table-actions-bar">
                            <thead>
                                <tr>
                                    <th style="min-width: 95px;">
                                        <div class="checkbox checkbox-primary checkbox-single m-r-15">
                                            <input id="action-checkbox" type="checkbox">
                                            <label for="action-checkbox"></label>
                                        </div>
                                        <!--<div class="btn-group dropdown">-->
                                            <!--<button type="button" class="btn btn-default btn-xs dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="caret"></i></button>-->
                                            <!--<ul class="dropdown-menu" role="menu">-->
                                                <!--<li><a href="#">Action</a></li>-->
                                                <!--<li><a href="#">Another action</a></li>-->
                                                <!--<li><a href="#">Something else here</a></li>-->
                                                <!--<li class="divider"></li>-->
                                                <!--<li><a href="#">Separated link</a></li>-->
                                            <!--</ul>-->
                                        <!--</div>-->
                                    </th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('E-Mail Address') }}</th>
                                    <th>{{ __('Products') }}</th>
                                    <th>{{ __('Start Date') }}</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <div class="checkbox checkbox-primary m-r-15">
                                            <input id="checkbox2" type="checkbox">
                                            <label for="checkbox2"></label>
                                        </div>

                                        <img src="assets/images/users/avatar-2.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                    </td>

                                    <td>
                                        Tomaslau
                                    </td>

                                    <td>
                                        <a href="#" class="text-muted">tomaslau@dummy.com</a>
                                    </td>

                                    <td>
                                        <b><a href="" class="text-dark"><b>356</b></a> </b>
                                    </td>

                                    <td>
                                        01/11/2003
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        <div class="checkbox checkbox-primary m-r-15">
                                            <input id="checkbox1" type="checkbox">
                                            <label for="checkbox1"></label>
                                        </div>

                                        <img src="assets/images/users/avatar-1.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                    </td>

                                    <td>
                                        Chadengle
                                    </td>

                                    <td>
                                        <a href="#" class="text-muted">chadengle@dummy.com</a>
                                    </td>

                                    <td>
                                        <b><a href="" class="text-dark"><b>568</b></a> </b>
                                    </td>

                                    <td>
                                        01/11/2003
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        <div class="checkbox checkbox-primary m-r-15">
                                            <input id="checkbox3" type="checkbox">
                                            <label for="checkbox3"></label>
                                        </div>

                                        <img src="assets/images/users/avatar-3.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                    </td>

                                    <td>
                                        Stillnotdavid
                                    </td>

                                    <td>
                                        <a href="#" class="text-muted">stillnotdavid@dummy.com</a>
                                    </td>
                                    <td>
                                        <b><a href="" class="text-dark"><b>201</b></a> </b>
                                    </td>

                                    <td>
                                        12/11/2003
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        <div class="checkbox checkbox-primary m-r-15">
                                            <input id="checkbox4" type="checkbox">
                                            <label for="checkbox4"></label>
                                        </div>

                                        <img src="assets/images/users/avatar-4.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                    </td>

                                    <td>
                                        Kurafire
                                    </td>

                                    <td>
                                        <a href="#" class="text-muted">kurafire@dummy.com</a>
                                    </td>

                                    <td>
                                        <b><a href="" class="text-dark"><b>56</b></a> </b>
                                    </td>

                                    <td>
                                        14/11/2003
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        <div class="checkbox checkbox-primary m-r-15">
                                            <input id="checkbox5" type="checkbox">
                                            <label for="checkbox5"></label>
                                        </div>

                                        <img src="assets/images/users/avatar-5.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                    </td>

                                    <td>
                                        Shahedk
                                    </td>

                                    <td>
                                        <a href="#" class="text-muted">shahedk@dummy.com</a>
                                    </td>

                                    <td>
                                        <b><a href="" class="text-dark"><b>356</b></a> </b>
                                    </td>

                                    <td>
                                        20/11/2003
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        <div class="checkbox checkbox-primary m-r-15">
                                            <input id="checkbox6" type="checkbox">
                                            <label for="checkbox6"></label>
                                        </div>

                                        <img src="assets/images/users/avatar-6.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                    </td>

                                    <td>
                                        Adhamdannaway
                                    </td>

                                    <td>
                                        <a href="#" class="text-muted">adhamdannaway@dummy.com</a>
                                    </td>

                                    <td>
                                        <b><a href="" class="text-dark"><b>956</b></a> </b>
                                    </td>

                                    <td>
                                        24/11/2003
                                    </td>

                                </tr>


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
                    <div class="pull-right hidden-xs">
                        Project Completed <strong class="text-custom">43%</strong>.
                    </div>
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
