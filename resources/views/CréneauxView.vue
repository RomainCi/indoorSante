<template>
  <main>
    <section>
      <div class="containerTitle">
        <h1><span class="dispositif">Nos</span><span class="personnalise"><span class="shadow">c</span><span
            class="shadow">r</span><span class="shadow">é</span><span class="shadow">n</span><span
            class="shadow">e</span><span
            class="shadow">a</span>
              <span class="shadow">u</span>
          <span class="shadow">x</span>
        </span>
        </h1>
      </div>
      <div class="containerImage">
        <img :src="agenda" alt="agenda">
      </div>
    </section>
  </main>
  <footer>
    <FooterWhiteComponent></FooterWhiteComponent>
  </footer>
</template>

<script>
import agenda from "../assets/Agenda Indoor Santé (1).png"
import FooterWhiteComponent from "@/components/FooterWhiteComponent.vue";
export default {
  name: "CréneauxView",
  components:{
    FooterWhiteComponent,
  },
  data(){
    return{
      agenda,
    }
  }
}
</script>

<style scoped>
.containerTitle {
  align-self: center;
  width: fit-content;
  display: flex;
  justify-content: center;
  flex-direction: column;
  margin: 30px auto 20px;
}

h1 {
  transform: rotate(-6deg);
  text-align: center;
  margin: 0;
  color: #3CB9B1;
  display: flex;
  flex-direction: column;
}

.dispositif {
  font-family: Inter, sans-serif;
  font-weight: 400;
}

.shadow {
  font-family: Inter-ExtraBold, sans-serif;
  text-transform: uppercase;
  font-weight: 400;
  background-color: #2e8e88;
  color: transparent;
  text-shadow: 2px 2px 3px rgba(255, 255, 255, 0.25);
  -webkit-background-clip: text;
  -webkit-text-stroke: 0.5px #3cb9b1;
  font-size: 38px;
}
.containerImage{
  display: flex;
  justify-content: center;
}
.containerImage img{
  width: 90%;
  max-width: 1200px;
}
@media screen and (min-width: 1200px){
  .shadow{
    font-size: 45px;
  }
}
</style>