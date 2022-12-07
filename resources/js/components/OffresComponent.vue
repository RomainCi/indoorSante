<template>
  <section>
    <div class="containerTitle">
      <h1><span class="dispositif">Nos</span><span class="personnalise"><span class="shadow">o</span><span
          class="shadow">f</span><span class="shadow">f</span><span class="shadow">r</span><span
          class="shadow">e</span><span
          class="shadow">s</span></span>
      </h1>
      <h2>Grand publiques</h2>
    </div>
    <div class="containerCard">
      <div class="scene scene--card">
        <div
            class="card"
            @click="cardOne === 'start' ? (cardOne = 'flipped' ) : (cardOne = 'start' )"
            v-bind:class="{ flipMe: cardOne === 'flipped' }"
        >
          <div class="card__face card__face--front">
            <h4>Pep +</h4>
            <p>test</p>
          </div>
          <div class="card__face card__face--back">
            <h4>Pep +</h4>
            <p>test</p>
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
            <h4>Pep +</h4>
            <p>test</p>
          </div>
          <div class="card__face card__face--back">
            <h4>Pep +</h4>
            <p>test</p>
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
            <h4>Pep +</h4>
            <p>test</p>
          </div>
          <div class="card__face card__face--back">
            <h4>Pep +</h4>
            <p>test</p>
          </div>
        </div>
      </div>
      <div class="scene scene--card">
        <div
            class="card"
            @click="cardFour === 'start' ? (cardFour = 'flipped' ) : (cardFour = 'start' )"
            v-bind:class="{ flipMe: cardFour === 'flipped' }"
        >
          <div class="card__face card__face--front">
            <h4>Pep +</h4>
            <p>test</p>
          </div>
          <div class="card__face card__face--back">
            <h4>Pep +</h4>
            <p>test</p>
          </div>
        </div>
      </div>
      <div class="scene scene--card">
        <div
            class="card"
            @click="cardFive === 'start' ? (cardFive = 'flipped' ) : (cardFive = 'start' )"
            v-bind:class="{ flipMe: cardFive === 'flipped' }"
        >
          <div class="card__face card__face--front">
            <h4>Pep +</h4>
            <p>test</p>
          </div>
          <div class="card__face card__face--back">
            <h4>Pep +</h4>
            <p>test</p>
          </div>
        </div>
      </div>
      <div class="scene scene--card">
        <div
            class="card"
            @click="cardSix === 'start' ? (cardSix = 'flipped' ) : (cardSix = 'start' )"
            v-bind:class="{ flipMe: cardSix === 'flipped' }"
        >
          <div class="card__face card__face--front">
            <h4>Pep +</h4>
            <p>test</p>
          </div>
          <div class="card__face card__face--back">
            <h4>Pep +</h4>
            <p>test</p>
          </div>
        </div>
      </div>
    </div>
    <div class="info">
      <p>Cliquez sur les cartes pour en savoir plus</p>
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
      cardSix: "start"
    }
  },
  methods: {}
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
}

.scene {
  width: 142px;
  height: 142px;
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
  font-size: 28px;
  margin: 5px 0 0 10px;
}

.card__face p {
  font-size: 13px;
  font-family: Inter, sans-serif;
  font-weight: 400;
  margin: 0 0 0 10px;
}
.info p{
  text-align: center;
  font-family: Inter, sans-serif;
  font-size: 13px;
  color: #3CB9B1;
}
</style>