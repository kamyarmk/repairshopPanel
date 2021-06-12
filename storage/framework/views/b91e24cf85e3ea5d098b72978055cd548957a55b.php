<?php $__env->startSection('content'); ?>
    <!-- Page Content -->
    <div class="content">
        <!-- Quick Overview -->
        <div class="row row-deck">
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="/customer/add">
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
                        <div class="font-size-h3 font-w600 mb-1"><?php echo e($customers->count()); ?></div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            Total
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 mb-1"><?php echo e($registered_devices->where('Condition', '=', 'Open')->count()); ?></div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            Open Request
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 mb-1"><?php echo e($registered_devices->count()); ?></div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            Devices
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Quick Overview -->

        <!-- All Orders -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">All Staffs</h3>
                <div class="custom-control custom-switch mt-1">
                    <input type="checkbox" class="custom-control-input" id="example-sw-custom1" name="example-sw-custom1" checked="">
                    <label class="custom-control-label" for="example-sw-custom1">Online</label>
                </div>
                <div class="block-options">
                    <div class="dropdown">
                        <button type="button" class="btn btn-light" id="dropdown-ecom-filters" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Department
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
                </div>
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
                                <th class="d-none d-xl-table-cell">Name</th>
                                <th class="d-none d-xl-table-cell text-center">Mobile</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center">
                                        <a class="font-w600" href="be_pages_ecom_order.html">
                                            <strong><?php echo e($customer->department->department_symbol); ?>.<?php echo e($customer->id); ?></strong>
                                        </a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-center"><?php echo e($customer->created_at); ?></td>
                                    <td class="font-size-base">
                                        <span class="badge badge-pill badge-success">
                                            <?php if(!$customer->registered_devices->isEmpty()): ?>
                                                <?php echo e($customer->registered_devices->first()->Condition); ?>

                                            <?php else: ?>
                                                No Device
                                            <?php endif; ?>
                                        </span>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <a class="font-w600" href="be_pages_ecom_customer.html"><?php echo e($customer->first_name); ?> <?php echo e($customer->last_name); ?></a>
                                    </td>
                                    <td class="d-none d-xl-table-cell text-center">
                                        <a class="font-w600" href="be_pages_ecom_order.html"><?php echo e($customer->phone_number); ?></a>
                                    </td>
                                    <td class="text-center font-size-base">
                                        <a class="btn btn-sm btn-alt-secondary" href="/customer/edit/<?php echo e($customer->id); ?>">
                                            <i class="fa fa-fw fa-eye"></i>
                                        </a>
                                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-times text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <!-- END All Orders Table -->

                <!-- Pagination -->
                
                <?php echo e($customers->links()); ?>

                
                <!-- END Pagination -->
            </div>
        </div>
        <!-- END All Orders -->
    </div>
    <!-- END Page Content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/customer/list.blade.php ENDPATH**/ ?>