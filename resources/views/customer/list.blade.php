@extends('layouts.backend')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">User</h1>
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
        <!-- Dynamic Table with Export Buttons -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Dynamic Table <small>Export Buttons</small></h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">#</th>
                            <th>Name</th>
                            <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                            <th style="width: 15%;">Registered</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="font-w600">
                                <a href="be_pages_generic_blank.html">Jeffrey Shaw</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client1<em class="text-muted">@example.com</em>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-success">VIP</span>
                            </td>
                            <td>
                                <em class="text-muted">6 days ago</em>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td class="font-w600">
                                <a href="be_pages_generic_blank.html">Lori Moore</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client2<em class="text-muted">@example.com</em>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-primary">Personal</span>
                            </td>
                            <td>
                                <em class="text-muted">9 days ago</em>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td class="font-w600">
                                <a href="be_pages_generic_blank.html">Wayne Garcia</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client3<em class="text-muted">@example.com</em>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-info">Business</span>
                            </td>
                            <td>
                                <em class="text-muted">2 days ago</em>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td class="font-w600">
                                <a href="be_pages_generic_blank.html">Jose Parker</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client4<em class="text-muted">@example.com</em>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-danger">Disabled</span>
                            </td>
                            <td>
                                <em class="text-muted">2 days ago</em>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td class="font-w600">
                                <a href="be_pages_generic_blank.html">Ryan Flores</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client5<em class="text-muted">@example.com</em>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-warning">Trial</span>
                            </td>
                            <td>
                                <em class="text-muted">10 days ago</em>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">6</td>
                            <td class="font-w600">
                                <a href="be_pages_generic_blank.html">Ryan Flores</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client6<em class="text-muted">@example.com</em>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-info">Business</span>
                            </td>
                            <td>
                                <em class="text-muted">8 days ago</em>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">7</td>
                            <td class="font-w600">
                                <a href="be_pages_generic_blank.html">Henry Harrison</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client7<em class="text-muted">@example.com</em>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-warning">Trial</span>
                            </td>
                            <td>
                                <em class="text-muted">4 days ago</em>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">8</td>
                            <td class="font-w600">
                                <a href="be_pages_generic_blank.html">Jose Wagner</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client8<em class="text-muted">@example.com</em>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-danger">Disabled</span>
                            </td>
                            <td>
                                <em class="text-muted">2 days ago</em>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">9</td>
                            <td class="font-w600">
                                <a href="be_pages_generic_blank.html">Melissa Rice</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client9<em class="text-muted">@example.com</em>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-success">VIP</span>
                            </td>
                            <td>
                                <em class="text-muted">3 days ago</em>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">10</td>
                            <td class="font-w600">
                                <a href="be_pages_generic_blank.html">Lori Grant</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client10<em class="text-muted">@example.com</em>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-danger">Disabled</span>
                            </td>
                            <td>
                                <em class="text-muted">8 days ago</em>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">11</td>
                            <td class="font-w600">
                                <a href="be_pages_generic_blank.html">Jesse Fisher</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client11<em class="text-muted">@example.com</em>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-primary">Personal</span>
                            </td>
                            <td>
                                <em class="text-muted">8 days ago</em>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">12</td>
                            <td class="font-w600">
                                <a href="be_pages_generic_blank.html">Jesse Fisher</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client12<em class="text-muted">@example.com</em>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-warning">Trial</span>
                            </td>
                            <td>
                                <em class="text-muted">9 days ago</em>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">13</td>
                            <td class="font-w600">
                                <a href="be_pages_generic_blank.html">Barbara Scott</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client13<em class="text-muted">@example.com</em>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-success">VIP</span>
                            </td>
                            <td>
                                <em class="text-muted">10 days ago</em>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">14</td>
                            <td class="font-w600">
                                <a href="be_pages_generic_blank.html">Susan Day</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client14<em class="text-muted">@example.com</em>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-info">Business</span>
                            </td>
                            <td>
                                <em class="text-muted">6 days ago</em>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">15</td>
                            <td class="font-w600">
                                <a href="be_pages_generic_blank.html">Wayne Garcia</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client15<em class="text-muted">@example.com</em>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-danger">Disabled</span>
                            </td>
                            <td>
                                <em class="text-muted">5 days ago</em>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">16</td>
                            <td class="font-w600">
                                <a href="be_pages_generic_blank.html">Barbara Scott</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client16<em class="text-muted">@example.com</em>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-warning">Trial</span>
                            </td>
                            <td>
                                <em class="text-muted">2 days ago</em>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">17</td>
                            <td class="font-w600">
                                <a href="be_pages_generic_blank.html">Jeffrey Shaw</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client17<em class="text-muted">@example.com</em>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-primary">Personal</span>
                            </td>
                            <td>
                                <em class="text-muted">2 days ago</em>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">18</td>
                            <td class="font-w600">
                                <a href="be_pages_generic_blank.html">Carl Wells</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client18<em class="text-muted">@example.com</em>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-success">VIP</span>
                            </td>
                            <td>
                                <em class="text-muted">4 days ago</em>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">19</td>
                            <td class="font-w600">
                                <a href="be_pages_generic_blank.html">Susan Day</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client19<em class="text-muted">@example.com</em>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-success">VIP</span>
                            </td>
                            <td>
                                <em class="text-muted">5 days ago</em>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">20</td>
                            <td class="font-w600">
                                <a href="be_pages_generic_blank.html">Betty Kelley</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client20<em class="text-muted">@example.com</em>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-warning">Trial</span>
                            </td>
                            <td>
                                <em class="text-muted">2 days ago</em>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Dynamic Table with Export Buttons -->

    </div>
    <!-- END Page Content --> 
@endsection