<template>
  <div id="app">
    <img alt="Vue logo" src="./assets/logo.png" />
    <background-effects></background-effects>
  </div>
</template>

<script>
import BackgroundEffects from "@/components/BackgroundEffects.vue";

export default {
  name: "App",
  components: {
    BackgroundEffects,
  },
};
</script>

<style lang="scss">
background-effects {
  position: absolute;
}
</style>
