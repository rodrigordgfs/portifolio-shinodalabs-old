<template>
  <div class="skill__item">
    <img :src="image" :alt="title" />
    <p>{{ title }}</p>
  </div>
</template>

<script>
export default {
  name: "SkillItem",

  props: {
    image: {
      type: String,
      required: true,
    },
    title: {
      type: String,
      required: true,
    },
  },
};
</script>

<style lang="scss">
$white: #ffffff;
$black: #000000;
$gray: #808080;
$red: #c82d35;
$montserrat: "Montserrat", sans-serif;

.skill__item {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  box-shadow: 0px 0px 7px 1px rgba(0, 0, 0, 0.4);
  margin: 10px 10px;
  img {
    width: 60px;
    height: 60px;
    padding-top: 10px;
  }
  p {
    font-family: $montserrat;
    padding: 10px 0;
  }
}
</style>
