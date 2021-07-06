<template>
    <div id="page-header-search" class="overlay-header bg-primary">
        <div class="content-header">
            <form class="w-100" action="/dashboard" method="POST">
                <input type="hidden" name="_token" :value="csrf">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-primary" data-toggle="layout" data-action="header_search_off" @click="deleteDatas()">
                            <i class="fa fa-fw fa-times-circle"></i>
                        </button>
                    </div>
                    <input type="text" class="form-control border-0" :placeholder="placeholder" id="page-header-search-input" name="page-header-search-input" v-model="keyword">
                </div>
            </form>
            <div class="search-results" :class="{active: isActive}" v-if="isActive">
                <div class="holder">
                    <div class="sections">
                        <h3>Devices</h3>
                        <div class="divider"></div>
                        <div class="row" v-for="Device in results.data.devices" :key="Device.id">
                            <div class="col-md-4">
                                <h4>{{ Device.IMEI }}</h4>
                            </div>
                            <div class="col-md-8">
                                <li>{{ Device.condition }}</li>
                                <li>{{ Device.user.first_name }} {{ Device.user.last_name }}</li>
                                <li>{{ Device.user.phone_number }}</li>
                            </div>
                        </div>    
                    </div>
                    <div class="sections">
                        <h3>Users</h3>
                        <div class="divider"></div>
                        <div class="row" v-for="User in results.data.users" :key="User.id">
                            <div class="col-md-4">
                                <h4>{{ User.user_name }}</h4>
                            </div>
                            <div class="col-md-8">
                                <li>{{ User.first_name }} {{ User.last_name }}</li>
                                <li>{{ User.phone_number }}</li>
                                <li>{{ User.email }}</li>
                            </div>
                        </div>
                    </div>
                    <div class="sections">
                        <h3>Inovices</h3>
                        <div class="divider"></div>
                        <div class="row" v-for="Invoice in results.data.invoices" :key="Invoice.id">
                            <div class="col-md-4">
                                <h4>{{ Invoice.id }}</h4>
                            </div>
                            <div class="col-md-8">
                                <li>{{ Invoice.Condition }}</li>
                                <li>{{ Invoice.user.first_name }} {{ Invoice.user.last_name }}</li>
                                <li>{{ Invoice.created_at }}</li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'
    export default {
        props:[
            'csrf', 
            'placeholder'
            ],
        data(){
            return{
                isActive: false,
                keyword: null,
                results: null
            }
        },
        watch: {
            keyword(newKeyword, oldKeyword){
                this.getResults(newKeyword)
            }
        },
        methods:{
            getResults(keyword){
                axios
                .get('/vue/header/search', 
                    {
                        params: {
                            "keyword" : keyword
                        }
                    }
                )
                .then(response => (
                    this.results = response,
                    this.isActive = true
                    ))
            },
            deleteDatas(){
                this.isActive = false
                this.keyword = null
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
