
<template>
  <div>
    <NavBarVue></NavBarVue>
    <ExtensionsVue></ExtensionsVue>
  </div>
</template>
<script>
  import HomeVue from './views/Home.vue';
  import NavBarVue from './components/NavBar.vue';
  import ExtensionsVue from './views/Extensions.vue';
export default {

  components:{
    HomeVue,ExtensionsVue,NavBarVue
  }
}
</script>

