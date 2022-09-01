<template>
    <nav>
         <div class="hamburger-icon"><img src="../assets/_images/hamburger.png" alt="" @click="toggleNav()"/></div>
          <ul v-show="showNav">
            
            <li><a href="">Home</a></li>
            <li><a href="">Extensions</a></li>
            <li><a href="">Structure</a></li>
            <li><a href="">Colours</a></li>
            <li><a href="">Accessories</a></li>
            <li><a href="">Advice</a></li>
            <li><a href="">Contact</a></li>
           
          </ul>  
    </nav>
</template>
<script>
export default {
    data(){
        return{
            showNav:false
        }
    },
    methods:{
        toggleNav(){
            this.showNav = !this.showNav;
        }
    }
}
</script>