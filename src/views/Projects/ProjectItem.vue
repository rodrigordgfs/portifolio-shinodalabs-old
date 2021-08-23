<template>
  <div class="project__item">
    <img :src="image" :alt="title" />
    <div class="project__item_overlay">
      <div class="project__item_overlay_content">
        <h2>{{ title }}</h2>
        <p>{{ description }}</p>
        <a :href="link" target="__blank">Acessar</a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ProjectItem",

  props: {
    image: {
      type: String,
      require: true,
    },
    title: {
      type: String,
      require: true,
    },
    description: {
      type: String,
      require: true,
    },
    link: {
      type: String,
      require: true,
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

.project__item {
  flex: 1 1 32%;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: 0px 0px 7px 1px rgba(0, 0, 0, 0.4);
  overflow: hidden;
  img {
    max-width: 100%;
    display: block;
    transition: 0.2s cubic-bezier(0.06, 0.29, 0.19, 1.4);
  }
  &:hover > img {
    transform: scale(1.3);
  }
  .project__item_overlay {
    position: absolute;
    inset: 0;
    height: 100%;
    width: 100%;
    opacity: 0;
    transition: 0.2s ease-in-out;
    background-color: rgba(200, 45, 23, 0.8);
    .project__item_overlay_content {
      position: absolute;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 0 10px;
      inset: 0;
      h2 {
        color: $white;
        text-transform: uppercase;
        font-weight: 700;
        font-size: 18px;
      }
      p {
        color: $white;
        text-align: center;
        padding: 10px 0;
      }
      a {
        color: $white;
        background-color: $black;
        text-transform: uppercase;
        padding: 10px 50px;
        transition: 0.4s ease-in-out;
        &:hover {
          color: $black;
          background-color: $white;
        }
      }
    }
    &:hover {
      opacity: 1;
    }
  }
}
</style>
