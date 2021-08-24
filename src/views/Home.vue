<template>
  <div class="home">
    <header-menu />
    <presentation />
    <projects />
    <about />
    <skills />
    <footer-app />
    <back-to-top />
  </div>
</template>

<script>
import HeaderMenu from "./Header/Header";
import Presentation from "./Presentation/Presentation";
import Projects from "./Projects/Projects";
import About from "./About/About";
import Skills from "./Skills/Skills";
import FooterApp from "./Footer/Footer";
import BackToTop from "@/components/BackToTop";

export default {
  name: "home",

  components: {
    HeaderMenu,
    Presentation,
    Projects,
    About,
    Skills,
    FooterApp,
    BackToTop,
  },
};
</script>

<style lang="scss"></style>
