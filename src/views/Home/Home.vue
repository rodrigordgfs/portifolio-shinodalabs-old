<template>
  <div class="home">
    <div class="wrapper">
      <div class="bg-video">
        <video autoplay loop muted src="https://i.imgur.com/t8401Oe.mp4" />
      </div>
      <div class="content">
        <header-menu />
        <presentation />
      </div>
    </div>
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

<style lang="scss">
$black: #111111;

.wrapper {
  width: 100%;
  height: 100vh;
  position: relative;
}

.wrapper > .bg-video {
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  width: 100%;
  height: 100%;
  overflow: hidden;
  background-color: $black;
}
.wrapper > .bg-video > video {
  height: 100vh;
  width: 100vw;
  object-fit: cover;
  filter: opacity(0.3);
}
</style>
