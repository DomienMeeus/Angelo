<template>
  <div>
    <h1>{{ title }}</h1>
    <p>{{ paragraph }}</p>
    <img :src="`src/assets/_images/${this.imgLeft}`" alt="" />
    <img :src="`src/assets/_images/${this.imgRight}`" alt="" />
  </div>
</template>

<script>
export default {
  props: {
    title: String,
    paragraph: String,
    imgLeft: String,
    imgRight: String,
  },
};
</script>
