<template>
  <div class="extensions-card">
    <h1>{{ title[0] }}</h1>
    <p>{{ paragraph[0] }}</p>
    <img class="img-left" :src="`src/assets/_images/${this.sideImg}`" alt="" />
    <img
      class="img-bottom"
      :src="`src/assets/_images/${this.bottomImg}`"
      alt=""
    />
    <img src="../assets/_images/arrowDown.png" class="redirect-button" />
    <p class="button-text">{{ buttonText[0] }}</p>
  </div>
</template>
<script>
export default {
  props: {
    title: Array,
    paragraph: Array,
    sideImg: Object,
    bottomImg: String,
  },
  data() {
    return {
      buttonText: [
        "Choose your hair style and check out the available structures.",
      ],
    };
  },
};
</script>
