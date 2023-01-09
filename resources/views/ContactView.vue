<template>
  <main>
    <div class="containerTitle">
      <h1><span class="dispositif">Page de </span><span class="personnalise"><span class="shadow">c</span><span
          class="shadow">o</span><span class="shadow">n</span><span class="shadow letterT">t</span><span class="shadow">a</span><span
          class="shadow">c</span><span class="shadow">t</span></span>
      </h1>
    </div>
    <div class="containerContact">
      <ContactComponent></ContactComponent>
      <MapComponent></MapComponent>
    </div>
    <div class="containerBack">
      <div class="contentBack">
      </div>
      <h2 class="courrier">Nous envoyer du courrier</h2>
      <p>10 rue du Bain Aux Plantes 67000 Strasbourg </p>
    </div>
  </main>
  <FooterGreenComponent></FooterGreenComponent>
</template>

<script>
import ContactComponent from "@/components/ContactComponent.vue";
import MapComponent from "@/components/MapComponent.vue";
import FooterGreenComponent from "@/components/FooterGreenComponent.vue";
import vector from "../assets/Vector 2.png"

export default {
  name: "ContactView",
  components: {
    ContactComponent,
    MapComponent,
    FooterGreenComponent
  },
  data() {
    return {
      vector: vector,
    }
  }
}
</script>

<style scoped>
main {
  width: 100%;
  display: flex;
  flex-direction: column;
}

.containerBack {
 display: none;
}

.contentBack {
  height: 300px;
  /*width: 100%;*/
  background-color: white;
  border-radius: 0 0 100% 100%;
  display: flex;
  align-items: center;
}
.containerTitle {
  display: none;
}


@font-face {
  font-family: 'Amatic SC';
  font-weight: 400;
  src: url("/resources/assets/fonts/AmaticSC-Regular.ttf") format('truetype');
}

@media screen and (min-width: 1200px) {
  .containerContact {
    display: flex;
    justify-content: space-around;
  }
  .containerTitle {
    display: flex;
    justify-content: center;
    margin-top: 30px;
  }

  h1 {
    transform: rotate(-6deg);
    text-align: center;
    margin: 0;
    color: #3CB9B1;
    display: flex;
    flex-direction: column;
    width: fit-content;
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

  .letterT {
    margin-right: 0.1px;
  }
  .vectore{
    height: 100%;
    width: 100%;
  }
  .containerBack {
    background-color: #3CB9B1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 225px;
  }

  .contentBack {
    background-color: white;
    border-radius: 0 0 100% 100%;
    display: flex;
    align-items: center;
    width: 100%;
    position: relative;
    top: -65px;
  }
  .courrier{
    margin: 0;
    font-family: Amatic SC, sans-serif;
    letter-spacing: 8px;
    color: white;
  }
  p{
    color: white;
    margin-bottom: 40px;
    font-family: Inter, sans-serif;
  }
}
</style>