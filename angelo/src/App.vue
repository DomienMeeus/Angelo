<template>
  <div>
    <NavBarVue></NavBarVue>
    <Contact />
  </div>
</template>
<script>
import HomeVue from "./views/Home.vue";
import NavBarVue from "./components/NavBar.vue";
import ExtensionsVue from "./views/Extensions.vue";
import Structure from "./views/Structure.vue";
import Colours from "./views/Colours.vue";
import Accessories from "./views/Accessories.vue";
import Contact from "./views/Contact.vue";
export default {
  components: {
    HomeVue,
    ExtensionsVue,
    NavBarVue,
    Structure,
    Colours,
    Accessories,
    Contact,
  },
};
</script>
