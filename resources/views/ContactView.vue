<template>
  <main>
    <ContactComponent></ContactComponent>
  </main>
</template>

<script>
import ContactComponent from "@/components/ContactComponent.vue";
export default {
  name: "ContactView",
  components: {
    ContactComponent,
  }

}
</script>

<style scoped>
main{
  width: 100%;
}
</style>