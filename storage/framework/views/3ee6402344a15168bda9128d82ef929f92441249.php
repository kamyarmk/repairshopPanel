<?php $__env->startSection('content'); ?>
<div class="wrapper">
    <div class="container card p-4">

        <div class="row justify-content-md-center mb-5">
            <div class="col-sm-12">
                <h4 class="header-title m-t-0 mb-4 text-right"><i class="fas fa-laptop-medical ml-2"></i><?php echo e(__('Register Device')); ?></h4>
                <div class="dropdown-divider"></div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-12 d-flex justify-content-md-center">
                <button type="button" class="btn btn-primary text-decoration-none w-25 ml-2" data-bs-toggle="modal" data-bs-target="#exampleModal"  style="overflow: hidden; position: relative;"><?php echo e(__('Add New User')); ?> </button>
                <button type="button" class="btn btn-primary text-decoration-none w-25 mr-2" data-bs-toggle="modal" data-bs-target="#deviceModal"  style="overflow: hidden; position: relative;"><?php echo e(__('Add New Device Type')); ?> </button>
            </div>
        </div>


        <div class="row justify-content-md-center align-items-center">
            <div class="col-md-12">
                <!-- Error Area -->
                <div class="row">
                    <div class="col-md-12 text-right fw-bolder">
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
                <!-- Device Registration Area -->
                <form class="form-horizontal" role="form" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="row text-right fw-bold text-decoration-underline">   
                        <div class="col-md-6 m-b-20">
                            <div class="row mb-4">
                                    <label class=" col-form-label"><?php echo e(__('User')); ?></label>
                                    <div class=" input-group m-t-10 d-flex">
                                        <user-autocomplete></user-autocomplete>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-form-label"><?php echo e(__('Device')); ?></label>
                                    <div class="">
                                        <select class="form-select" name="Device">
                                            <?php $__currentLoopData = $Devices->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($device->id); ?>"><?php echo e($device->device_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-form-label"><?php echo e(__('Device Model')); ?></label>
                                    <div class="">
                                        <select class="form-select" name="DeviceType">
                                            <option value="Mobile"><?php echo e(__('Mobile')); ?></option>
                                            <option value="Tablet"><?php echo e(__('Tablet')); ?></option>
                                            <option value="Laptop"><?php echo e(__('Laptop')); ?></option>
                                            <option value="Other"><?php echo e(__('Other')); ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-form-label"><?php echo e(__('Device Color')); ?></label>
                                    <div class="">
                                        <input type="text" class="form-control" value="<?php echo e(old('DeviceColor')); ?>" name="DeviceColor">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class=" col-form-label"><?php echo e(__('IMEI')); ?></label>
                                    <div class="">
                                        <input type="text" class="form-control" value="<?php echo e(old('IMEI')); ?>" name="IMEI">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class=" col-form-label"><?php echo e(__('Device Problems')); ?></label>
                                    <div class="">
                                        <textarea class="form-control" rows="5" name="Problems"><?php echo e(old('Problems')); ?></textarea>
                                    </div>
                                </div>
                        </div>    
                        <div class="col-md-6 m-b-20">
                                
                                <div class="row mb-4">
                                    <label class=" col-form-label"><?php echo e(__('Device Decription')); ?></label>
                                    <div class="">
                                        <textarea class="form-control" rows="5" name="DeviceDescription"><?php echo e(old('DeviceDescription')); ?></textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class=" col-form-label"><?php echo e(__('Password')); ?></label>
                                    <div class="">
                                        <input type="text" class="form-control" value="<?php echo e(old('password')); ?>" name="password">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                            <label class="custom-control-label" for="customSwitch1"><?php echo e(__('Device Been Accepted Without Code')); ?></label>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="row mb-4">
                                    <label class=" col-form-label"><?php echo e(__('Device Accessories')); ?></label>
                                    <div class="">
                                        <textarea class="form-control" rows="1" name="DeviceAccessories"><?php echo e(old('Device Accessories')); ?></textarea>
                                    </div>
                                </div>            
                                <div class="row mb-4">
                                    <label class=" col-form-label"><?php echo e(__('Device Tips')); ?></label>
                                    <div class="">
                                        <textarea class="form-control" rows="5" name="Tips"><?php echo e(old('Device Tips')); ?></textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class=" col-form-label"><?php echo e(__('Budget')); ?></label>
                                    <div class="">
                                        <input type="text" class="form-control" value="<?php echo e(old('Budget')); ?>" name="MaxBudget">
                                    </div>
                                </div>
                                <div class="row mb-4 d-flex justify-content-center">
                                    <div class="col-md-6">
                                        <input type="submit" class="form-control btn btn-primary" value="<?php echo e(__('Submit')); ?>">
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </form>
            </div>
            

        </div>
        <!-- end row -->

    </div> <!-- end container -->

</div>

<!-- User Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" ref="exampleModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Register New User')); ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <user-create 
        user-title="<?php echo e(__('User')); ?>"
        phone-title="<?php echo e(__('Phone Number')); ?>"
        email-title="<?php echo e(__('Email')); ?>"
        send-title="<?php echo e(__('Submit')); ?>"
        close-title="<?php echo e(__('Close')); ?>"
        company-name="<?php echo e(__('Company Name')); ?>"
        address-name="<?php echo e(__('Address')); ?>"
      >
        <?php echo csrf_field(); ?>
      </user-create>
    </div>
  </div>
</div>

<div class="modal fade" id="deviceModal" tabindex="-1" aria-labelledby="deviceModalLabel" aria-hidden="true" ref="deviceModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deviceModalLabel"><?php echo e(__('Register New Device')); ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <quick-devicereg
        device-name="<?php echo e(__('Device Name')); ?>"
        device-type="<?php echo e(__('Device Type')); ?>"
        device-config="<?php echo e(__('Device Config')); ?>"
        name="<?php echo e(__('Name')); ?>"
        destroy="<?php echo e(__('Destroy')); ?>"
        send-title="<?php echo e(__('Submit')); ?>"
        close-title="<?php echo e(__('Close')); ?>"
      >
        <?php echo csrf_field(); ?>
      </quick-devicereg>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panelStruc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/RegisterDevice.blade.php ENDPATH**/ ?>