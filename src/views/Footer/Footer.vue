<template>
  <footer id="footer">
    <div id="social-networks">
      <div class="icon">
        <img
          src="../../assets/icons/linkedin.svg"
          alt="Linkedin"
          class="icon-image"
        />
      </div>
      <div class="icon">
        <img
          src="../../assets/icons/github.svg"
          alt="Github"
          class="icon-image"
        />
      </div>
      <div class="icon">
        <img
          src="../../assets/icons/instagram.svg"
          alt="Instagram"
          class="icon-image"
        />
      </div>
      <div class="icon">
        <img
          src="../../assets/icons/facebook.svg"
          alt="Facebook"
          class="icon-image"
        />
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: "Footer",
};
</script>

<style lang="scss">
$white: #ffffff;
$black: #111111;
$gray: #808080;
$red: #c82d35;
$montserrat: "Montserrat", sans-serif;

#footer {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 50px 10px;
  margin-top: 20px;
  background-color: $black;
  #social-networks {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    gap: 20px;
    .icon {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 10px;
      border: 1px solid $white;
      border-radius: 50%;
      transition: 0.2s cubic-bezier(0.06, 0.29, 0.19, 1.4);
      .icon-image {
        width: 30px;
        height: 30px;
      }
      &:hover {
        border: 1px solid $red;
      }
    }
  }
}
</style>
