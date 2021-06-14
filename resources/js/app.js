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
Vue.component('Loading', require('./components/Loading.vue').default);

const app = new Vue({
    el: '#app',
    router: new VueRouter(routes),
    store
});

document.getElementById('switchTheme').addEventListener('click', function () {
    let htmlClasses = document.querySelector('html').classList;
    if (localStorage.theme == 'dark') {
        htmlClasses.remove('dark');
        localStorage.removeItem('theme')
    } else {
        htmlClasses.add('dark');
        localStorage.theme = 'dark';
    }
});

if (localStorage.theme === 'dark' || (!'theme' in localStorage && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.querySelector('html').classList.add('dark')
} else if (localStorage.theme === 'dark') {
    document.querySelector('html').classList.add('dark')
}
