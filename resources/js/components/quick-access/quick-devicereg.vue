<template>
    <form @submit.prevent="formSubmit" class="form-vertical" role="form" method="POST" id="UserReg">
      <slot></slot>
        <div class="modal-body text-right fw-bold text-decoration-underline">
            <div class="row mb-4">
                <div class="col-6">
                    <label class="col-form-label">{{ deviceName }}</label>
                    <div class="input-group m-t-10">
                        <input name="device_name" type="text" class="form-control" v-model="device_name">
                    </div>
                </div>
                <div class="col-6">
                    <label class="col-form-label">{{ deviceType }}</label>
                    <div class="input-group m-t-10">
                        <select name="device_type" class="form-control" id="device_type" v-model="device_type">
                            <option value="mobile">mobile</option>
                            <option value="tablet">tablet</option>
                            <option value="laptop">laptop</option>
                            <option value="other">other</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="row mb-4">
                <label class="col-form-label">{{ deviceConfig }}</label>
                <ul class="list-group" v-for="config in configlist" :key="config.id" >
                    <li class="list-group-item">
                        <form class="row">
                            <div class="col-6">
                                <div class="row">
                                    <label
                                        class="col-md-3"
                                    >
                                        {{name}}
                                    </label>
                                    <input 
                                        type="text" 
                                        :placeholder="name" 
                                        :value="$config.name"
                                        class="form-control col-md-9"
                                    />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row justify-content-evenly">
                                    <button 
                                        type="submit"
                                        class="btn btn-success col-5"
                                    >
                                        {{sendTitle}}
                                    </button>
                                    <button 
                                        href="#"
                                        class="btn btn-danger col-5"
                                    >
                                        {{destroy}}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item">
                        <form class="row">
                            <div class="col-6">
                                <div class="row">
                                    <label
                                        class="col-md-3"
                                    >
                                        {{name}}
                                    </label>
                                    <input 
                                        type="text" 
                                        :placeholder="name" 
                                        v-model="configName"
                                        class="form-control col-md-9"
                                    />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row justify-content-evenly">
                                    <button 
                                        type="submit"
                                        class="btn btn-success w-25"
                                    >
                                        {{sendTitle}}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
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
            device_name: null,
            device_type: null,
            deviceConfig: null,
            configName: '',
            configlist: [],
            result: null,
            modlaObj: document.getElementById('exampleModal')
        };
    },
    props:{
        deviceName: '',
        deviceType: '',
        deviceConfig: '',
        name: '',
        destroy: '',
        closeTitle: '',
        sendTitle: ''
    },
    methods:{
        formSubmit: function(){
            axios.post('/UserCreateVue', 
                { 
                    device_name: this.userName ,
                    device_type: this.emailAddress
                } 
                )
                .then(res => this.result =  res.data)
                .catch(error => {});
                $('#deviceModal').modal('hide');
        },
        mounted(){

        }
    }
}
</script>