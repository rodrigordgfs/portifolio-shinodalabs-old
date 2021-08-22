<template>
  <div id="app">
    <!-- <background-effects></background-effects> -->
    <home></home>
  </div>
</template>

<script>
// import BackgroundEffects from "@/components/BackgroundEffects.vue";
import Home from "./views/Home.vue"
export default {
  name: "App",
  components: {
    // BackgroundEffects,
    Home
  },
};
</script>

<style lang="scss">
background-effects {
  position: absolute;
}
</style>
