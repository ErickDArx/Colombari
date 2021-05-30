import Login from './components/Login';
import Registro from './components/Register';
import Footer from './components/Footer';
import Home from './components/Home';
import axios from 'axios';

export default ({
    mode: 'history',
    linkActiveClass: 'is-active',
    routes: [
        {
            path: '/',
            name: 'Login',
            component: Login
        },
        {
            path: '/Principal',
            name: 'Home',
            component: Home,
            beforeEnter: (to, form, next)=>{
                axios.get('/api/login').then(()=>{
                    next()
                }).catch(()=>{
                    return next({name:'Login'})
                });
            }
        },
        {
            path: '/Perfil',
            name: 'Perfil',
            component: Home,
            beforeEnter: (to, form, next)=>{
                axios.get('/api/login').then(()=>{
                    next()
                }).catch(()=>{
                    return next({name:'Login'})
                });
            }
        },
        {
            path: '/Footer',
            name: 'footer',
            component: Footer
        },
        {
            path: '/Registro',
            name: 'registro',
            component: Registro
        },
        
    ]
});
