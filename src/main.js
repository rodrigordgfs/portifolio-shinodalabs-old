import Vue from "vue";
import App from "./App.vue";
import "./registerServiceWorker";
import router from "./router";
import EasySlider from "vue-easy-slider";
import "./registerServiceWorker";

Vue.use(EasySlider);

Vue.config.productionTip = false;

new Vue({
  router,
  render: (h) => h(App),
}).$mount("#app");
