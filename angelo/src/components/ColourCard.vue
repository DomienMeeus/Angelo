<template>
  <figure>
    <img :src="`src/assets/_images/${this.image}`" alt="" />
    <figcaption>{{ caption[0] }}</figcaption>
  </figure>
</template>
<script>
export default {
  props: {
    image: String,
    caption: Array,
  },
};
</script>
