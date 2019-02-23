import VueRoute from 'vue-router';
import Registervue from './auth/RegisterForm';
import loginvue from './auth/LoginForm';
import producttable from './Product/table';
import emailreset from './auth/EmailResetPasswordForm';
import passwordreset from './auth/ResetPasswordForm';

let routes = [
    {
        path:'/register',
        name:'register-form',
        component:Registervue,
    },
    {
        path: '/login',
        name: 'login-form',
        component: loginvue,
    },
    {
        path:'/product-list',
        name:'product',
        component:producttable,
    }

];


export default new VueRoute({
    routes
})