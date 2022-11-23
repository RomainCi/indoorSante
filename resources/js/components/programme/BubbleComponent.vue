<template>
  <div class="modal-overlay" v-show="toggle" @click="closeBubble"></div>
  <div class="containerBubble">
    <div v-for="(item,index) in arrayBubble" @click="openBubble(index)" :key="index" class="sizeBubble ball bubble"
         :class="`sizeBubble${ index }`,bubble[index]">
      <p v-show="!toggleBubble[index]">{{ item.element.title }}</p>
      <p v-show="toggleBubble[index]" class="content" :class="writeBubble[index]">{{ item.element.content }}</p>
    </div>
  </div>
</template>

<script>
export default {
  name: "BubbleComponent",
  data() {
    return {
      toggle: false,
      i: null,
      arrayBubble: [
        {
          element: {
            title: "bien être",
            content: "Nos programmes d’entraînement personnalisé (PEP) sont individualisés et spécifiques à la\n" +
                "personne, à son profil et à ses objectifs."
          }
        },
        {
          element: {
            title: "Maladies chroniques",
            content: "Nos programmes d’entraînement personnalisé (PEP) sont individualisés et spécifiques à la\n" +
                "personne, à son profil et à ses objectifs."
          }
        },
        {
          element: {
            title: "Affections de longue durée",
            content: "Nos programmes d’entraînement personnalisé (PEP) sont individualisés et spécifiques à la\n" +
                "personne, à son profil et à ses objectifs."
          }
        },
        {
          element: {
            title: "Adolescents",
            content: "Nos programmes d’entraînement personnalisé (PEP) sont individualisés et spécifiques à la\n" +
                "personne, à son profil et à ses objectifs."
          }
        },
        {
          element: {
            title: "Séniors",
            content: "Nos programmes d’entraînement personnalisé (PEP) sont individualisés et spécifiques à la\n" +
                "personne, à son profil et à ses objectifs."
          }
        }
      ],
      bubble: [],
      toggleBubble: [false],
      writeBubble: [],
    }
  },
  methods: {
    openBubble(i) {
      this.i = i;
      this.bubble[i] = "animBubble" + i;
      this.toggle = true;
      this.toggleBubble[i] = true;
      this.writeBubble[i] = "writeBubble"
    },
    closeBubble() {
      this.bubble[this.i] = "bubbleClose";
      this.toggle = false;
      this.toggleBubble[this.i] = false;
    },
  }
}
</script>

<style lang="scss" scoped>
@font-face {
  font-family: 'Inter';
  font-weight: 400;
  src: url("/resources/assets/fonts/Inter-Regular.ttf") format('truetype');
}
$bubble0Bottom: 56px;
$bubble0Left: 16px;
$bubble1Bottom: 0;
$bubble1Left: 96px;
.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 98;
  cursor: pointer;
}

.containerBubble {
  height: 315px;
  width: 315px;
  border-radius: 50%;
  background-color: #3CB9B1;
  align-self: center;
  position: relative;
}

.sizeBubble {
  background: radial-gradient(circle at bottom, #81e8f6, #76deef 10%, #055194 80%, #062745 100%);
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 100%;
  position: absolute;
}

.sizeBubble0 {
  width: 90px;
  height: 90px;
  left: $bubble0Left;
  bottom: $bubble0Bottom;
}

.sizeBubble1 {
  width: 120px;
  height: 120px;
  left: $bubble1Left;
  bottom: $bubble1Bottom;
}

.sizeBubble2 {
  width: 150px;
  height: 150px;
  left: 164px;
  bottom: 91px;
}

.sizeBubble3 {
  left: 30%;
  top: 0;
  height: 100px;
  width: 100px;
}

.sizeBubble4 {
  left: 27%;
  bottom: 115px;
  height: 80px;
  width: 80px;
}

.ball:before {
  content: "";
  position: absolute;
  top: 1%;
  left: 5%;
  width: 90%;
  height: 90%;
  border-radius: 100%;
  background: radial-gradient(circle at top, white, rgba(255, 255, 255, 0) 58%);
  -webkit-filter: blur(5px);
  filter: blur(5px);
  z-index: 2;
}

.ball:after {
  content: "";
  position: absolute;
  display: none;
  top: 5%;
  left: 10%;
  width: 80%;
  height: 80%;
  border-radius: 100%;
  -webkit-filter: blur(1px);
  filter: blur(1px);
  z-index: 2;
  -webkit-transform: rotateZ(-30deg);
  transform: rotateZ(-30deg);
}

.ball .shadow {
  position: absolute;
  width: 100%;
  height: 100%;
  background: radial-gradient(circle, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.1) 40%, rgba(0, 0, 0, 0) 50%);
  -webkit-transform: rotateX(90deg) translateZ(-160px);
  transform: rotateX(90deg) translateZ(-160px);
  z-index: 1;
}

