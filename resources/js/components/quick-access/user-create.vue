<template>
    <form @submit.prevent="formSubmit" class="form-vertical" role="form" method="POST" id="UserReg">
      <slot></slot>
        <div class="modal-body text-right fw-bold text-decoration-underline">
            <div class="row">
                <div class="col-6 mb-4">
                    <label class="col-form-label">{{ userTitle }}</label>
                    <div class="input-group m-t-10">
                        <input name="user" type="text" class="form-control" v-model="userName">
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <label class="col-form-label">{{ phoneTitle }}</label>
                    <div class="input-group m-t-10">
                        <input name="user" type="text" class="form-control" v-model="phoneNumber">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mb-4">
                    <label class="col-form-label">{{ emailTitle }}</label>
                    <div class="input-group m-t-10">
                        <input name="user" type="text" class="form-control" v-model="emailAddress">
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <label class="col-form-label">{{ companyName }}</label>
                    <div class="input-group m-t-10">
                        <input name="user" type="text" class="form-control" v-model="company">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-4">
                    <label class="col-form-label">{{ addressName }}</label>
                    <div class="input-group m-t-10">
                        <textarea class="form-control" v-model="address" id="first_address" name="first_address" style="height: 100px"></textarea>
                    </div>
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
            company: null,
            address: null,
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
        companyName: '',
        addressName: ''
    },
    methods:{
        formSubmit: function(){
            axios.post('/UserCreateVue', 
                { 
                    name: this.userName ,
                    email: this.emailAddress ,
                    phonenumber: this.phoneNumber,
                    company_name: this.company,
                    first_address: this.address
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