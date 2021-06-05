<?php $__env->startSection('content'); ?>
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Settings</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active" aria-current="page">Settings</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <!-- Bootstrap Tabs (data-toggle="tabs" is initialized in Helpers.coreBootstrapTabs()) -->
    <div class="content">
        <!-- Block Tabs -->
        <div class="row">
            <div class="col-lg-12">
                
                <!-- Block Tabs Alternative Style -->
                <div class="block block-rounded">
                    <ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#btabs-alt-static-Account">Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#btabs-alt-static-Security">Security</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#btabs-alt-static-Notifications">Notifications</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#btabs-alt-static-Team">Team</a>
                        </li>
                    </ul>
                    <div class="block-content tab-content">
                        <div class="tab-pane active" id="btabs-alt-static-Account" role="tabpanel">
                            <h4 class="font-w400">Account</h4>
                            <div class="content">
                                <div class="block block-rounded">
                                    <div class="block-content">
                                        <form action="be_pages_projects_edit.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                                            <!-- User Profile -->
                                            <h2 class="content-heading pt-0">
                                                <i class="fa fa-fw fa-user-circle text-muted mr-1"></i> User Profile
                                            </h2>
                                            <div class="row push">
                                                <div class="col-lg-4">
                                                    <p class="text-muted">
                                                        Your account’s vital info. Your username will be publicly visible.
                                                    </p>
                                                </div>
                                                <div class="col-lg-8 col-xl-5">
                                                    <div class="form-group">
                                                        <label for="dm-profile-edit-username">Username</label>
                                                        <input type="text" class="form-control" id="dm-profile-edit-username" name="dm-profile-edit-username" placeholder="Enter your username.." value="john.doe">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="dm-profile-edit-name">Name</label>
                                                        <input type="text" class="form-control" id="dm-profile-edit-name" name="dm-profile-edit-name" placeholder="Enter your name.." value="John Doe">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="dm-profile-edit-email">Email Address</label>
                                                        <input type="email" class="form-control" id="dm-profile-edit-email" name="dm-profile-edit-email" placeholder="Enter your email.." value="john.doe@example.com">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="dm-profile-edit-job-title">Job Title</label>
                                                        <input type="text" class="form-control" id="dm-profile-edit-job-title" name="dm-profile-edit-job-title" placeholder="Add your job title.." value="Product Manager">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="dm-profile-edit-company">Department</label>
                                                        <select class="custom-select" id="example-select-custom" name="example-select-custom">
                                                                        <option value="0">Please select</option>
                                                                        <option value="1">Option #1</option>
                                                                        <option value="2">Option #2</option>
                                                                        <option value="3">Option #3</option>
                                                                        <option value="4">Option #4</option>
                                                                        <option value="5">Option #5</option>
                                                                        <option value="6">Option #6</option>
                                                                        <option value="7">Option #7</option>
                                                                        <option value="8">Option #8</option>
                                                                        <option value="9">Option #9</option>
                                                                        <option value="10">Option #10</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Your Avatar</label>
                                                        <div class="push">
                                                            <img class="img-avatar" src="assets/media/avatars/avatar10.jpg" alt="">
                                                        </div>
                                                        <div class="custom-file">
                                                            <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                                            <input type="file" class="custom-file-input" data-toggle="custom-file-input" id="dm-profile-edit-avatar" name="dm-profile-edit-avatar">
                                                            <label class="custom-file-label" for="dm-profile-edit-avatar">Choose a new avatar</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END User Profile -->

                                            <!-- Billing Information -->
                                            <h2 class="content-heading pt-0">
                                                <i class="fab fa-fw fa-paypal text-muted mr-1"></i> Personal Information
                                            </h2>
                                            <div class="row push">
                                                <div class="col-lg-4">
                                                    <p class="text-muted">
                                                        Your billing information is never shown to other users and only used for creating your invoices.
                                                    </p>
                                                </div>
                                                <div class="col-lg-8 col-xl-5">
                                                    <div class="form-group row">
                                                        <div class="col-6">
                                                            <label for="dm-profile-edit-firstname">Firstname</label>
                                                            <input type="text" class="form-control" id="dm-profile-edit-firstname" name="dm-profile-edit-firstname">
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="dm-profile-edit-lastname">Lastname</label>
                                                            <input type="text" class="form-control" id="dm-profile-edit-lastname" name="dm-profile-edit-lastname">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="dm-profile-edit-street-1">Street Address 1</label>
                                                        <input type="text" class="form-control" id="dm-profile-edit-street-1" name="dm-profile-edit-street-1">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="dm-profile-edit-street-2">Street Address 2</label>
                                                        <input type="text" class="form-control" id="dm-profile-edit-street-2" name="dm-profile-edit-street-2">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="dm-profile-edit-city">City</label>
                                                        <input type="text" class="form-control" id="dm-profile-edit-city" name="dm-profile-edit-city">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="dm-profile-edit-postal">Postal code</label>
                                                        <input type="text" class="form-control" id="dm-profile-edit-postal" name="dm-profile-edit-postal">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="dm-profile-edit-company-name">Mobile Number</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-alt" id="example-group3-input2-alt" name="example-group3-input2-alt">
                                                            <div class="input-group-append">
                                                                <button type="button" class="btn btn-dark">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="dm-profile-edit-company-name">ID Number</label>
                                                        <input type="text" class="form-control" id="dm-profile-edit-company-name" name="dm-profile-edit-company-name">
                                                    </div>
                                                    <div class="custom-file">
                                                        <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                                        <input type="file" class="custom-file-input" data-toggle="custom-file-input" id="dm-profile-edit-avatar" name="dm-profile-edit-avatar">
                                                        <label class="custom-file-label" for="dm-profile-edit-avatar">Upload Document</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END Billing Information -->

                                            <!-- Submit -->
                                            <div class="row push">
                                                <div class="col-lg-8 col-xl-5 offset-lg-4">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-alt-primary">
                                                            <i class="fa fa-check-circle mr-1"></i> Update Profile
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END Submit -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="btabs-alt-static-Security" role="tabpanel">
                            <!-- Change Password -->
                            <h2 class="content-heading pt-0">
                                <i class="fa fa-fw fa-asterisk text-muted mr-1"></i> Change Password
                            </h2>
                            <div class="row push">
                                <div class="col-lg-4">
                                    <p class="text-muted">
                                        Changing your sign in password is an easy way to keep your account secure.
                                    </p>
                                </div>
                                <div class="col-lg-8 col-xl-5">
                                    <div class="form-group">
                                        <label for="dm-profile-edit-password">Current Password</label>
                                        <input type="password" class="form-control" id="dm-profile-edit-password" name="dm-profile-edit-password">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="dm-profile-edit-password-new">New Password</label>
                                            <input type="password" class="form-control" id="dm-profile-edit-password-new" name="dm-profile-edit-password-new">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="dm-profile-edit-password-new-confirm">Confirm New Password</label>
                                            <input type="password" class="form-control" id="dm-profile-edit-password-new-confirm" name="dm-profile-edit-password-new-confirm">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Change Password -->
                        </div>
                        <div class="tab-pane" id="btabs-alt-static-Notifications" role="tabpanel">
                            <h4 class="font-w400">Settings Content</h4>
                            <div class="row push">
                                <div class="col-lg-4">
                                    <p class="text-muted">
                                        These are the default custom switches
                                    </p>
                                </div>
                                <div class="col-lg-8 col-xl-5">
                                    <div class="form-group">
                                        <label>Switches</label>
                                        <div class="custom-control custom-switch mb-1">
                                            <input type="checkbox" class="custom-control-input" id="example-sw-custom1" name="example-sw-custom1" checked>
                                            <label class="custom-control-label" for="example-sw-custom1">Option 1</label>
                                        </div>
                                        <div class="custom-control custom-switch mb-1">
                                            <input type="checkbox" class="custom-control-input" id="example-sw-custom2" name="example-sw-custom2">
                                            <label class="custom-control-label" for="example-sw-custom2">Option 2</label>
                                        </div>
                                        <div class="custom-control custom-switch mb-1">
                                            <input type="checkbox" class="custom-control-input" id="example-sw-custom3" name="example-sw-custom3">
                                            <label class="custom-control-label" for="example-sw-custom3">Option 3</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="d-block">Inline Switches</label>
                                        <div class="custom-control custom-switch custom-control-inline">
                                            <input type="checkbox" class="custom-control-input" id="example-sw-custom-inline1" name="example-sw-custom-inline1" checked>
                                            <label class="custom-control-label" for="example-sw-custom-inline1">Option 1</label>
                                        </div>
                                        <div class="custom-control custom-switch custom-control-inline">
                                            <input type="checkbox" class="custom-control-input" id="example-sw-custom-inline2" name="example-sw-custom-inline2">
                                            <label class="custom-control-label" for="example-sw-custom-inline2">Option 2</label>
                                        </div>
                                        <div class="custom-control custom-switch custom-control-inline">
                                            <input type="checkbox" class="custom-control-input" id="example-sw-custom-inline3" name="example-sw-custom-inline3">
                                            <label class="custom-control-label" for="example-sw-custom-inline3">Option 3</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Default -->
                        </div>
                        <div class="tab-pane" id="btabs-alt-static-Team" role="tabpanel">
                            <h4 class="font-w400">Settings Content</h4>
                            <div class="table-responsive">
                                <table class="table table-borderless table-striped table-vcenter font-size-sm">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 100px;">ID</th>
                                            <th class="d-none d-sm-table-cell text-center">Submitted</th>
                                            <th>Status</th>
                                            <th class="d-none d-xl-table-cell">Name</th>
                                            <th class="d-none d-xl-table-cell text-center">Mobile</th>
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
                                            <td class="d-none d-xl-table-cell">
                                                <a class="font-w600" href="be_pages_ecom_customer.html">Ryan Flores</a>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center">
                                                <a class="font-w600" href="be_pages_ecom_order.html">5</a>
                                            </td>
                                            
                                            <td class="text-center font-size-base">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-hero-primary dropdown-toggle" id="dropdown-default-hero-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-default-hero-primary" style="">
                                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    </div>
                                                </div>
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
                                            <td class="d-none d-xl-table-cell">
                                                <a class="font-w600" href="be_pages_ecom_customer.html">Judy Ford</a>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center">
                                                <a class="font-w600" href="be_pages_ecom_order.html">5</a>
                                            </td>
                                            <td class="text-center font-size-base">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-hero-primary dropdown-toggle" id="dropdown-default-hero-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-default-hero-primary" style="">
                                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    </div>
                                                </div>
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
                                            <td class="d-none d-xl-table-cell">
                                                <a class="font-w600" href="be_pages_ecom_customer.html">Brian Cruz</a>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center">
                                                <a class="font-w600" href="be_pages_ecom_order.html">8</a>
                                            </td>
                                            <td class="text-center font-size-base">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-hero-primary dropdown-toggle" id="dropdown-default-hero-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-default-hero-primary" style="">
                                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    </div>
                                                </div>
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
                                            <td class="d-none d-xl-table-cell">
                                                <a class="font-w600" href="be_pages_ecom_customer.html">Jack Greene</a>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center">
                                                <a class="font-w600" href="be_pages_ecom_order.html">2</a>
                                            </td>
                                            <td class="text-center font-size-base">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-hero-primary dropdown-toggle" id="dropdown-default-hero-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-default-hero-primary" style="">
                                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    </div>
                                                </div>
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
                                            <td class="d-none d-xl-table-cell">
                                                <a class="font-w600" href="be_pages_ecom_customer.html">Jose Mills</a>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center">
                                                <a class="font-w600" href="be_pages_ecom_order.html">4</a>
                                            </td>
                                            <td class="text-center font-size-base">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-hero-primary dropdown-toggle" id="dropdown-default-hero-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-default-hero-primary" style="">
                                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    </div>
                                                </div>
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
                                            <td class="d-none d-xl-table-cell">
                                                <a class="font-w600" href="be_pages_ecom_customer.html">Alice Moore</a>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center">
                                                <a class="font-w600" href="be_pages_ecom_order.html">8</a>
                                            </td>
                                            <td class="text-center font-size-base">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-hero-primary dropdown-toggle" id="dropdown-default-hero-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-default-hero-primary" style="">
                                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    </div>
                                                </div>
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
                                            <td class="d-none d-xl-table-cell">
                                                <a class="font-w600" href="be_pages_ecom_customer.html">Lisa Jenkins</a>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center">
                                                <a class="font-w600" href="be_pages_ecom_order.html">4</a>
                                            </td>
                                            <td class="text-center font-size-base">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-hero-primary dropdown-toggle" id="dropdown-default-hero-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-default-hero-primary" style="">
                                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    </div>
                                                </div>
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
                                            <td class="d-none d-xl-table-cell">
                                                <a class="font-w600" href="be_pages_ecom_customer.html">Sara Fields</a>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center">
                                                <a class="font-w600" href="be_pages_ecom_order.html">6</a>
                                            </td>
                                            <td class="text-center font-size-base">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-hero-primary dropdown-toggle" id="dropdown-default-hero-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-default-hero-primary" style="">
                                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    </div>
                                                </div>
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
                                            <td class="d-none d-xl-table-cell">
                                                <a class="font-w600" href="be_pages_ecom_customer.html">Thomas Riley</a>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center">
                                                <a class="font-w600" href="be_pages_ecom_order.html">3</a>
                                            </td>
                                            <td class="text-center font-size-base">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-hero-primary dropdown-toggle" id="dropdown-default-hero-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-default-hero-primary" style="">
                                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    </div>
                                                </div>
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
                                            <td class="d-none d-xl-table-cell">
                                                <a class="font-w600" href="be_pages_ecom_customer.html">David Fuller</a>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center">
                                                <a class="font-w600" href="be_pages_ecom_order.html">4</a>
                                            </td>
                                            <td class="text-center font-size-base">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-hero-primary dropdown-toggle" id="dropdown-default-hero-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-default-hero-primary" style="">
                                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    </div>
                                                </div>
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
                                            <td class="d-none d-xl-table-cell">
                                                <a class="font-w600" href="be_pages_ecom_customer.html">Carl Wells</a>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center">
                                                <a class="font-w600" href="be_pages_ecom_order.html">3</a>
                                            </td>
                                            <td class="text-center font-size-base">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-hero-primary dropdown-toggle" id="dropdown-default-hero-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-default-hero-primary" style="">
                                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    </div>
                                                </div>
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
                                            <td class="d-none d-xl-table-cell">
                                                <a class="font-w600" href="be_pages_ecom_customer.html">Amber Harvey</a>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center">
                                                <a class="font-w600" href="be_pages_ecom_order.html">8</a>
                                            </td>
                                            <td class="text-center font-size-base">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-hero-primary dropdown-toggle" id="dropdown-default-hero-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-default-hero-primary" style="">
                                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    </div>
                                                </div>
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
                                            <td class="d-none d-xl-table-cell">
                                                <a class="font-w600" href="be_pages_ecom_customer.html">Melissa Rice</a>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center">
                                                <a class="font-w600" href="be_pages_ecom_order.html">1</a>
                                            </td>
                                            <td class="text-center font-size-base">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-hero-primary dropdown-toggle" id="dropdown-default-hero-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-default-hero-primary" style="">
                                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    </div>
                                                </div>
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
                                            <td class="d-none d-xl-table-cell">
                                                <a class="font-w600" href="be_pages_ecom_customer.html">Ralph Murray</a>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center">
                                                <a class="font-w600" href="be_pages_ecom_order.html">5</a>
                                            </td>
                                            <td class="text-center font-size-base">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-hero-primary dropdown-toggle" id="dropdown-default-hero-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-default-hero-primary" style="">
                                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    </div>
                                                </div>
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
                                            <td class="d-none d-xl-table-cell">
                                                <a class="font-w600" href="be_pages_ecom_customer.html">Megan Fuller</a>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center">
                                                <a class="font-w600" href="be_pages_ecom_order.html">1</a>
                                            </td>
                                            <td class="text-center font-size-base">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-hero-primary dropdown-toggle" id="dropdown-default-hero-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-default-hero-primary" style="">
                                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    </div>
                                                </div>
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
                                            <td class="d-none d-xl-table-cell">
                                                <a class="font-w600" href="be_pages_ecom_customer.html">Alice Moore</a>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center">
                                                <a class="font-w600" href="be_pages_ecom_order.html">5</a>
                                            </td>
                                            <td class="text-center font-size-base">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-hero-primary dropdown-toggle" id="dropdown-default-hero-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-default-hero-primary" style="">
                                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    </div>
                                                </div>
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
                                            <td class="d-none d-xl-table-cell">
                                                <a class="font-w600" href="be_pages_ecom_customer.html">Scott Young</a>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center">
                                                <a class="font-w600" href="be_pages_ecom_order.html">1</a>
                                            </td>
                                            <td class="text-center font-size-base">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-hero-primary dropdown-toggle" id="dropdown-default-hero-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-default-hero-primary" style="">
                                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    </div>
                                                </div>
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
                                            <td class="d-none d-xl-table-cell">
                                                <a class="font-w600" href="be_pages_ecom_customer.html">Barbara Scott</a>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center">
                                                <a class="font-w600" href="be_pages_ecom_order.html">2</a>
                                            </td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-hero-primary dropdown-toggle" id="dropdown-default-hero-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-default-hero-primary" style="">
                                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    </div>
                                                </div>
                                            <td class="text-center font-size-base">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-hero-primary dropdown-toggle" id="dropdown-default-hero-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-default-hero-primary" style="">
                                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    </div>
                                                </div>
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
                                            <td class="d-none d-xl-table-cell">
                                                <a class="font-w600" href="be_pages_ecom_customer.html">Marie Duncan</a>
                                            </td>
                                            <td class="d-none d-xl-table-cell text-center">
                                                <a class="font-w600" href="be_pages_ecom_order.html">2</a>
                                            </td>
                                            <td class="text-center font-size-base">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-hero-primary dropdown-toggle" id="dropdown-default-hero-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-default-hero-primary" style="">
                                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Block Tabs Alternative Style -->
            </div>
        </div>
        <!-- END Block Tabs -->
    </div>
    <!-- END Page Content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/settings/general.blade.php ENDPATH**/ ?>