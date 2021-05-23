@extends('layouts.backend')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Users</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active" aria-current="page">Users</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
    

        <!-- Admins -->
        <h2 class="content-heading">Admins</h2>
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <img class="img-avatar" src="{{ asset('media/avatars/avatar4.jpg') }}" alt="">
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light">
                        <p class="font-w600 mb-0">Susan Day</p>
                        <p class="font-size-sm font-italic text-muted mb-0">
                            Consultant
                        </p>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row gutters-tiny">
                            <div class="col-6">
                                <p class="mb-2">
                                    <i class="fa fa-fw fa-university text-black"></i>
                                </p>
                                <p class="font-size-sm text-muted mb-0">
                                    Master
                                </p>
                            </div>
                            <div class="col-6">
                                <p class="mb-2">
                                    <i class="fa fa-fw fa-users text-black"></i>
                                </p>
                                <p class="font-size-sm text-muted mb-0">
                                    22k Friends
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <img class="img-avatar" src="{{ asset('media/avatars/avatar13.jpg') }}" alt="">
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light">
                        <p class="font-w600 mb-0">Carl Wells</p>
                        <p class="font-size-sm font-italic text-muted mb-0">
                            Designer
                        </p>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row gutters-tiny">
                            <div class="col-6">
                                <p class="mb-2">
                                    <i class="far fa-fw fa-building text-black"></i>
                                </p>
                                <p class="font-size-sm text-muted mb-0">
                                    7 Projects
                                </p>
                            </div>
                            <div class="col-6">
                                <p class="mb-2">
                                    <i class="far fa-fw fa-newspaper text-black"></i>
                                </p>
                                <p class="font-size-sm text-muted mb-0">
                                    15 Articles
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <img class="img-avatar" src="{{ asset('media/avatars/avatar3.jpg') }}" alt="">
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light">
                        <p class="font-w600 mb-0">Melissa Rice</p>
                        <p class="font-size-sm font-italic text-muted mb-0">
                            Author
                        </p>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row gutters-tiny">
                            <div class="col-6">
                                <p class="mb-2">
                                    <i class="far fa-fw fa-id-card text-black"></i>
                                </p>
                                <p class="font-size-sm text-muted mb-0">
                                    VIP
                                </p>
                            </div>
                            <div class="col-6">
                                <p class="mb-2">
                                    <i class="far fa-fw fa-star text-black"></i>
                                </p>
                                <p class="font-size-sm text-muted mb-0">
                                    Elite
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <img class="img-avatar" src="{{ asset('media/avatars/avatar11.jpg') }}" alt="">
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light">
                        <p class="font-w600 mb-0">Carl Wells</p>
                        <p class="font-size-sm font-italic text-muted mb-0">
                            Consultant
                        </p>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row gutters-tiny">
                            <div class="col-6">
                                <p class="mb-2">
                                    <i class="fa fa-fw fa-box text-black"></i>
                                </p>
                                <p class="font-size-sm text-muted mb-0">
                                    3 Projects
                                </p>
                            </div>
                            <div class="col-6">
                                <p class="mb-2">
                                    <i class="fa fa-fw fa-star text-black"></i>
                                </p>
                                <p class="font-size-sm text-muted mb-0">
                                    15 Reviews
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Icons -->

        <!-- Project Managers -->
        <h2 class="content-heading">Project Managers</h2>
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <img class="img-avatar" src="{{ asset('media/avatars/avatar4.jpg') }}" alt="">
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light">
                        <p class="font-w600 mb-0">Susan Day</p>
                        <p class="font-size-sm font-italic text-muted mb-0">
                            Consultant
                        </p>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row gutters-tiny">
                            <div class="col-6">
                                <p class="mb-2">
                                    <i class="fa fa-fw fa-university text-black"></i>
                                </p>
                                <p class="font-size-sm text-muted mb-0">
                                    Master
                                </p>
                            </div>
                            <div class="col-6">
                                <p class="mb-2">
                                    <i class="fa fa-fw fa-users text-black"></i>
                                </p>
                                <p class="font-size-sm text-muted mb-0">
                                    22k Friends
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <img class="img-avatar" src="{{ asset('media/avatars/avatar13.jpg') }}" alt="">
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light">
                        <p class="font-w600 mb-0">Carl Wells</p>
                        <p class="font-size-sm font-italic text-muted mb-0">
                            Designer
                        </p>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row gutters-tiny">
                            <div class="col-6">
                                <p class="mb-2">
                                    <i class="far fa-fw fa-building text-black"></i>
                                </p>
                                <p class="font-size-sm text-muted mb-0">
                                    7 Projects
                                </p>
                            </div>
                            <div class="col-6">
                                <p class="mb-2">
                                    <i class="far fa-fw fa-newspaper text-black"></i>
                                </p>
                                <p class="font-size-sm text-muted mb-0">
                                    15 Articles
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <img class="img-avatar" src="{{ asset('media/avatars/avatar3.jpg') }}" alt="">
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light">
                        <p class="font-w600 mb-0">Melissa Rice</p>
                        <p class="font-size-sm font-italic text-muted mb-0">
                            Author
                        </p>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row gutters-tiny">
                            <div class="col-6">
                                <p class="mb-2">
                                    <i class="far fa-fw fa-id-card text-black"></i>
                                </p>
                                <p class="font-size-sm text-muted mb-0">
                                    VIP
                                </p>
                            </div>
                            <div class="col-6">
                                <p class="mb-2">
                                    <i class="far fa-fw fa-star text-black"></i>
                                </p>
                                <p class="font-size-sm text-muted mb-0">
                                    Elite
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <img class="img-avatar" src="{{ asset('media/avatars/avatar11.jpg') }}" alt="">
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light">
                        <p class="font-w600 mb-0">Carl Wells</p>
                        <p class="font-size-sm font-italic text-muted mb-0">
                            Consultant
                        </p>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row gutters-tiny">
                            <div class="col-6">
                                <p class="mb-2">
                                    <i class="fa fa-fw fa-box text-black"></i>
                                </p>
                                <p class="font-size-sm text-muted mb-0">
                                    3 Projects
                                </p>
                            </div>
                            <div class="col-6">
                                <p class="mb-2">
                                    <i class="fa fa-fw fa-star text-black"></i>
                                </p>
                                <p class="font-size-sm text-muted mb-0">
                                    15 Reviews
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Icons -->

        <!-- Reseptions -->
        <h2 class="content-heading">Reseptions</h2>
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <img class="img-avatar" src="{{ asset('media/avatars/avatar4.jpg') }}" alt="">
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light">
                        <p class="font-w600 mb-0">Susan Day</p>
                        <p class="font-size-sm font-italic text-muted mb-0">
                            Consultant
                        </p>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row gutters-tiny">
                            <div class="col-6">
                                <p class="mb-2">
                                    <i class="fa fa-fw fa-university text-black"></i>
                                </p>
                                <p class="font-size-sm text-muted mb-0">
                                    Master
                                </p>
                            </div>
                            <div class="col-6">
                                <p class="mb-2">
                                    <i class="fa fa-fw fa-users text-black"></i>
                                </p>
                                <p class="font-size-sm text-muted mb-0">
                                    22k Friends
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <img class="img-avatar" src="{{ asset('media/avatars/avatar13.jpg') }}" alt="">
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light">
                        <p class="font-w600 mb-0">Carl Wells</p>
                        <p class="font-size-sm font-italic text-muted mb-0">
                            Designer
                        </p>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row gutters-tiny">
                            <div class="col-6">
                                <p class="mb-2">
                                    <i class="far fa-fw fa-building text-black"></i>
                                </p>
                                <p class="font-size-sm text-muted mb-0">
                                    7 Projects
                                </p>
                            </div>
                            <div class="col-6">
                                <p class="mb-2">
                                    <i class="far fa-fw fa-newspaper text-black"></i>
                                </p>
                                <p class="font-size-sm text-muted mb-0">
                                    15 Articles
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <img class="img-avatar" src="{{ asset('media/avatars/avatar3.jpg') }}" alt="">
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light">
                        <p class="font-w600 mb-0">Melissa Rice</p>
                        <p class="font-size-sm font-italic text-muted mb-0">
                            Author
                        </p>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row gutters-tiny">
                            <div class="col-6">
                                <p class="mb-2">
                                    <i class="far fa-fw fa-id-card text-black"></i>
                                </p>
                                <p class="font-size-sm text-muted mb-0">
                                    VIP
                                </p>
                            </div>
                            <div class="col-6">
                                <p class="mb-2">
                                    <i class="far fa-fw fa-star text-black"></i>
                                </p>
                                <p class="font-size-sm text-muted mb-0">
                                    Elite
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <img class="img-avatar" src="{{ asset('media/avatars/avatar11.jpg') }}" alt="">
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light">
                        <p class="font-w600 mb-0">Carl Wells</p>
                        <p class="font-size-sm font-italic text-muted mb-0">
                            Consultant
                        </p>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row gutters-tiny">
                            <div class="col-6">
                                <p class="mb-2">
                                    <i class="fa fa-fw fa-box text-black"></i>
                                </p>
                                <p class="font-size-sm text-muted mb-0">
                                    3 Projects
                                </p>
                            </div>
                            <div class="col-6">
                                <p class="mb-2">
                                    <i class="fa fa-fw fa-star text-black"></i>
                                </p>
                                <p class="font-size-sm text-muted mb-0">
                                    15 Reviews
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Icons -->
    </div>
    <!-- END Page Content -->
         
@endsection