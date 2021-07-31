@extends('layouts.backend')

@section('content')
    <!-- TODO: Translations -->
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Edit Account</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Account</li>
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
                <form  method="POST" enctype="multipart/form-data" >
                    @csrf
                    @if($type == 'Edit')
                    <input name="_method" type="hidden" value="PUT">
                    @endif
                    <!-- User Profile -->
                    <input type="hidden" name="update" value="1">
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
                            <div class="form-group">
                                <label for="dm-profile-edit-username">Username</label>
                                <input type="text" class="form-control" id="dm-profile-edit-username" name="user_name" placeholder="Enter your username.."
                                    @if($type == 'Edit')
                                        value="{{ $User->user_name }}"
                                    @endif
                                >
                            </div>
                            <div class="form-group">
                                <label for="dm-profile-edit-email">Email Address</label>
                                <input type="email" class="form-control" id="dm-profile-edit-email" name="email" placeholder="Enter your email.." 
                                    @if($type == 'Edit')
                                        value="{{ $User->email }}"
                                    @endif
                                >
                            </div>
                            <div class="form-group">
                                <label for="dm-profile-edit-job-title">Job Title</label>
                                <input type="text" class="form-control" id="dm-profile-edit-job-title" name="job_title" placeholder="Add your job title.." 
                                    @if($type == 'Edit')
                                        value="{{ $User->job_title }}"
                                    @endif
                                >
                            </div>
                            <div class="form-group">
                                <label for="dm-profile-edit-company">Department</label>
                                <select class="custom-select" id="example-select-custom" name="department_id">
                                    @foreach($Departments as $Department)
                                        <option value="{{$Department->id}}"
                                            @if($type == 'Edit')
                                                @if($User->department_id == $Department->id)
                                                    selected
                                                @endif
                                            @endif
                                            >{{ $Department->department_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <!-- TODO: Avatar Upload -->
                                <!-- <label>Your Avatar</label>
                                <div class="push">
                                    <img class="img-avatar" src="assets/media/avatars/avatar10.jpg" alt="">
                                </div>
                                <div class="custom-file"> -->
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                    <!-- <input type="file" class="custom-file-input" data-toggle="custom-file-input" id="dm-profile-edit-avatar" name="dm-profile-edit-avatar">
                                    <label class="custom-file-label" for="dm-profile-edit-avatar">Choose a new avatar</label>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- END User Profile -->
                    
                    @if($type == 'Edit')
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
                                    <input type="password" class="form-control" id="dm-profile-edit-password" name="password-old">
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="dm-profile-edit-password-new">New Password</label>
                                        <input type="password" class="form-control" id="dm-profile-edit-password-new" name="password-new">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="dm-profile-edit-password-new-confirm">Confirm New Password</label>
                                        <input type="password" class="form-control" id="dm-profile-edit-password-new-confirm" name="password-confirmation">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- END Change Password -->
                    @elseif($type == 'Add')
                    <!-- Add Password -->
                    <h2 class="content-heading pt-0">
                            <i class="fa fa-fw fa-asterisk text-muted mr-1"></i> Password
                        </h2>
                        <div class="row push">
                            <div class="col-lg-4">
                                <p class="text-muted">
                                    Add a Password to keep your account secure.
                                </p>
                            </div>
                            <div class="col-lg-8 col-xl-5">
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="dm-profile-edit-password-new">Password</label>
                                        <input type="password" class="form-control" id="dm-profile-edit-password-new" name="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="dm-profile-edit-password-new-confirm">Confirm Password</label>
                                        <input type="password" class="form-control" id="dm-profile-edit-password-new-confirm" name="password_confirmation">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- END Add Password -->
                    @endif

                    <!-- Billing Information -->
                    <h2 class="content-heading pt-0">
                        <i class="fab fa-fw fa-paypal text-muted mr-1"></i> Personal Information
                    </h2>
                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="text-muted">
                                Your billing information is never shown to other users and only used for creating your invoices.
                            </p>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="dm-profile-edit-firstname">Firstname</label>
                                    <input type="text" class="form-control" id="dm-profile-edit-firstname" name="first_name"
                                        @if($type == 'Edit')
                                            value="{{ $User->first_name }}"
                                        @endif
                                    >
                                </div>
                                <div class="col-6">
                                    <label for="dm-profile-edit-lastname">Lastname</label>
                                    <input type="text" class="form-control" id="dm-profile-edit-lastname" name="last_name"
                                        @if($type == 'Edit')
                                            value="{{ $User->last_name }}"
                                        @endif
                                    >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dm-profile-edit-street-1">Street Address 1</label>
                                <input type="text" class="form-control" id="dm-profile-edit-street-1" name="address_one"
                                        @if($type == 'Edit')
                                            value="{{ $User->address_one }}"
                                        @endif
                                >
                            </div>
                            <div class="form-group">
                                <label for="dm-profile-edit-street-2">Street Address 2</label>
                                <input type="text" class="form-control" id="dm-profile-edit-street-2" name="address_two"
                                        @if($type == 'Edit')
                                            value="{{ $User->address_two }}"
                                        @endif
                                >
                            </div>
                            <div class="form-group">
                                <label for="dm-profile-edit-city">City</label>
                                <input type="text" class="form-control" id="dm-profile-edit-city" name="city"
                                        @if($type == 'Edit')
                                            value="{{ $User->city }}"
                                        @endif
                                >
                            </div>
                            <div class="form-group">
                                <label for="dm-profile-edit-postal">Postal code</label>
                                <input type="text" class="form-control" id="dm-profile-edit-postal" name="postal_code"
                                        @if($type == 'Edit')
                                            value="{{ $User->postal_code }}"
                                        @endif
                                >
                            </div>
                            <div class="form-group">
                                <!-- TODO: Phone Number Submit -->
                                <label for="dm-profile-edit-company-name">Mobile Number</label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-alt" id="example-group3-input2-alt" name="phone_number"
                                            @if($type == 'Edit')
                                                value="{{ $User->phone_number }}"
                                            @endif
                                    >
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-dark">Submit</button>
                                    </div>
                                </div>
                            </div>
                            <!-- TODO: Legal Documents for the Employees -->
                            <!-- <div class="form-group">
                                <label for="dm-profile-edit-company-name">ID Number</label>
                                <input type="text" class="form-control" id="dm-profile-edit-company-name" name="dm-profile-edit-company-name">
                            </div> -->
                            <!-- <div class="custom-file"> -->
                                <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                <!-- <input type="file" class="custom-file-input" data-toggle="custom-file-input" id="dm-profile-edit-avatar" name="dm-profile-edit-avatar">
                                <label class="custom-file-label" for="dm-profile-edit-avatar">Upload Document</label>
                            </div> -->
                        </div>
                    </div>
                    <!-- END Billing Information -->

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
@endsection