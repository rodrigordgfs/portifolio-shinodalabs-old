<template>
  <div id="wrapper">
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
$white: #ffffff;
$black: #111111;
$gray: #808080;
$red: #c82d35;
$montserrat: "Montserrat", sans-serif;
#wrapper {
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
      transition: 0.5s cubic-bezier(0.06, 0.29, 0.19, 1.4);
      &:hover {
        color: $red;
      }
    }
  }
}
</style>
