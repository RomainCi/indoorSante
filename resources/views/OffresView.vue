<template>
  <main>
    <OffresComponent></OffresComponent>
    <OffresProComponent></OffresProComponent>
  </main>
  <FooterWhiteComponent></FooterWhiteComponent>
</template>

<script>
import OffresComponent from "@/components/OffresComponent.vue";
import OffresProComponent from "@/components/OffresProComponent.vue";
import FooterWhiteComponent from "@/components/FooterWhiteComponent.vue";
export default {
  name: "OffresView",
  components:{
    OffresComponent,
    OffresProComponent,
    FooterWhiteComponent
  },
  mounted() {
    document.title = "Offres Indoor santé";
    document.querySelector('meta[name="description"]').content = "Séances collectives, coaching personnalisé, sport en entreprise et plein d’autres encore. Retrouvez\n" +
        "l’ensemble de nos offres et choisissez celle qui vous convient.";
  }
}
</script>

<style scoped>
main{
  margin-bottom: 35px;
}
</style>