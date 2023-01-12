<template>
  <section>
    <div class="containerTitle">
      <h1><span class="personnalise"><span class="shadow">q</span><span
          class="shadow">u</span><span class="shadow">i </span><span class="shadow">s</span><span
          class="shadow">o</span><span
          class="shadow">m</span><span class="shadow">m</span><span class="shadow">e</span><span class="shadow">s</span><span
          class="shadow">-</span><span class="shadow">n</span><span class="shadow">o</span><span class="shadow">u</span><span
          class="shadow">s</span><span class="shadow">?</span></span>
      </h1>
    </div>
    <div class="containerCircle">
      <div class="circle"></div>
      <div class="contentP">
        <p><span>2017 </span><br>Née de la collaboration entre des professionnels de l’activité physique et sportive, des
          médecins
          et des enseignants-chercheurs, l’association Indoor-Santé est le fruit du mariage de trois
          mondes : le sport, la santé et la recherche.
          Ses activités se destinent à tout type de public pratiquant l’activité physique pour sa santé ou
          son bien-être.</p>
      </div>
    </div>
    <div class="containerCircle">
      <div class="contentP contentPRight">
        <p><span>2018 </span><br>Indoor Santé propose ses activités dans différents espaces partenaires situés dans quatre
          quartiers strasbourgeois : la Robertsau, l’Orangerie, la Meinau et la Petite France.</p>
      </div>
      <div class="circle"></div>
    </div>
    <div class="containerCircle">
      <div class="circle"></div>
      <div class="contentP">
        <p><span>2020 </span><br>En raison de la situation sanitaire liée à la pandémie de COVID-19 et en veille de confinement,
          Indoor Santé vide ses espaces de pratique et dépose son matériel au domicile des adhérents.
          Ainsi, toutes et tous continuent de pratiquer leur activité physique dédiée à leur santé. En
          parallèle est développé un accompagnement d’activité physique à distance où deux éducateurs
          sportifs encadrent simultanément la séance, la personnalisent et assurent la sécurité des
          pratiquants.</p>
      </div>
    </div>
    <div class="containerCircle">
      <div class="contentP contentPRight">
        <p><span>2022 </span><br>Indoor Santé ouvre ses propres locaux au sein de la Villa Knopf, située au 10 rue Schiller 67000
          Strasbourg. Activités et événements prennent place dans ce nouveau lieu de vie sport santé
          bien-être au cœur de Strasbourg. Les espaces situés à l’Orangerie et à la Petite France restent
          également en activité.</p>
      </div>
      <div class="circle"></div>
    </div>
  </section>
</template>

<script>
export default {
  name: "QuiSommesNousComponent"
}
</script>

<style scoped>
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

.personnalise {
  width: fit-content;
}
span{
  font-size: 20px;
}
.containerCircle {
  display: flex;
  justify-content: center;
  margin-top: 50px;
  gap: 25px;
  align-items: center;
}

.contentP {
  width: 50%;
  font-size: 13px;
  color: #3CB9B1;
  font-family: Inter, sans-serif;
}

.contentPRight {
  text-align: end;
}

.circle {
  height: 136px;
  width: 136px;
  border-radius: 50%;
  background-color: red;
}
@media screen and (min-width: 1200px){
  .shadow{
    font-size: 45px;
  }
}
</style>