<?php $__env->startSection('content'); ?>
<div class="wrapper">
    <div class="container card p-4">

        <div class="row justify-content-md-center mb-5">
            <div class="col-sm-8">
                <h4 class="header-title m-t-0 mb-4 text-right"><i class="fas fa-laptop-medical ml-2"></i><?php echo e(__('Edit Device')); ?> / <?php echo e($Device->IMEI); ?></h4>
                <div class="dropdown-divider"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <form role="form" method="POST" action="<?php echo e(route('deviceList.update', $Device->id)); ?>">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
            <div class="row justify-content-md-evenly align-items-center">
                <div class="col-md-5">
                    <div class="card mb-4 text-right">
                        <div class="card-header"><?php echo e(__('Condition')); ?></div>
                        <div class="card-body">
                            <select name="Condition" class="form-select" >
                                <option value="Open" <?php echo e($Device->Condition == 'Open' ? 'selected' : ''); ?> ><?php echo e(__('Device In Queue')); ?></option>
                                <option value="Repairing" <?php echo e($Device->Condition == 'Repairing' ? 'selected' : ''); ?> ><?php echo e(__('Under Repair')); ?></option>
                                <option value="Testing" <?php echo e($Device->Condition == 'Testing' ? 'selected' : ''); ?> ><?php echo e(__('Under Test')); ?></option>
                                <option value="Repaired" <?php echo e($Device->Condition == 'Repaired' ? 'selected' : ''); ?> ><?php echo e(__('Repaired')); ?></option>
                                <option value="Delivered" <?php echo e($Device->Condition == 'Delivered' ? 'selected' : ''); ?> ><?php echo e(__('Delivered')); ?></option>
                                <option value="Delayed" <?php echo e($Device->Condition == 'Delayed' ? 'selected' : ''); ?> ><?php echo e(__('Late Delivery')); ?></option>
                                <option value="Unsuccessful" <?php echo e($Device->Condition == 'Unsuccessful' ? 'selected' : ''); ?> ><?php echo e(__('Delivery Problem')); ?></option>
                                <option value="Refund" <?php echo e($Device->Condition == 'Refund' ? 'selected' : ''); ?> ><?php echo e(__('Refund')); ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="card text-right">
                        <div class="card-header"><?php echo e(__('info')); ?></div>
                        <div class="card-body">
                            <div class="card-text mb-3"><strong><?php echo e(__('User')); ?> : </strong><?php echo e($User->name); ?></div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Device')); ?> : </strong><?php echo e($Device->devices->device_name); ?></div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Device Model')); ?> : </strong><?php echo e($Device->DeviceType); ?></div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Device Color')); ?> : </strong><?php echo e($Device->DeviceColor); ?></div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('IMEI')); ?> : </strong><?php echo e($Device->IMEI); ?></div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Device Problems')); ?> : </strong><?php echo e($Device->Problems); ?></div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Decription')); ?> : </strong><?php echo e($Device->DeviceDescription); ?></div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Password')); ?> : </strong><?php echo e($Device->password); ?></div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Device Accessories')); ?> : </strong><?php echo e($Device->DeviceAccessories); ?></div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Device Tips')); ?> : </strong><?php echo e($Device->Tips); ?></div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Budget')); ?> : </strong><?php echo e($Device->MaxBudget); ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 card-box m-b-20 mt-5">
                        <div class="row mb-4 card">
                            <div class="card-header text-right"><?php echo e(__('QC Testing')); ?></div>
                            <div class="card-body">
                                <form class="form" action="">
                                    <div class="flex-row d-flex justify-content-center align-items-center align-self-stretch flex-wrap">
                                        <?php $__currentLoopData = $Device->devices->device__configs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deviceConf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-md-6">
                                                <div class="form-check form-switch row">
                                                    <input type="checkbox" class="form-check-input col-md-6" id="checkbox-<?php echo e($deviceConf->name); ?>">
                                                    <label for="checkbox-<?php echo e($deviceConf->name); ?>" class="form-check-label col-md-6"><?php echo e($deviceConf->name); ?></label>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row mb-4 card">
                            <div class="card-header text-right"><?php echo e(__('Seccond QC')); ?></div>
                            <div class="card-body">
                                <form class="form" action="">
                                    <div class="flex-row d-flex justify-content-center align-items-center align-self-stretch flex-wrap">
                                        <?php $__currentLoopData = $Device->devices->device__configs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deviceConf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-md-6">
                                                <div class="form-check form-switch row">
                                                    <input type="checkbox" class="form-check-input col-md-6" id="checkbox-<?php echo e($deviceConf->name); ?>">
                                                    <label for="checkbox-<?php echo e($deviceConf->name); ?>" class="form-check-label col-md-6"><?php echo e($deviceConf->name); ?></label>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex justify-content-center">
                            <div class="col-md-6">
                                <input type="submit" class="form-control btn btn-primary" value="<?php echo e(__('Submit')); ?>">
                            </div>
                        </div>
                    
                </div>

            </div>
            <!-- end row -->
        </form>
    </div> <!-- end container -->

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panelStruc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/Edit/deviceEdit.blade.php ENDPATH**/ ?>