require('./bootstrap');

window.Vue = require('vue').default;

import VueRouter from 'vue-router';
import routes from './routes';
import store from './index';

Vue.use(VueRouter);

Vue.component('app-nav', require('./components/Nav.vue').default);
Vue.component('app-login', require('./components/Login.vue').default);
Vue.component('app-footer', require('./components/Footer.vue').default);
Vue.component('app-principal', require('./components/Home.vue').default);
Vue.component('card-user', require('./components/Personal.vue').default);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    router: new VueRouter(routes),
    store
});
