
// Import IE polyfill for Vue
import "babel-polyfill";

// Require bootstrapped js
require('./bootstrap');

// Require Vue
window.Vue = require('vue');

Vue.component('hello-world', require('./components/HelloWorld.vue'));

const app = new Vue({
    el: '#app'
});
