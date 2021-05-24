/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import VueRouter from 'vue-router';
import routes from './routes';
Vue.use(VueRouter);

Vue.component('app-nav', require('./components/Nav.vue').default);
Vue.component('app-login', require('./components/Login.vue').default);
Vue.component('app-footer', require('./components/Footer.vue').default);
Vue.component('app-principal', require('./components/Home.vue').default);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    router: new VueRouter(routes)
});
