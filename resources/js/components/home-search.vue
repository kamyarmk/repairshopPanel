<template>
    <div>
        <h4 class="m-t-0 text-right header-title"><i class="fas fa-search ml-3"></i>{{ searchTerm }}</h4>
        <div class="row mb-5 mt-5">
            <div class="col-md-12">
                <form>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 input-group input-group-lg btn btn-outline-transparent p-0">
                            
                            <input type="text" class="form-controll rounded" name="invoice_id" :placeholder="searchTerm" v-model="keyword1"/>
                            <button type="submit" class="btn" >
                                <i class="fas fa-search"></i>
                            </button>
                            <select class="form-select" name="searchCategory" v-model="searchCategory" @change="clearSearch()">
                                <option value="invoicesvue" selected>{{ invoiceSearch }}</option>
                                <option value="UsersVue">{{ userSearch }}</option>
                                <option value="regdevicevue">{{ deviceSearch }}</option>
                            </select>
                        </div>   
                    </div>
                </form>
                <div v-if="results" class="row d-flex justify-content-center">
                    <transition-group name="datalist" tag="span">
                    <ul class="list-group" v-for="data in results" :key="data.id">
                        <li class="list-group-item list-group-item-action">
                            <div class="table-responsive">
                                <table class="table table-hover mails m-0 table table-actions-bar text-center">
                                    <tr @click="moreDetailes(data.id)">
                                        <td class="w-25">
                                           <span v-if="searchCategory == 'invoicesvue'">{{ data.id }}</span> 
                                           <span v-if="searchCategory == 'UsersVue'">{{ data.name }}</span> 
                                           <span v-if="searchCategory == 'regdevicevue'">{{ data.IMEI }}</span> 
                                        </td>
                                        <td class="w-25">
                                            <span v-if="searchCategory == 'invoicesvue'">{{ data.Condition }}</span> 
                                            <span v-if="searchCategory == 'UsersVue'">{{ data.phone_number }}</span> 
                                            <span v-if="searchCategory == 'regdevicevue'">{{ data.Condition }}</span> 
                                        </td>
                                        <td class="w-25">
                                            <span v-if="searchCategory == 'invoicesvue'">{{ data.Price }}</span> 
                                            <span v-if="searchCategory == 'UsersVue'">{{ data.email }}</span> 
                                            <span v-if="searchCategory == 'regdevicevue'"></span> 
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </li>
                    </ul>
                    </transition-group>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            keyword1: null,
            searchCategory: null,
            results: [],
            routeToGo: null,
            
        };
    },
    props:{
        searchTerm: '',
        invoiceSearch: '',
        userSearch: '',
        deviceSearch: ''
    },
    watch: {
        keyword1(after, before) {
            this.getResults();
        }
    },
    methods:{
        getResults() {
            this.results = [];
            axios.get('/' + this.searchCategory , { 
                params: { homesearch: this.keyword1} 
                })
                .then(res => this.results = res.data)
                .catch(error => {});
        },
        clearSearch(){
            this.results = [];
            if(this.searchCategory == 'invoicesvue'){
                this.routeToGo = 'Invoice';
            }else if(this.searchCategory == 'UsersVue'){
                this.routeToGo = 'UserList';
            }else if(this.searchCategory == 'regdevicevue'){
                this.routeToGo = 'DeviceList';
            }
        },
        moreDetailes(data){
            window.location.href = '/' + this.routeToGo + '/' + data;
        },
        mounted(){

        }
    }
}
</script>