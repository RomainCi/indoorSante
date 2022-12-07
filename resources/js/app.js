import './bootstrap';
import {createApp} from "vue";
import App from './App.vue';
import router from "./router/index.js";
// import VueScrollTo from 'vue-scrollto'


createApp(App)
    .use(router)
    .mount('#app')
