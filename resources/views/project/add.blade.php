@extends('layouts.backend')

@section('css_after')
    <link rel="stylesheet" href="{{ asset('js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">

    <link rel="stylesheet" href="{{ asset('js/plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">New Projects</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active" aria-current="page">New Projects</li>
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
                <form method="POST">
                    @csrf
                    <!-- Device Main Info -->
                    <h2 class="content-heading pt-0">Device Main Info</h2>
                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="text-muted">
                                Device Main Info And Specs
                            </p>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="form-group">
                                <label>Device Type</label>
                                <div class="input-group">
                                    <!-- <input type="text" class="form-control" id="example-group3-input2" name="example-group3-input2"> -->
                                    <select class="custom-select" id="devices_id" name="devices_id">
                                        @foreach($Devices as $Device)
                                            <option value="{{ $Device->id }}">{{ $Device->device_name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-dark">Add New</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Device Brand</label>
                                <div class="input-group">
                                    <!-- <input type="text" class="form-control" id="example-group3-input2" name="example-group3-input2"> -->
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-dark">Add New</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Device Model</label>
                                <div class="input-group">
                                    <!-- <input type="text" class="form-control" id="example-group3-input2" name="example-group3-input2"> -->
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-dark">Add New</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <button type="button" class="btn btn-primary">Add Variables</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Device Color</label>
                                <div class="input-group">
                                    <!-- <input type="text" class="form-control" id="example-group3-input2" name="example-group3-input2"> -->
                                    <select class="custom-select" id="color_id" name="color_id">
                                        @foreach($Colors as $Color)
                                            <option value="{{ $Color->id }}">{{ $Color->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-dark">Add New</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Device Storage</label>
                                <div class="input-group">
                                    <!-- <input type="text" class="form-control" id="example-group3-input2" name="example-group3-input2"> -->
                                    <select class="custom-select" id="storage_id" name="storage_id">
                                        @foreach($Storages as $Storage)
                                            <option value="{{ $Storage->id }}">{{ $Storage->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-dark">Add New</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-text-input">IMEI</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="IMEI" name="IMEI">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-dark">Scan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Device Main Info -->

                    <!-- Device Problems -->
                    <h2 class="content-heading pt-0">Device Problems</h2>
                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="text-muted">
                                Device Probelms and the Things that Have to be Fixed
                            </p>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="form-group">
                                <label>Probelms That Have To be Fixed</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="problems" name="problems">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-dark">Add New</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dm-project-new-description">Detailed Decsriptions</label>
                                <textarea class="form-control" id="device_desc" name="device_desc" rows="6" placeholder="What is this project about?"></textarea>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <!-- Bootstrap Datepicker (.js-datepicker class are initialized in Helpers.datepicker()) -->
                                    <!-- For more info and examples you can check out https://github.com/eternicode/bootstrap-datepicker -->
                                    <label for="dm-project-new-deadline">Accepted Date</label>
                                    <input type="text" class="js-datepicker form-control" id="created_at" name="created_at" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy" value="{{ date('m/d/Y') }}">
                                </div>
                                <div class="col-md-6">
                                    <!-- Bootstrap Datepicker (.js-datepicker class are initialized in Helpers.datepicker()) -->
                                    <!-- For more info and examples you can check out https://github.com/eternicode/bootstrap-datepicker -->
                                    <label for="dm-project-new-deadline">Deadline</label>
                                    <input type="text" class="js-datepicker form-control" id="deadline" name="deadline" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Device Problems -->

                    <!-- Device Othe Data -->
                    <h2 class="content-heading pt-0">Device Othe Data</h2>
                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="text-muted">
                                Other Necessary Informations For the Device
                            </p>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="form-group">
                                <label for="example-text-input">Password</label>
                                <input type="text" class="form-control" id="device_password" name="device_password" placeholder="Text Input">
                            </div>
                            <div class="form-group">
                                <label for="dm-project-new-description">Other Infos</label>
                                <textarea class="form-control" id="device_otherinfo" name="device_otherinfo" rows="6" placeholder="What is this project about?"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- END Device Othe Data -->

                    <!-- Device Owner -->
                    <h2 class="content-heading pt-0">Device Owner</h2>
                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="text-muted">
                                Owner Details and Account
                            </p>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label for="example-text-input">Customer</label>
                                <div class="row">
                                    <div class="col-6">
                                        <!-- <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Search"> -->
                                        <select class="custom-select" id="user_id" name="user_id">
                                            @foreach($Users as $User)
                                                <option value="{{ $User->id }}">{{ $User->first_name }} {{ $User->last_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="js-swal-info btn btn-light push">
                                            <i class="fa fa-user text-info mr-1"></i> Add New Customer
                                        </button>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    <!-- END Device Owner -->

                    <!-- Submit -->
                    <div class="row push">
                        <div class="col-lg-8 col-xl-5 offset-lg-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-alt-primary">
                                    <i class="fa fa-check-circle mr-1"></i> Create Project
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
        <script src="{{ asset('js/plugins/es6-promise/es6-promise.auto.min.js') }}"></script>
        <script src="{{ asset('js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

        <script src="{{ asset('js/pages/be_comp_dialogs.min.js') }}"></script>
        
        <!-- Page JS Helpers (BS Datepicker + BS Colorpicker plugins) -->
        <script>jQuery(function(){Dashmix.helpers(['datepicker', 'colorpicker']);});</script>
@endsection