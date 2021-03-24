<template>
    <form @submit.prevent="formSubmit" class="form-vertical" role="form" method="POST" id="UserReg">
      <slot></slot>
        <div class="modal-body text-right fw-bold text-decoration-underline">
            <div class="row mb-4">
                <label class="col-form-label">{{ userTitle }}</label>
                <div class="input-group m-t-10">
                    <input name="user" type="text" class="form-control" v-model="userName">
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-form-label">{{ phoneTitle }}</label>
                <div class="input-group m-t-10">
                    <input name="user" type="text" class="form-control" v-model="phoneNumber">
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-form-label">{{ emailTitle }}</label>
                <div class="input-group m-t-10">
                    <input name="user" type="text" class="form-control" v-model="emailAddress">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ closeTitle }}</button>
            <button type="submit" class="btn btn-primary" >{{ sendTitle }}</button>
        </div>
    </form>
</template>

<script>
// data-bs-toggle="dropdown" 
export default {
    data() {
        return {
            userName: null,
            phoneNumber: null,
            emailAddress: null,
            result: null,
            modlaObj: document.getElementById('exampleModal')
        };
    },
    props:{
        userTitle: '',
        phoneTitle: '',
        emailTitle: '',
        sendTitle: '',
        closeTitle:'',
    },
    methods:{
        formSubmit: function(){
            axios.post('/UserCreateVue', 
                { 
                    name: this.userName ,
                    email: this.emailAddress ,
                    phonenumber: this.phoneNumber 
                } 
                )
                .then(res => this.result =  res.data)
                .catch(error => {});
                $('#exampleModal').modal('hide');
        },
        mounted(){

        }
    }
}
</script>