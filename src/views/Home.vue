<template>
  <div class="home">
    <header-menu />
    <presentation />
  </div>
</template>

<script>

import HeaderMenu from "@/components/Header/Header"
import Presentation from "@/components/Presentation/Presentation"

export default {
  name: "home",

  components: {
    HeaderMenu,
    Presentation,
  }
};
</script>

<style></style>
