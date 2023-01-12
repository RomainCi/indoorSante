<template>
  <main>
    <div class="image" :style="{
              'background-image': `url(${photo})`,
            }"></div>
    <img alt="vector" class="vector" :src="vector">
    <h1><span class="shadow">i</span><span class="shadow">n</span><span class="shadow">d</span><span
        class="shadow">o</span><span class="shadow">o</span><span class="shadow">r</span>
      &nbsp;<span class="shadow">s</span><span class="shadow">a</span><span class="shadow">n</span><span class="shadow">t</span><span
          class="shadow">é</span>
    </h1>
    <p>Association indoor santé</p>
  </main>
  <FooterGreenComponent></FooterGreenComponent>
</template>
<script>
import FooterGreenComponent from "@/components/FooterGreenComponent.vue";
import photo from "../assets/basket.png"
import lal from "../assets/sport.png"
import work from "../assets/work.png"
import h1 from "../assets/Indoor Santé(3).png"
import vector from "../assets/Vector 2.png"
export default {
  name: "HomeView.vue",
  components: {
    FooterGreenComponent,
  },

  data() {
    return {
      photo: photo,
      h1: h1,
      images: [lal, work, photo],
      i: 0,
      vector: vector,
    }
  },
  mounted() {
    this.changePhoto();
    document.title = "Accueil Indoor santé";
    document.querySelector('meta[name="description"]').content = "Venez pratiquer une activité physique encadrée et adaptée à vos besoins et objectifs avec les\n" +
        "experts du sport santé.";
    // console.log(navigator);

      // if(userAgent.indexOf('Mobi') != -1){
      //   console.log("mobile");
      // }
    // if(system.indexOf("iPhone") != -1 || system.indexOf("iPad") != -1){
    //   console.log("apple");
    // }else{
    //   console.log("pas apple")
    // }
  },
  methods: {
    changePhoto() {
      setInterval(() => {
        this.test()
      }, 6000);
    },
    test() {
      this.photo = this.images[this.i];
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

main {
  background: #3CB9B1;
  height: 84vh;
  position: relative;
}

h1 {
  margin: 0;
  position: absolute;
  bottom: 25px;
  width: 100%;
  display: flex;
  justify-content: center;
  color: white;
}

p {
  font-family: Inter, sans-serif;
  font-size: 0.7em;
  text-align: center;
  color: white;
  margin: 0;
  height: 4%;
  position: absolute;
  bottom: 0;
  width: 100%;
  /*background-color: red;*/
}

.image {
  height: 100%;
  background-size: cover;
  width: 100%;
  position: absolute;
}

.vector {
  width: 100%;
  position: absolute;
  height: 24vh;
  bottom: 0;
}
.shadow {
  font-family: Inter-ExtraBold, sans-serif;
  text-transform: uppercase;
  font-weight: 400;
  background-color: rgb(255,255,255);
  color: transparent;
  text-shadow: 1px 1px 4px rgb(0, 0, 0,0.16);
  -webkit-background-clip: text;
  -moz-background-clip: text;
  background-clip: text;
  -webkit-text-stroke: 0.5px white;
  font-size: 31px;
}
@media screen and (min-width: 1200px){
  h1{
    bottom: 15px;
  }
  .shadow{
    font-size: 45px;
  }
}
</style>