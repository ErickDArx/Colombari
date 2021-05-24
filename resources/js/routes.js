import Login from './components/Login';
import Footer from './components/Footer';
import Home from './components/Home';

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
            component: Home
        },
        {
            path: '/Footer',
            name: 'footer',
            component: Footer
        },
        
    ]
});
