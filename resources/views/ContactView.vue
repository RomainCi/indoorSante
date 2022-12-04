<template>
  <main>
    <ContactComponent></ContactComponent>
    <MapComponent></MapComponent>
  </main>
</template>

<script>
import ContactComponent from "@/components/ContactComponent.vue";
import MapComponent from "@/components/MapComponent.vue";
export default {
  name: "ContactView",
  components: {
    ContactComponent,
    MapComponent
  }

}
</script>

<style scoped>
main{
  width: 100%;
}
@font-face {
  font-family: 'Amatic SC';
  font-weight: 400;
  src: url("/resources/assets/fonts/AmaticSC-Regular.ttf") format('truetype');
}
</style>