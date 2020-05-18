require('./bootstrap');

import Vue from 'vue';

import Vuetify from 'vuetify/lib';
import router from './router.js';
import App from './App.vue';
import '@mdi/font/css/materialdesignicons.css'
import Vuex from 'vuex';


Vue.use(Vuex);
Vue.use(Vuetify);

const store = new Vuex.Store({
    state: {
        list: null,
    },

})


const app = new Vue({
    el: '#app',
    vuetify: new Vuetify(),
    components: { App },
    router,
    store
});
