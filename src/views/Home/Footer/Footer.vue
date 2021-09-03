<template>
  <footer id="footer">
    <div id="social-networks">
      <social-network
        v-for="item in socialNetworks"
        :key="item.name"
        :name="item.name"
        :link="item.link"
        :icon="item.icon"
      />
    </div>
    <div id="copiryght">
      <p id="copiryght__text">
        {{ currentYear }} &copy; ShinodaLabs - Desenvolvedor Front-end
      </p>
      <p id="copiryght__made">Feito com ❤ por Rodrigo Shinoda</p>
    </div>
  </footer>
</template>

<script>
import SocialNetwork from "@/components/SocialNetwork";
import ScrollReveal from "scrollreveal";

export default {
  name: "Footer",

  components: {
    SocialNetwork,
  },

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

  mounted() {
    this.scrollReveal();
  },

  computed: {
    currentYear() {
      return new Date().getFullYear();
    },
  },

  methods: {
    scrollReveal() {
      const sr = ScrollReveal({
        origin: "bottom",
        distance: "50px",
        duration: 2000,
        reset: true,
      });
      sr.reveal("#social-networks", { delay: 200 });
      sr.reveal("#copiryght__text", { delay: 250 });
      sr.reveal("#copiryght__made", { delay: 300 });
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
    margin-bottom: 50px;
  }
  #copiryght {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: $red;
    width: 100%;
    p {
      font-family: $montserrat;
      color: $white;
      text-align: center;
      &:first-child {
        padding: 15px 0 5px 0;
      }
      &:nth-child(2) {
        padding-bottom: 15px;
      }
    }
  }
}
</style>
