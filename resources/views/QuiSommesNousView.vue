<template>
  <main>
    <QuiSommesNousComponent></QuiSommesNousComponent>
    <EquipeComponent></EquipeComponent>
  </main>
<FooterWhiteComponent></FooterWhiteComponent>
</template>

<script>
import QuiSommesNousComponent from "@/components/QuiSommesNousComponent.vue";
import EquipeComponent from "@/components/EquipeComponent.vue";
import FooterWhiteComponent from "@/components/FooterWhiteComponent.vue";
export default {
  name: "QuiSommesNousView",
  components: {
    QuiSommesNousComponent,
    EquipeComponent,
    FooterWhiteComponent
  },
  mounted() {
    document.title = "Qui-sommes-nous? Indoor santé";
    document.querySelector('meta[name="description"]').content = "Indoor Santé, de la genèse du projet à aujourd’hui, découvrez l’histoire du mariage entre le sport, la santé et la recherche."

  }
}
</script>

<style scoped>
main{
  margin-bottom: 35px;
}
</style>