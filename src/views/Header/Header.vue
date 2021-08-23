<template>
  <div id="background">
    <header id="header">
      <a href="#" id="header__brand">ShinodaLabs</a>
      <menu-app></menu-app>
    </header>
  </div>
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
$black: #111111;
$gray: #808080;
$red: #C82D35;
$montserrat: 'Montserrat', sans-serif;
#background {
  background-color: #111111;
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
      font-weight: 700;
      color: $white;
      letter-spacing: 1px;
      &:hover {
        color: $red;
      }
    }
  }
}
</style>
