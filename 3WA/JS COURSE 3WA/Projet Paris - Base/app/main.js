import app from './app.js';

import config from './config.js';

import Home from '../controllers/home.js';

import Propos from '../controllers/propos.js';

import Search from '../controllers/search.js';

import Login from '../controllers/login.js';




// --------------------------------------------------------------------------------------------------------------------
// INITIALISATION DE L'APPLICATION
// --------------------------------------------------------------------------------------------------------------------

function initializeRouter() {
    // Instancier ici le Vanilla Router dans l'objet "app.mvc.router"

    app.mvc.router = new Router({
        mode: 'hash',
        root: '/index.html'
    });

    //app.mvc.router.add('/', function () {
       // alert('Home page');
   // });

    app.mvc.router.add('/', () => {
        let HomeController = new Home();
        HomeController.show();
    })

    app.mvc.router.add('/propos', () => {
        let ProposController = new Propos();
        ProposController.show();
    })

    app.mvc.router.add('/search', () => {
        let SearchController = new Search();
        SearchController.show();
    })

    app.mvc.router.add('/login', () => {
        let LoginController = new Login();
        LoginController.show();
    })


    app.mvc.router.check().addUriListener();
    // ...
}


// --------------------------------------------------------------------------------------------------------------------
// CODE PRINCIPAL
// --------------------------------------------------------------------------------------------------------------------

document.addEventListener('DOMContentLoaded', function () {
    // Initialisation du routeur.
    firebase.initializeApp(config.firebase);
    initializeRouter();
});


if ('serviceWorker' in navigator) {


    // Mise en place du serviceWorker
    navigator.serviceWorker.register('../service-worker.js', { scope: '/' })
        .then(function (reg) {
            let deferredPrompt;
            let btnApp = document.getElementById('webApp');
            btnApp.style.display = 'none';


            window.addEventListener('beforeinstallprompt', (event) => {
                deferredPrompt = event;
                btnApp.style.display = 'block';
            })


            btnApp.addEventListener('click', (e) => {
                e.preventDefault()

               // btnApp.style.display = 'none';
                //deferredPrompt.prompt();
                //deferredPrompt.userChoice.then(() => {
                   // btnApp.parentNode.removeChild(btnApp);
                //})
            })
        })
}
