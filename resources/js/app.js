
require('./bootstrap');

window.Vue = require('vue');


import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// Install BootstrapVue
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const app = new Vue({
    el: '#app',
    methods: {
    	logout() {
    		 document.getElementById('logout-form').submit();
    	}
    }
});
