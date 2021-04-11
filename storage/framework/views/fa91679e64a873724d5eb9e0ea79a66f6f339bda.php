<?php $__env->startSection('content'); ?>
<div class="wrapper">
    <div class="container card p-4">

        <div class="row justify-content-md-center mb-5">
            <div class="col-sm-6">
                <h4 class="header-title m-t-0 mb-4 text-right"><i class="fas fa-laptop-medical ml-2"></i><?php echo e(__('Invoice')); ?> / <?php echo e($Invoice->id); ?></h4>
            </div>
            <div class="col-sm-6">
                <h4 class="header-title m-t-0 mb-4 text-left btn
                                                    <?php if($Invoice->Condition == 'Open'): ?>
                                                        btn-outline-orangeSection
                                                    <?php endif; ?>
                                                    <?php if($Invoice->Condition == 'Repairing'): ?>
                                                        btn-outline-purpleSection
                                                    <?php endif; ?>
                                                    <?php if($Invoice->Condition == 'Testing'): ?>
                                                        btn-outline-warning
                                                    <?php endif; ?>
                                                    <?php if($Invoice->Condition == 'Repaired'): ?>
                                                        btn-outline-success
                                                    <?php endif; ?>
                                                    <?php if($Invoice->Condition == 'Delivered'): ?>
                                                        btn-success
                                                    <?php endif; ?>
                                                    <?php if($Invoice->Condition == 'Delayed'): ?>
                                                        btn-orangeSection
                                                    <?php endif; ?>
                                                    <?php if($Invoice->Condition == 'Unsuccessful'): ?>
                                                        btn-danger
                                                    <?php endif; ?>
                                                    <?php if($Invoice->Condition == 'Refund'): ?>
                                                        btn-section
                                                    <?php endif; ?>
                "><?php echo e($Invoice->Condition); ?></h4>
            </div>
            <div class="dropdown-divider"></div>
        </div>


        <div class="row justify-content-md-center align-items-center">
            <div class="col-md-12">
                <!-- General Infos -->
                <div class="row mb-3 d-flex justify-content-evenly">
                    <div class="col-md-5 card text-white bg-primary text-right">
                        <div class="card-header"><?php echo e(__('info')); ?></div>
                        <div class="card-body">
                            <div class="card-text mb-3"><strong><?php echo e(__('User')); ?> : </strong><?php echo e($Invoice->users->name); ?></div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Phone Number')); ?> : </strong><?php echo e($Invoice->users->phone_number); ?></div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Email')); ?> : </strong><?php echo e($Invoice->users->email); ?></div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('User')); ?> : </strong><?php echo e($Invoice->users->name); ?></div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('IMEI')); ?> : </strong><?php echo e($Invoice->registered_devices->IMEI); ?></div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Device')); ?> : </strong><?php echo e($Invoice->registered_devices->device_name); ?></div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Device Model')); ?> : </strong><?php echo e($Invoice->registered_devices->DeviceType); ?></div>
                        </div>
                    </div>
                    <div class="col-md-5 card text-white bg-primary text-right">
                        <div class="card-header"><?php echo e(__('info')); ?></div>
                        <div class="card-body">
                            <div class="card-text mb-3"><strong><?php echo e(__('Device Color')); ?> : </strong><?php echo e($Invoice->registered_devices->DeviceColor); ?></div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Device Problems')); ?> : </strong><?php echo e($Invoice->registered_devices->Problems); ?></div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Decription')); ?> : </strong><?php echo e($Invoice->registered_devices->DeviceDescription); ?></div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Password')); ?> : </strong><?php echo e($Invoice->registered_devices->password); ?></div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Device Accessories')); ?> : </strong><?php echo e($Invoice->registered_devices->DeviceAccessories); ?></div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Device Tips')); ?> : </strong><?php echo e($Invoice->registered_devices->Tips); ?></div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Budget')); ?> : </strong><?php echo e($Invoice->registered_devices->MaxBudget); ?></div>
                        </div>
                    </div>
                </div>

                <!-- QC Reports -->
                <div class="row mb-3 d-flex justify-content-evenly">
                    <div class="col-md-5 card text-white bg-orangeSection text-right">
                        <div class="card-header"><?php echo e(__('QC Testing')); ?></div>
                        <div class="card-body">
                            <div class="card-text mb-3"><?php echo e($Invoice->registered_devices->FirstQC); ?></div>
                        </div>
                    </div>
                    <div class="col-md-5 card text-white bg-orangeSection text-right">
                        <div class="card-header"><?php echo e(__('Seccond Testing')); ?></div>
                        <div class="card-body">
                            <div class="card-text mb-3"><?php echo e($Invoice->registered_devices->SeccondQC); ?></div>
                        </div>
                    </div>
                </div>

                <!-- Invoice Detailes -->
                <div class="row">
                    <div class="col-md-12 card-box">
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('invoice.update', $Invoice->id)); ?>">
                            <?php echo method_field('PUT'); ?>
                            <?php echo csrf_field(); ?>
                            <div class="row d-flex justify-content-evenly">
                                <div class="col-md-5">
                                    <div class="row mb-4">
                                        <label class="col-form-label text-right"><?php echo e(__('Condition')); ?></label>
                                        <select name="Condition" class="form-select" >
                                            <option value="Open" <?php echo e($Invoice->Condition == 'Open' ? 'selected' : ''); ?> ><?php echo e(__('Invoice In Queue')); ?></option>
                                            <option value="Repairing" <?php echo e($Invoice->Condition == 'Repairing' ? 'selected' : ''); ?> ><?php echo e(__('Under Repair')); ?></option>
                                            <option value="Testing" <?php echo e($Invoice->Condition == 'Testing' ? 'selected' : ''); ?> ><?php echo e(__('Under Test')); ?></option>
                                            <option value="Repaired" <?php echo e($Invoice->Condition == 'Repaired' ? 'selected' : ''); ?> ><?php echo e(__('Repaired')); ?></option>
                                            <option value="Delivered" <?php echo e($Invoice->Condition == 'Delivered' ? 'selected' : ''); ?> ><?php echo e(__('Delivered')); ?></option>
                                            <option value="Delayed" <?php echo e($Invoice->Condition == 'Delayed' ? 'selected' : ''); ?> ><?php echo e(__('Late Delivery')); ?></option>
                                            <option value="Unsuccessful" <?php echo e($Invoice->Condition == 'Unsuccessful' ? 'selected' : ''); ?> ><?php echo e(__('Delivery Problem')); ?></option>
                                            <option value="Refund" <?php echo e($Invoice->Condition == 'Refund' ? 'selected' : ''); ?> ><?php echo e(__('Refund')); ?></option>
                                        </select>
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-form-label text-right"><?php echo e(__('Notes')); ?></label>
                                        <textarea name="SqCTesting" class="form-control" cols="15" rows="5" ><?php echo e($Invoice->Notes); ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row mb-4">
                                        <label class="col-form-label text-right"><?php echo e(__('Price')); ?></label>
                                        <input type="text" class="form-control" value="<?php echo e($Invoice->Price); ?>">
                                    </div>
                                    <div class="row mb-4 justify-content-evenly">
                                        <div class="col-md-4">
                                            <a href="<?php echo e(route('invoice.print', $Invoice->id)); ?>" target="_Blank" class="btn btn-orangeSection col-md-12"><?php echo e(__('Print')); ?></a>
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-purpleSection col-md-12"><?php echo e(__('Send Invoice')); ?></button>
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-section col-md-12"><?php echo e(__('Send SMS')); ?></button>
                                        </div>
                                    </div>        
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <input type="submit" class="form-control btn btn-primary" value="<?php echo e(__('Submit')); ?>">
                                        </div>
                                    </div>        
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- end row -->

    </div> <!-- end container -->

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panelStruc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/Edit/invoiceEdit.blade.php ENDPATH**/ ?>