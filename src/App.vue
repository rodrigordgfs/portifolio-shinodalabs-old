<template>
  <div id="app">
    <!-- <background-effects id="back-effect" /> -->
    <home />
  </div>
</template>

<script>
// import BackgroundEffects from "@/components/BackgroundEffects.vue";
import Home from "./views/Home.vue";
export default {
  name: "App",
  components: {
    // BackgroundEffects,
    Home,
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
