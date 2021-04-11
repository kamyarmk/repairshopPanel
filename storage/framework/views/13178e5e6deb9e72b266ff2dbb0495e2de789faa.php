<?php $__env->startSection('content'); ?>
<div class="wrapper">
    <div class="container card p-4">
        <div class="row mb-4">
            <div class="col-md-12">
                <h4 class="header-title mt-0 mb-3 text-right"><i class="fas fa-tablet ml-3"></i><?php echo e(__('Device')); ?></h4>
                <div class="dropdown-divider"></div>
            </div>
        </div>
            <search-devices
                search-item="devicevuew"
                search-text="<?php echo e(__('search')); ?>"
                prop1="device_name"
                prop1-name="<?php echo e(__('Device')); ?>"
                prop2="device_type"
                prop2-name="<?php echo e(__('Device Type')); ?>"
                edit-text="<?php echo e(__('Edit')); ?>"
                submit-text="<?php echo e(__('Remove')); ?>"
            ></search-devices>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panelStruc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/Devices.blade.php ENDPATH**/ ?>