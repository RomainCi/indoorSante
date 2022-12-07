<template>
  <section>
    <h2>Nous rejoindre</h2>
    <div class="containerMap">
      <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2639.048013320379!2d7.762803415437351!3d48.58977952753629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c8f709d8796b%3A0x5f7e46b37e4884d2!2s10%20Rue%20Schiller%2C%2067000%20Strasbourg!5e0!3m2!1sfr!2sfr!4v1670185316440!5m2!1sfr!2sfr"
          width="315" height="315" style="border:none;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      <p>10 Rue Schiller, 67000 Strasbourg</p>
      <div class="line"></div>
    </div>
  </section>
  <section>
    <h2 class="title">Nous envoyer</h2>
    <h2>du courrier</h2>
    <p style="margin: 0;height: 27px">10 rue du Bain Aux Plantes
      67000 Strasbourg</p>
  </section>
</template>

<script>

export default {
  name: "MapComponent",
  data() {
    return {}
  },
  methods: {}
}
</script>

<style scoped>
section {
  background: #3CB9B1;
}

h2 {
  font-family: Amatic SC, sans-serif;
  text-align: center;
  font-size: 28px;
  color: white;
  text-transform: uppercase;
  Letter-spacing: 8px;
  margin: 0 0 30px;
}

.containerMap {
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
}

.containerMap p {
  color: white;
  font-family: Inter, sans-serif;
  font-size: 14px;
}
.line{
  width: 100px;
  height: 1px;
  background-color: white;
  margin-bottom: 20px;
}
.title{
  margin: 0;
}
p{
  color: white;
  font-family: Inter, sans-serif;
  font-size: 14px;
  text-align: center;
}
</style>