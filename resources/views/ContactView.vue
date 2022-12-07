<template>
  <main>
    <ContactComponent></ContactComponent>
    <MapComponent></MapComponent>
  </main>
  <FooterGreenComponent></FooterGreenComponent>
</template>

<script>
import ContactComponent from "@/components/ContactComponent.vue";
import MapComponent from "@/components/MapComponent.vue";
import FooterGreenComponent from "@/components/FooterGreenComponent.vue";
export default {
  name: "ContactView",
  components: {
    ContactComponent,
    MapComponent,
    FooterGreenComponent
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