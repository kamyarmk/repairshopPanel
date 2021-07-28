<template>
    <div class="block block-rounded block-mode-loading-refresh">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                {{ LatestOrders }}
            </h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo" @click="refreshKey()">
                    <i class="si si-refresh"></i>
                </button>
                <div class="dropdown">
                    <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="si si-chemistry"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" @click="getDevices('Open')" style="cursor: pointer;">
                            <i class="far fa-fw fa-dot-circle opacity-50 mr-1"></i> {{ Pending }}
                        </a>
                        <a class="dropdown-item" @click="getDevices('Delivered')" style="cursor: pointer;">
                            <i class="far fa-fw fa-check-circle opacity-50 mr-1"></i> {{ Canceled }}
                        </a>
                        <a class="dropdown-item" @click="getDevices('Refund')" style="cursor: pointer;">
                            <i class="far fa-fw fa-times-circle opacity-50 mr-1"></i> {{ Completed }}
                        </a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" @click="getDevices('viewAll')" style="cursor: pointer;">
                            <i class="fa fa-fw fa-eye opacity-50 mr-1"></i> {{ ViewAll }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-content">
            <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm">
                <thead>
                    <tr class="text-uppercase">
                        <th>{{ Device }}</th>
                        <th class="d-none d-xl-table-cell">{{ DeviceDate }}</th>
                        <th>{{ Status }}</th>
                        <th class="d-none d-sm-table-cell text-right" style="width: 120px;">{{ User }}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="Device in DeviceList.data" :key="Device.id">
                        <td>
                            <span class="font-w600">{{ Device["devices"]["device_name"] }}</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <span class="font-size-sm text-muted">{{ new Date(Device["created_at"]) | moment("MM/DD/YYYY") }}</span>
                        </td>
                        <td>
                            <span :class="'font-w600  ' +  (Device['condition'] == 'Open' ? 'text-warning' : (Device['condition'] == 'Delivered' ? 'text-success' : 'text-danger'))  ">{{ Device["condition"] }}</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-right font-w500">
                            {{ Device["user"]["first_name"] }} {{ Device["user"]["last_name"] }}
                        </td>
                        <td class="text-center text-nowrap font-w500">
                            <a :href="'/project/edit/' +  Device['id'] ">
                                View
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm text-center">
            <a class="font-w500" href="/project/list">
                {{ ViewAll }}
                <i class="fa fa-arrow-right ml-1 opacity-25"></i>
            </a>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'
    import VueMoment from 'vue-moment'
    import { mapState } from 'vuex';
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
                condition: "viewAll"
            }
        },
        computed: mapState(['daysCount']),
        watch:{
            daysCount(newCount, oldCount){
                this.getDevices(this.condition);
            }
        },
        created(){
            axios
                .get('/vue/dashboard/deviceListing', {
                        params: {
                            "week" : this.$store.state.daysCount
                        }
                    })
                .then(response => (this.DeviceList = response))
        },
        methods: {
            getDevices(Condition){
                this.condition = Condition
                axios
                    .get('/vue/dashboard/deviceListing', {
                        params: {
                            "Condition" : Condition,
                            "week" : String(this.$store.state.daysCount)
                        }
                    })
                    .then(response => (this.DeviceList = response))
            },
            refreshKey(){
                axios
                    .get('/vue/dashboard/deviceListing')
                    .then(response => (this.DeviceList = response))
            }
        },
        mounted() {
            
        }
    }
</script>
