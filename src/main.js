import Vue from "vue";
import App from "./App.vue";
import "./registerServiceWorker";
import VueSplide from "@splidejs/vue-splide";
import "@splidejs/splide/dist/css/themes/splide-default.min.css";
import router from "./router";

Vue.use(VueSplide);

Vue.config.productionTip = false;

new Vue({
  router,
  render: (h) => h(App),
}).$mount("#app");
