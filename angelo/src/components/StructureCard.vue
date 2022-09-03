<template>
  <div class="structure-card">
    <img :src="`src/assets/_images/${image}`" alt="" />
    <h1>{{ title[0] }}</h1>
    <p>{{ paragraph[0] }}</p>
  </div>
</template>
<script>
export default {
  props: {
    title: Array,
    paragraph: Array,
    image: String,
  },
};
</script>
<style scoped>
p,
h1 {
  color: white;
}
</style>
