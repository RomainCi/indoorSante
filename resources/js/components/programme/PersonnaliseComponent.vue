<template>
  <div class="containerMain">
    <div class="containerTitle">
      <h1><span class="dispositif">Un dispositif</span><span class="personnalise"><span class="shadow">p</span><span
          class="shadow">e</span><span class="shadow">r</span><span class="shadow">s</span><span class="shadow">o</span><span
          class="shadow">n</span><span class="shadow">n</span><span class="shadow">a</span><span class="shadow">l</span><span
          class="shadow">i</span><span class="shadow">s</span><span class="shadow">é</span></span>
      </h1>
    </div>

    <div class="container">
      <div class="circle">
        <h2><img class="bottomCircle" :src="adapte" alt="adapte"></h2>
        <transition :name="left">
          <img v-if="show" class="image" :src="image" alt="mamie">
        </transition>
        <transition :name="right">
          <img v-if="show1" class="image" :src="image" alt="mamie">
        </transition>
      </div>
    </div>
    <div class="containerTitle">
      <h1><span class="dispositif">Pourquoi faire une </span><span><span class="shadow">a</span><span
          class="shadow">c</span><span
          class="shadow">t</span><span
          class="shadow">i</span><span class="shadow">v</span><span class="shadow">i</span><span class="shadow">t</span><span
          class="shadow">é</span></span><span><span class="shadow">p</span><span class="shadow">h</span><span
          class="shadow">y</span><span
          class="shadow">s</span><span class="shadow">i</span><span class="shadow">q</span><span class="shadow">u</span><span
          class="shadow">e</span> <span class="shadow">?</span></span>
      </h1>
    </div>
  </div>
</template>

<script>
import personnalise from "../../../assets/personnalisé.png"
import adapte from "../../../assets/Group.png"
import mamie from "../../../assets/mamie.png"
import work from "../../../assets/work.png"
import sport from "../../../assets/sport.png"

export default {
  name: "PersonnaliseComponent",
  data() {
    return {
      personnalise: personnalise,
      test: "Adapté à tous !",
      adapte: adapte,
      image: mamie,
      images: [work, mamie, sport],
      i: 0,
      show: true,
      show1: false,
      left: "slide-fade-left",
      right: "slide-fade-right",
    }
  },
  mounted() {
    // this.changePhoto();
  },
  methods: {
    changePhoto() {
      setInterval(() => {
        this.slide()
      }, 3000);
    },
    slide() {
      if (this.show === false && this.show1 === true) {
        this.show = true;
        this.show1 = false;
        this.left = "slide-fade-right";
        this.right = "slide-fade-left";
      } else {
        this.show = false;
        this.show1 = true;
        this.left = "slide-fade-left";
        this.right = "slide-fade-right";
      }
      this.image = this.images[this.i];
      this.i = (this.i + 1) % this.images.length;
    }
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

.slide-fade-left-enter-active {
  transition: all 2s ease;
}

.slide-fade-left-leave-active {
  transition: all 2s ease;
}

.slide-fade-left-enter-from,
.slide-fade-left-leave-to {
  transform: translateX(-200px);
  opacity: 0;
}

.slide-fade-right-enter-active {
  transition: all 2s ease;
}

.slide-fade-right-leave-active {
  transition: all 2s ease;
}

.slide-fade-right-enter-from,
.slide-fade-right-leave-to {
  transform: translateX(200px);
  opacity: 0;
}
.containerMain {
  width: 100%;
  display: flex;
  flex-direction: column;
}
.container {
  width: 100%;
  height: 400px;
  display: flex;
  justify-content: center;
  margin-bottom: 37px;
}

.bottomCircle {
  position: absolute;
  bottom: -70px;
  height: 40%;
  width: 100%;
  left: 5px;
}

.containerTitle {
  align-self: center;
  width: fit-content;
}

h2 {
  margin: 0;
}

h1 {
  transform: rotate(-6deg);
  text-align: center;
  margin: 0;
  color: #3CB9B1;
  display: flex;
  flex-direction: column
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
  font-size: 1.6em;
}

.circle {
  height: 315px;
  width: 315px;
  background: #7ACFCAFA;
  border-radius: 50%;
  align-self: center;
  margin-top: 60px;
  position: relative;
  margin-bottom: 60px;
  z-index: 20;
}

.image {
  width: 100%;
  height: 100%;
  position: absolute;
  border-radius: 50%;
}
</style>