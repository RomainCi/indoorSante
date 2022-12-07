<template>
  <section>
    <div class="containerTitle">
      <h1><span class="dispositif">Nos</span><span class="personnalise"><span class="shadow">o</span><span
          class="shadow">f</span><span class="shadow">f</span><span class="shadow">r</span><span
          class="shadow">e</span><span
          class="shadow">s</span></span>
      </h1>
      <h2>A la demande</h2>
    </div>
    <div class="containerCircle">
      <div class="contentCircle">
        <div class="circle"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dicta distinctio est ex fugiat hic laborum
          nihil, odio officiis optio provident quos reiciendis repudiandae rerum soluta ullam voluptatem! Adipisci,
          sunt.</p>
      </div>
      <div class="contentCircle">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dicta distinctio est ex fugiat hic laborum
          nihil, odio officiis optio provident quos reiciendis repudiandae rerum soluta ullam voluptatem! Adipisci,
          sunt.</p>
        <div class="circle"></div>
      </div>
      <div class="contentCircle">
        <div class="circle"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dicta distinctio est ex fugiat hic laborum
          nihil, odio officiis optio provident quos reiciendis repudiandae rerum soluta ullam voluptatem! Adipisci,
          sunt.</p>
      </div>
      <div class="button">
        <button @click="this.$router.push({path:'/contact#formulaire'})"><a href="#nav">Page contact</a></button>
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
  /*flex-direction: column;*/
  align-items: center;
  justify-content: center;
}

.contentCircle {
  display: flex;
  gap: 20px;
}

.circle {
  height: 136px;
  width: 136px;
  background-color: red;
  border-radius: 50%;
}

p {
  width: 50%;
  background-color: yellow;
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
a{
  text-decoration: none;
  color: white;
  font-family: Inter, sans-serif;
  font-weight: 400;
  font-size: 12px;
}
</style>