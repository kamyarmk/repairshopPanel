<?php $__env->startSection('content'); ?>
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Form Wizard</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Forms</li>
                        <li class="breadcrumb-item active" aria-current="page">Wizard</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Form Wizards (.js-wizard-* classes are initialized in js/pages/be_forms_wizard.min.js which was auto compiled from _js/pages/be_forms_wizard.js) -->
        <!-- For more examples you can check out https://github.com/VinceG/twitter-bootstrap-wizard -->

        <!-- Progress Wizards -->
        <h2 class="content-heading">Progress Wizards</h2>
        <div class="row">
            <div class="col-md-12">
                <!-- Progress Wizard -->
                <div class="js-wizard-simple block block block-rounded">
                    <!-- Step Tabs -->
                    <ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#wizard-progress-step1" data-toggle="tab">1. Device Type</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#wizard-progress-step2" data-toggle="tab">2. Datas</a>
                        </li>
                    </ul>
                    <!-- END Step Tabs -->

                    <!-- Form -->
                    <form action="be_forms_wizard.html" method="POST">
                        <!-- Wizard Progress Bar -->
                        <div class="block-content block-content-sm">
                            <div class="progress" data-wizard="progress" style="height: 8px;">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!-- END Wizard Progress Bar -->

                        <!-- Steps Content -->
                        <div class="block-content block-content-full tab-content" style="min-height: 300px;">
                            <!-- Step 1 -->
                            <div class="tab-pane active" id="wizard-progress-step1" role="tabpanel">
                                <div class="form-group">
                                    <label for="wizard-progress-firstname">Name</label>
                                    <input class="form-control" type="text" id="wizard-progress-firstname" name="wizard-progress-firstname">
                                </div>
                                <div class="form-group">
                                    <label for="wizard-progress-bio">Description</label>
                                    <textarea class="form-control" id="wizard-progress-bio" name="wizard-progress-bio" rows="7"></textarea>
                                </div>
                            </div>
                            <!-- END Step 1 -->

                            <!-- Step 2 -->
                            <div class="tab-pane" id="wizard-progress-step2" role="tabpanel">
                                <div class="form-group row">
                                    <div class="col-8">
                                        <label for="wizard-progress-firstname">Name</label>
                                        <input type="text" class="form-control form-control-alt">
                                    </div>
                                    <div class="col-4">
                                        <label for="wizard-progress-firstname"> </label>
                                        <button type="submit" class="btn btn-primary mt-1 w-100">Submit</button>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 col-xl-3">
                                        <a class="block block-rounded bg-success" href="javascript:void(0)">
                                            <div class="block-content block-content-full ribbon ribbon-modern ribbon-danger d-flex align-items-center justify-content-between">
                                                <div class="ribbon-box">
                                                    <i class="fa fa-fw fa-window-close"></i>
                                                </div>
                                                <div class="w-100 text-center">
                                                    <p class="font-w600 text-white mb-0">Alice Moore</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-6 col-xl-3">
                                        <a class="block block-rounded bg-success" href="javascript:void(0)">
                                            <div class="block-content block-content-full ribbon ribbon-modern ribbon-danger d-flex align-items-center justify-content-between">
                                                <div class="ribbon-box">
                                                    <i class="fa fa-fw fa-window-close"></i>
                                                </div>
                                                <div class="w-100 text-center">
                                                    <p class="font-w600 text-white mb-0">Alice Moore</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-xl-3">
                                        <a class="block block-rounded bg-success" href="javascript:void(0)">
                                            <div class="block-content block-content-full ribbon ribbon-modern ribbon-danger d-flex align-items-center justify-content-between">
                                                <div class="ribbon-box">
                                                    <i class="fa fa-fw fa-window-close"></i>
                                                </div>
                                                <div class="w-100 text-center">
                                                    <p class="font-w600 text-white mb-0">Alice Moore</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- END Step 2 -->
                        </div>
                        <!-- END Steps Content -->

                        <!-- Steps Navigation -->
                        <div class="block-content block-content-sm block-content-full bg-body-light rounded-bottom">
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-secondary" data-wizard="prev">
                                        <i class="fa fa-angle-left mr-1"></i> Previous
                                    </button>
                                </div>
                                <div class="col-6 text-right">
                                    <button type="button" class="btn btn-secondary" data-wizard="next">
                                        Next <i class="fa fa-angle-right ml-1"></i>
                                    </button>
                                    <button type="submit" class="btn btn-primary d-none" data-wizard="finish">
                                        <i class="fa fa-check mr-1"></i> Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- END Steps Navigation -->
                    </form>
                    <!-- END Form -->
                </div>
                <!-- END Progress Wizard -->
            </div>
    </div>
    <!-- END Page Content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js_after'); ?>
    <!-- Page JS Plugins -->
    <script src="<?php echo e(asset('js/plugins/jquery-bootstrap-wizard/bs4/jquery.bootstrap.wizard.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/plugins/jquery-validation/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/plugins/jquery-validation/additional-methods.js')); ?>"></script>

    <script src="<?php echo e(asset('js/pages/be_forms_wizard.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/project/qc/add.blade.php ENDPATH**/ ?>