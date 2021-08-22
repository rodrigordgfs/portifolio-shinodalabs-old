<template>
  <div class="home">
    <header-menu />
    <presentation />
    <projects />
  </div>
</template>

<script>

import HeaderMenu from "@/components/Header/Header"
import Presentation from "@/components/Presentation/Presentation"
import Projects from "@/components/Projects/Projects"

export default {
  name: "home",

  components: {
    HeaderMenu,
    Presentation,
    Projects
  }
};
</script>

<style></style>
