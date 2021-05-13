<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo e(asset('media/photos/photo19@2x.jpg')); ?>');">
    <div class="row no-gutters justify-content-center bg-primary-dark-op">
        <div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">
            <!-- Sign In Block -->
            <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
                <div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-white">
                    <!-- Header -->
                    <div class="mb-2 text-center">
                        <a class="link-fx font-w700 font-size-h1" href="index.html">
                            <span class="text-dark">Dash</span><span class="text-primary">mix</span>
                        </a>
                        <p class="text-uppercase font-w700 font-size-sm text-muted">Sign In</p>
                    </div>
                    <!-- END Header -->

                    <!-- Sign In Form -->
                    <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <form class="js-validation-signin" action="<?php echo e(route('login')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <div class="input-group">
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="<?php echo e(__('E-Mail Address')); ?>">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-user-circle"></i>
                                    </span>
                                </div>
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
                        
                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password" name="password" placeholder="<?php echo e(__('Password')); ?>">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-asterisk"></i>
                                    </span>
                                </div>
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
                        <div class="form-group d-sm-flex justify-content-sm-between align-items-sm-center text-center text-sm-left">
                            <div class="custom-control custom-checkbox custom-control-primary">
                                <input type="checkbox" class="form-check-input" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="remember"><?php echo e(__('Remember Me')); ?></label>
                            </div>
                            <div class="font-w600 font-size-sm py-1">
                            <?php if(Route::has('password.request')): ?>
                                <a href="<?php echo e(route('password.request')); ?>">
                                    <?php echo e(__('Forgot Your Password?')); ?>

                                </a>
                            <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-hero-primary">
                                <i class="fa fa-fw fa-sign-in-alt mr-1"></i> <?php echo e(__('Login')); ?>

                            </button>
                            
                        </div>
                    </form>
                    <!-- END Sign In Form -->
                </div>
                <div class="block-content bg-body">
                    <div class="d-flex justify-content-center text-center push">
                        <a class="item item-circle item-tiny mr-1 bg-default" data-toggle="theme" data-theme="default" href="#"></a>
                        <a class="item item-circle item-tiny mr-1 bg-xwork" data-toggle="theme" data-theme="<?php echo e(asset('css/themes/xwork.css')); ?>" href="#"></a>
                        <a class="item item-circle item-tiny mr-1 bg-xmodern" data-toggle="theme" data-theme="<?php echo e(asset('css/themes/xmodern.css')); ?>" href="#"></a>
                        <a class="item item-circle item-tiny mr-1 bg-xeco" data-toggle="theme" data-theme="<?php echo e(asset('css/themes/xeco.css')); ?>" href="#"></a>
                        <a class="item item-circle item-tiny mr-1 bg-xsmooth" data-toggle="theme" data-theme="<?php echo e(asset('css/themes/xsmooth.css')); ?>" href="#"></a>
                        <a class="item item-circle item-tiny mr-1 bg-xinspire" data-toggle="theme" data-theme="<?php echo e(asset('css/themes/xinspire.css')); ?>" href="#"></a>
                        <a class="item item-circle item-tiny mr-1 bg-xdream" data-toggle="theme" data-theme="<?php echo e(asset('css/themes/xdream.css')); ?>" href="#"></a>
                        <a class="item item-circle item-tiny mr-1 bg-xpro" data-toggle="theme" data-theme="<?php echo e(asset('css/themes/xpro.css')); ?>" href="#"></a>
                        <a class="item item-circle item-tiny bg-xplay" data-toggle="theme" data-theme="<?php echo e(asset('css/themes/xplay.css')); ?>" href="#"></a>
                    </div>
                </div>
            </div>
            <!-- END Sign In Block -->
        </div>
    </div>
</div>
<!-- END Page Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/auth/login.blade.php ENDPATH**/ ?>