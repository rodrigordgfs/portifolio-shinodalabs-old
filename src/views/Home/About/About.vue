<template>
  <div id="background">
    <section id="about">
      <div id="about__content">
        <h2>Sobre mim</h2>
        <p>
          Seja bem-vindo ao meu portfólio, com projetos desenvolvidos com HTML,
          CSS, SASS e JavaScript.
          <br /><br />
          Meu nome é Rodrigo, mais conhecido como "Shinoda" (sim é apelido e não
          sobrenome 😆), tenho {{ currentAge }} anos e sou nascido em Camaquã -
          Rio Grande do Sul.<br />Sou estudante de Analise e Desenvolvimento de
          Sistemas no IFSUL Camaquã. Atualmente trabalho na empresa Lojas
          Pompéia como Desenvolvedor Junior. <br /><br />
          Iniciei na empresa como Auxiliar de Suporte Técnico N1 e atualmente,
          como dito antes, trabalho como Desenvolvedor Junior atuando em
          aplicações VueJS.
        </p>
      </div>
      <div id="about__img">
        <img src="https://i.imgur.com/vhql9ym.png" alt="Rodrigo Shinoda" />
      </div>
    </section>
  </div>
</template>

<script>
import moment from "moment";

export default {
  name: "About",

  computed: {
    currentAge() {
      return moment().diff("1997-11-28", "years");
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

#background {
  background-color: $black;
  #about {
    width: 80vw;
    margin: 0px auto;
    padding: 110px 0;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: 10px;
    font-family: $montserrat;
    #about__content {
      flex: 1;
      h2 {
        font-size: 48px;
        font-weight: 700;
        text-transform: uppercase;
        color: $gray;
      }
      p {
        line-height: 20px;
        margin-top: 30px;
        color: $white;
      }
    }
    #about__img {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      img {
        box-shadow: 0px 0px 7px 1px rgba(0, 0, 0, 0.4);
      }
    }
  }
}

/* Tablets */
@media only screen and (min-width: 788px) and (max-width: 979px) {
}

/* Smartphone */
@media only screen and (max-width: 787px) {
  #background {
    #about {
      flex-direction: column;
      gap: 30px;
    }
  }
}
</style>
