<template>
    <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">All Customers</h3>
                <div class="custom-control custom-switch mt-1">
                    <input type="checkbox" class="custom-control-input" id="example-sw-custom1" name="example-sw-custom1" checked="">
                    <label class="custom-control-label" for="example-sw-custom1">Active</label>
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
                                <!-- <th>Active</th> -->
                                <th>Name</th>
                                <th class="d-none d-xl-table-cell">Mobile</th>
                                <th class="d-none d-xl-table-cell text-center">Submitted</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="customer in customers.data.data" :key="customer.id" >
                                <td class="text-center">
                                    <a class="font-w600" href="/project/edit">
                                        <strong>{{ customer.department.department_symbol }}.{{ customer.id }}</strong>
                                    </a>
                                </td>
                                <!-- <td class="d-none d-sm-table-cell text-center"></td> -->
                                <td class="d-none d-xl-table-cell">
                                    <a class="font-w600" href="be_pages_ecom_customer.html">{{ customer.first_name }} {{ customer.last_name }}</a>
                                </td>
                                <td class="d-none d-xl-table-cell text-center">
                                    {{ customer.phone_number }}
                                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <strong>{{ customer.created_at }}</strong>
                                </td>
                                <td class="text-center font-size-base">
                                    <a class="btn btn-sm btn-alt-secondary" :href="'/customer/edit/' + customer.id">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <pagination :data="customers.data" @pagination-change-page="getResults"></pagination>
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
                customers: [],
                condition: "",
            }
        },
        created(){
            this.getResults();
        },
        methods: {
            getDevices(Condition){
                axios
                    .get('/vue/admins/customerListing', {
                        params: {
                            "page": page
                        }
                    })
                    .then(response => (this.customers = response))
            },
            refreshKey(){
                axios
                    .get('/vue/admins/customerListing')
                    .then(response => (this.customers = response))
            },
            getResults(page) {
                if (typeof page === 'undefined') {
                    page = 1;
                }
                console.log(typeof this.$http);
                axios.get('/vue/admins/customerListing?page=' + page)
                 .then(response => (this.customers = response))
            }
        },
        mounted() {
            
        }
    }
</script>