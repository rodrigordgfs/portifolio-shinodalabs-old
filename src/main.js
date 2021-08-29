import "./registerServiceWorker";
import "./registerServiceWorker";

import Vue from "vue";
import EasySlider from "vue-easy-slider";

import App from "./App.vue";
import router from "./router";

Vue.use(EasySlider);

Vue.config.productionTip = false;

new Vue({
  router,
  render: (h) => h(App),
}).$mount("#app");
