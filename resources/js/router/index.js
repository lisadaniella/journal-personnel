import { createRouter, createWebHistory } from "vue-router";
import Login from "../views/Login.vue";

const routes = [
  {
    path: "/",
    redirect: "/login", // redirige automatiquement la racine
  },
  {
    path: "/login",
    name: "Login",
    component: Login,
  },
  {
  path: '/register',
  name: 'register',
  component: () => import('../views/Register.vue')
}

];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
