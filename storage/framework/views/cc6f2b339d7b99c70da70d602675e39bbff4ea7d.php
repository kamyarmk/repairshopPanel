<?php $__env->startSection('content'); ?>
    <!-- Page Content -->
    <div class="content">
        <!-- Quick Overview -->
        <div class="row row-deck">
            <div class="col-6 col-lg-4">
                <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_orders.html">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 text-success mb-1">
                            <i class="fa fa-plus"></i>
                        </div>
                        <p class="font-w600 font-size-sm text-success text-uppercase mb-0">
                            Add New
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-4">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 mb-1">126</div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            Total
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-4">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 mb-1">350</div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            Staffs
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Quick Overview -->

        <!-- All Orders -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">All Department</h3>
                <!-- <div class="block-options">
                    <div class="dropdown">
                        <button type="button" class="btn btn-light" id="dropdown-ecom-filters" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filters
                            <i class="fa fa-angle-down ml-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-ecom-filters">
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                Pending..
                                <span class="badge badge-primary badge-pill">78</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                Processing
                                <span class="badge badge-secondary badge-pill">12</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                For Delivery
                                <span class="badge badge-secondary badge-pill">20</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                Canceled
                                <span class="badge badge-secondary badge-pill">5</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                Delivered
                                <span class="badge badge-secondary badge-pill">280</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                All
                                <span class="badge badge-secondary badge-pill">19k</span>
                            </a>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="block-content bg-body-dark">
                <!-- Search Form -->
                <form action="be_pages_ecom_orders.html" method="POST" onsubmit="return false;">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-alt" id="dm-ecom-orders-search" name="dm-ecom-orders-search" placeholder="Search all orders..">
                    </div>
                </form>
                <!-- END Search Form -->
            </div>
            <div class="block-content">
                <!-- All Orders Table -->
                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-vcenter font-size-sm">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 100px;">ID</th>
                                <th class="d-none d-sm-table-cell text-center">Submitted</th>
                                <th>Department</th>
                                <th class="d-none d-xl-table-cell">Users</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">
                                        <strong>ORD.019265</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">08/10/2020</td>
                                <td class="font-size-base">
                                    <span class="badge badge-pill badge-success">Delivered</span>
                                </td>
                                <td class="d-none d-xl-table-cell text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">5</a>
                                </td>
                                <td class="text-center font-size-base">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">
                                        <strong>ORD.019264</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">17/07/2020</td>
                                <td class="font-size-base">
                                    <span class="badge badge-pill badge-success">Delivered</span>
                                </td>
                                <td class="d-none d-xl-table-cell text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">5</a>
                                </td>
                                <td class="text-center font-size-base">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">
                                        <strong>ORD.019263</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">14/08/2020</td>
                                <td class="font-size-base">
                                    <span class="badge badge-pill badge-warning">Processing</span>
                                </td>
                                <td class="d-none d-xl-table-cell text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">8</a>
                                </td>
                                <td class="text-center font-size-base">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">
                                        <strong>ORD.019262</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">07/08/2020</td>
                                <td class="font-size-base">
                                    <span class="badge badge-pill badge-info">For delivery</span>
                                </td>
                                <td class="d-none d-xl-table-cell text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">2</a>
                                </td>
                                <td class="text-center font-size-base">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">
                                        <strong>ORD.019261</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">22/08/2020</td>
                                <td class="font-size-base">
                                    <span class="badge badge-pill badge-danger">Canceled</span>
                                </td>
                                <td class="d-none d-xl-table-cell text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">4</a>
                                </td>
                                <td class="text-center font-size-base">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">
                                        <strong>ORD.019260</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">26/04/2020</td>
                                <td class="font-size-base">
                                    <span class="badge badge-pill badge-warning">Processing</span>
                                </td>
                                <td class="d-none d-xl-table-cell text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">8</a>
                                </td>
                                <td class="text-center font-size-base">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">
                                        <strong>ORD.019259</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">14/09/2020</td>
                                <td class="font-size-base">
                                    <span class="badge badge-pill badge-success">Delivered</span>
                                </td>
                                <td class="d-none d-xl-table-cell text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">4</a>
                                </td>
                                <td class="text-center font-size-base">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">
                                        <strong>ORD.019258</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">16/12/2020</td>
                                <td class="font-size-base">
                                    <span class="badge badge-pill badge-warning">Processing</span>
                                </td>
                                <td class="d-none d-xl-table-cell text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">6</a>
                                </td>
                                <td class="text-center font-size-base">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">
                                        <strong>ORD.019257</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">27/11/2020</td>
                                <td class="font-size-base">
                                    <span class="badge badge-pill badge-danger">Canceled</span>
                                </td>
                                <td class="d-none d-xl-table-cell text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">3</a>
                                </td>
                                <td class="text-center font-size-base">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">
                                        <strong>ORD.019256</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">01/05/2020</td>
                                <td class="font-size-base">
                                    <span class="badge badge-pill badge-danger">Canceled</span>
                                </td>
                                <td class="d-none d-xl-table-cell text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">4</a>
                                </td>
                                <td class="text-center font-size-base">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">
                                        <strong>ORD.019255</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">11/07/2020</td>
                                <td class="font-size-base">
                                    <span class="badge badge-pill badge-success">Delivered</span>
                                </td>
                                <td class="d-none d-xl-table-cell text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">3</a>
                                </td>
                                <td class="text-center font-size-base">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">
                                        <strong>ORD.019254</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">24/02/2020</td>
                                <td class="font-size-base">
                                    <span class="badge badge-pill badge-info">For delivery</span>
                                </td>
                                <td class="d-none d-xl-table-cell text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">8</a>
                                </td>
                                <td class="text-center font-size-base">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">
                                        <strong>ORD.019253</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">16/03/2020</td>
                                <td class="font-size-base">
                                    <span class="badge badge-pill badge-info">For delivery</span>
                                </td>
                                <td class="d-none d-xl-table-cell text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">1</a>
                                </td>
                                <td class="text-center font-size-base">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">
                                        <strong>ORD.019252</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">12/11/2020</td>
                                <td class="font-size-base">
                                    <span class="badge badge-pill badge-success">Delivered</span>
                                </td>
                                <td class="d-none d-xl-table-cell text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">5</a>
                                </td>
                                <td class="text-center font-size-base">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">
                                        <strong>ORD.019251</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">27/07/2020</td>
                                <td class="font-size-base">
                                    <span class="badge badge-pill badge-warning">Processing</span>
                                </td>
                                <td class="d-none d-xl-table-cell text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">1</a>
                                </td>
                                <td class="text-center font-size-base">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">
                                        <strong>ORD.019250</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">05/04/2020</td>
                                <td class="font-size-base">
                                    <span class="badge badge-pill badge-info">For delivery</span>
                                </td>
                                <td class="d-none d-xl-table-cell text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">5</a>
                                </td>
                                <td class="text-center font-size-base">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">
                                        <strong>ORD.019249</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">06/05/2020</td>
                                <td class="font-size-base">
                                    <span class="badge badge-pill badge-info">For delivery</span>
                                </td>
                                <td class="d-none d-xl-table-cell text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">1</a>
                                </td>
                                <td class="text-center font-size-base">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">
                                        <strong>ORD.019248</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">23/04/2020</td>
                                <td class="font-size-base">
                                    <span class="badge badge-pill badge-info">For delivery</span>
                                </td>
                                <td class="d-none d-xl-table-cell text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">2</a>
                                </td>
                                <td class="text-center font-size-base">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">
                                        <strong>ORD.019247</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">04/12/2020</td>
                                <td class="font-size-base">
                                    <span class="badge badge-pill badge-danger">Canceled</span>
                                </td>
                                <td class="d-none d-xl-table-cell text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html">2</a>
                                </td>
                                <td class="text-center font-size-base">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- END All Orders Table -->

                <!-- Pagination -->
                <nav aria-label="Photos Search Navigation">
                    <ul class="pagination justify-content-end mt-2">
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                                Prev
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                Next
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- END Pagination -->
            </div>
        </div>
        <!-- END All Orders -->
    </div>
    <!-- END Page Content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/admin/department.blade.php ENDPATH**/ ?>