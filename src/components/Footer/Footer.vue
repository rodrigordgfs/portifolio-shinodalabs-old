<template>
  <footer id="footer">
    <p>ShinodaLabs | Front-end Developer</p>
  </footer>
</template>

<script>
export default {
  name: "Footer",
};
</script>

<style lang="scss">
$white: #ffffff;
$black: #000000;
$gray: #808080;
$red: #c82d35;
$montserrat: "Montserrat", sans-serif;

#footer {
    background-color: $red;
    color: $white;
    font-family: $montserrat;
    padding: 10px 0;
    text-align: center;
    margin-top: 10px;
}    
</style>
