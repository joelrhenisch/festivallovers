
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./jquery.fancybox.min');
require('./js');



window.Vue = require('vue');

window.Event = new Vue();

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('ticket-container', require('./components/TicketContainer.vue'));
Vue.component('ticket-button', require('./components/TicketButton.vue'));


const app = new Vue({
    el: '#app'
});
