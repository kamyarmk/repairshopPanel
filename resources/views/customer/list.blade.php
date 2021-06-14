@extends('layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Quick Overview -->
        <div class="row row-deck">
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="/customer/add">
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
                        <div class="font-size-h3 font-w600 mb-1">{{ $customers->count() }}</div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            Total
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 mb-1">{{ $registered_devices->where('Condition', '=', 'Open')->count() }}</div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            Open Request
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 mb-1">{{ $registered_devices->count() }}</div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            Devices
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Quick Overview -->

        <!-- All Orders -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">All Customers</h3>
                <div class="custom-control custom-switch mt-1">
                    <input type="checkbox" class="custom-control-input" id="example-sw-custom1" name="example-sw-custom1" checked="">
                    <label class="custom-control-label" for="example-sw-custom1">Active</label>
                </div>
            </div>
            <div class="block-content bg-body-dark">
                <!-- Search Form -->
                <form action="be_pages_ecom_orders.html" method="POST" onsubmit="return false;">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-alt" id="dm-ecom-orders-search" name="dm-ecom-orders-search" placeholder="Search all orders..">
                    </div>
                </form>
                <!-- END Search Form -->
            </div>
            <div class="block-content">
                <!-- All Orders Table -->
                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-vcenter font-size-sm">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 100px;">ID</th>
                                <th>Active</th>
                                <th class="d-none d-xl-table-cell">Name</th>
                                <th class="d-none d-xl-table-cell text-center">Mobile</th>
                                <th class="d-none d-sm-table-cell text-center">Submitted</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customers as $customer)
                                <tr>
                                    <td class="text-center">
                                        <a class="font-w600" href="be_pages_ecom_order.html">
                                            <strong>{{ $customer->department->department_symbol }}.{{ $customer->id }}</strong>
                                        </a>
                                    </td>
                                    <td class="font-size-base">
                                        <span class="badge badge-pill badge-success">
                                            @if(!$customer->registered_devices->isEmpty())
                                                {{ $customer->registered_devices->first()->Condition}}
                                            @else
                                                No Device
                                            @endif
                                        </span>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <a class="font-w600" href="be_pages_ecom_customer.html">{{ $customer->first_name }} {{ $customer->last_name }}</a>
                                    </td>
                                    <td class="d-none d-xl-table-cell text-center">
                                        <a class="font-w600" href="be_pages_ecom_order.html">{{ $customer->phone_number }}</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-center">{{ $customer->created_at }}</td>
                                    <td class="text-center font-size-base">
                                        <a class="btn btn-sm btn-alt-secondary" href="/customer/edit/{{ $customer->id }}">
                                            <i class="fa fa-fw fa-eye"></i>
                                        </a>
                                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-times text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- END All Orders Table -->

                <!-- Pagination -->
                {{-- Pagination --}}
                {{ $customers->links() }}
                
                <!-- END Pagination -->
            </div>
        </div>
        <!-- END All Orders -->
    </div>
    <!-- END Page Content -->
@endsection