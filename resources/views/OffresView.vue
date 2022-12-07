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
  }
}
</script>

<style scoped>
main{
  margin-bottom: 35px;
}
</style>