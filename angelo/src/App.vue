<template>
  <div>
    <NavBarVue></NavBarVue>
    <Colours />
  </div>
</template>
<script>
import HomeVue from "./views/Home.vue";
import NavBarVue from "./components/NavBar.vue";
import ExtensionsVue from "./views/Extensions.vue";
import Structure from "./views/Structure.vue";
import Colours from "./views/Colours.vue";
export default {
  components: {
    HomeVue,
    ExtensionsVue,
    NavBarVue,
    Structure,
    Colours,
  },
};
</script>
