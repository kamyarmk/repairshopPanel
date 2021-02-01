<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="wrapper-page">
                <div class="m-t-40 card-box">
                    <div class="text-center">
                        <h2 class="text-uppercase m-t-0 m-b-30">
                            <a href="index.html" class="text-success">
                                <span><img src="<?php echo e(asset('/images/logo_dark.png')); ?>" alt="" height="30"></span>
                            </a>
                        </h2>
                        <!--<h4 class="text-uppercase font-bold m-b-0"><?php echo e(__('Register')); ?></h4>-->
                    </div>

                    <div class="account-content">
                        <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="form-group m-b-20">
                                <div class="col-12">
                                    <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Name')); ?></label>
                                    <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form-group m-b-20">
                                <div class="col-12">
                                    <label for="email"><?php echo e(__('E-Mail Address')); ?></label>
                                    <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form-group m-b-20">
                                <div class="col-12">
                                    <label for="password"><?php echo e(__('Password')); ?></label>
                                    <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">

                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form-group m-b-20">
                                <div class="col-12">
                                    <label for="password-confirm"><?php echo e(__('Confirm Password')); ?></label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group m-b-30">
                                <div class="col-12">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox5" type="checkbox">
                                        <label for="checkbox5">
                                            I accept <a href="#">Terms and Conditions</a>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group account-btn text-center m-t-10">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-lg btn-primary btn-block">
                                        <?php echo e(__('Register')); ?>

                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end card-box-->

                <?php if(Route::has('login')): ?>
                    <div class="row m-t-50">
                        <div class="col-sm-12 text-center">
                            <p class="text-muted">Already have an account?  <a href="<?php echo e(route('login')); ?>" class="text-dark m-l-5"><?php echo e(__('Login')); ?></a></p>
                        </div>
                    </div>
                <?php endif; ?>
                
            </div>
            <!-- end wrapper -->
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/auth/register.blade.php ENDPATH**/ ?>