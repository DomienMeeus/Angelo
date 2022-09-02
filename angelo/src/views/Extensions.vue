<template>
    <div class="main-container">
        <h1>Extensions</h1>
        <p>Angelo Brazilian Hair offers hair extensions of top quality in different shapes, each having its own style, personality and character. Make the choice that is best for you. And in the unlikely event that you don't find what you are looking for in our offer below, just drop us a line.</p>
        <ExtensionsCardVue
            :title="['Hand-woven extensions']"
            :paragraph="['Hand-woven extensions are bands made from individual hairs tied together by hand. This way, the wefts are fine and thin, so the hair is placed closer to the scalp. The hand-woven wefts are 50 cm in width. They can be used several times. They are available in various colours or up to three different colour combinations.']"
            sideImg="5D3-28576-=-handgeweven.png"
            bottomImg="../assets/_images/5D3-28585-=-handgeweven.png"
            :buttonText="['Choose your hair style and check out the available structures.']"

          ></ExtensionsCardVue>
    </div>
</template>
<script>
    import ExtensionsCardVue from '../components/ExtensionsCard.vue';
   export default {
    components:{
        ExtensionsCardVue
    }


   }
</script>