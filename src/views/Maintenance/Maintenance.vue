<template>
  <div id="container-wrapper">
    <div id="container">
      <div id="content">
        <h1>Site em manutenção</h1>
        <h2>Voltamos em breve! Aceita um café? ☕</h2>
        <div id="social-networks">
          <social-network
            v-for="item in socialNetworks"
            :key="item.name"
            :name="item.name"
            :link="item.link"
            :icon="item.icon"
          />
        </div>
      </div>
      <div id="image">
        <img src="assets/images/maintenance.svg" alt="Manutenção" />
      </div>
    </div>
  </div>
</template>

<script>
import SocialNetwork from "@/components/SocialNetwork";

export default {
  name: "Maintenance",

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

  components: {
    SocialNetwork,
  },
};
</script>

<style lang="scss">
$white: #ffffff;
$black: #111111;
$gray: #808080;
$red: #c82d35;
$montserrat: "Montserrat", sans-serif;
#container-wrapper {
  width: 100vw;
  height: 100vh;
  background: linear-gradient(304deg, #000000, #242424, #111111);
  background-size: 600% 600%;
  -webkit-animation: AnimationGradient 28s ease infinite;
  -moz-animation: AnimationGradient 28s ease infinite;
  animation: AnimationGradient 28s ease infinite;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: $montserrat;
  #container {
    width: 80vw;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    #content {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      h1 {
        color: $white;
        text-transform: uppercase;
        font-size: 3rem;
        font-weight: 700;
        text-align: center;
        &::selection {
          background: $red;
        }
      }
      h2 {
        color: $gray;
        font-size: 1.5rem;
        text-align: center;
        padding: 10px 0 50px;
        &::selection {
          background: $red;
          color: $white;
        }
      }
      #social-networks {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        gap: 20px;
      }
    }
    #image {
      margin-top: 50px;
      img {
        width: 500px;
      }
    }
  }
}

@-webkit-keyframes AnimationGradient {
  0% {
    background-position: 0% 70%;
  }
  50% {
    background-position: 100% 31%;
  }
  100% {
    background-position: 0% 70%;
  }
}
@-moz-keyframes AnimationGradient {
  0% {
    background-position: 0% 70%;
  }
  50% {
    background-position: 100% 31%;
  }
  100% {
    background-position: 0% 70%;
  }
}
@keyframes AnimationGradient {
  0% {
    background-position: 0% 70%;
  }
  50% {
    background-position: 100% 31%;
  }
  100% {
    background-position: 0% 70%;
  }
}

@media only screen and (max-width: 768px) {
  #wrapper {
    #container {
      #content {
        h1 {
          font-size: 2rem;
        }
        h2 {
          font-size: 1rem;
        }
      }
      #image {
        img {
          width: 300px;
        }
      }
    }
  }
}
</style>
