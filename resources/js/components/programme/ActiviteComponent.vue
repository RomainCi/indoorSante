<template>
  <div class="containerMain">
    <div class="container">
      <p v-if="page === 1">
        <span>Bienfaits physiologiques</span><br><br>
        - Amélioration du fonctionnement cardiovasculaire<br>
        - Amélioration de la composante corporelle<br>
        - Diminution des facteurs de risque liés à la sédentarité<br>
        - Amélioration du système ostéoarticulaire et neuromusculaire
      </p>
      <p v-else-if="page === 2">
        <span>Bienfaits sociaux</span><br><br>
        - Gain de confiance en soi<br>
        - Création de lien social<br>
        - Découverte de nouveaux centres d’intérêt<br>
        - Conservation d’un temps pour soi
      </p>
      <p v-else-if="page === 3">
        <span>Bienfaits psychiques</span><br><br>
        - Réduction du stress<br>
        - Diminution de l’anxiété<br>
        - Amélioration du système cognitif<br>
        - Baisse du risque de dépression
      </p>
      <div class="contentArrow">
        <i class="fa-solid fa-arrow-left" @click="pageLeft"></i>
        <i class="fa-solid fa-arrow-right" @click="pageRight"></i>
      </div>
      <div class="contentCircle">
        <div v-if="circle === 1" class="circlePage"></div>
        <div v-else class="circle"></div>
        <div v-if="circle === 2" class="circlePage"></div>
        <div v-else class="circle"></div>
        <div v-if="circle === 3" class="circlePage"></div>
        <div v-else class="circle"></div>
        <div v-else class="circle"></div>
      </div>
    </div>
    <div class="containerTitle">
      <h1><span class="dispositif">Les différents</span><span class="personnalise"><span class="shadow">p</span><span
          class="shadow">r</span><span class="shadow">o</span><span class="shadow">g</span><span
          class="shadow">r</span><span
          class="shadow">a</span><span class="shadow">m</span><span class="shadow">m</span><span
          class="shadow">e</span><span
          class="shadow">s</span></span>
      </h1>
    </div>
    <BubbleComponent/>
    <p>Cliquez sur une bulle pour en savoir plus</p>
  </div>
</template>

<script>
import BubbleComponent from "@/components/programme/BubbleComponent.vue";

export default {
  name: "ActiviteComponent",
  components: {
    BubbleComponent,
  },
  data() {
    return {
      i: 1,
      page: null,
      circle: null,
      min: 1,
      max: 3,
    }
  },
  mounted() {
    this.page = this.i;
    this.circle = this.i;
  },
  methods: {
    pageLeft() {
      if (this.i === this.min) {
        return null;
      }
      this.i = this.i - 1;
      this.page = this.i;
      this.circle = this.i;
    },
    pageRight() {
      if (this.i === this.max) {
        return null;
      }
      this.i = this.i + 1;
      this.page = this.i;
      this.circle = this.i;
    },

  }
}
</script>

<style scoped>
@font-face {
  font-family: 'Inter';
  font-weight: 400;
  src: url("/resources/assets/fonts/Inter-Regular.ttf") format('truetype');
}

@font-face {
  font-family: 'Inter';
  font-weight: 800;
  src: url("/resources/assets/fonts/Inter-ExtraBold.ttf") format('truetype');
}

.containerMain {
  display: flex;
  flex-direction: column;
  width: 100%;
}

.container {
  width: 100%;
  display: flex;
  justify-content: center;
  height: fit-content;
  flex-direction: column;
  align-items: center;
}

.container p {
  text-align: left;
  align-self: center;
  margin: 0 10%;
}

.container p span {
  font-size: 20px;
  text-align: center;
  font-weight: 800;
}

.container .contentArrow {
  display: flex;
  justify-content: center;
  gap: 10px;
  margin-top: 10px;
}

.container .contentCircle {
  display: flex;
  justify-content: center;
  gap: 3px;
}

.container .contentCircle .circle {
  height: 10px;
  width: 10px;
  background: #D9D9D9;
  border-radius: 100%;
}

.container .contentCircle .circlePage {
  height: 10px;
  width: 10px;
  background: #3CB9B1;
  border-radius: 100%;
}

.containerTitle {
  align-self: center;
  width: fit-content;
  margin-top: 30px;
  margin-bottom: 20px;
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

p {
  text-align: center;
  font-family: Inter, sans-serif;
  font-size: 14px;
  margin: 0;
  color: #3CB9B1;
}

</style>