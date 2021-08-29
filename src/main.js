import Vue from "vue";
import App from "./App.vue";
import "./registerServiceWorker";
import router from "./router";
import EasySlider from "vue-easy-slider";
import ScrollAnimation from "./directives/ScrollAnimation";

Vue.use(EasySlider);

Vue.directive("scrollanimation", ScrollAnimation);

Vue.config.productionTip = false;

new Vue({
  router,
  render: (h) => h(App),
}).$mount("#app");
