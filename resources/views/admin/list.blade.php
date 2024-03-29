@extends('layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Quick Overview -->
        <div class="row row-deck">
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="/admins/add">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 text-success mb-1">
                            <i class="fa fa-plus"></i>
                        </div>
                        <p class="font-w600 font-size-sm text-success text-uppercase mb-0">
                            Add New
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 mb-1">{{ $admins->count() }}</div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            Total
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 mb-1">{{ $departmets->count() }}</div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            Department
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 mb-1">{{ $admins->count() }}</div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            Online
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Quick Overview -->

        <!-- All Orders -->
        <listing_admins
        >
        </listing_admins>
        <!-- END All Orders -->
    </div>
    <!-- END Page Content -->
@endsection