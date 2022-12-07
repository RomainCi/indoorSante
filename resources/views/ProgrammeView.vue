<template>
    <main>
      <section class="page1">
        <PersonnaliseComponent/>
      </section>
      <section class="page2">
        <ActiviteComponent/>
      </section>
    </main>
<FooterWhiteComponent></FooterWhiteComponent>
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
  }
}
</script>

<style scoped>
main {
  width: 100%;
}

</style>