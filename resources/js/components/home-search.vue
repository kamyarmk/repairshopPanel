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
                    <transition-group name="datalist" class="list-group" tag="ul" v-if="results[0]">
                        <li class="list-group-item list-group-item-action" :key="invoiceSearch" v-if="results[0].length > 0">
                            <h3 class="text-right">{{ invoiceSearch }}</h3>
                        </li>
                        <li class="list-group-item list-group-item-action" v-for="data in results[0]" :key="data.id">
                            <div class="table-responsive">
                                <table class="table table-hover mails m-0 table table-actions-bar text-center">
                                    <tr @click="moreDetailes(data.id, 'Invoice')">
                                        <td class="w-25">
                                            <span>{{ data.id }}</span> 
                                        </td>
                                        <td class="w-25">
                                            <span>{{ data.Condition }}</span> 
                                        </td>
                                        <td class="w-25">
                                            <span>{{ data.Price }}</span> 
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </li>
                    </transition-group>
                    <transition-group name="datalist" class="list-group" tag="ul" v-if="results[1]">
                        <li class="list-group-item list-group-item-action" :key="userSearch" v-if="results[1].length > 0">
                            <h3 class="text-right">{{ userSearch }}</h3>
                        </li>
                        <li class="list-group-item list-group-item-action" v-for="data in results[1]" :key="data.id">
                            <div class="table-responsive">
                                <table class="table table-hover mails m-0 table table-actions-bar text-center">
                                    <tr @click="moreDetailes(data.id, 'UserList')">
                                        <td class="w-25">
                                            <span>{{ data.name }}</span> 
                                        </td>
                                        <td class="w-25">
                                            <span>{{ data.phone_number }}</span>  
                                        </td>
                                        <td class="w-25">
                                            <span>{{ data.email }}</span> 
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </li>
                    </transition-group>
                    <transition-group name="datalist" class="list-group" tag="ul" v-if="results[2]">
                        <li class="list-group-item list-group-item-action" :key="deviceSearch" v-if="results[2].length > 0">
                            <h3 class="text-right">{{ deviceSearch }}</h3>
                        </li>
                        <li class="list-group-item list-group-item-action" v-for="data in results[2]" :key="data.id">
                            <div class="table-responsive">
                                <table class="table table-hover mails m-0 table table-actions-bar text-center">
                                    <tr @click="moreDetailes(data.id, 'DeviceList')">
                                        <td class="w-25">
                                            <span>{{ data.IMEI }}</span> 
                                        </td>
                                        <td class="w-25">
                                            <span>{{ data.Condition }}</span> 
                                        </td>
                                        <td class="w-25">
                                            <span>{{data.created_at | formatDate}}</span> 
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </li>
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
            axios.get('/liveSearch' , { 
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
        moreDetailes(data, theRoute){
            window.location.href = '/' + theRoute + '/' + data;
        },
        mounted(){

        }
    }
}
</script>