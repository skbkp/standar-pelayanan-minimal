
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');
require('./laravel-method');

window.Vue = require('vue');

import VueSession from 'vue-session';
Vue.use(VueSession)
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

require('./komponent');

const app = new Vue({
    el: '#app',
});
