<?php $__env->startSection('content'); ?>
<div class="wrapper">
    <div class="container card p-4">
        
        <div class="row mb-3">
            <div class="col-md-12">
                <h4 class="header-title mt-0 mb-3 text-right"><i class="fas fa-users ml-3"></i><?php echo e(__('Users')); ?></h4>
                <div class="dropdown-divider"></div>
            </div>
        </div>
        <search-users
                search-item="UsersVue"
                search-text="<?php echo e(__('Search')); ?>"
                prop1="name"
                prop1-name="<?php echo e(__('Name')); ?>"
                prop2="email"
                prop2-name="<?php echo e(__('E-Mail Address')); ?>"
                prop3="phone_number"
                prop3-name="<?php echo e(__('Phone Number')); ?>"
                edit-text="<?php echo e(__('Edit')); ?>"
                submit-text="<?php echo e(__('Remove')); ?>"
            ></search-users>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panelStruc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/UserList.blade.php ENDPATH**/ ?>