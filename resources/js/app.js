/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

import App from './App.vue';
Vue.use(VueAxios, axios);

import Home from './components/Home.vue';
import CreateStudent from './components/CreateStudent.vue';
import Index from './components/Index.vue';
import EditStudent from './components/EditStudent.vue';

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('my-component', require('./components/MyComponent.vue').default);
Vue.component('conditional-rendering', require('./components/ConditionalRendering.vue').default);
Vue.component('list-rendering', require('./components/ListRendering.vue').default);
Vue.component('student-dashboard', require('./components/StudentDashboard.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import '@fortawesome/fontawesome-free/css/all.css'
import '@fortawesome/fontawesome-free/js/all.js'

const app = new Vue({
    el: '#app',
});

/* Import các component và khai báo ddinhj tuyến cho ứng dụng */
const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'create',
        path: '/create',
        component: CreateStudent
    },
    {
        name: 'posts',
        path: '/posts',
        component: Index
    }
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditStudent
    }
];

const router = new VueRouter({ mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');