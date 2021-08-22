<template>
  <div class="home">
    <header-menu />
    <presentation />
    <projects />
    <about />
  </div>
</template>

<script>

import HeaderMenu from "@/components/Header/Header"
import Presentation from "@/components/Presentation/Presentation"
import Projects from "@/components/Projects/Projects"
import About from "@/components/About/About"

export default {
  name: "home",

  components: {
    HeaderMenu,
    Presentation,
    Projects,
    About,
  }
};
</script>

<style></style>
