import Vue from 'vue';
import store from './components/store'
import router from "./router";
import Index from "./components/Index";


require('./bootstrap');

const app = new Vue({
    el: '#app',

    components: {
        Index
    },

    router,
    store
})
