import { createRouter, createWebHistory } from "vue-router";
import Login from "../pages/Login.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "login",
      component: Login,
    },
    {
      path: "/home",
      name: "home",
      component: () => import("../pages/Home.vue"),
    },
  ],
});

export default router;
