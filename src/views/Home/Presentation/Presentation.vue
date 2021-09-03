<template>
  <section id="presentation">
    <h2 class="presentation__name">Olá, eu sou o Rodrigo "Shinoda" 👋</h2>
    <h1 class="presentation__text">
      Desenvolvimento de<br />sites responsivos e<br />experiência de usuários
    </h1>
    <p class="presentation__description">
      Desenvolvedor Front-End e estudante do curso de Análise e Desenvolvimento
      de Sistemas. Sou apaixonado pelo desenvolvimento Web e UI/UX.
    </p>
    <a
      class="presentation__action"
      href="https://www.linkedin.com/in/rodrigo-viegas-rodrigues-83315164/"
      target="__blank"
      >Conecte-se comigo</a
    >
  </section>
</template>

<script>
import ScrollReveal from "scrollreveal";

export default {
  name: "Presentation",

  mounted() {
    this.scrollReveal();
  },

  methods: {
    scrollReveal() {
      const sr = ScrollReveal({
        origin: "top",
        distance: "50px",
        duration: 2000,
        reset: true,
      });
      sr.reveal(".presentation__name", { delay: 200 });
      sr.reveal(".presentation__text", { delay: 250 });
      sr.reveal(".presentation__description", { delay: 300 });
      sr.reveal(".presentation__action", { delay: 350 });
    },
  },
};
</script>

<style lang="scss">
$white: #ffffff;
$black: #111111;
$gray: #cccccc;
$red: #c82d35;
$montserrat: "Montserrat", sans-serif;

#presentation {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  flex-wrap: nowrap;
  font-family: $montserrat;
  height: calc(100vh - 40px);
  margin-top: -1px;
  h2 {
    color: $white;
    font-size: 1.125rem;
    font-weight: 700;
    margin-top: -60px;
  }
  h1 {
    color: $white;
    font-size: 4rem;
    font-weight: 700;
    text-align: center;
    margin-top: 30px;
  }
  p {
    color: $gray;
    margin-top: 20px;
    text-align: center;
    max-width: 600px;
  }
  a {
    background-color: $white;
    color: $black;
    text-transform: uppercase;
    padding: 15px 20px;
    margin-top: 40px;
    transition: 0.5s cubic-bezier(0.06, 0.29, 0.19, 1.4);
    &:hover {
      background-color: $red;
      color: $white;
    }
  }
}

/* Tablets */
@media only screen and (min-width: 788px) and (max-width: 979px) {
}

/* Smartphone */
@media only screen and (max-width: 787px) {
  #presentation {
    h1 {
      font-size: 2rem;
    }
  }
}
</style>
