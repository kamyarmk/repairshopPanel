<?php $__env->startSection('content'); ?>
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">
                    <?php if(isset($customer)): ?>
                       Edit / <?php echo e($customer->first_name); ?> <?php echo e($customer->last_name); ?>

                    <?php else: ?>
                        Add New Customer
                    <?php endif; ?>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active" aria-current="page">Add Customer</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <div class="block block-rounded">
            <div class="block-content">
                <form  method="POST" 
                    <?php if(isset($customer)): ?>
                       action="/customer/edit/<?php echo e($customer->id); ?>"
                    <?php else: ?>
                        action="/customer/add"
                    <?php endif; ?>
                >
                    <?php echo csrf_field(); ?>
                    <?php if(isset($customer)): ?>
                        <?php echo method_field('PUT'); ?>
                    <?php endif; ?>
                    <!-- User Profile -->
                    <h2 class="content-heading pt-0">
                        <i class="fa fa-fw fa-user-circle text-muted mr-1"></i> User Profile
                    </h2>
                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="text-muted">
                                Your account’s vital info. Your username will be publicly visible.
                            </p>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="dm-profile-edit-firstname">Firstname</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" 
                                        <?php if(isset($customer)): ?>
                                             value="<?php echo e($customer->first_name); ?>"    
                                        <?php endif; ?>
                                    >
                                </div>
                                <div class="col-6">
                                    <label for="dm-profile-edit-lastname">Lastname</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name"
                                        <?php if(isset($customer)): ?>
                                             value="<?php echo e($customer->last_name); ?>"    
                                        <?php endif; ?>
                                    >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dm-profile-edit-email">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" 
                                    <?php if(isset($customer)): ?>
                                        value="<?php echo e($customer->email); ?>"    
                                    <?php endif; ?>
                                >
                            </div>
                            <div class="form-group">
                                <label for="dm-profile-edit-company-name">Mobile Number</label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-alt" id="phone_number" name="phone_number"
                                        <?php if(isset($customer)): ?>
                                             value="<?php echo e($customer->phone_number); ?>"    
                                        <?php endif; ?>
                                    >
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-dark">Submit</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dm-profile-edit-company-name">Company Name (Optional)</label>
                                <input type="text" class="form-control" id="job_title" name="job_title"
                                    <?php if(isset($customer)): ?>
                                         value="<?php echo e($customer->job_title); ?>"    
                                    <?php endif; ?>
                                >
                            </div>
                            <div class="form-group">
                                <label for="dm-profile-edit-street-1">Street Address 1</label>
                                <input type="text" class="form-control" id="address_one" name="address_one"
                                    <?php if(isset($customer)): ?>
                                         value="<?php echo e($customer->address_one); ?>"    
                                    <?php endif; ?>
                                >
                            </div>
                            <div class="form-group">
                                <label for="dm-profile-edit-street-2">Street Address 2</label>
                                <input type="text" class="form-control" id="address_two" name="address_two" 
                                    <?php if(isset($customer)): ?>
                                         value="<?php echo e($customer->address_two); ?>"    
                                    <?php endif; ?>
                                >
                            </div>
                            <div class="form-group">
                                <label for="dm-profile-edit-city">City</label>
                                <input type="text" class="form-control" id="city" name="city"
                                    <?php if(isset($customer)): ?>
                                         value="<?php echo e($customer->city); ?>"    
                                    <?php endif; ?>
                                >
                            </div>
                            <div class="form-group">
                                <label for="dm-profile-edit-postal">Postal code</label>
                                <input type="text" class="form-control" id="postal_code" name="postal_code"
                                    <?php if(isset($customer)): ?>
                                         value="<?php echo e($customer->postal_code); ?>"    
                                    <?php endif; ?>
                                >
                            </div>
                        </div>
                    </div>
                    <!-- END User Profile -->

                    <!-- Change Password -->
                    <h2 class="content-heading pt-0">
                        <i class="fa fa-fw fa-asterisk text-muted mr-1"></i> Change Password
                    </h2>
                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="text-muted">
                                Changing your sign in password is an easy way to keep your account secure.
                            </p>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="form-group">
                                <label for="dm-profile-edit-password">Current Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="dm-profile-edit-password-new">New Password</label>
                                    <input type="password" class="form-control" id="dm-profile-edit-password-new" name="dm-profile-edit-password-new">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="dm-profile-edit-password-new-confirm">Confirm New Password</label>
                                    <input type="password" class="form-control" id="dm-profile-edit-password-new-confirm" name="dm-profile-edit-password-new-confirm">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Change Password -->

                    <!-- Submit -->
                    <div class="row push">
                        <div class="col-lg-8 col-xl-5 offset-lg-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-alt-primary">
                                    <i class="fa fa-check-circle mr-1"></i> Update Profile
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- END Submit -->
                </form>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/customer/add.blade.php ENDPATH**/ ?>