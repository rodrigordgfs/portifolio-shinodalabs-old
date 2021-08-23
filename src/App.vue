<template>
  <div id="app">
    <home />
    <!-- <background-effects id="back-effect" /> -->
  </div>
</template>

<script>
// import BackgroundEffects from "@/components/BackgroundEffects.vue";
import Home from "./views/Home.vue"
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
  top: 0;
  left: 0;
}
</style>
