
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
// import Vue from 'vue';
import Buefy from 'buefy';
Vue.use(Buefy);


// Vue.component('example-component', require('./components/ExampleComponent.vue'));

var app = new Vue({
  el: '#app',
  data:{
    message: 'Hello World',
    auto_password: true,
    permissionType:'basic',
    resource: '',
    crudSelected:['create','read','update','delete'],
  },
  

});