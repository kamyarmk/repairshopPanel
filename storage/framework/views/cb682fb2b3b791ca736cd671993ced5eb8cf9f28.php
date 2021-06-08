<?php $__env->startSection('content'); ?>
    <!-- Page Content -->
    <div class="content">
        <!-- Quick Overview -->
        <div class="row row-deck">
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="/product/attributes/add">
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
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 text-danger mb-1">63</div>
                        <p class="font-w600 font-size-sm text-danger text-uppercase mb-0">
                            Out of stock
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_dashboard.html">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 text-dark mb-1">690</div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            New
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_dashboard.html">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 text-dark mb-1">36.963</div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            All Products
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Quick Overview -->

        <!-- All Products -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">All Products</h3>
                <div class="block-options">
                    <div class="dropdown">
                        <button type="button" class="btn btn-light" id="dropdown-ecom-filters" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filters <i class="fa fa-angle-down ml-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-ecom-filters">
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                New
                                <span class="badge badge-success badge-pill">260</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                Out of Stock
                                <span class="badge badge-danger badge-pill">63</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                All
                                <span class="badge badge-secondary badge-pill">36k</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-content bg-body-dark">
                <!-- Search Form -->
                <form action="be_pages_ecom_products.html" method="POST" onsubmit="return false;">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-alt" id="dm-ecom-products-search" name="dm-ecom-products-search" placeholder="Search all products..">
                    </div>
                </form>
                <!-- END Search Form -->
            </div>
            <div class="block-content">
                <!-- All Products Table -->
                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-vcenter">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 100px;">ID</th>
                                <th class="d-none d-sm-table-cell text-center">Added</th>
                                <th class="d-none d-md-table-cell">Product</th>
                                <th>Status</th>
                                <th class="d-none d-sm-table-cell text-right">Value</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.036535</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">28/12/2019</td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">Product #35</a>
                                </td>
                                <td>
                                    <span class="badge badge-success">Available</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$88,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.036534</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">09/05/2019</td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">Product #34</a>
                                </td>
                                <td>
                                    <span class="badge badge-success">Available</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$95,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.036533</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">07/12/2019</td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">Product #33</a>
                                </td>
                                <td>
                                    <span class="badge badge-success">Available</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$58,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.036532</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">28/01/2019</td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">Product #32</a>
                                </td>
                                <td>
                                    <span class="badge badge-success">Available</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$75,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.036531</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">09/09/2019</td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">Product #31</a>
                                </td>
                                <td>
                                    <span class="badge badge-success">Available</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$93,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.036530</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">26/02/2019</td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">Product #30</a>
                                </td>
                                <td>
                                    <span class="badge badge-danger">Out of Stock</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$60,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.036529</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">10/02/2019</td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">Product #29</a>
                                </td>
                                <td>
                                    <span class="badge badge-danger">Out of Stock</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$43,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.036528</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">12/11/2019</td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">Product #28</a>
                                </td>
                                <td>
                                    <span class="badge badge-danger">Out of Stock</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$25,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.036527</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">20/02/2019</td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">Product #27</a>
                                </td>
                                <td>
                                    <span class="badge badge-danger">Out of Stock</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$24,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.036526</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">13/02/2019</td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">Product #26</a>
                                </td>
                                <td>
                                    <span class="badge badge-danger">Out of Stock</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$19,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.036525</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">21/04/2019</td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">Product #25</a>
                                </td>
                                <td>
                                    <span class="badge badge-danger">Out of Stock</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$88,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.036524</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">07/01/2019</td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">Product #24</a>
                                </td>
                                <td>
                                    <span class="badge badge-success">Available</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$65,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.036523</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">27/11/2019</td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">Product #23</a>
                                </td>
                                <td>
                                    <span class="badge badge-danger">Out of Stock</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$18,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.036522</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">14/02/2019</td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">Product #22</a>
                                </td>
                                <td>
                                    <span class="badge badge-danger">Out of Stock</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$62,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.036521</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">03/03/2019</td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">Product #21</a>
                                </td>
                                <td>
                                    <span class="badge badge-danger">Out of Stock</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$60,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.036520</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">15/06/2019</td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">Product #20</a>
                                </td>
                                <td>
                                    <span class="badge badge-danger">Out of Stock</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$25,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.036519</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">03/03/2019</td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">Product #19</a>
                                </td>
                                <td>
                                    <span class="badge badge-danger">Out of Stock</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$40,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.036518</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">11/01/2019</td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">Product #18</a>
                                </td>
                                <td>
                                    <span class="badge badge-success">Available</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$58,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.036517</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">11/12/2019</td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">Product #17</a>
                                </td>
                                <td>
                                    <span class="badge badge-danger">Out of Stock</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$72,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
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
                <!-- END All Products Table -->

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
        <!-- END All Products -->
    </div>
    <!-- END Page Content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/product/attributes/list.blade.php ENDPATH**/ ?>