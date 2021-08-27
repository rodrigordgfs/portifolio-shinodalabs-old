import "./registerServiceWorker";
import "@splidejs/splide/dist/css/themes/splide-default.min.css";

import VueSplide from "@splidejs/vue-splide";
import Vue from "vue";

import App from "./App.vue";

Vue.use(VueSplide);

Vue.config.productionTip = false;

new Vue({
  render : (h) => h(App),
}).$mount("#app");
