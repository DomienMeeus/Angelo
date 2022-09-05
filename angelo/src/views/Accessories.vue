<template>
  <section>
    <h1>{{ title }}</h1>
    <p>{{ paragraph1 }}</p>
    <p>{{ paragraph2 }}</p>
    <AccessoriesCard
      v-for="accessoriesCard in accessoriesCards"
      :title="accessoriesCard.title[0]"
      :paragraph="accessoriesCard.paragraph[0]"
      :imgLeft="accessoriesCard.imgLeft"
      :imgRight="accessoriesCard.imgRight"
    />
  </section>
</template>
<script>
import AccessoriesCard from "../components/AccessoriesCard.vue";
export default {
  components: { AccessoriesCard },
  data() {
    return {
      pageContent: {
        title: ["ALL YOU NEED"],
        paragraph1: [
          "It speaks for itself that we also have the necessary accessories for you to get the most out of your extensions. Using the right quality products, you will also extend their life span. That is why you don't just go for the best hair extensions, but also for the best hair care products. Angelo Brazilian Hair has them in store for you.",
        ],
        paragraph2: [
          "Most of these hair care products are in stock, but the best you can do is informing about them before you come down to the store.",
        ],
      },
      accessoriesCards: [
        {
          title: ["Angelo SHAMPOO and CONDITIONER"],
          paragraph: [
            "With the Angelo Shampoo and Conditioner that have been specially developed for extensions with REAL hair, you can give your hair (and your extensions) that beautiful natural sheen and style. The style of your hair, it's your style. Now who's going to make a concession on your style? We offer you honest quality with a friendly price tag. Because your hair, oh you knew... yes, your hair is worth it!",
          ],
          imgLeft: "5D3-28623-=-shampoo.png",
          imgRight: "5D3-28622-=-conditioner.png",
        },
        {
          title: ["Angelo MICRO-RINGS"],
          paragraph: [
            "The Angelo Micro-rings are used to place the glue-tips very easily. You choose the micro-rings according to the colour of your hair extension. We have black, brown, and blonde micro-rings.",
          ],
          imgLeft: "5D3-28626-=-ringetjes-zwart.png",
          imgRight: "5D3-28630-=-ringetjes-bruin.png",
        },
        {
          title: ["MICRO-NEEDLE and -PLIERS"],
          paragraph: [
            "The micro-needle and -pliers are used to pull the hair through the micro-ring the easy way. Pull a small amount of your own hair through the micro-ring, together with the extension. The micro-ring is tightly closed with the micro-pliers for a solid fixation.",
          ],
          imgLeft: "5D3-28601-=-tools.png",
          imgRight: "Microtang.png",
        },
        {
          title: ["CLIPS"],
          paragraph: [
            "You can sew clips on the bands of hand-woven hair yourself. A band of 50 cm - the standard width of all hand-woven extensions - can be sewn less wide. Once the desired width has been obtained, the clips can be sewn onto them. This way, you obtain clip-extensions that you can attach to your own hair fast and easy. We offer black and brown coloured clips",
          ],
          imgLeft: "clipsZwartDeto.png",
          imgRight: "clipsBruinDeto.png",
        },
      ],
    };
  },
};
</script>
