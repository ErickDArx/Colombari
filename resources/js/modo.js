const { default: axios } = require("axios");

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

// new Vue({
//     el: '#app_login',
//     data: {
//         usuario: '',
//         contrasena: '' 
//     },
//     methods: {
//         iniciarSesion: function () {
//             axios.post('autenticacion',{
//                 usuario:this.usuario,
//                 contrasena: this.contrasena,
//             }).then(response=>{
//                 console.log(response);
//             }).catch(error=>{
//                 console.log(error.response.data);
//             });
//         }
//     }
// });
