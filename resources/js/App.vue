<template>
  <div>
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
  }
}
</script>

<style scoped>

</style>