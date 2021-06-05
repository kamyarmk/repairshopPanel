<?php $__env->startSection('content'); ?>
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Project Details</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active" aria-current="page">Project Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="row no-gutters flex-md-10-auto">
        <div class="col-md-6 col-lg-6 col-xl-6 order-md-1">
            <div class="content">
                <!-- Toggle Side Content -->
                <div class="d-md-none push">
                    <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                    <button type="button" class="btn btn-block btn-hero-dark" data-toggle="class-toggle" data-target="#side-content" data-class="d-none">
                        Project Details
                    </button>
                </div>
                <!-- END Toggle Side Content -->

                <!-- Side Content -->
                <div id="side-content" class="d-none d-md-block push">
                    <!-- Completion -->
                    <h2 class="h4 font-w400 mb-3">Completion</h2>
                    <div class="progress push">
                        <div class="progress-bar bg-muted" role="progressbar" style="width: 34%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                            <span class="font-size-sm font-w600">34%</span>
                        </div>
                    </div>
                    <!-- END Completion -->

                    <!-- About -->
                    <h2 class="h4 font-w400 my-3">About</h2>
                    <p class="mb-2">
                        This is an important project where we should focus our main efforts for the next few years.
                    </p>
                    <p class="text-muted">
                        November 6, 2023
                    </p>
                    <!-- END About -->

                    <!-- People -->
                    <h2 class="h4 font-w400 my-3">People</h2>
                    <p>
                        <a class="img-link m-1" href="javascript:void(0)">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar2.jpg" alt="">
                        </a>
                        <a class="img-link m-1" href="javascript:void(0)">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar3.jpg" alt="">
                        </a>
                        <a class="img-link m-1" href="javascript:void(0)">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar9.jpg" alt="">
                        </a>
                        <a class="img-link m-1" href="javascript:void(0)">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar10.jpg" alt="">
                        </a>
                        <a class="img-link m-1" href="javascript:void(0)">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar12.jpg" alt="">
                        </a>
                    </p>
                    <!-- END People -->
                </div>
                <!-- END Side Content -->
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-6 order-md-0 bg-body-dark">
            <!-- Main Content -->
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
            <!-- END Main Content -->
        </div>
    </div>
    <!-- END Page Content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js_after'); ?>
    <script src="<?php echo e(asset('js/pages/be_pages_projects_tasks.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/project/edit.blade.php ENDPATH**/ ?>