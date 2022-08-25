/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';
import * as VueRouter from 'vue-router';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

// import index from './views/index.vue'
import admin from './views/admin.vue'
import show from './views/Show.vue'
import AddAuto from './views/AddAuto.vue'
import Login from './views/Login.vue'
import Regist from './views/Regist.vue'

const routes = [
// {
//     path:'/',
//     component: index
// },
{
    path: '/auto',
    component: admin
},
{
    path: '/auto/:id',
    name: 'AutoPage',
    component: show
},
{
    path:'/create',
    component: AddAuto
},
{
    path:'/auto/:id/edit',
    name: 'EditPage',
    props: true
},
{
    name: 'Update',
    path: '/auto/:id'
},
{
    name: 'Auth',
    path: '/login',
    component: Login
},
{
    name: 'AuthR',
    path: '/regist',
    component: Regist
},

];

const router = new VueRouter.createRouter({
    history: VueRouter.createWebHistory(''),
    routes,
})

import HomeComponent from './components/HomeComponent.vue';
app.component('home-component',HomeComponent);

import HeaderComponent from './components/HeaderComponent.vue';
app.component('header-component',HeaderComponent);

import FooterComponent from './components/FooterComponent.vue';
app.component('footer-component',FooterComponent);

import HeaderAdminComponent from './components/HeaderAdminComponent.vue';
app.component('header-admin-component',HeaderAdminComponent);

import HeaderAuthComponent from './components/HeaderAuthComponent.vue';
app.component('header-auth-component',HeaderAuthComponent);






/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.globEager('./**/*.vue')).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */


import "../css/main.css";
app.use(router);
app.mount('#app');
