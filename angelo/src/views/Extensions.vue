<template>
  <div class="main-container">
    <h1>Extensions</h1>
    <p>
      Angelo Brazilian Hair offers hair extensions of top quality in different
      shapes, each having its own style, personality and character. Make the
      choice that is best for you. And in the unlikely event that you don't find
      what you are looking for in our offer below, just drop us a line.
    </p>
    <ExtensionsCardVue
      v-for="extensionCard in extensionCards"
      :title="extensionCard.title"
      :paragraph="extensionCard.paragraph"
      :sideImg="extensionCard.sideImg"
      :bottomImg="extensionCard.bottomImg"
    ></ExtensionsCardVue>
  </div>
</template>
<script>
import ExtensionsCardVue from "../components/ExtensionsCard.vue";
export default {
  components: {
    ExtensionsCardVue,
  },
  data() {
    return {
      extensionCards: [
        {
          title: ["Hand-woven extensions"],
          paragraph: [
            "Hand-woven extensions are bands made from individual hairs tied together by hand. This way, the wefts are fine and thin, so the hair is placed closer to the scalp. The hand-woven wefts are 50 cm in width. They can be used several times. They are available in various colours or up to three different colour combinations.",
          ],
          sideImg: "5D3-28576-=-handgeweven.png",
          bottomImg: "5D3-28585-=-handgeweven.png",
        },
        {
          title: ["Machine-woven extensions"],
          paragraph: [
            "The machine-woven extension is a band of machine-tied hairs. The hairs are double sewn. This technique provides a very solid weft with very little hair loss and it can be made in a variety of lengths and colours. Machine-woven extensions are only destined for export and wholesale.",
          ],
          sideImg: "5D3-28560-=-machinegeweven.png",
          bottomImg: "5D3-28575-=-machinegeweven.png",
        },
        {
          title: ["Loose hair"],
          paragraph: [
            "Loose hair extensions allow your hairdresser or stylist to do anything... Colour, shape, length, anything. This is the ideal way to unleash your own creativity and to have your hairdo perfectly fit your taste! Anything goes... If you can dream it, you can do it!",
          ],
          sideImg: "5D3-28545-=-los-haar.png",
          bottomImg: "Los-haar2.png",
        },
        {
          title: ["Glue-tip extensions"],
          paragraph: [
            "The glue-tip hair extensions are placed with micro-rings, without heating. A small quantity of your own hair is pulled through the ring together with the glue-tip before the micro-ring is squeezed with the micro-pliers. The glue-tip extensions are available in various colours.",
          ],
          sideImg: "5D3-28543-=-glue-tips.png",
          bottomImg: "Glue-tips2deto.jpg",
        },
      ],
    };
  },
};
</script>
