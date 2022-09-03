<template>
  <div>
    <NavBarVue></NavBarVue>
    <Structure />
  </div>
</template>
<script>
import HomeVue from "./views/Home.vue";
import NavBarVue from "./components/NavBar.vue";
import ExtensionsVue from "./views/Extensions.vue";
import Structure from "./views/Structure.vue";
export default {
  components: {
    HomeVue,
    ExtensionsVue,
    NavBarVue,
    Structure,
  },
};
</script>