.ball .plain {
  background: black;
}

.ball.plain:before, .ball.plain:after {
  display: none;
}

.ball.bubble {
  background: radial-gradient(circle at 50% 55%, rgba(240, 245, 255, 0.9), rgba(240, 245, 255, 0.9) 40%, rgba(225, 238, 255, 0.8) 60%, rgba(43, 130, 255, 0.4));

}

.animBubble0 {
  -webkit-animation: bubble-anim0 2s ease;
  animation: bubble-anim0 2s ease;
  height: 100%;
  width: 100%;
  bottom: 0;
  left: 0;
  z-index: 100;
}

.animBubble1 {
  -webkit-animation: bubble-anim1 2s ease;
  animation: bubble-anim1 2s ease;
  height: 100%;
  width: 100%;
  bottom: 0;
  left: 0;
  z-index: 100;
}

.animBubble2 {
  -webkit-animation: bubble-anim2 2s ease;
  animation: bubble-anim2 2s ease;
  height: 100%;
  width: 100%;
  bottom: 0;
  left: 0;
  z-index: 100;
}

.animBubble3 {
  -webkit-animation: bubble-anim3 2s ease;
  animation: bubble-anim3 2s ease;
  height: 100%;
  width: 100%;
  bottom: 0;
  left: 0;
  z-index: 100;
}

.animBubble4 {
  -webkit-animation: bubble-anim4 2s ease;
  animation: bubble-anim4 2s ease;
  height: 100%;
  width: 100%;
  bottom: 0;
  left: 0;
  z-index: 100;
}


.writeBubble {
  animation: write-opa 2s ease;
}

.bubbleClose {
  animation: bubble-anim-close 2s ease;
}

.ball .bubble:before {
  -webkit-filter: blur(0);
  filter: blur(0);
  height: 80%;
  width: 40%;
  background: radial-gradient(circle at 130% 130%, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, 0) 46%, rgba(255, 255, 255, 0.8) 50%, rgba(255, 255, 255, 0.8) 58%, rgba(255, 255, 255, 0) 60%, rgba(255, 255, 255, 0) 100%);
  -webkit-transform: translateX(131%) translateY(58%) rotateZ(168deg) rotateX(10deg);
  transform: translateX(131%) translateY(58%) rotateZ(168deg) rotateX(10deg);
}

.ball.bubble:after {
  display: block;
  background: radial-gradient(circle at 50% 80%, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0) 74%, white 80%, white 84%, rgba(255, 255, 255, 0) 100%);
}
p{
  color:#3CB9B1;
  text-align: center;
  font-size: 16px;
  font-family: Inter, sans-serif;
}
.content{
  font-size: 21px;
}
@keyframes write-opa {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 0.3;
    font-size: 16px;
  }
  80% {
    opacity: 0.6;
    font-size: 18px;
  }
  100% {
    opacity: 1;
    font-size: 21px;
  }
}

@keyframes bubble-anim-close {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    left: 0;
    bottom: 0;
    height: 100%;
    width: 100%;
    z-index: 200;
  }

  20% {
    -webkit-transform: scaleY(0.95) scaleX(1.05);
    transform: scaleY(0.95) scaleX(1.05);
    z-index: 200;
  }

  48% {
    -webkit-transform: scaleY(1.1) scaleX(0.9);
    transform: scaleY(1.1) scaleX(0.9);
    height: 65%;
    width: 65%;
    z-index: 200;
  }

  68% {
    -webkit-transform: scaleY(0.98) scaleX(1.02);
    transform: scaleY(0.98) scaleX(1.02);
    z-index: 200;
  }

  80% {
    -webkit-transform: scaleY(1.02) scaleX(0.98);
    transform: scaleY(1.05) scaleX(0.95);
    z-index: 200;
  }

  97%, 100% {
    -webkit-transform: scale(1);
    transform: scale(1);
    z-index: 200;
  }
}

