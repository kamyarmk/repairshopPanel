@extends('layouts.backend')

@section('css_after')
    <link rel="stylesheet" href="{{ asset('js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
@endsection

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">New Invoice</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active" aria-current="page">New Invoice</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <div class="block block-rounded block-bordered">
            <div class="block-content">
                <form action="be_pages_projects_create.html" method="POST">
                    <!-- Vital Info -->
                    <h2 class="content-heading pt-0">Vital Info</h2>
                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="text-muted">
                                Some vital information about your new project
                            </p>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="form-group">
                                <label for="dm-project-new-name">
                                    Name <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" id="dm-project-new-name" name="dm-project-new-name" placeholder="eg: example.com">
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-8">
                                    <label for="dm-project-new-category">
                                        Project <span class="text-danger">*</span>
                                    </label>
                                    <select class="custom-select" id="dm-project-new-category" name="dm-project-new-category">
                                        <option value="0">Select a category</option>
                                        <option value="design-web">Web Design</option>
                                        <option value="design-logo">Logo Design</option>
                                        <option value="design-ux-ui">UX/UI Design</option>
                                        <option value="dev-web">Web Development</option>
                                        <option value="dev-app">App Development</option>
                                        <option value="dev-mobile">Mobile Development</option>
                                        <option value="identity">Identity</option>
                                        <option value="marketing">Marketing</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Vital Info -->

                    <!-- Optional Info -->
                    <h2 class="content-heading pt-0">Optional Info</h2>
                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="text-muted">
                                You can add more details if you like but it is not required
                            </p>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="form-group">
                                <label for="dm-project-new-description">Description</label>
                                <textarea class="form-control" id="dm-project-new-description" name="dm-project-new-description" rows="6" placeholder="What is this project about?"></textarea>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <!-- Bootstrap Datepicker (.js-datepicker class are initialized in Helpers.datepicker()) -->
                                    <!-- For more info and examples you can check out https://github.com/eternicode/bootstrap-datepicker -->
                                    <label for="dm-project-new-deadline">Due Date</label>
                                    <input type="text" class="js-datepicker form-control" id="dm-project-new-deadline" name="dm-project-new-deadline" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Optional Info -->

                    <!-- People -->
                    <h2 class="content-heading pt-0">People</h2>
                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="text-muted">
                                Assign people to this project (you can edit them later)
                            </p>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label for="dm-project-new-name">
                                    Price <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" id="dm-project-new-name" name="dm-project-new-name" placeholder="eg: example.com">
                            </div>
                        </div>
                    </div>
                    <!-- END People -->

                    <!-- Submit -->
                    <div class="row push">
                        <div class="col-lg-8 col-xl-5 offset-lg-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-alt-primary">
                                    <i class="fa fa-check-circle mr-1"></i> Create Invoice
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
@endsection

@section('js_after')
        <script src="{{ asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
        
        <!-- Page JS Helpers (BS Datepicker + BS Colorpicker plugins) -->
        <script>jQuery(function(){Dashmix.helpers(['datepicker', 'colorpicker']);});</script>
@endsection