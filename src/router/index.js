import Vue from "vue";
import VueRouter from "vue-router";

import Home from "../views/Home/Home";
import Maintenance from "../views/Maintenance/Maintenance";

Vue.use(VueRouter);

const routes = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },
  {
    path: "/maintenance",
    name: "Em Manutenção",
    component: Maintenance,
  },
];

const Router = new VueRouter({
  routes,
  mode: "history",
  saveScrollPosition: true,
});

// Router.beforeEach((to, from, next) => {
//   const isMaintenance = () => process.env.VUE_APP_MAINTENANCE === "true";
//   if (isMaintenance()) {
//     next({ path: "/maintenance" });
//   } else {
//     next();
//   }
// });

export default Router;
