<template>
    <div class="block block-rounded">
            <div class="block-header block-header-default">
                <!-- Basic Filters For the Devices -->
                <h3 class="block-title">All Admin</h3>
                <div class="custom-control custom-switch mt-1">
                    <input type="checkbox" class="custom-control-input" id="example-sw-custom1" name="example-sw-custom1" checked="">
                    <label class="custom-control-label" for="example-sw-custom1">Online</label>
                </div>
                <!-- TODO: Filters -->
                <div class="block-options">
                    <div class="dropdown">
                        <button type="button" class="btn btn-light" id="dropdown-ecom-filters" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Department
                            <i class="fa fa-angle-down ml-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-ecom-filters">
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                Pending..
                                <span class="badge badge-primary badge-pill">78</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                Processing
                                <span class="badge badge-secondary badge-pill">12</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                For Delivery
                                <span class="badge badge-secondary badge-pill">20</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                Canceled
                                <span class="badge badge-secondary badge-pill">5</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                Delivered
                                <span class="badge badge-secondary badge-pill">280</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                All
                                <span class="badge badge-secondary badge-pill">19k</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Device Search Field -->
            <div class="block-content bg-body-dark">
                <!-- Search Form -->
                <form action="be_pages_ecom_orders.html" method="POST" onsubmit="return false;">
                    <div class="form-group">
                        <!-- TODO: Search -->
                        <input type="text" class="form-control form-control-alt" id="dm-ecom-orders-search" name="dm-ecom-orders-search" placeholder="Search all orders..">
                    </div>
                </form>
                <!-- END Search Form -->
            </div>
            <!-- Listing All The Devices -->
            <div class="block-content">
                <!-- All Orders Table -->
                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-vcenter font-size-sm">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 100px;">ID</th>
                                <th class="d-none d-sm-table-cell text-center">Submitted</th>
                                <th>Department</th>
                                <th class="d-none d-xl-table-cell">Name</th>
                                <th class="d-none d-xl-table-cell text-center">Mobile</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="admin in admins.data.data" :key="admin.id" >
                                <td class="text-center">
                                    <a class="font-w600" href="/project/edit">
                                        <strong>CMD.{{ admin.id }}</strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">{{ admin.created_at }}</td>
                                <td class="d-none d-xl-table-cell text-center">
                                    {{ admin.department.department_name }}
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <a class="font-w600" href="be_pages_ecom_customer.html">{{ admin.first_name }} {{ admin.last_name }}</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <strong>{{ admin.phone_number }}</strong>
                                </td>
                                <td class="text-center font-size-base">
                                    <a class="btn btn-sm btn-alt-secondary" :href="'/admins/edit/' + admin.id">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <pagination :data="admins.data" @pagination-change-page="getResults"></pagination>
                </div>
                <!-- END All Orders Table -->

                <!-- Pagination -->
                
                <!-- END Pagination -->
            </div>
        </div>
</template>

<script>
    import axios from 'axios'
    import VueMoment from 'vue-moment'
    // import moment from 'moment-timezone'

    export default {
        props:{
            LatestOrders: String,
            Pending: String,
            Canceled: String,
            Completed: String,
            ViewAll: String,

            Device: String,
            DeviceDate: String,
            Status: String,
            User: String,
            ViewAll: String,

        },
        data(){
            return{
                admins: [],
                condition: "",
            }
        },
        created(){
            this.getResults();
        },
        methods: {
            getDevices(Condition){
                axios
                    .get('/vue/admins/adminsListing', {
                        params: {
                            "page": page
                        }
                    })
                    .then(response => (this.admins = response))
            },
            refreshKey(){
                axios
                    .get('/vue/admins/adminsListing')
                    .then(response => (this.admins = response))
            },
            getResults(page) {
                if (typeof page === 'undefined') {
                    page = 1;
                }
                console.log(typeof this.$http);
                axios.get('/vue/admins/adminsListing?page=' + page)
                 .then(response => (this.admins = response))
            }
        },
        mounted() {
            
        }
    }
</script>