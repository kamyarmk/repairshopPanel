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
                        <div class="font-size-h3 font-w600 mb-1"><?php echo e($departments->count()); ?></div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            Total
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-4">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 mb-1"><?php echo e($admins->count()); ?></div>
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
                                <th class="d-none d-sm-table-cell text-center">Department Symbol</th>
                                <th>Department Name</th>
                                <th class="d-none d-xl-table-cell">Users</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-center">
                                    <a class="font-w600" href="/admins/department/edit/<?php echo e($department->id); ?>">
                                        <strong><?php echo e($department->id); ?></strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center"><?php echo e($department->department_symbol); ?></td>
                                <td class="font-size-base">
                                    <span class="badge badge-pill badge-success"><?php echo e($department->department_name); ?></span>
                                </td>
                                <td class="d-none d-xl-table-cell text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.html"><?php echo e($department->users->count()); ?></a>
                                </td>
                                <td class="text-center font-size-base">
                                    <a class="btn btn-sm btn-alt-secondary" href="/admins/department/edit/<?php echo e($department->id); ?>">
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
                
                <?php echo e($departments->links()); ?>

                <!-- END Pagination -->
            </div>
        </div>
        <!-- END All Orders -->
    </div>
    <!-- END Page Content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/admin/department.blade.php ENDPATH**/ ?>