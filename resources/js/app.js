/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Axios from 'axios'

Vue.prototype.axios = Axios;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
window.onload = () => {
    'use strict';

    if ('serviceWorker' in navigator) {
        navigator.serviceWorker
            .register('sw.js')
            .then(function (registration) {
                console.log('Registration successful, scope is:', registration.scope);
                registration.update();
                console.log('Registration Update')

            })
            .catch(function (error) {
                console.log('Service worker registration failed, error:', error);
            });
        caches.keys().then(function(cacheNames) {
            cacheNames.forEach(function(cacheName) {
                console.log(cacheName)
                caches.delete(cacheName);
                // location.reload()
            });
        });
    }

    /*
  let deferredPrompt;

  window.addEventListener('beforeinstallprompt', (e) => {
      deferredPrompt = e;
  });
  const installApp = document.getElementById('installApp');

  installApp.addEventListener('click', async () => {
      if (deferredPrompt !== null) {
          deferredPrompt.prompt();
          const { outcome } = await deferredPrompt.userChoice;
          if (outcome === 'accepted') {
              deferredPrompt = null;
          }
      }
  });
  */

}

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('app', require('./components/app').default);
Vue.component('header-component', require('./components/pages/uses/header').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
// import {myMixin} from "./myMixin";
//
// Vue.mixin(myMixin);
import router from "./router/route";

const app = new Vue({
    // mixins: [myMixin],
    el: '#app',
    router
});

