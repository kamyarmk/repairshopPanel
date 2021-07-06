<template>
<div class="block block-rounded">
    <div class="block-header block-header-default">
        <h3 class="block-title">
            <!-- {{ __('Store Growth') }} -->
            {{ storeGrowth }}
        </h3>
        <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo" @click="updateDatas()">
                <i class="si si-refresh"></i>
            </button>
            <!-- <button type="button" class="btn-block-option">
                <i class="si si-wrench"></i>
            </button> -->
        </div>
    </div>
    <div class="block-content block-content-full">
        <div class="row">
            <div class="col-md-5 col-xl-4 d-md-flex align-items-md-center">
                <div class="p-md-2 p-lg-3">
                    <div class="py-3">
                        <div class="text-black font-size-h1 font-w700">${{ TotalIncome }}</div>
                        <!-- <div class="font-w600">{{ __('Your Income Over Week') }}</div> -->
                        <div class="font-w600">{{ YourIncomeOverWeek }}</div>
                        <div class="py-3 d-flex align-items-center">
                            <div class="bg-success-lighter p-2 rounded mr-3">
                                <i class="fa fa-fw fa-arrow-up text-success"></i>
                            </div>
                            <p class="mb-0">
                                You have a <span class="font-w600 text-success">{{ incomeGrow }}% customer growth</span> in the last 30 days. This is amazing, keep it up!
                            </p>
                        </div>
                    </div>
                    <div class="py-3">
                        <div class="text-black font-size-h1 font-w700">{{ totalDevices }}</div>
                        <!-- <div class="font-w600">{{ __('Requests Per Week') }}</div> -->
                        <div class="font-w600">{{ RequestsPerWeek }}</div>
                        <div class="py-3 d-flex align-items-center">
                            <div class="bg-success-lighter p-2 rounded mr-3">
                                <i class="fa fa-fw fa-arrow-up text-success"></i>
                            </div>
                            <p class="mb-0">
                                You’ve managed to add <span class="font-w600 text-success">{{ deviceGrow }}% more products</span> in the last 30 days. Store’s portfolio is growing!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-xl-8 d-md-flex align-items-md-center">
                <div class="p-md-2 p-lg-3 w-100" >
                    <!-- Bars Chart Container -->
                    <!-- Chart.js Chart is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
                    <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                    <!-- data-mon="{{ __('Mon') }}"
                        data-tue="{{ __('Tue') }}"
                        data-wed="{{ __('Wed') }}"
                        data-thu="{{ __('Thu') }}"
                        data-fri="{{ __('Fri') }}"
                        data-sat="{{ __('Sat') }}"
                        data-sun="{{ __('Sun') }}"

                        data-device="{{ __('Devices') }}"
                        data-income="{{ __('Incomes') }}" -->
                    <canvas  class="js-chartjs-analytics-bars"
                        :data-mon="Mon"
                        :data-tue="Tue"
                        :data-wed="Wed"
                        :data-thu="Thu"
                        :data-fri="Fri"
                        :data-sat="Sat"
                        :data-sun="Sun"

                        :data-device="Devices"
                        :data-income="Incomes"
                    ></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    import axios from 'axios'
    import pageDashboard from '../../dashmix/chart'

    export default {
        props:[
            'storeGrowth', 
            'YourIncomeOverWeek',
            'RequestsPerWeek',
            'Mon',
            'Tue',
            'Wed',
            'Thu',
            'Fri',
            'Sat',
            'Sun',
            'Devices',
            'Incomes'
            ],
        data(){
            return{
                rtl: false,
                gotData: false,
                
                TotalIncome: '0',
                incomeGrow: '0',
                totalDevices: '0',
                deviceGrow: '0',
                info: {
                    data: {

                    }
                }
            }
        },
        created(){
            axios
                .get('/vue/dashboard/chart')
                .then(response => (
                    this.info = response,
                    jQuery(() => { pageDashboard.init(
                        response.data.monFPipe,
                        response.data.tueFPipe,
                        response.data.wedFPipe,
                        response.data.thuFPipe,
                        response.data.friFPipe,
                        response.data.satFPipe,
                        response.data.monSPipe,
                        response.data.tueSPipe,
                        response.data.wedSPipe,
                        response.data.thuSPipe,
                        response.data.friSPipe,
                        response.data.satSPipe,
                        response.data.sunSPipe,
                     ) }),
                     this.TotalIncome = response.data.totalIncome,
                     this.incomeGrow = response.data.incomeGrow,
                     this.totalDevices = response.data.incomeGrow,
                     this.deviceGrow = response.data.incomeGrow
                ))
                .then(this.gotData = true).then()
            
    },
        methods: {
            change(newInfo){
                this.info = newInfo
            },
            updateDatas(){
                axios
                .get('/vue/dashboard/chart')
                .then(response => (
                    this.info = response,
                    jQuery(() => { pageDashboard.init(
                        response.data.monFPipe,
                        response.data.tueFPipe,
                        response.data.wedFPipe,
                        response.data.thuFPipe,
                        response.data.friFPipe,
                        response.data.satFPipe,
                        response.data.monSPipe,
                        response.data.tueSPipe,
                        response.data.wedSPipe,
                        response.data.thuSPipe,
                        response.data.friSPipe,
                        response.data.satSPipe,
                        response.data.sunSPipe,
                     ) }),
                     this.TotalIncome = response.data.totalIncome,
                     this.incomeGrow = response.data.incomeGrow,
                     this.totalDevices = response.data.incomeGrow,
                     this.deviceGrow = response.data.incomeGrow
                ))
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
