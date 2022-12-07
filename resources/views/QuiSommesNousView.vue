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
  }
}
</script>

<style scoped>
main{
  margin-bottom: 35px;
}
</style>