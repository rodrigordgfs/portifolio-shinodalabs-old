<template>
  <a id="back-to-top" @click="backToTop()" v-if="showButton">
    <span class="material-icons"> arrow_upward </span>
  </a>
</template>

<script>
export default {
  name: "BackToTop",

  data() {
    return {
      showButton: false,
    };
  },

  mounted() {
    window.addEventListener("scroll", this.onScroll);
  },

  beforeDestroy() {
    window.removeEventListener("scroll", this.onScroll);
  },

  methods: {
    onScroll() {
      this.windowTop = window.top.scrollY;
      this.showButton = this.windowTop > 600;
    },

    backToTop() {
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    },
  },
};
</script>

<style lang="scss">
#back-to-top {
  $white: #ffffff;
  $black: #1f1f1f;
  $red: #c82d35;
  cursor: pointer;
  position: fixed;
  bottom: 0.625rem;
  right: 0.625rem;
  padding: 1rem 1.2rem;
  background-color: $black;
  color: $white;
  border-radius: 0.625rem;
  transition: 0.5s cubic-bezier(0.06, 0.29, 0.19, 1.4);
  text-decoration: none;
  z-index: 99;
  -webkit-tap-highlight-color: transparent;
  &:hover {
    background-color: $red;
    transform: scale(105%);
  }
}
</style>
