// TODO: Translations
<template>
    <div class="block block-rounded">
            <div class="block-header block-header-default">
                <!-- Basic Filters For the Devices -->
                <h3 class="block-title">All Orders</h3>
                <div class="block-options">
                    <div class="dropdown">
                        <button type="button" class="btn btn-light" id="dropdown-ecom-filters" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filters
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
                                <th>Status</th>
                                <th class="d-none d-xl-table-cell">Customer</th>
                                <th class="d-none d-xl-table-cell text-center">Device</th>
                                <th class="d-none d-sm-table-cell text-center">IMEI / Serial</th>
                                <th class="d-none d-sm-table-cell text-center">Submitted</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="Device in DeviceList.data.data" :key="Device.id" >
                                <td class="text-center">
                                    <a class="font-w600" href="/project/edit">
                                        <strong>ORD.{{ Device.id }}</strong>
                                    </a>
                                </td>
                                <td class="font-size-base">
                                    <span :class="'badge badge-pill badge-success' +  (Device['condition'] == 'Open' ? 'text-warning' : (Device['condition'] == 'Delivered' ? 'text-success' : 'text-danger'))">{{ Device.condition }}</span>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <a class="font-w600" href="be_pages_ecom_customer.html">{{ Device.user.first_name }} {{ Device.user.last_name }}</a>
                                </td>
                                <td class="d-none d-xl-table-cell text-center">
                                    <a class="font-w600" href="/project/edit">{{ Device.devices.device_name }} / {{ Device.devices.device_type }}</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <strong>{{ Device.IMEI }}</strong>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">{{ Device.created_at }}</td>
                                <td class="text-center font-size-base">
                                    <a class="btn btn-sm btn-alt-secondary" :href="'/project/edit/' + Device.id">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <pagination :data="DeviceList.data" @pagination-change-page="getResults"></pagination>
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
                DeviceList: [],
                condition: "",
            }
        },
        created(){
            this.getResults();
        },
        methods: {
            getDevices(Condition){
                axios
                    .get('/vue/projects/deviceListing', {
                        params: {
                            "Condition" : Condition,
                            "page": page
                        }
                    })
                    .then(response => (this.DeviceList = response))
            },
            refreshKey(){
                axios
                    .get('/vue/projects/deviceListing')
                    .then(response => (this.DeviceList = response))
            },
            getResults(page) {
                if (typeof page === 'undefined') {
                    page = 1;
                }
                console.log(typeof this.$http);
                axios.get('/vue/projects/deviceListing?page=' + page)
                 .then(response => (this.DeviceList = response))
            }
        },
        mounted() {
            
        }
    }
</script>