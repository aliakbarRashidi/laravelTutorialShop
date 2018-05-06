import Vue from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';

require('./bootstrap');

window.Vue = Vue;

Vue.component('example-component', ExampleComponent);

const app = new Vue({
    el: '#app'
});
