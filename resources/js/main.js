import './bootstrap';
import { createApp } from 'vue';
import App from './App.vue';
import router from './router/index.js'; //  on importe le router
import '../css/app.css'; // qui contient les directives Tailwind


const app = createApp(App);

app.use(router); // on active le router
app.mount('#app'); // on monte l'app Vue sur le div #app de Laravel
