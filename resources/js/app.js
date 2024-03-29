/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

window.Vue = require('vue').default;
import Vue from 'vue'
import VueMoment from 'vue-moment';
import Vuex from 'vuex'

Vue.use(VueMoment)
Vue.use(Vuex)

Vue.prototype.$daysCount = 4

const store = new Vuex.Store({
    state:{
        daysCount: 4
    },
    getters: {
        daysCount: state => state.daysCount,
    },
    mutations: {
        updateStatus(state, status) {
          Vue.set(state, 'daysCount', status);
        },
    },
})

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('pagination', require('laravel-vue-pagination'));

// DashBoard Datas
Vue.component('main-datas', require('./components/Dashboard/main_datas.vue').default);
Vue.component('dash_device_list', require('./components/Dashboard/device_list.vue').default);
Vue.component('dash_chart', require('./components/Dashboard/chart.vue').default);

// Listing Datas
Vue.component('listing_projects', require('./components/Lists/projects.vue').default);
Vue.component('listing_admins', require('./components/Lists/users.vue').default);
Vue.component('listing_customers', require('./components/Lists/customers.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#main-container',
    store: store
});