@keyframes bubble-anim0 {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    height: 30%;
    width: 30%;
    left: $bubble0Left;
    bottom: $bubble0Bottom;
  }

  20% {
    -webkit-transform: scaleY(0.95) scaleX(1.05);
    transform: scaleY(0.95) scaleX(1.05);
  }

  48% {
    -webkit-transform: scaleY(1.1) scaleX(0.9);
    transform: scaleY(1.1) scaleX(0.9);
    height: 65%;
    width: 65%;
  }

  68% {
    -webkit-transform: scaleY(0.98) scaleX(1.02);
    transform: scaleY(0.98) scaleX(1.02);
  }

  80% {
    -webkit-transform: scaleY(1.02) scaleX(0.98);
    transform: scaleY(1.05) scaleX(0.95);
  }

  97%, 100% {
    -webkit-transform: scale(1);
    transform: scale(1);
    height: 100%;
    width: 100%;
  }
}

@keyframes bubble-anim1 {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    height: 30%;
    width: 30%;
    left: $bubble1Left;
    bottom: $bubble1Bottom;
  }

  20% {
    -webkit-transform: scaleY(0.95) scaleX(1.05);
    transform: scaleY(0.95) scaleX(1.05);
  }

  48% {
    -webkit-transform: scaleY(1.1) scaleX(0.9);
    transform: scaleY(1.1) scaleX(0.9);
    height: 65%;
    width: 65%;
  }

  68% {
    -webkit-transform: scaleY(0.98) scaleX(1.02);
    transform: scaleY(0.98) scaleX(1.02);
  }

  80% {
    -webkit-transform: scaleY(1.02) scaleX(0.98);
    transform: scaleY(1.05) scaleX(0.95);
  }

  97%, 100% {
    -webkit-transform: scale(1);
    transform: scale(1);
    height: 100%;
    width: 100%;
  }
}

@keyframes bubble-anim2 {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    height: 40%;
    width: 40%;
    left: 170px;
    bottom: 90px;
  }

  20% {
    -webkit-transform: scaleY(0.95) scaleX(1.05);
    transform: scaleY(0.95) scaleX(1.05);
  }

  48% {
    -webkit-transform: scaleY(1.1) scaleX(0.9);
    transform: scaleY(1.1) scaleX(0.9);
    height: 65%;
    width: 65%;
  }

  68% {
    -webkit-transform: scaleY(0.98) scaleX(1.02);
    transform: scaleY(0.98) scaleX(1.02);
  }

  80% {
    -webkit-transform: scaleY(1.02) scaleX(0.98);
    transform: scaleY(1.05) scaleX(0.95);
  }

  97%, 100% {
    -webkit-transform: scale(1);
    transform: scale(1);
    height: 100%;
    width: 100%;
  }
}

@keyframes bubble-anim3 {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    height: 30%;
    width: 30%;
    left: 30%;
    top: 0;
  }

  20% {
    -webkit-transform: scaleY(0.95) scaleX(1.05);
    transform: scaleY(0.95) scaleX(1.05);
  }

  48% {
    -webkit-transform: scaleY(1.1) scaleX(0.9);
    transform: scaleY(1.1) scaleX(0.9);
    height: 65%;
    width: 65%;
  }

  68% {
    -webkit-transform: scaleY(0.98) scaleX(1.02);
    transform: scaleY(0.98) scaleX(1.02);
  }

  80% {
    -webkit-transform: scaleY(1.02) scaleX(0.98);
    transform: scaleY(1.05) scaleX(0.95);
  }

  97%, 100% {
    -webkit-transform: scale(1);
    transform: scale(1);
    height: 100%;
    width: 100%;
  }
}

@keyframes bubble-anim4 {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    height: 30%;
    width: 30%;
    left: 27%;
    bottom: 115px;
  }

  20% {
    -webkit-transform: scaleY(0.95) scaleX(1.05);
    transform: scaleY(0.95) scaleX(1.05);
  }

  48% {
    -webkit-transform: scaleY(1.1) scaleX(0.9);
    transform: scaleY(1.1) scaleX(0.9);
    height: 65%;
    width: 65%;
  }

  68% {
    -webkit-transform: scaleY(0.98) scaleX(1.02);
    transform: scaleY(0.98) scaleX(1.02);
  }

  80% {
    -webkit-transform: scaleY(1.02) scaleX(0.98);
    transform: scaleY(1.05) scaleX(0.95);
  }

  97%, 100% {
    -webkit-transform: scale(1);
    transform: scale(1);
    height: 100%;
    width: 100%;
  }
}
</style>