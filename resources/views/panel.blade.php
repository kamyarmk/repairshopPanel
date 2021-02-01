@extends('layouts.panelStruc')

@section('content')
<!-- Page content start -->
<div class="page-contentbar">

<!-- START PAGE CONTENT -->
<div id="page-right-content">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="header-title m-t-0 m-b-20">Dashboard</h4>
            </div>
        </div> <!-- end row -->

        <div class="row">
            <div class="col-sm-4">
                <div class="card-box">
                    <a href="#" class="btn btn-sm btn-default pull-right">View</a>
                    <h6 class="text-muted m-t-0 text-uppercase">Product Sold</h6>
                    <h2 class="m-b-20"><span>1,890</span></h2>
                    <div class="progress progress-sm m-0">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                            <span class="sr-only">77% Complete</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card-box">
                    <a href="#" class="btn btn-sm btn-default pull-right">View</a>
                    <h6 class="text-muted m-t-0 text-uppercase">Average Price</h6>
                    <h2 class="m-b-20">$<span>22.56</span></h2>
                    <div class="progress progress-sm m-0">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                            <span class="sr-only">77% Complete</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card-box">
                    <a href="#" class="btn btn-sm btn-default pull-right">View</a>
                    <h6 class="text-muted m-t-0 text-uppercase">Orders</h6>
                    <h2 class="m-b-20">9,754</h2>
                    <div class="progress progress-sm m-0">
                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                            <span class="sr-only">77% Complete</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end row -->



        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="m-t-0">Total Revenue</h4>
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
                    <h4 class="m-t-0">Sales Analytics</h4>
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
                    <h4 class="m-t-0">Contacts</h4>
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Products</th>
                                    <th>Start Date</th>
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
