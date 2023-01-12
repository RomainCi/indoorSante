<template>
  <div>
  <main>
    <section class="page1">
      <PersonnaliseComponent/>
    </section>
    <section class="page2">
      <ActiviteComponent/>
    </section>
  </main>
    <FooterWhiteComponent back="none"></FooterWhiteComponent>
  </div>
</template>

<script>
import PersonnaliseComponent from "@/components/programme/PersonnaliseComponent.vue";
import ActiviteComponent from "@/components/programme/ActiviteComponent.vue";
import FooterWhiteComponent from "@/components/FooterWhiteComponent.vue";

export default {
  name: "ProgrammeView",
  components: {
    PersonnaliseComponent,
    ActiviteComponent,
    FooterWhiteComponent
  },
  mounted() {
    document.title = "Programmes Indoor santé";
    document.querySelector('meta[name="description"]').content = "Des programmes d’entrainement personnalisés conçus spécialement pour vous afin d’optimiser et de faciliter votre remise à l’effort."
  }

}
</script>

<style scoped>
main {
  width: 100%;

}
div{
  background-image: url("../assets/backgroundImage.png");
  background-size: cover;
}
</style>