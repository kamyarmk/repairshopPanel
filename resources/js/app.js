/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import PDatePicker from 'vue2-persian-datepicker';


window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.component('pdatepicker', PDatePicker);
Vue.component('user-autocomplete', require('./components/user-autocomplete.vue').default);
Vue.component('user-create', require('./components/user-create.vue').default);
Vue.component('search-regdev', require('./components/tables/search-regDev.vue').default);
Vue.component('search-users', require('./components/tables/search-users.vue').default);
Vue.component('search-devices', require('./components/tables/search-devices.vue').default);
Vue.component('search-invoice', require('./components/tables/search-invoice.vue').default);
Vue.component('home-search', require('./components/home-search.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
