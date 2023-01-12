<template>
  <div id="top">
    <header>
      <NavbarComponent></NavbarComponent>
    </header>
    <router-view></router-view>
  </div>
</template>

<script>
import NavbarComponent from '@/components/NavbarComponent.vue';

export default {
  name: "App.vue",
  components: {
    NavbarComponent
  },
  data(){
    return{
      navigateur:null,
    }
  },
}
</script>

<style scoped>
header{
  position: sticky;
  top: 0;
  z-index: 200;
  background-color: white;
}
</style>