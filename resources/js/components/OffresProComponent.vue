<template>
  <section>
    <div class="containerTitle">
      <h1><span class="dispositif">Nos</span><span class="personnalise"><span class="shadow">o</span><span
          class="shadow">f</span><span class="shadow">f</span><span class="shadow">r</span><span
          class="shadow">e</span><span
          class="shadow">s</span></span>
      </h1>
      <h2>Pour les professionnels</h2>
    </div>
    <div class="containerCircle">
      <div class="contentCircle">
        <div class="circle"></div>
        <div class="contentText">
          <h4>Diagnostic Forme et Santé (DFS)</h4>
          <p>Le DFS est un outil de prévention qui permet de visualiser votre
            niveau de forme et de santé à l’aide d’une évaluation de la condition physique et d’un
            questionnaire de qualité de vie. A l’issue du diagnostic, vous bénéficierez de préconisations
            personnalisées basées sur les standards définis par l&#39;Organisation Mondiale de la Santé (OMS) et le
            Programme National Nutrition Santé (PNNS).</p>
          <p class="devis">Tarif: Sur devis</p>
        </div>
      </div>
      <div class="contentCircle contentCircleLeft">
        <div class="circle"></div>
        <div class="contentText">
          <h4>Mobil.Sport.Lab (MSL)</h4>
          <p class="textRight">Le MSL est un équipement mobile qui se transforme en salle de sport
            connectée (60m²), entièrement équipée, déployable n'importe où pour permettre à tout public
            d'avoir accès à une activité physique pour améliorer sa santé. Il permet au plus grand nombre
            d'accéder aux équipements et compétences visant à mener une activité physique adaptée (APA).</p>
          <p class="textRight devis">Tarif: Sur devis</p>
        </div>
      </div>
      <div class="contentCircle">
        <div class="circle"></div>
        <div class="contentText">
          <h4>Sport en entreprise</h4>
          <p>Nous proposons différents types de prestations:<br>
            - Séances d’activité physique<br>
            - Animations et team building<br>
            - Formation prévention des TMS<br>
            - Réveils musculaires</p>
          <p class="devis">Tarif: Sur devis</p>
        </div>
      </div>
      <div class="contentCircle contentCircleLeft">
        <div class="circle"></div>
        <div class="contentText">
          <h4>KICK THE CAT</h4>
          <p class="textRight">Application permettant de réaliser un «test de marche 6’» en réalité augmentée et
            ainsi connaitre son niveau de sédentarité. L’application peut être utilisée pour cartographier de
            manière agrégée et anonymisée l’état de santé ou de sédentarité d’une population.</p>
          <p class="textRight devis">Tarif: Sur devis</p>
        </div>
      </div>
      <div class="button">
        <button @click="this.$router.push({path:'/contact',hash:'#top'})">contact</button>
      </div>
    </div>

  </section>
</template>

<script>
export default {
  name: "OffresProComponent"
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

.contentCircle {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 21px;
  margin-bottom: 40px;
}

.circle {
  height: 160px;
  width: 160px;
  background-color: red;
  border-radius: 50%;
}

.contentText {
  width: 80%;
  /*background-color: yellow;*/
}
h4{
  color: #3CB9B1;
  font-family: Amatic SC, sans-serif;
  font-size: 26px;
  text-align: center;
}
p {
  text-align: center;
  color: #3CB9B1;
  margin: 10px 10px 0;
  font-size: 13px;
  font-family: Inter, sans-serif;
}

button {
  width: 100px;
  border-radius: 18px;
  border: 2px solid #7ACFCA;
  background: linear-gradient(0deg, #3CB9B1, #3CB9B1), linear-gradient(0deg, #7ACFCA, #7ACFCA);
  height: 30px;
  position: relative;
  z-index: 4;
}

.button {
  margin-top: 45px;
  display: flex;
  justify-content: center;
}

a {
  text-decoration: none;
  color: white;
  font-family: Inter, sans-serif;
  font-weight: 400;
  font-size: 12px;
}
@media screen and (min-width: 930px) {
  h4{
    text-align: center;
    margin: 0 0 10px;
  }
  p{
    margin: 0;
    font-size: 15px;
    text-align: left;
  }
  .textRight{
    text-align: right;
  }
  .contentCircle{
    flex-direction: row;
    justify-content: space-around;
    /*gap: 100px;*/
    max-width: 903px;
    /*background-color: blue;*/
    margin-left: auto;
    margin-right: auto;
  }
  .circle{
    height: 280px;
    width: 280px;
  }
  .contentCircleLeft{
    flex-direction: row-reverse;
  }
  .contentText{
    width: 500px;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  .devis{
    margin-top: 10px;
    font-size: 17px;
  }
}
@media screen and (min-width: 1200px){
  .shadow{
    font-size: 45px;
  }
}
</style>