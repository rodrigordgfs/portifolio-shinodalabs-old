<template>
  <section id="presentation">
    <h2>Olá, eu sou o Rodrigo 👋</h2>
    <h1>
      Desenvolvimento de<br />sites responsivos e<br />experiência de usuários
    </h1>
    <p>
      Desenvolvedor Front-End e estudante do curso de Análise e Desenvolvimento
      de Sistemas. Sou apaixonado pelo desenvolvimento Web e UI/UX.
    </p>
    <button>Conecte-se comigo</button>
  </section>
</template>

<script>
export default {
  name: "Presentation",
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
  background-color: $black;
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
  button {
    background-color: $white;
    color: $black;
    border: none;
    text-transform: uppercase;
    padding: 15px 20px;
    margin-top: 40px;
    cursor: pointer;
    transition: 0.2s ease-in-out;
    &:hover {
      background-color: $red;
    }
  }
}
</style>
