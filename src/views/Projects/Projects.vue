<template>
  <section id="projects">
    <h2 class="title">Projetos</h2>
    <div id="projects__grid">
      <project-item
        v-for="project in projects"
        :key="project.title"
        :image="project.image"
        :title="project.title"
        :description="project.description"
        :link="project.link"
      />
    </div>
  </section>
</template>

<script>
import ProjectItem from "./ProjectItem.vue";

export default {
  name: "Projects",

  components: {
    ProjectItem,
  },

  data() {
    return {
      projects: [
        {
          image: "https://i.imgur.com/vUTopkP.png",
          title: "LoopStudios",
          description:
            "Esta é uma solução para o desafio de uma landing page do Loopstudios no Frontend Mentor.",
          link: "http://projects.shinodalabs.com.br/loopstudios/",
        },
        {
          image: "https://i.imgur.com/xMS1olt.png",
          title: "Tela de Login",
          description: "Desafio 4 do canal do Discord Codelândia.",
          link: "http://projects.shinodalabs.com.br/login/",
        },
        {
          image: "https://i.imgur.com/h5WU4Gf.png",
          title: "Jordan Shoes",
          description: "Desafio 2 do canal do Discord Codelândia.",
          link: "http://projects.shinodalabs.com.br/jordan-shoes/",
        },
        {
          image: "https://i.imgur.com/C4mwWNo.png",
          title: "Fiber",
          description:
            "Desafio de criação de Landing Page do site https://codewell.cc.",
          link: "http://projects.shinodalabs.com.br/fiber/",
        },
        {
          image: "https://i.imgur.com/Xn0i75i.png",
          title: "Codelândia",
          description: "Desafio 1 do canal do Discord Codelândia.",
          link: "http://projects.shinodalabs.com.br/codelandia/",
        },
        {
          image: "https://i.imgur.com/XC8v1DL.png",
          title: "Amplify",
          description:
            "Este site foi criado com HTML5, CSS3 e JS colocando em prática a experiência adquirida no curso completo de webdesign da Origamid.",
          link: "http://projects.shinodalabs.com.br/amplify/",
        },
        {
          image: "https://i.imgur.com/RcIyp3c.png",
          title: "The Rosa",
          description:
            "Este site foi criado com HTML5, CSS3 e JS colocando em prática a experiência adquirida no curso completo de webdesign da Origamid.",
          link: "http://projects.shinodalabs.com.br/rosa/",
        },
        {
          image: "https://i.imgur.com/6pokOqC.png",
          title: "Arez",
          description:
            "Este site foi criado com HTML5, CSS3 e JS colocando em prática a experiência adquirida no curso completo de webdesign da Origamid.",
          link: "http://projects.shinodalabs.com.br/arez/",
        },
        {
          image: "https://i.imgur.com/f5xHoaT.png",
          title: "One Page",
          description: "Desafio 3 do canal do Discord Codelândia.",
          link: "http://projects.shinodalabs.com.br/one-page/",
        },
      ],
    };
  },
};
</script>

<style lang="scss">
$white: #ffffff;
$black: #111111;
$gray: #808080;
$red: #c82d35;
$montserrat: "Montserrat", sans-serif;

.title {
  font-size: 48px;
  font-weight: 700;
  color: $black;
  text-transform: uppercase;
  text-align: center;
  font-family: $montserrat;
  &::after {
    content: "";
    display: block;
    width: 200px;
    height: 4px;
    background-color: $red;
    margin: 0 auto;
  }
}

#projects {
  width: 80vw;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  font-family: $montserrat;
  margin-top: 100px;
  padding-bottom: 110px;
  #projects__grid {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 10px;
    margin-top: 30px;
  }
}

/* Tablets */
@media only screen and (min-width: 788px) and (max-width: 979px) {
}

/* Smartphone */
@media only screen and (max-width: 787px) {
  #projects {
    #projects__grid {
      flex-direction: column;
      gap: 20px;
    }
  }
}
</style>
