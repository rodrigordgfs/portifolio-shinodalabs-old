<template>
  <div class="skill__item">
    <img :src="image" :alt="alt" :title="alt" />
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
    alt: {
      type: String,
      required: true,
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

.skill__item {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  /* margin: 10px 10px; */
  img {
    width: 60px;
    height: 60px;
    padding-top: 10px;
  }
}
</style>
