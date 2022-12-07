<template>
  <section>
    <div class="container">
      <h2>Texte</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum eligendi eveniet hic ipsa neque quidem
        voluptatum! Autem dicta, doloribus id laboriosam nesciunt quisquam sed! Alias fugiat in natus nisi sint?</p>
    </div>
  </section>
  <section>
    <div class="containerTitle">
      <h1><span class="personnalise"><span class="shadow">l</span><span
          class="shadow">'</span><span class="shadow">é</span><span class="shadow">q</span><span
          class="shadow">u</span><span
          class="shadow">i</span><span class="shadow">p</span><span class="shadow">e</span></span>
      </h1>
    </div>
    <div class="containerPhoto">
      <div class="containerCircle">
        <img class="circle" :src="photo.gilles" alt="gilles">
        <p>Bloch Gilles</p>
        <p>Président</p>
      </div>
      <div class="containerCircle">
<!--        <div class="circle"></div>-->
        <img class="circle" :src="photo.cyprien" alt="cyprien">
        <p>nom et prénom</p>
        <p>Post</p>
      </div>
      <div class="containerCircle">
<!--        <div class="circle"></div>-->
        <img class="circle" :src="photo.quentin" alt="quentin">
        <p>nom et prénom</p>
        <p>Post</p>
      </div>
      <div class="containerCircle">
        <div class="circle"></div>
        <p>nom et prénom</p>
        <p>Post</p>
      </div>
      <div class="containerCircle">
        <div class="circle"></div>
        <p>nom et prénom</p>
        <p>Post</p>
      </div>
      <div class="containerCircle">
        <div class="circle"></div>
        <p>nom et prénom</p>
        <p>Post</p>
      </div>
    </div>
  </section>
</template>

<script>
import gilles from "../../assets/photoEquipe/Gilles BLOCH.png"
import cyprien from "../../assets/photoEquipe/unnamed.png"
// import quentin from "../../assets/photoEquipe/quentin.jpg"
import test from "../../assets/photoEquipe/IMG_1819.png"
export default {
  name: "EquipeComponent",
  data(){
    return{
      photo:{
        gilles : gilles,
        cyprien: cyprien,
        quentin:test
      }
    }
  }
}
</script>

<style scoped>
.container {
  width: 310px;
  background: #3CB9B1;
  margin-right: auto;
  margin-left: auto;
  margin-top: 75px;
  height: 200px;
  border-radius: 32px;
  padding: 10px;
}

.container h2 {
  text-align: center;
  color: white;
  font-family: Inter, sans-serif;
  font-size: 28px;
  margin: 0;
}

.container p {
  text-align: left;
  font-size: 15px;
  color: white;
  font-family: Inter, sans-serif;
}

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

.containerPhoto {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  justify-content: center;
}

.circle {
  height: 110px;
  width: 110px;
  border-radius: 50%;
  margin-top: 60px;
  background-color: red;
}

.containerCircle {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.containerCircle p {
  margin: 10px 0 0;
  font-family: Inter, sans-serif;
  font-size: 14px;
  color: #3cb9b1;
}

</style>