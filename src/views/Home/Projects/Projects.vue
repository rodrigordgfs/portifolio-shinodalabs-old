<template>
  <section id="projects">
    <h2 class="title_projects">Projetos</h2>
    <slider class="slider_projects" animation="fade" :stopOnHover="true">
      <slider-item v-for="project in projects" :key="project.title">
        <project-item
          :image="project.image"
          :title="project.title"
          :description="project.description"
          :link="project.link"
        />
      </slider-item>
    </slider>
  </section>
</template>

<script>
import ProjectItem from "./ProjectItem.vue";
import ScrollReveal from "scrollreveal";

export default {
  name: "Projects",

  components: {
    ProjectItem,
  },

  data() {
    return {
      projects: [
        {
          image: "https://i.imgur.com/QWtm2ie.png",
          title: "Luxury Hotels",
          description:
            "Site desenvolvido apartir de um layout encontrado no Figma. Este projeto foi desenvolvido com VueJS.",
          link: "https://projects.shinodalabs.com.br/luxury-hotels/",
        },
        {
          image: "https://i.imgur.com/GQ1a0xY.png",
          title: "Digital Architects",
          description:
            "Site desenvolvido apartir de um layout encontrado no Figma. Este projeto foi desenvolvido com VueJS.",
          link: "https://projects.shinodalabs.com.br/digital-architects/",
        },
        {
          image: "https://i.imgur.com/vUTopkP.png",
          title: "LoopStudios",
          description:
            "Esta é uma solução para o desafio de uma landing page do Loopstudios no Frontend Mentor.",
          link: "https://projects.shinodalabs.com.br/loopstudios/",
        },
        {
          image: "https://i.imgur.com/xMS1olt.png",
          title: "Tela de Login",
          description: "Desafio 4 do canal do Discord Codelândia.",
          link: "https://projects.shinodalabs.com.br/login/",
        },
        {
          image: "https://i.imgur.com/h5WU4Gf.png",
          title: "Jordan Shoes",
          description: "Desafio 2 do canal do Discord Codelândia.",
          link: "https://projects.shinodalabs.com.br/jordan-shoes/",
        },
        {
          image: "https://i.imgur.com/C4mwWNo.png",
          title: "Fiber",
          description:
            "Desafio de criação de Landing Page do site https://codewell.cc.",
          link: "https://projects.shinodalabs.com.br/fiber/",
        },
        {
          image: "https://i.imgur.com/Xn0i75i.png",
          title: "Codelândia",
          description: "Desafio 1 do canal do Discord Codelândia.",
          link: "https://projects.shinodalabs.com.br/codelandia/",
        },
        {
          image: "https://i.imgur.com/XC8v1DL.png",
          title: "Amplify",
          description:
            "Este site foi criado com HTML5, CSS3 e JS colocando em prática a experiência adquirida no curso completo de webdesign da Origamid.",
          link: "https://projects.shinodalabs.com.br/amplify/",
        },
        {
          image: "https://i.imgur.com/RcIyp3c.png",
          title: "The Rosa",
          description:
            "Este site foi criado com HTML5, CSS3 e JS colocando em prática a experiência adquirida no curso completo de webdesign da Origamid.",
          link: "https://projects.shinodalabs.com.br/rosa/",
        },
        {
          image: "https://i.imgur.com/6pokOqC.png",
          title: "Arez",
          description:
            "Este site foi criado com HTML5, CSS3 e JS colocando em prática a experiência adquirida no curso completo de webdesign da Origamid.",
          link: "https://projects.shinodalabs.com.br/arez/",
        },
      ],

      splideOptions: {
        type: "loop",
        rewind: true,
        padding: {
          right: "5rem",
          left: "5rem",
        },
      },
    };
  },

  mounted() {
    this.scrollReveal();
  },

  methods: {
    scrollReveal() {
      const sr = ScrollReveal({
        origin: "right",
        distance: "50px",
        duration: 2000,
        reset: true,
      });
      sr.reveal(".title_projects", { delay: 200 });
      sr.reveal(".slider_projects", { delay: 250 });
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

.title_projects {
  font-size: 48px;
  font-weight: 700;
  color: $black;
  text-transform: uppercase;
  text-align: center;
  font-family: $montserrat;
  margin-bottom: 25px;
  &::after {
    content: "";
    display: block;
    width: 200px;
    height: 4px;
    background-color: $red;
    margin: 0 auto;
  }
}

.slider-indicator-active {
  background: $red !important;
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
