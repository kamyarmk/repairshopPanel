<?php $__env->startSection('content'); ?>
<div class="wrapper">
    <div class="container card p-4">
        <div class="row mb-4">
            <div class="col-md-12">
                <h4 class="header-title mt-0 mb-3 text-right"><i class="fas fa-tablet-alt ml-3"></i><?php echo e(__('Device List')); ?></h4>
                <div class="dropdown-divider"></div>
            </div>
        </div>
            <search-regdev
                search-item="regdevicevue"
                search-text="<?php echo e(__('Search')); ?>"
                prop1="IMEI"
                prop1-name="<?php echo e(__('IMEI')); ?>"
                prop2="Device"
                prop2-name="<?php echo e(__('Device')); ?>"
                prop4="created_at"
                prop4-name="<?php echo e(__('Start Date')); ?>"
                prop3="Condition"
                prop3-name="<?php echo e(__('Condition')); ?>"
                id-counter="<?php echo e(__('ID')); ?>"
                
                edit-text="<?php echo e(__('Edit')); ?>"
                submit-text="<?php echo e(__('Remove')); ?>"
                condition-type="<?php echo e($Condition); ?>"
            ></search-regdev>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panelStruc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/DeviceList.blade.php ENDPATH**/ ?>