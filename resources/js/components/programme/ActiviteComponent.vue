<template>
  <div class="containerMain">
    <div class="container">
      <div class="contentTextDesktop">
        <p>
          <span>Bienfaits physiologiques</span><br>
          - Amélioration du fonctionnement cardiovasculaire<br>
          - Amélioration de la composante corporelle<br>
          - Diminution des facteurs de risque liés à la sédentarité<br>
          - Amélioration du système ostéoarticulaire et neuromusculaire
        </p>
        <p>
          <span>Bienfaits sociaux</span><br>
          - Gain de confiance en soi<br>
          - Création de lien social<br>
          - Découverte de nouveaux centres d’intérêt<br>
          - Conservation d’un temps pour soi
        </p>
        <p>
          <span>Bienfaits psychiques</span><br>
          - Réduction du stress<br>
          - Diminution de l’anxiété<br>
          - Amélioration du système cognitif<br>
          - Baisse du risque de dépression
        </p>
      </div>
      <div class="contentText">
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
      </div>
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
    <div class="contentBubble">
      <BubbleComponent/>
      <p class="info">Cliquez sur une bulle pour en savoir plus</p>
    </div>
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
    const el = document.querySelector('.contentText');
    el.addEventListener('touchstart', event => this.touchstart(event));
    el.addEventListener('touchmove', event => this.touchmove(event));
    el.addEventListener('touchend', () => this.touchend());
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

.contentTextDesktop {
  display: none;
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
  margin-top: 30px;
  margin-bottom: 30px;
}

.contentText {
  display: flex;
  width: 305px;
  padding: 10px;
  border-radius: 30px;
  margin-right: 30px;
  margin-left: 30px;
  background-color: #3CB9B1;
  height: 160px;
  align-items: center;
}

.container p {
  text-align: justify;
  font-size: 13px;

}

.fa-solid {
  color: #2e8e88;
}

.container p span {
  font-size: 20px;
  text-align: center;
  font-weight: 800;
}

.container .contentArrow {
  display: flex;
  justify-content: space-between;
  gap: 10px;
  margin-top: 10px;
  width: 305px;
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

.contentBubble {
  align-self: center;
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
  font-size: 31px;
}

p {
  text-align: center;
  font-family: Inter, sans-serif;
  font-size: 14px;
  margin: 0;
  color: white;
}

.info {
  margin-top: 30px;
  margin-bottom: 30px;
  font-size: 17px;
  color: #CECECE;
}

@media screen and (min-width: 600px) {
  .contentText {
    height: fit-content;
    padding: 20px;
    width: 320px;
  }

  .container p span {
    font-size: 25px;
  }

  p {
    font-size: 17px;
  }

  .fa-solid {
    font-size: 20px;
  }

  .container .contentCircle .circle {
    height: 15px;
    width: 15px;
  }

  .container .contentCircle .circlePage {
    height: 15px;
    width: 15px;
  }

  .shadow {
    font-size: 45px;
  }

  /*.dispositif {*/
  /*  font-size: 35px;*/
  /*}*/

  .container .contentArrow {
    width: 320px;
  }
}

@media screen and (min-width: 1000px) {
  p {
    /*font-size: 16px;*/
    color: white;
  }

  .container {
    /*background-color: yellow;*/
    /*flex-direction: row;*/
    /*justify-content: start;*/
  }

  .contentText {
    display: none;
  }

  .container .contentCircle {
    display: none;
  }

  .container .contentArrow {
    display: none;
  }

  .container p span {
    font-size: 19px;
    color: #7ACFCA;
  }

  .containerMain {
    flex-direction: row;
    /*background-color: red;*/
    justify-content: space-between;
  }

  .containerTitle {
    display: none;
  }

  .contentBubble {
    width: 50%;
    /*background-color: yellow;*/
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .container {
    /*background-color: cornflowerblue;*/
    width: 50%;
    margin-bottom: 0;
  }

  .contentTextDesktop {
    padding: 0 10px 10px;
    display: flex;
    flex-direction: column;
    background-color: #3CB9B1;
    border-radius: 30px;
    margin: 0;
    max-width: 350px;
  }

  .contentTextDesktop p {
    display: flex;
    flex-direction: column;
    font-size: 16px;
  }

  .contentTextDesktop p span {
    margin-bottom: 5px;
    margin-top: 5px;
  }
}
@media screen and (min-width: 1200px){
  .shadow{
    font-size: 45px !important;
  }
}
</style>