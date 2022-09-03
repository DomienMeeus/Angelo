<template>
  <div class="container">
    <img src="../assets/_images/5D3-28501-=-kleurenring.png" alt="" />
    <h1>{{ pageTitle[0] }}</h1>
    <p>{{ paragraph1[0] }}</p>
    <p>{{ paragraph2[0] }}</p>
    <div class="colour-container">
      <ColourCard
        v-for="colourCard in colourCards"
        :image="colourCard.image"
        :caption="colourCard.caption"
      />
    </div>
  </div>
</template>
<script>
import ColourCard from "../components/ColourCard.vue";
export default {
  data() {
    return {
      pageTitle: ["CHOOSE YOUR COLOUR"],
      paragraph1: [
        "Once you found the extension type and hair structure of your desire, you can choose the colour. Most available colours are illustrated below. We do have most of them in stock, but we cannot guarantee to have the complete colour range on the shelf. You can always ask for the right colour on our contact page before you come to our store.",
      ],
      paragraph2: [
        "Also, please bear in mind that the colours below are only proximate, and they may look slightly different on your computer's monitor. Therefore, ordering without coming to our store is only wise if you really know perfectly well what is your desired colour and if you are 100% sure of your choice.",
      ],
      colourCards: [
        {
          image: "5D3-28442-=-N.png",
          caption: ["Colour code: 0N"],
        },
        {
          image: "5D3-28411-=-1.png",
          caption: ["Colour code: 01"],
        },
        {
          image: "5D3-28490-=-2.png",
          caption: ["Colour code: 02"],
        },
        {
          image: "5D3-28387-=-5.png",
          caption: ["Colour code: 05"],
        },
        {
          image: "5D3-28454-=-7.png",
          caption: ["Colour code: 07"],
        },
        {
          image: "5D3-28406-=-23.png",
          caption: ["Colour code: 23"],
        },
        {
          image: "5D3-28413-=-617.png",
          caption: ["Colour code: 617"],
        },
        {
          image: "5D3-28426-=-4.png",
          caption: ["Colour code: 04"],
        },
        {
          image: "5D3-28471-=-10.png",
          caption: ["Colour code: 10"],
        },
        {
          image: "5D3-28479-=-17A.png",
          caption: ["Colour code: 17A"],
        },
        {
          image: "5D3-28404-=-12.png",
          caption: ["Colour code: 12"],
        },
        {
          image: "5D3-28458-=-138.png",
          caption: ["Colour code: 138"],
        },
        {
          image: "5D3-28466-=-33R.png",
          caption: ["Colour code: 33R"],
        },
        {
          image: "5D3-28429-=-F12.png",
          caption: ["Colour code: F12"],
        },
        {
          image: "5D3-28432-=-N+1.png",
          caption: ["Colour code: N+1"],
        },
        {
          image: "5D3-28483-=-1+2.png",
          caption: ["Colour code: 1+2"],
        },

        {
          image: "5D3-28486-=-2+5.png",
          caption: ["Colour code: 2+5"],
        },
        {
          image: "5D3-28463-=-1+5.png",
          caption: ["Colour code: 1+5"],
        },
        {
          image: "5D3-28438-=-14+24.png",
          caption: ["Colour code: 14+24"],
        },
        {
          image: "5D3-28443-=-18+22.png",
          caption: ["Colour code: 18+22"],
        },
        {
          image: "5D3-28421-=-138+1B.png",
          caption: ["Colour code: 138+1B"],
        },
        {
          image: "5D3-28449-=-N+1+2.png",
          caption: ["Colour code: N+1+2"],
        },
        {
          image: "5D3-28477-=-1+2+5.png",
          caption: ["Colour code: 1+2+5"],
        },
        {
          image: "5D3-28425-=-14+12+24.png",
          caption: ["Colour code: 14+12+24"],
        },
      ],
    };
  },
  components: { ColourCard },
};
</script>
