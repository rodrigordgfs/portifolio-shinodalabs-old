<template>
  <header id="header">
    <a href="#" id="header__brand">ShinodaLabs</a>
    <menu-app></menu-app>
  </header>
</template>

<script>
import MenuApp from "./Menu";

export default {
  name: "Header",
  components: {
    MenuApp,
  },
};
</script>

<style lang="scss">
$white: #FFFFFF;
$black: #000000;
$gray: #808080;
$red: #C82D35;
$montserrat: 'Montserrat', sans-serif;
#header {
  width: 80vw;
  margin: 0 auto;
  padding-top: 20px;
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  justify-content: space-between;
  align-items: center;
  box-sizing: border-box;
  #header__brand {
    font-family: $montserrat;
    font-size: 1.25rem;
    color: $black;
    letter-spacing: 1px;
    &:hover {
      color: $red;
    }
  }
}
</style>
