<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="wrapper-page">
                
                <div class="m-t-40 card-box">
                    <div class="text-center">
                        <h2 class="text-uppercase m-t-0 m-b-30">
                            <a href="index.html" class="text-success">
                                <span><img src="<?php echo e(asset('/images/logo_dark.png')); ?>" alt="" height="30"></span>
                            </a>
                        </h2>
                        <!--<h4 class="text-uppercase font-bold m-b-0"><?php echo e(__('Login')); ?></h4>-->
                    </div>

                    <div class="account-content">
                        <form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>

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
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

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
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

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

                            <div class="form-group m-b-30">
                                <div class="col-12">
                                    <div class="checkbox checkbox-primary">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                        <label class="form-check-label" for="remember">
                                            <?php echo e(__('Remember Me')); ?>

                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group account-btn text-center m-t-10">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-lg btn-primary btn-block">
                                        <?php echo e(__('Login')); ?>

                                    </button>

                                    <?php if(Route::has('password.request')): ?>
                                        <a class="btn btn-link btn-block" href="<?php echo e(route('password.request')); ?>">
                                            <?php echo e(__('Forgot Your Password?')); ?>

                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php if(Route::has('register')): ?>
                    <div class="row m-t-50">
                        <div class="col-sm-12 text-center">
                            <p class="text-muted">Don't have an account? <a href="<?php echo e(route('register')); ?>" class="text-dark m-l-5"><?php echo e(__('Register')); ?></a></p>
                        </div>
                    </div>
                <?php endif; ?>
                
            </div>
            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/auth/login.blade.php ENDPATH**/ ?>