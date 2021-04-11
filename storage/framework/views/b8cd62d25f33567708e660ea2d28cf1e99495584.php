<?php $__env->startSection('content'); ?>
<div class="wrapper">
    <div class="container card p-4">

        <div class="row justify-content-md-center mb-5">
            <div class="col-sm-6">
                <h4 class="header-title m-t-0 mb-4 text-right"><i class="fas fa-laptop-medical ml-2"></i><?php echo e(__('Edit Device Type')); ?> / <?php echo e($Device->device_name); ?></h4>
            </div>
            <div class="col-sm-6">
                <h4 class="header-title m-t-0 mb-4 text-left"><?php echo e($Device->device_type); ?></h4>
            </div>
            <div class="dropdown-divider"></div>
        </div>
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <div class="row justify-content-evenly align-items-top">
            <div class="col-md-5 card text-right">
                <div class="card-header text-right"><?php echo e(__('Device Configs')); ?></div>
                <div class="card-body">
                    <ul class="list-group">
                        <?php $__currentLoopData = $Device->device__configs->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deviceConf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list-group-item">
                                <form action="" class="row" method="POST">
                                    <?php echo method_field('PUT'); ?>
                                    <?php echo csrf_field(); ?>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <label
                                                class="col-md-3"
                                            >
                                                <?php echo e(__('Name')); ?>

                                            </label>
                                            <input 
                                                type="text" 
                                                placeholder="<?php echo e(__('Name')); ?>" 
                                                value="<?php echo e($deviceConf->name); ?>"
                                                class="form-control col-md-9"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row justify-content-evenly">
                                            <button 
                                                type="submit"
                                                class="btn btn-success col-5"
                                            >
                                                <?php echo e(__('Submit')); ?>

                                            </button>
                                            <button 
                                                href="#"
                                                class="btn btn-danger col-5"
                                            >
                                                <?php echo e(__('Destroy')); ?>

                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item">
                            <form action="" class="row" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="col-md-6">
                                    <div class="row">
                                        <label
                                            class="col-md-3"
                                        >
                                            <?php echo e(__('Name')); ?>

                                        </label>
                                        <input 
                                            type="text" 
                                            placeholder="<?php echo e(__('Name')); ?>" 
                                            class="form-control col-md-9"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row justify-content-center">
                                        <button 
                                            type="submit"
                                            class="btn btn-success col-md-6"
                                        >
                                            <?php echo e(__('Submit')); ?>

                                        </button>
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ul>
                    
                </div>
            </div>
            <div class="col-md-5 card-box m-b-20">
                <div class="card-header text-right"><?php echo e(__('Registered Devices')); ?></div>
                <div class="card-body">
                    <table class="table table-hover mails m-0 table table-actions-bar text-right">
                        <thead>
                            <tr>
                                <th><?php echo e(__('IMEI')); ?></th>
                                <th><?php echo e(__('Condition')); ?></th>
                                <th>
                                    
                                </th>
                                <th>
                                    
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $__currentLoopData = $Device->registered_devices->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <?php echo e($device->IMEI); ?>

                                </td>
                                <td>
                                    <b><a href="" class="btn
                                        <?php if($device->Condition == 'Open'): ?>
                                            btn-outline-orangeSection
                                        <?php endif; ?>
                                        <?php if($device->Condition == 'Repairing'): ?>
                                            btn-outline-purpleSection
                                        <?php endif; ?>
                                        <?php if($device->Condition == 'Testing'): ?>
                                            btn-outline-warning
                                        <?php endif; ?>
                                        <?php if($device->Condition == 'Repaired'): ?>
                                            btn-outline-success
                                        <?php endif; ?>
                                        <?php if($device->Condition == 'Delivered'): ?>
                                            btn-success
                                        <?php endif; ?>
                                        <?php if($device->Condition == 'Delayed'): ?>
                                            btn-orangeSection
                                        <?php endif; ?>
                                        <?php if($device->Condition == 'Unsuccessful'): ?>
                                            btn-danger
                                        <?php endif; ?>
                                        <?php if($device->Condition == 'Refund'): ?>
                                            btn-section
                                        <?php endif; ?>
                                    "><b><?php echo e($device->Condition); ?></b></a> </b>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('deviceList.show', [ 'device' => $device->id ])); ?>" class="btn btn-primary">
                                        <?php echo e(__('View')); ?>

                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- end row -->

    </div> <!-- end container -->

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panelStruc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/Edit/deviceTypeEdit.blade.php ENDPATH**/ ?>