
<template>
  <div>
    <NavBarVue></NavBarVue>
    <HomeVue></HomeVue>
  </div>
</template>
<script>
  import HomeVue from './views/Home.vue';
  import NavBarVue from './components/NavBar.vue';
export default {

  components:{
    HomeVue,NavBarVue
  }
}
</script>

