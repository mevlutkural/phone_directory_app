import { createApp } from "vue";
import App from "./App.vue";
import router from "./router/index.ts";
import "bootstrap/dist/css/bootstrap.min.css"
import "bootstrap";
import { createPinia } from "pinia";

const app = createApp(App);

const pinia = createPinia();

app.use(pinia);
app.use(router);

app.mount("#app");
