<template>
  <section id="skills">
    <h1 class="title">Habilidades</h1>
    <split-carousel
      :display-amount="8"
      timing-function="cubic-bezier(0.06, 0.29, 0.19, 1.4)"
    >
      <split-carousel-item v-for="item in SkillItems" :key="item.title">
        <skill-item :alt="item.title" :image="item.image" />
      </split-carousel-item>
    </split-carousel>
  </section>
</template>

<script>
import { SplitCarousel, SplitCarouselItem } from "vue-split-carousel";
import SkillItem from "./SkillItem.vue";

export default {
  name: "Skills",

  components: {
    SplitCarousel,
    SplitCarouselItem,
    SkillItem,
  },

  data() {
    return {
      SkillItems: [
        {
          alt: "HTML 5",
          image:
            "https://raw.githubusercontent.com/devicons/devicon/c5378d6c2510ffa0b3e4475af95618a8048d6cf1/icons/html5/html5-original.svg",
        },
        {
          alt: "CSS 3",
          image:
            "https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original.svg",
        },
        {
          alt: "SASS / SCSS",
          image:
            "https://camo.githubusercontent.com/26901b819fb10ef4e2c652aa40e24775247664d84a7597bebb66898a24dddedd/68747470733a2f2f63646e2e6a7364656c6976722e6e65742f67682f64657669636f6e732f64657669636f6e2f69636f6e732f736173732f736173732d6f726967696e616c2e737667",
        },
        {
          alt: "Javascript",
          image:
            "https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg",
        },
        {
          alt: "NodeJS",
          image:
            "https://raw.githubusercontent.com/devicons/devicon/c5378d6c2510ffa0b3e4475af95618a8048d6cf1/icons/nodejs/nodejs-original.svg",
        },
        {
          alt: "GitHub",
          image:
            "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg",
        },
        {
          alt: "Git",
          image:
            "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg",
        },
        {
          alt: "Sequelize",
          image:
            "https://raw.githubusercontent.com/devicons/devicon/master/icons/sequelize/sequelize-original.svg",
        },
        {
          alt: "NPM",
          image:
            "https://raw.githubusercontent.com/devicons/devicon/master/icons/npm/npm-original-wordmark.svg",
        },
        {
          alt: "Express",
          image:
            "https://raw.githubusercontent.com/devicons/devicon/master/icons/express/express-original.svg",
        },
        {
          alt: "MySQL",
          image:
            "https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original.svg",
        },
        {
          alt: "Angular",
          image:
            "https://camo.githubusercontent.com/4f9985e75ef6d08199712ad2b1f822e5534fe876c52b010026c04a1714fa3d59/68747470733a2f2f63646e2e6a7364656c6976722e6e65742f67682f64657669636f6e732f64657669636f6e2f69636f6e732f616e67756c61726a732f616e67756c61726a732d6f726967696e616c2e737667",
        },
        {
          alt: "Bitbucket",
          image:
            "https://camo.githubusercontent.com/4bf839c39c7867c0208f2df1af6025910012516dec40deaea960d1e4d60a0dec/68747470733a2f2f63646e2e6a7364656c6976722e6e65742f67682f64657669636f6e732f64657669636f6e2f69636f6e732f6269746275636b65742f6269746275636b65742d6f726967696e616c2e737667",
        },
        {
          alt: "Python",
          image:
            "https://camo.githubusercontent.com/dd8b0601cdfefe534a6a26f4c29c7f8a5fcfc315002655f519c73121f7bad8bc/68747470733a2f2f63646e2e6a7364656c6976722e6e65742f67682f64657669636f6e732f64657669636f6e2f69636f6e732f707974686f6e2f707974686f6e2d6f726967696e616c2e737667",
        },
        {
          alt: "Figma",
          image:
            "https://camo.githubusercontent.com/cdd289ae72f33665800bc6a63936d5afa0454214d520945780894151112a055f/68747470733a2f2f63646e2e6a7364656c6976722e6e65742f67682f64657669636f6e732f64657669636f6e2f69636f6e732f6669676d612f6669676d612d6f726967696e616c2e737667",
        },
        {
          alt: "AdobeXD",
          image:
            "https://camo.githubusercontent.com/25aa8aa364be926b7e35b3270b2af0ff47b1964bfe6802cfdf01396e305135f7/68747470733a2f2f63646e2e6a7364656c6976722e6e65742f67682f64657669636f6e732f64657669636f6e2f69636f6e732f78642f78642d706c61696e2e737667",
        },
        {
          alt: "Visual Studio Code",
          image:
            "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg",
        },
      ],
    };
  },
};
</script>

<style lang="scss">
$black: #000000;
$red: #c82d35;
$montserrat: "Montserrat", sans-serif;

.title {
  font-size: 48px;
  font-weight: 700;
  color: $black;
  text-transform: uppercase;
  text-align: center;
  font-family: $montserrat;
  margin-bottom: 20px;
  &::after {
    content: "";
    display: block;
    width: 200px;
    height: 4px;
    background-color: $red;
    margin: 0 auto;
  }
}

#skills {
  width: 80vw;
  margin: 0 auto;
  padding-bottom: 20px;
}
.skill-carousel {
  padding: 20px 0;
}
</style>
