

<?php $__env->startSection('css_before'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('js/plugins/slick-carousel/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('js/plugins/slick-carousel/slick-theme.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js_after'); ?>
    <!-- Page JS Plugins -->
    <script src="<?php echo e(asset('js/plugins/slick-carousel/slick.min.js')); ?>"></script>

    <!-- Page JS Helpers (Slick Slider Plugin) -->
    <script>jQuery(function(){ Dashmix.helpers('slick'); });</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Slick Slider Example</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Examples</li>
                        <li class="breadcrumb-item active" aria-current="page">Plugin</li>
                    </ol>
                </nav>
            </div>
       </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Info -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Plugin Example</h3>
                    </div>
                    <div class="block-content">
                        <p>
                            This page showcases how easily you can add a plugin’s JS/CSS assets and init it using a Dashmix JS helper.
                        </p>
                    </div>
                </div>
                <!-- END Info -->

                <!-- Slider with dots -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Dots</h3>
                    </div>
                    <div class="js-slider" data-dots="true">
                        <div>
                            <img class="img-fluid" src="<?php echo e(asset('media/photos/photo2.jpg')); ?>" alt="photo">
                        </div>
                        <div>
                            <img class="img-fluid" src="<?php echo e(asset('media/photos/photo3.jpg')); ?>" alt="photo">
                        </div>
                        <div>
                            <img class="img-fluid" src="<?php echo e(asset('media/photos/photo4.jpg')); ?>" alt="photo">
                        </div>
                    </div>
                    <!-- END Slider with dots -->
                </div>
                <!-- END Dots -->
            </div>
        </div>
    </div>
    <!-- END Page Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/pages/slick.blade.php ENDPATH**/ ?>