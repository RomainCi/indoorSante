<template>
  <section>
    <div class="containerTitle">
      <h1 :class="apple"><span class="dispositif">Nos</span><span class="personnalise"><span class="shadow">o</span><span
          class="shadow">f</span><span class="shadow">f</span><span class="shadow">r</span><span
          class="shadow">e</span><span
          class="shadow">s</span></span>
      </h1>
      <h2>Grand publiques</h2>
      <div class="info">
        <p>Cliquez sur les cartes pour en savoir plus</p>
      </div>
    </div>
    <div class="containerCard">
      <div class="scene scene--card">
        <div
            class="card"
            @click="cardOne === 'start' ? (cardOne = 'flipped' ) : (cardOne = 'start' )"
            v-bind:class="{ flipMe: cardOne === 'flipped' }"
        >
          <div class="card__face card__face--front">
            <h4>PEP</h4>
            <p>Nous proposons plusieurs programmes d'entraînement personnalisé (PEP) spécifiques, adaptés aux
              différentes pathologies chroniques et ALD sur présentation d'une ordonnance. Les séances sont encadrées en
              petit groupe (6 à 12 personnes) sur site ou en distanciel (PEP'Activisio).Ces programmes durent 6 mois à
              raison de 2 à 3 séances/semaine.
            </p>
          </div>
          <div class="card__face card__face--back">
            <h4>TARIFS</h4>
            <p>165€/6 mois (prise en charge possible par votre mutuelle).</p>
          </div>
        </div>
      </div>
      <div class="scene scene--card">
        <div
            class="card"
            @click="cardTwo === 'start' ? (cardTwo = 'flipped' ) : (cardTwo = 'start' )"
            v-bind:class="{ flipMe: cardTwo === 'flipped' }"
        >
          <div class="card__face card__face--front">
            <h4>MULTI-ACTIVITES</h4>
            <p>Différentes activités ludiques accessibles à tout public en libre accès, vous permettant d&#39;améliorer
              votre endurance, renforcer l'ensemble de vos muscles et favoriser votre bien-être. Les séances sont
              encadrées en petit groupe (6 à 12 personnes).
              Les activités proposées par Indoor Santé : rameur, renforcement musculaire, Avifit, Pilates, cardio-
              boxe, danse latine et marche. Ces activités sont ouvertes à toute personne souhaitant reprendre ou
              continuer une activité physique.</p>
          </div>
          <div class="card__face card__face--back">
            <h4>TARIFS</h4>
            <p>Carnet de 10 séances : 150€.</p>
          </div>
        </div>
      </div>
      <div class="scene scene--card">
        <div
            class="card"
            @click="cardThree === 'start' ? (cardThree = 'flipped' ) : (cardThree = 'start' )"
            v-bind:class="{ flipMe: cardThree === 'flipped' }"
        >
          <div class="card__face card__face--front">
            <h4>COACHING PERSONNALISÉ</h4>
            <p>Séances individuelles encadrées par l'un de nos éducateurs sportifs qualifiés et diplômés (Bac +5 en
              physiologie de l'entrainement / activité physique adaptée). Que vous soyez sportif ou débutant en
              activité physique, votre encadrant vous proposera un entrainement individualisé en fonction de vos
              besoins et objectifs. Les activités du coaching (cardio, renforcement musculaire etc.) sont
              sélectionnées sur-mesure.</p>
          </div>
          <div class="card__face card__face--back">
            <h4>TARIFS</h4>
            <p>Carnet de 5 séances individuelles : 175€.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "OffresComponent",
  data() {
    return {
      cardOne: "start",
      cardTwo: "start",
      cardThree: "start",
      cardFour: "start",
      cardFive: "start",
      cardSix: "start",
      apple:null
    }
  },
  mounted() {
    console.log(navigator.userAgent);
    const userAgent = navigator.userAgent;
    if(userAgent.indexOf("Safari") != -1){
      if (userAgent.indexOf("Chrome") != -1){
        console.log("chrome");
      }else{
        this.apple = "noRotate";
      }
    }
  },
  methods: {},

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
.noRotate {
  transform: rotate(0deg);
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

h2 {
  font-family: Inter, sans-serif;
  font-size: 17px;
  color: #3CB9B1;
  font-weight: 400;
  text-align: center;
}

.containerCard {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  gap: 21px;
  margin-left: 30px;
  margin-right: 30px;
}

.scene {
  width: 280px;
  height: 280px;
  border-radius: 32px;
  perspective: 1000px;
}

.card {
  width: 100%;
  height: 100%;
  transition: transform 1s;
  transform-style: preserve-3d;
  cursor: pointer;
  position: relative;
}

.card__face {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.card__face--front {
  background: #3CB9B1;
  color: white;
  border-radius: 32px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25) inset;
}

.card__face--back {
  border-radius: 32px;
  background: white;
  color: #3CB9B1;
  transform: rotateY(180deg);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25) inset;
}

.flipMe {
  transform: rotateY(180deg);
}

.card__face h4 {
  font-family: Amatic SC, sans-serif;
  font-size: 26px;
  margin: 5px 0 0 0;
  text-align: center;
}

.card__face p {
  font-size: 13px;
  font-family: Inter, sans-serif;
  font-weight: 400;
  margin: 10px 10px 0 10px;
  text-align: center;
}

.info p {
  text-align: center;
  font-family: Inter, sans-serif;
  font-size: 13px;
  color: #3CB9B1;
}

@media screen and (min-width: 1200px){
  .shadow{
    font-size: 45px;
  }
}
</style>