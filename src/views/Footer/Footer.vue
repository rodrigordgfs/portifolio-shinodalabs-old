<template>
  <footer id="footer">
    <div id="social-networks">
      <a
        v-for="item in socialNetworks"
        :key="item.name"
        :href="item.link"
        target="__blank"
        :title="item.name"
        class="icon"
      >
        <img :src="item.icon" :alt="item.name" class="icon-image" />
      </a>
    </div>
    <div id="copiryght">
      <p>{{ currentYear }} &copy; ShinodaLabs - Desenvolvedor Front-end</p>
    </div>
  </footer>
</template>

<script>
export default {
  name: "Footer",

  data() {
    return {
      socialNetworks: [
        {
          name: "Linkedin",
          icon: "../../assets/icons/linkedin.svg",
          link: "https://www.linkedin.com/in/rodrigo-viegas-rodrigues-83315164/",
        },
        {
          name: "Github",
          icon: "../../assets/icons/github.svg",
          link: "https://github.com/rodrigordgfs",
        },
        {
          name: "Instagram",
          icon: "../../assets/icons/instagram.svg",
          link: "https://www.instagram.com/mr_shinodaa/",
        },
        {
          name: "Facebook",
          icon: "../../assets/icons/facebook.svg",
          link: "https://www.facebook.com/MrShiinoda",
        },
      ],
    };
  },

  computed: {
    currentYear() {
      return new Date().getFullYear();
    },
  },
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
  margin-top: 20px;
  background-color: $black;
  #social-networks {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    gap: 20px;
    padding-top: 50px;
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
  #copiryght {
    p {
      font-family: $montserrat;
      color: $white;
      background-color: $red;
      padding: 15px 0;
      margin-top: 50px;
      text-align: center;
      width: 100vw;
    }
  }
}
</style>
