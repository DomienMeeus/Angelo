<template>
  <div class="container">
    <h1>{{ pageTitle[0] }}</h1>
    <p>{{ pageParagraph[0] }}</p>
    <StructureCard
      v-for="structureCard in structureCards"
      :title="structureCard.title"
      :paragraph="structureCard.paragraph"
      :image="structureCard.image"
    />
  </div>
</template>
<script>
import StructureCard from "../components/StructureCard.vue";
export default {
  components: { StructureCard },
  data() {
    return {
      pageTitle: ["EXTENSIONS"],
      pageParagraph: [
        "Angelo Brazilian Hair offers hair extensions of top quality in different shapes, each having its own style, personality and character. Make the choice that is best for you. And in the unlikely event that you don't find what you are looking for in our offer below, just drop us a line.",
      ],
      structureCards: [
        {
          title: ["Natural curls"],
          paragraph: [
            "Cheerful curls for a young and dynamic look. It also has this dash of naughtiness about it, but stylish it is.",
          ],
          image: "5D3-28528-=-natural-curls.png",
        },
        {
          title: ["Smooth waves"],
          paragraph: [
            "Charmingly wavy hair gives you a serene and very classy look. You are sure to look gorgeous everywhere, anytime!",
          ],
          image: "5D3-28521-=-wavy.png",
        },
        {
          title: ["Flowing straight"],
          paragraph: [
            "With long straight hair, you create a sensual, near mysterious personality underlining your femininity in a refined fashion. ",
          ],
          image: "5D3-28537-=-straight.png",
        },
      ],
    };
  },
};
</script>
