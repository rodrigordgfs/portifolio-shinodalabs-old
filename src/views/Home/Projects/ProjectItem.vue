<template>
  <div class="project__item">
    <div
      class="project__item_image"
      :style="{
        backgroundImage: 'url(' + image + ')',
        backgroundSize: 'cover',
        backgroundPosition: 'center',
        width: '100%',
        height: '100%',
        display: 'block',
        transition: 'transition: 0.5s cubic-bezier(0.06, 0.29, 0.19, 1.4)',
      }"
    ></div>
    <div class="project__item_overlay">
      <div class="project__item_overlay_content">
        <h2>{{ title }}</h2>
        <p>{{ description }}</p>
        <a :href="link" target="__blank" title="Acessar este projeto"
          >Acessar</a
        >
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
$black: #111111;
$gray: #808080;
$red: #c82d35;
$montserrat: "Montserrat", sans-serif;

.project__item {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: 0px 0px 7px 1px rgba(0, 0, 0, 0.4);
  overflow: hidden;
  width: 100%;
  height: 100%;
  &:hover > img {
    transform: scale(1.3);
  }
  .project__item_overlay {
    position: absolute;
    inset: 0;
    height: 100%;
    width: 100%;
    opacity: 0;
    transition: 0.5s cubic-bezier(0.06, 0.29, 0.19, 1.4);
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
        margin: 10px 50px;
      }
      a {
        color: $white;
        background-color: $black;
        text-transform: uppercase;
        padding: 10px 50px;
        transition: 0.5s cubic-bezier(0.06, 0.29, 0.19, 1.4);
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

/* Tablets */
@media only screen and (min-width: 788px) and (max-width: 979px) {
  .project__item {
    flex: 1 1 49%;
  }
}

/* Smartphone */
@media only screen and (max-width: 787px) {
  .project__item {
    flex: 1 1 100%;
    .project__item_overlay {
      .project__item_overlay_content {
        h2 {
          font-size: 14px;
        }
        p {
          font-size: 12px;
          padding: 5px 0;
        }
        a {
          padding: 10px 30px;
        }
      }
    }
  }
}
</style>
