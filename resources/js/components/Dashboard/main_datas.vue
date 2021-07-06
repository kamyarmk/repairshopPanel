<template>
    <div>
        <div class="row" style="justify-content: flex-end;margin-top: -60px;margin-bottom: 60px;margin-right: -5px;margin-left: -5px;">
            <div class="mt-4 mt-md-0">
                <a class="btn btn-sm btn-alt-primary" href="javascript:void(0)">
                    <i class="fa fa-cog"></i>
                </a>
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-sm btn-alt-primary px-3" id="dropdown-analytics-overview" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ timeZoneText }} <i class="fa fa-fw fa-angle-down"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right font-size-sm" aria-labelledby="dropdown-analytics-overview">
                        <a class="dropdown-item" @click="SetTime('1', 'thisWeek')" style="cursor: pointer;">{{ thisWeek }}</a>
                        <a class="dropdown-item" @click="SetTime('2', 'prevWeek')" style="cursor: pointer;">{{ prevWeek }}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" @click="SetTime('4', 'thisMonth')" style="cursor: pointer;">{{ thisMonth }}</a>
                        <a class="dropdown-item" @click="SetTime('8', 'prevMonth')" style="cursor: pointer;">{{ prevMonth }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-deck">
            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column">
                    <div class="block-content block-content-full flex-grow-1">
                        <div class="item rounded-lg bg-body-dark mx-auto my-3">
                            <i class="fa fa-wallet text-muted"></i>
                        </div>
                        
                        <div class="text-primary font-size-h1 font-w700 ">${{ formatNumbers(info.data.TotalIncome) }}</div>
                        <div class="text-muted mb-3 infoPlace">{{ Income }}</div>
                        <div class="d-inline-block px-3 py-1 rounded-lg font-size-sm font-w600" :class="{'text-success bg-success-lighter': this.info.data.Grow >= 0 , 'text-danger bg-danger-lighter': this.info.data.Grow < 0}">
                            <i class="fa mr-1" :class="{'fa-caret-up': this.info.data.Grow > 0 , 'fa-caret-down': this.info.data.Grow < 0}"></i>
                            {{ this.info.data.Grow }}%
                        </div>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                        <a class="font-w500" href="/invoice/list">
                            {{ seeReport }}
                            <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column">
                    <div class="block-content block-content-full flex-grow-1">
                        <div class="item rounded-lg bg-body-dark mx-auto my-3">
                            <i class="fa fa-hand-holding-medical text-muted"></i>
                        </div>
                        <div class="text-warning font-size-h1 font-w700">{{ formatNumbers(info.data.acceptedDevices) }}</div>
                        <div class="text-muted mb-3 infoPlace">{{ accepted }}</div>
                        <div class="d-inline-block px-3 py-1 rounded-lg font-size-sm font-w600" :class="{'text-success bg-success-lighter': info.data.GrowAccepted >= 0 , 'text-danger bg-danger-lighter': info.data.GrowAccepted < 0}">
                            <i class="fa mr-1" :class="{'fa-caret-up': info.data.GrowAccepted > 0 , 'fa-caret-down': info.data.GrowAccepted < 0}"></i>
                            {{ info.data.GrowAccepted }}%
                        </div>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                        <a class="font-w500" href="/project/list">
                            {{ checkit }}
                            <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column">
                    <div class="block-content block-content-full flex-grow-1">
                        <div class="item rounded-lg bg-body-dark mx-auto my-3">
                            <i class="fa fa-thumbs-up text-muted"></i>
                        </div>
                        
                        <div class="text-success font-size-h1 font-w700">{{ formatNumbers(info.data.deliveredDevices)  }}</div>
                        <div class="text-muted mb-3 infoPlace">{{ Delivered }}</div>
                        <div class="d-inline-block px-3 py-1 rounded-lg font-size-sm font-w600" :class="{'text-success bg-success-lighter': info.data.GrowDelivered >= 0 , 'text-danger bg-danger-lighter': info.data.GrowDelivered < 0}">
                            <i class="fa mr-1" :class="{'fa-caret-up': info.data.GrowDelivered > 0 , 'fa-caret-down': info.data.GrowDelivered < 0}"></i>
                            {{ info.data.GrowDelivered }}%
                        </div>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                        <a class="font-w500" href="/project/list">
                            {{ view }}
                            <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column">
                    <div class="block-content block-content-full">
                        <div class="item rounded-lg bg-body-dark mx-auto my-3">
                            <i class="fa fa-clock text-muted"></i>
                        </div>
                        <div class="text-danger font-size-h1 font-w700">{{ formatNumbers(info.data.notDeliveredDevices)  }}</div>
                        <div class="text-muted mb-3 infoPlace">{{ notDelivered }}</div>
                        <div class="d-inline-block px-3 py-1 rounded-lg font-size-sm font-w600" :class="{'text-success bg-success-lighter': info.data.GrowNotDelivered >= 0 , 'text-danger bg-danger-lighter': info.data.GrowNotDelivered < 0}">
                            <i class="fa mr-1" :class="{'fa-caret-up': info.data.GrowNotDelivered > 0 , 'fa-caret-up': info.data.GrowNotDelivered < 0}"></i>
                            {{ info.data.GrowNotDelivered }}%
                        </div>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                        <a class="font-w500" href="/project/list">
                            {{ view }}
                            <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-deck">
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-shadow bg-primary" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fa fa-2x fa-clock text-white"></i>
                        </div>
                        <div class="ml-3 text-right">
                            <p class="text-white font-size-h3 font-w300 mb-0">
                                {{ info.data.invoiceWaiting  }}
                            </p>
                            <p class="text-white-75 mb-0 invoice_info_text">
                                {{ Waiting }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-shadow bg-warning" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <div class="mr-3">
                            <p class="text-white font-size-h3 font-w300 mb-0">
                                {{ info.data.invoiceReadToPay  }}
                            </p>
                            <p class="text-white-75 mb-0 invoice_info_text">
                                {{ Ready }}
                            </p>
                        </div>
                        <div>
                            <i class="fa fa-2x fa-exclamation-triangle text-white"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-shadow bg-success" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <div>
                            <i class="far fa-2x fa-thumbs-up text-white"></i>
                        </div>
                        <div class="ml-3 text-right">
                            <p class="text-white font-size-h3 font-w300 mb-0">
                                {{ info.data.invoicePaid  }}
                            </p>
                            <p class="text-white-75 mb-0 invoice_info_text">
                                {{ Paid }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-shadow bg-danger" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <div class="mr-3">
                            <p class="text-white font-size-h3 font-w300 mb-0">
                                {{ info.data.invoiceOverDue  }}
                            </p>
                            <p class="text-white-75 mb-0 invoice_info_text">
                                {{ overDue }}
                            </p>
                        </div>
                        <div>
                            <i class="fa fa-2x fa-thumbs-down text-white"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'
    export default {
        props:{
            last30day: String,
            thisWeek: String,
            prevWeek: String,
            thisMonth: String,
            prevMonth: String,
            
            Income: String,
            seeReport: String,
            accepted: String,
            checkit: String,
            Delivered: String,
            view: String,
            notDelivered: String,

            Waiting: String,
            Ready: String,
            Paid: String,
            overDue: String,
        },
        data(){
            return{
                timeZoneText: this.last30day,

                TotalIncome: '100',

                DevicesAccepted: '100',
                DevicesnotDelivered: '100',
                DevicesDelivered: '100',

                InvoicesWaiting: '100',
                InvoicesReady: '100',
                InvoicesPaid: '100',
                InvoicesoverDue: '100',

                info: null,
                info2: null
            }
        },
        created(){
            axios
                .get('/vue')
                .then(response => (this.info = response))
            this.Grow = this.info.data.Grow
        },
        methods: {
            SetTime(timeZone, timeZoneText){
                this.timeZoneText = this[timeZoneText]
                axios
                    .get('/vue/' + timeZone )
                    .then(response => (this.info = response))
                this.Grow = this.info.data.Grow
            },
            formatNumbers(number){
                return (
                        Number(number)
                            .toString()
                            .replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")
                        );
            }
        },
        mounted() {
            
        }
    }
</script>
