<template>
  <div id="app">
    <!-- <maintenance /> -->
    <home />
  </div>
</template>

<script>
import Home from "./views/Home/Home";
// import Maintenance from "./views/Maintenance/Maintenance";

export default {
  name: "App",

  components: {
    Home,
    // Maintenance,
  },
};
</script>

<style lang="scss">
#back-effect {
  position: fixed;
  inset: 0;
  width: 100%;
  height: 100vh;
  z-index: 1;
}
</style>
