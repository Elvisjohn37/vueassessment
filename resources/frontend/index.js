import "../js/bootstrap";
import { createApp } from "vue";
import { createPinia } from "pinia";
import MainLayout from "./components/MainLayout.vue";
import router from "./router";

const app = createApp(MainLayout);

app.use(router);

app.mount("#app");
