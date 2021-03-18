<template>
    <div>
        <h4 class="m-t-0 text-right header-title"><i class="fas fa-search ml-3"></i>{{ searchTerm }}</h4>
        <div class="row mb-5 mt-5">
            <div class="col-md-12">
                <form>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 input-group input-group-lg btn btn-outline-transparent p-0">
                            <input type="text" class="form-controll rounded" name="invoice_id" :placeholder="searchTerm" />
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </div>   
                    </div>
                </form>
            </div>
        </div>    
    </div>
</template>

<script>
import searchDevices from './tables/search-devices.vue';
// data-bs-toggle="dropdown" 
export default {
  components: { searchDevices },
    data() {
        return {
            keyword1: null,
            results: [],
            
        };
    },
    props:{
        searchTerm: ''
    },
    watch: {
        keyword1(after, before) {
            this.getResults();
        }
    },
    methods:{
        getResults() {
            axios.get('/' + this.searchItem , { 
                params: { keyword1: this.keyword1} 
                })
                .then(res => this.results = res.data)
                .catch(error => {});
        },
        dataDelete(dataID){
            axios.get('/' + this.searchItem + '/delete/', { 
                params: { keyword1: this.keyword1 } 
                })
                .then(res => this.results = res.data)
                .catch(error => {});
        },
        mounted(){

        }
    }
}
</script>