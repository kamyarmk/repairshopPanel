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
                            <a class="nav-link active" href="#wizard-progress-step1" data-toggle="tab">1. Type</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#wizard-progress-step2" data-toggle="tab">2. Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#wizard-progress-step3" data-toggle="tab">3. Fields</a>
                        </li>
                    </ul>
                    <!-- END Step Tabs -->

                    <!-- Form -->
                    <div>
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
                                    <label for="wizard-progress-skills">Skills</label>
                                    <select class="form-control" id="wizard-progress-skills" name="wizard-progress-skills">
                                        <option value="">Please select your best skill</option>
                                        <option value="1">Photoshop</option>
                                        <option value="2">HTML</option>
                                        <option value="3">CSS</option>
                                        <option value="4">JavaScript</option>
                                    </select>
                                </div>
                            </div>
                            <!-- END Step 1 -->

                            <!-- Step 2 -->
                            <div class="tab-pane" id="wizard-progress-step2" role="tabpanel">
                                <div class="form-group">
                                    <label for="wizard-progress-skills">Skills</label>
                                    <select class="form-control" id="wizard-progress-skills" name="wizard-progress-skills">
                                        <option value="">Please select your best skill</option>
                                        <option value="1">Photoshop</option>
                                        <option value="2">HTML</option>
                                        <option value="3">CSS</option>
                                        <option value="4">JavaScript</option>
                                    </select>
                                </div>
                            </div>
                            <!-- END Step 2 -->

                            <!-- Step 3 -->
                            <div class="tab-pane" id="wizard-progress-step3" role="tabpanel">
                                <div class="content content-full">
                                    <!-- Tasks, custom functionality is initialized in js/pages/be_pages_projects_tasks.min.js which was auto compiled from _js/pages/be_pages_projects_tasks.js -->
                                    <div class="js-tasks">
                                        <!-- Add task -->
                                        <form id="js-task-form" method="POST">
                                            <input class="form-control form-control-lg font-size-base" type="text" id="js-task-input" name="js-task-input" placeholder="Add a task and press enter..">
                                        </form>
                                        <!-- END Add task -->

                                        <!-- Tasks List -->
                                        <h2 class="content-heading pb-0 mb-3 border-0">
                                            Active <span class="js-task-badge badge badge-pill badge-light animated fadeIn"></span>
                                        </h2>
                                        <div class="js-task-list">
                                            <!-- Task -->
                                            <div class="js-task block block-rounded mb-2 animated fadeIn" data-task-id="9" data-task-completed="false" data-task-starred="false">
                                                <table class="table table-borderless table-vcenter mb-0">
                                                    <tr>
                                                        <td class="text-center pr-0" style="width: 38px;">
                                                            <div class="js-task-status custom-control custom-checkbox custom-checkbox-rounded-circle custom-control-primary custom-control-lg">
                                                                <input type="checkbox" class="custom-control-input" id="tasks-cb-id9" name="tasks-cb-id9">
                                                                <label class="custom-control-label" for="tasks-cb-id9"></label>
                                                            </div>
                                                        </td>
                                                        <td class="js-task-content font-w600 pl-0">
                                                            Backend framework
                                                        </td>
                                                        <td class="text-right" style="width: 100px;">
                                                            <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                                                                <i class="far fa-star fa-fw"></i>
                                                            </button>
                                                            <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                                                                <i class="fa fa-times fa-fw"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!-- END Task -->

                                            <!-- Task -->
                                            <div class="js-task block block-rounded mb-2 animated fadeIn" data-task-id="8" data-task-completed="false" data-task-starred="false">
                                                <table class="table table-borderless table-vcenter mb-0">
                                                    <tr>
                                                        <td class="text-center pr-0" style="width: 38px;">
                                                            <div class="js-task-status custom-control custom-checkbox custom-checkbox-rounded-circle custom-control-primary custom-control-lg">
                                                                <input type="checkbox" class="custom-control-input" id="tasks-cb-id8" name="tasks-cb-id8">
                                                                <label class="custom-control-label" for="tasks-cb-id8"></label>
                                                            </div>
                                                        </td>
                                                        <td class="js-task-content font-w600 pl-0">
                                                            Customer on-boarding process
                                                        </td>
                                                        <td class="text-right" style="width: 100px;">
                                                            <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                                                                <i class="far fa-star fa-fw"></i>
                                                            </button>
                                                            <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                                                                <i class="fa fa-times fa-fw"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!-- END Task -->

                                            <!-- Task -->
                                            <div class="js-task block block-rounded mb-2 animated fadeIn" data-task-id="7" data-task-completed="false" data-task-starred="false">
                                                <table class="table table-borderless table-vcenter mb-0">
                                                    <tr>
                                                        <td class="text-center pr-0" style="width: 38px;">
                                                            <div class="js-task-status custom-control custom-checkbox custom-checkbox-rounded-circle custom-control-primary custom-control-lg">
                                                                <input type="checkbox" class="custom-control-input" id="tasks-cb-id7" name="tasks-cb-id7">
                                                                <label class="custom-control-label" for="tasks-cb-id7"></label>
                                                            </div>
                                                        </td>
                                                        <td class="js-task-content font-w600 pl-0">
                                                            Logo design
                                                        </td>
                                                        <td class="text-right" style="width: 100px;">
                                                            <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                                                                <i class="far fa-star fa-fw"></i>
                                                            </button>
                                                            <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                                                                <i class="fa fa-times fa-fw"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!-- END Task -->

                                            <!-- Task -->
                                            <div class="js-task block block-rounded mb-2 animated fadeIn" data-task-id="6" data-task-completed="false" data-task-starred="false">
                                                <table class="table table-borderless table-vcenter mb-0">
                                                    <tr>
                                                        <td class="text-center pr-0" style="width: 38px;">
                                                            <div class="js-task-status custom-control custom-checkbox custom-checkbox-rounded-circle custom-control-primary custom-control-lg">
                                                                <input type="checkbox" class="custom-control-input" id="tasks-cb-id6" name="tasks-cb-id6">
                                                                <label class="custom-control-label" for="tasks-cb-id6"></label>
                                                            </div>
                                                        </td>
                                                        <td class="js-task-content font-w600 pl-0">
                                                            Website Marketing
                                                        </td>
                                                        <td class="text-right" style="width: 100px;">
                                                            <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                                                                <i class="far fa-star fa-fw"></i>
                                                            </button>
                                                            <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                                                                <i class="fa fa-times fa-fw"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!-- END Task -->
                                        </div>
                                        <!-- END Tasks List -->

                                        <!-- Starred Tasks List -->
                                        <h2 class="content-heading pb-0 mb-3 border-0">
                                            Starred <span class="js-task-badge-starred badge badge-pill badge-light animated fadeIn"></span>
                                        </h2>
                                        <div class="js-task-list-starred">
                                            <!-- Task -->
                                            <div class="js-task block block-rounded mb-2 animated fadeIn" data-task-id="5" data-task-completed="false" data-task-starred="true">
                                                <table class="table table-borderless table-vcenter mb-0">
                                                    <tr>
                                                        <td class="text-center pr-0" style="width: 38px;">
                                                            <div class="js-task-status custom-control custom-checkbox custom-checkbox-rounded-circle custom-control-primary custom-control-lg">
                                                                <input type="checkbox" class="custom-control-input" id="tasks-cb-id5" name="tasks-cb-id5">
                                                                <label class="custom-control-label" for="tasks-cb-id5"></label>
                                                            </div>
                                                        </td>
                                                        <td class="js-task-content font-w600 pl-0">
                                                            Brand Identity
                                                        </td>
                                                        <td class="text-right" style="width: 100px;">
                                                            <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                                                                <i class="fa fa-star"></i>
                                                            </button>
                                                            <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                                                                <i class="fa fa-times fa-fw"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!-- END Task -->

                                            <!-- Task -->
                                            <div class="js-task block block-rounded mb-2 animated fadeIn" data-task-id="4" data-task-completed="false" data-task-starred="true">
                                                <table class="table table-borderless table-vcenter mb-0">
                                                    <tr>
                                                        <td class="text-center pr-0" style="width: 38px;">
                                                            <div class="js-task-status custom-control custom-checkbox custom-checkbox-rounded-circle custom-control-primary custom-control-lg">
                                                                <input type="checkbox" class="custom-control-input" id="tasks-cb-id4" name="tasks-cb-id4">
                                                                <label class="custom-control-label" for="tasks-cb-id4"></label>
                                                            </div>
                                                        </td>
                                                        <td class="js-task-content font-w600 pl-0">
                                                            UI design and implementation
                                                        </td>
                                                        <td class="text-right" style="width: 100px;">
                                                            <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                                                                <i class="fa fa-star"></i>
                                                            </button>
                                                            <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                                                                <i class="fa fa-times fa-fw"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!-- END Task -->
                                        </div>
                                        <!-- END Starred Tasks List -->

                                        <!-- Tasks List Completed -->
                                        <h2 class="content-heading pb-0 mb-3 border-0">
                                            Completed <span class="js-task-badge-completed badge badge-pill badge-light animated fadeIn"></span>
                                        </h2>
                                        <div class="js-task-list-completed">
                                            <!-- Completed Task -->
                                            <div class="js-task block block-rounded mb-2 animated fadeIn" data-task-id="3" data-task-completed="true" data-task-starred="false">
                                                <table class="table table-borderless table-vcenter bg-body mb-0">
                                                    <tr>
                                                        <td class="text-center pr-0" style="width: 38px;">
                                                            <div class="js-task-status custom-control custom-checkbox custom-checkbox-rounded-circle custom-control-primary custom-control-lg">
                                                                <input type="checkbox" class="custom-control-input" id="tasks-cb-id3" name="tasks-cb-id3" checked>
                                                                <label class="custom-control-label" for="tasks-cb-id3"></label>
                                                            </div>
                                                        </td>
                                                        <td class="js-task-content font-w600 pl-0">
                                                            <del>Website and App Wireframes</del>
                                                        </td>
                                                        <td class="text-right" style="width: 100px;">
                                                            <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                                                                <i class="far fa-star fa-fw"></i>
                                                            </button>
                                                            <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                                                                <i class="fa fa-times fa-fw"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!-- END Completed Task -->

                                            <!-- Completed Task -->
                                            <div class="js-task block block-rounded mb-2 animated fadeIn" data-task-id="2" data-task-completed="true" data-task-starred="false">
                                                <table class="table table-borderless table-vcenter bg-body mb-0">
                                                    <tr>
                                                        <td class="text-center pr-0" style="width: 38px;">
                                                            <div class="js-task-status custom-control custom-checkbox custom-checkbox-rounded-circle custom-control-primary custom-control-lg">
                                                                <input type="checkbox" class="custom-control-input" id="tasks-cb-id2" name="tasks-cb-id2" checked>
                                                                <label class="custom-control-label" for="tasks-cb-id2"></label>
                                                            </div>
                                                        </td>
                                                        <td class="js-task-content font-w600 pl-0">
                                                            <del>Contract Signing</del>
                                                        </td>
                                                        <td class="text-right" style="width: 100px;">
                                                            <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                                                                <i class="far fa-star fa-fw"></i>
                                                            </button>
                                                            <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                                                                <i class="fa fa-times fa-fw"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!-- END Completed Task -->

                                            <!-- Completed Task -->
                                            <div class="js-task block block-rounded mb-2 animated fadeIn" data-task-id="1" data-task-completed="true" data-task-starred="false">
                                                <table class="table table-borderless table-vcenter bg-body mb-0">
                                                    <tr>
                                                        <td class="text-center pr-0" style="width: 38px;">
                                                            <div class="js-task-status custom-control custom-checkbox custom-checkbox-rounded-circle custom-control-primary custom-control-lg">
                                                                <input type="checkbox" class="custom-control-input" id="tasks-cb-id1" name="tasks-cb-id1" checked>
                                                                <label class="custom-control-label" for="tasks-cb-id1"></label>
                                                            </div>
                                                        </td>
                                                        <td class="js-task-content font-w600 pl-0">
                                                            <del>Explore ideas</del>
                                                        </td>
                                                        <td class="text-right" style="width: 100px;">
                                                            <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                                                                <i class="far fa-star fa-fw"></i>
                                                            </button>
                                                            <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                                                                <i class="fa fa-times fa-fw"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!-- END Completed Task -->
                                        </div>
                                        <!-- END Tasks List Completed -->
                                    </div>
                                    <!-- END Tasks -->
                                </div>
                            </div>
                            <!-- END Step 3 -->
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
                    </div>
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

    <script src="<?php echo e(asset('js/pages/be_pages_projects_tasks.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/project/variable/add.blade.php ENDPATH**/ ?>