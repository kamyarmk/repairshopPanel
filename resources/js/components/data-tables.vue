<template>
    <form action="" class="row d-flex align-items-center justify-content-center text-right">
        <div v-if="prop1" class="col-md-2">
            <label for="">{{ prop1Name }}</label>
            <input type="text" class="form-control" :name="prop1" v-model="keyword1">
        </div>
        <div v-if="prop2" class="col-md-2">
            <label for="">{{ prop2Name }}</label>
            <input type="text" class="form-control" :name="prop2" v-model="keyword2">
        </div>
        <div v-if="prop3" class="col-md-2">
            <label for="">{{ prop3Name }}</label>
            <input type="text" class="form-control datePickerPlace" :name="prop3" v-model="keyword3">
        </div>
        <div v-if="prop4" class="col-md-2">
            <label for="">{{ prop4Name }}</label>
            <input type="text" class="form-control" :name="prop4" v-model="keyword4">
        </div>
        <div v-if="prop5" class="col-md-2">
            <label for="">{{ prop5Name }}</label>
            <select class="form-select" name="Condition" id="form_condition" v-model="keyword5">
                
            </select>
        </div>
        <div class="col-md-2">
            <label for=""></label>
            <input type="submit" class="form-control btn btn-primary" :value="searchText">
        </div>
    </form>
</template>

<script>
// data-bs-toggle="dropdown" 
export default {
    data() {
        return {
            keyword1: null,
            keyword2: null,
            keyword3: null,
            keyword4: null,
            keyword5: null,
            results: []
        };
    },
    props:{
        searchText: '',
        prop1: '',
        prop1Name: '',
        prop2: '',
        prop2Name: '',
        prop3: '',
        prop3Name: '',
        prop4: '',
        prop4Name: '',
        prop5: '',
        prop5Name: '',
        searchItem: '',
    },
    watch: {
        keyword1(after, before) {
            this.getResults();
        },
        keyword2(after, before) {
            this.getResults();
        },
        keyword3(after, before) {
            this.getResults();
        },
        keyword4(after, before) {
            this.getResults();
        },
        keyword5(after, before) {
            this.getResults();
        }
    },
    methods:{
        getResults() {
            axios.get('/' + this.searchItem , { 
                params: { 
                    keyword1: this.keyword1 ,
                    keyword2: this.keyword2 ,
                    keyword3: this.keyword3 ,
                    keyword4: this.keyword4 ,
                    keyword5: this.keyword5 
                    } 
                })
                .then(res => this.results = res.data)
                .catch(error => {});
        },
        mounted(){

        }
    }
}
</script>