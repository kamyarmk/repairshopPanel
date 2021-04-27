<?php $__env->startSection('content'); ?>
<div class="wrapper">
    <div class="container card p-4">

        <div class="row justify-content-md-center mb-5">
            <div class="col-sm-8">
                <h4 class="header-title m-t-0 mb-4 text-right"><i class="fas fa-user-edit ml-2"></i><?php echo e(__('Edit User')); ?> / <?php echo e($User->name); ?></h4>
                <div class="dropdown-divider"></div>
            </div>
        </div>


        <div class="row justify-content-md-center align-items-center mb-5">
            <div class="col-md-8 card-box m-b-20">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <form role="form" method="POST" action="<?php echo e(route('userList.update', $User->id)); ?>">
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="row text-right">
                        <div class="mb-3 col-6">
                            <label for="name" class="form-label"><?php echo e(__('Name')); ?></label>
                            <input type="text" name="name" class="form-control" value="<?php echo e($User->name); ?>">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="company_name" class="form-label"><?php echo e(__('Company Name')); ?></label>
                            <input type="text" name="company_name" class="form-control" value="<?php echo e($User->usersDetails->company_name); ?>">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="email" class="form-label"><?php echo e(__('Email')); ?></label>
                            <input type="email" name="email" class="form-control" value="<?php echo e($User->email); ?>">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="phone_number" class="form-label"><?php echo e(__('Phone Number')); ?></label>
                            <input type="text" name="phone_number" class="form-control" value="<?php echo e($User->phone_number); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="seccond_number" class="form-label"><?php echo e(__('Seccond Number')); ?></label>
                            <input type="text" name="seccond_number" class="form-control" value="<?php echo e($User->usersDetails->seccond_number); ?>">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="first_address" class="form-label"><?php echo e(__('First Address')); ?></label>
                            <textarea class="form-control" placeholder="<?php echo e($User->usersDetails->first_address); ?>" id="first_address" name="first_address" style="height: 100px"><?php echo e($User->usersDetails->first_address); ?></textarea>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="seccond_address" class="form-label"><?php echo e(__('Seccond Address')); ?></label>
                            <textarea class="form-control" placeholder="<?php echo e($User->usersDetails->seccond_address); ?>" id="seccond_address" name="seccond_address" style="height: 100px"><?php echo e($User->usersDetails->seccond_address); ?></textarea>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary" value="<?php echo e(__('Submit')); ?>">
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <!-- end row -->

        <div class="row justify-content-md-center mb-5">
            <div class="col-sm-8">
                <h4 class="header-title m-t-0 mb-4 text-right"><i class="fas fa-laptop ml-2"></i><?php echo e(__('Device List')); ?></h4>
                <div class="dropdown-divider"></div>
            </div>
        </div>

        <div class="row justify-content-md-center">
            <div class="col-sm-8">
                <div class="card-box">
                    <div class="table-responsive">
                        <table class="table table-hover mails m-0 table table-actions-bar text-right">
                            <thead class="text-light">
                                <tr>
                                    <th><?php echo e(__('IMEI')); ?></th>
                                    <th><?php echo e(__('Device')); ?></th>
                                    <th><?php echo e(__('Condition')); ?></th>
                                    <th><?php echo e(__('Start Date')); ?></th>
                                    <th>
                                        
                                    </th>
                                    <th>
                                        
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $Devices->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <?php echo e($device->IMEI); ?>

                                    </td>
                                    <td>
                                        <a href="#" class="text-muted"><?php echo e($device->Device); ?></a>
                                    </td>
                                    <td>
                                        <b><a href="" class="text-dark"><b><?php echo e($device->Condition); ?></b></a> </b>
                                    </td>
                                    <td>
                                        <b><a href="" class="text-dark"><b><?php echo e($device->created_at); ?></b></a> </b>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('deviceList.show', [ 'device' => $device->id ])); ?>" class="btn btn-success">
                                            <?php echo e(__('Edit')); ?>

                                        </a>
                                    </td>
                                    <td>
                                        <form action="<?php echo e(route('deviceList.destroy', [ 'device' => $device->id ])); ?>" method="post">
                                            <?php echo method_field('delete'); ?>
                                            <?php echo csrf_field(); ?>
                                            <input type="submit" value="<?php echo e(__('Remove')); ?>" class="btn btn-danger">
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- end container -->

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panelStruc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/Edit/userEdit.blade.php ENDPATH**/ ?>