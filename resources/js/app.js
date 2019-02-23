import Vue from 'vue'
import axios from 'axios'
import VueRouter from 'vue-router'

//sweetalert
import Swal from 'sweetalert2'
window.Swal = Swal;
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 4000
});
window.Toast = Toast;

import router from './route'
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
Vue.component('vuetify',require('./components/vuetify'));
Vue.component('login-form', require('./auth/LoginForm'));
Vue.component('register-form', require('./auth/RegisterForm'));
Vue.component('email-reset-password-form', require('./auth/EmailResetPasswordForm'));
Vue.component('reset-password-form', require('./auth/ResetPasswordForm'));
Vue.component('product-table', require('./Product/table'));
Vue.component('product-create', require('./Product/create'));
Vue.component('operation-create', require('./Operation/create'));
Vue.component('product-request',require('./Operation/request'));
Vue.component('product-approved',require('./Operation/approved'));




import {Form, HasError, AlertError} from 'vform'
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);
window.axios = axios;
window.From = Form;
Vue.use(VueRouter);

require('./bootstrap');
require('./jquery.min');
require('./jquery.tabledit.min');
require('./jquery.dataTables');
require('./dataTables.bootstrap4');

window.Vue = Vue;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,

});
