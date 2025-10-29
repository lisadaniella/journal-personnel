import './bootstrap';
import { createApp } from 'vue';
import App from './App.vue';
import router from './router'; // ton index.js

createApp(App).use(router).mount('#app');
