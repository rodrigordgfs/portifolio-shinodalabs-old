<template>
  <a :href="link" target="__blank" :title="name" class="icon">
    <img :src="icon" :alt="name" class="icon-image" />
  </a>
</template>

<script>
export default {
  name: "SocialNetworkItem",

  props: {
    name: {
      type: String,
      required: true,
    },
    link: {
      type: String,
      required: true,
    },
    icon: {
      type: String,
      required: true,
    },
  },
};
</script>

<style lang="scss">
$white: #ffffff;
$red: #c82d35;

.icon {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  border: 1px solid $white;
  border-radius: 50%;
  transition: 0.5s cubic-bezier(0.06, 0.29, 0.19, 1.4);
  .icon-image {
    width: 30px;
    height: 30px;
  }
  &:hover {
    border: 1px solid $red;
  }
}
</style>
