<?php $__env->startSection('content'); ?>
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Edit Account</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Account</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <div class="block block-rounded">
            <div class="block-content">
                <form method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php if($type == 'Edit'): ?>
                        <input name="_method" type="hidden" value="PUT">
                    <?php endif; ?>
                    <input type="hidden" name="update" value="1">
                    <!-- User Profile -->
                    <h2 class="content-heading pt-0">
                        <i class="fa fa-fw fa-user-circle text-muted mr-1"></i> <?php echo e(__('User Profile')); ?>

                    </h2>
                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="text-muted">
                                <?php echo e(__('Your account’s vital info. Your username will be publicly visible.')); ?>

                            </p>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="form-group">
                                <label for="dm-profile-edit-name"><?php echo e(__('Name')); ?></label>
                                <input type="text" class="form-control" id="dm-profile-edit-name" name="department_name" 
                                    <?php if(isset($departments)): ?>
                                        value="<?php echo e($departments->department_name); ?>"
                                    <?php endif; ?>
                                >
                            </div>
                            <div class="form-group">
                                <label for="dm-profile-edit-email"><?php echo e(__('Symbol')); ?></label>
                                <input type="text" class="form-control" id="dm-profile-edit-email" name="department_symbol" 
                                    <?php if(isset($departments)): ?>
                                        value="<?php echo e($departments->department_level); ?>"
                                    <?php endif; ?>
                                >
                            </div>
                        </div>
                    </div>
                    <!-- END User Profile -->

                    <!-- Submit -->
                    <div class="row push">
                        <div class="col-lg-8 col-xl-5 offset-lg-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-alt-primary">
                                    <i class="fa fa-check-circle mr-1"></i> <?php echo e(__('Update Profile')); ?>

                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- END Submit -->
                </form>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/admin/departmentEdit.blade.php ENDPATH**/ ?>