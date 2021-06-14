import Login from './components/Login';
import Registro from './components/Register';
import Footer from './components/Footer';
import Home from './components/Home';
import Perfil from './components/Perfil';
import Docentes from './components/Docentes';
import TeacherList from './components/ListaDocentes';
import axios from 'axios';

export default ({
    mode: 'history',
    linkActiveClass: 'is-active',
    routes: [
        {
            path: '/',
            name: 'Login',
            component: Login,
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
            component: Perfil,
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
            path: '/Docentes',
            name: 'docentes',
            component: Docentes
        },
        {
            path: '/ListaDocentes',
            name: 'ListaDocentes',
            component: TeacherList
        },
        {
            path: '/Registro',
            name: 'registro',
            component: Registro
        },
        
    ]
});
