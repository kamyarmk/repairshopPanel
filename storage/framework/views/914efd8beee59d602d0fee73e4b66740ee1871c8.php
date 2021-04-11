<?php $__env->startSection('content'); ?>
<div class="wrapper">
    <div class="container card p-4">
        
        <div class="row mb-3">
            <div class="col-md-12">
                <h4 class="header-title mt-0 mb-3 text-right"><i class="fas fa-receipt ml-3"></i><?php echo e(__('Invoices')); ?></h4>
                <div class="dropdown-divider"></div>
            </div>
        </div>
        <search-invoice
                search-item="invoicesvue"
                search-text="<?php echo e(__('Search')); ?>"
                prop1="user_name"
                prop1-name="<?php echo e(__('User')); ?>"
                prop2="device_imei"
                prop2-name="<?php echo e(__('IMEI')); ?>"
                prop3="created_at"
                prop3-name="<?php echo e(__('Created At')); ?>"
                prop4="invoiceID"
                prop4-name="<?php echo e(__('ID')); ?>"
                prop5="Condition"
                prop5-name="<?php echo e(__('Condition')); ?>"
                edit-text="<?php echo e(__('Edit')); ?>"
                submit-text="<?php echo e(__('Remove')); ?>"
            ></search-invoice>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panelStruc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/Invoice.blade.php ENDPATH**/ ?>