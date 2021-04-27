<template>
    <div class="position-relative flex-grow-1">
        <input 
            name="user" 
            type="text"  
            class="form-control"
            v-model="keyword"
            :placeholder="user"
        >
        <input 
        type="hidden" 
        name="userID" 
        v-model="userID"
        >
        <ul class="position-absolute top-100 start-0 list-group w-100 shadow-lg" v-if="Users.length > 0">
            <li 
                class="list-group-item list-group-item-action" 
                v-for="user in Users" 
                :key="user.id" 
                v-text="user.name"
                v-on:click="getUserData(user.name, user)"
            ></li>
        </ul>
    </div>
</template>

<script>
// data-bs-toggle="dropdown" 
export default {
    data() {
        return {
            keyword: null,
            userID: null,
            Users: [],
        };
    },
    props: {
        user: '',
        userId: ''
    },
    created(){
        if(this.user != ''){
            this.keyword = user;
            this.userID = userId;
        }
    },
    watch: {
        keyword(after, before) {
            this.getResults();
        }
    },
    methods: {
        getResults() {
            axios.get('/UsersVue', { params: { name: this.keyword } })
                .then(res => this.Users = res.data)
                .catch(error => {});
        },
        getUserData(name, data){
            this.userID = data.id;
            this.keyword = name;
            this.Users = [];
            console.log('its Working');
        }
    }
}
</script>