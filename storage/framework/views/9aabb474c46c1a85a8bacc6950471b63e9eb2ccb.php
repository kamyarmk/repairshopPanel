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
                            <div class="card-text mb-3"><strong><?php echo e(__('User')); ?> : </strong>
                                
                                <user-autocomplete
                                user=<?php echo e($User->name); ?>

                                user-id=<?php echo e($User->id); ?>

                                ></user-autocomplete>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Device')); ?> : </strong>
                                <select class="form-select" name="Device">
                                    <?php $__currentLoopData = $DeviceType->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($device->id == $Device->devices->id): ?>
                                            <option value="<?php echo e($device->id); ?>" selected><?php echo e($device->device_name); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($device->id); ?>"><?php echo e($device->device_name); ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Device Model')); ?> : </strong>
                                <select class="form-select" name="DeviceType">
                                    <option value="Mobile"><?php echo e(__('Mobile')); ?></option>
                                    <option value="Tablet"><?php echo e(__('Tablet')); ?></option>
                                    <option value="Laptop"><?php echo e(__('Laptop')); ?></option>
                                    <option value="Other"><?php echo e(__('Other')); ?></option>
                                    <option value="<?php echo e($Device->DeviceType); ?>" selected><?php echo e($Device->DeviceType); ?></option>
                                </select>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Device Color')); ?> : </strong>
                                <input type="text" class="form-control" value="<?php echo e($Device->DeviceColor); ?>" name="DeviceColor">
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('IMEI')); ?> : </strong>
                                <input type="text" class="form-control" value="<?php echo e($Device->IMEI); ?>" name="IMEI">
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Device Problems')); ?> : </strong>
                                <textarea class="form-control" rows="5" name="Problems"><?php echo e($Device->Problems); ?></textarea>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Decription')); ?> : </strong>
                                <textarea class="form-control" rows="5" name="DeviceDescription"><?php echo e($Device->DeviceDescription); ?></textarea>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Password')); ?> : </strong>
                                <input type="text" class="form-control" value="<?php echo e($Device->password); ?>" name="password">
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Device Accessories')); ?> : </strong>
                                <textarea class="form-control" rows="1" name="DeviceAccessories"><?php echo e($Device->DeviceAccessories); ?></textarea>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Device Tips')); ?> : </strong>
                                <textarea class="form-control" rows="5" name="Tips"><?php echo e($Device->Tips); ?></textarea>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="card-text mb-3"><strong><?php echo e(__('Budget')); ?> : </strong>
                                <input type="text" class="form-control" value="<?php echo e($Device->MaxBudget); ?>" name="MaxBudget">
                            </div>
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
                            <div class="col-md-6">
                                <a href="<?php echo e(route('registerDevice.print', $Device->id)); ?>" class="btn btn-orangeSection w-100"><?php echo e(__('Lable Print')); ?></a>
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