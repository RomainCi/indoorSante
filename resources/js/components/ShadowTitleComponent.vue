<template>
  <div class="containerTitle">
    <h1 :class="titre"><span :class="beforeH1">{{ miniText }}</span>
      <span class="personnalise" >
        <span class="shadow" v-for="(titre,index) in titres" :key="index"> {{ titre }}</span>
      </span>
    </h1>
  </div>
</template>

<script>
import generalClientAndSystem from "@/fonctionClient";
export default {
  name: "ShadowTitleComponent",
  props: {
    miniText: String,
    titres: Array,
  },
  data() {
    return {
      miniTexte: this.miniText,
      beforeH1: "dispositif",
      titre:"rotate",
    }
  },
  methods:{
    verificationClient(){
      let system = generalClientAndSystem.recuperationSystem();
      let client = generalClientAndSystem.recuperationClient();
      if((client === "safari") || (system === "iphone")){
        return this.titre = "noRotate";
      }
    }
  },
  mounted() {
this.verificationClient();
    if (this.miniTexte === "null") {
      this.beforeH1 = "noExiste";
    }
  }
}
</script>

<style scoped>
.noExiste {
  display: none;
}
.containerTitle {
  display: flex;
  justify-content: center;
  margin-top: 30px;
  margin-bottom: 30px;
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
.rotate {
  transform: rotate(-6deg);
  text-align: center;
  margin: 0;
  color: #3CB9B1;
  display: flex;
  flex-direction: column;
  width: fit-content;
  letter-spacing: 1px;
}
.noRotate{
  text-align: center;
  margin: 0;
  color: #3CB9B1;
  display: flex;
  flex-direction: column;
  width: fit-content;
  letter-spacing: 1px;
}
.dispositif {
  font-family: Inter, sans-serif;
  font-weight: 400;
}
</style>