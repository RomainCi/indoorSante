<template>
  <div class="containerMain">
    <div class="containerTitle">
      <h1><span class="dispositif">Page de </span><span class="personnalise"><span class="shadow">c</span><span
          class="shadow">o</span><span class="shadow">n</span><span class="shadow letterT">t</span><span class="shadow">a</span><span
          class="shadow">c</span><span class="shadow">t</span></span>
      </h1>
    </div>
    <div class="containerToggle">
      <p @click="toggle = false">Grand publique /</p>
      <p @click="toggle = true">Pour les pros </p>
    </div>
    <form class="containerForm" @submit.prevent="sendForm">
      <div class="containerName">
        <input type="text" v-model="form.firstname" placeholder="prénom"/>
        <input type="text" v-model="form.lastname" placeholder="nom">
      </div>
      <input type="text" v-model="form.phone" placeholder="telephone">
      <input type="email" v-model="form.email" placeholder="email">
      <input v-show="toggle" v-model="form.occupation" type="text" placeholder="metier">
      <textarea v-model="form.content" placeholder="écrire texte ici"></textarea>
      <div class="containerRgpd">
        <label>RGPD</label>
        <input v-model="form.check" class="checkbox" type="checkbox">
      </div>
      <button>Envoyer</button>
    </form>

  </div>
</template>

<script>
export default {
  name: "ContactComponent",
  data() {
    return {
      toggle: false,
      form: {
        firstname: null,
        lastname: null,
        email: null,
        phone: null,
        content: null,
        occupation: null,
        check: null,
      }
    }
  },
  methods: {
    async sendForm() {
      console.log(this.form)
      const res = await axios.post('api/formulaire', this.form);
      console.log(res);
    }
  }
}
</script>

<style scoped>
.containerTitle {
  display: flex;
  justify-content: center;
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

.letterT {
  margin-right: 0.1px;
}

.containerToggle {
  display: flex;
  justify-content: center;
}

.containerToggle p {
  font-size: 17px;
  font-family: Inter, sans-serif;
  color: #B8B8B8;
}

.containerForm {
  display: flex;
  flex-direction: column;
  width: 80%;
  margin-right: auto;
  margin-left: auto;
}

input {
  /*padding: 0;*/
  margin: 4px 0 0;
  border-radius: 27px;
  border: 2px solid #7ACFCA;
  outline: none;
}

textarea {
  margin-top: 4px;
  border-radius: 3vw;
  height: 48px;
  resize: none;
  border: 2px solid #7ACFCA;
  outline: none;
}

.containerName {
  display: flex;
  justify-content: space-between;
  width: 100%;
  /*background-color: rebeccapurple;*/
}

.containerName input {
  width: 45%;
}

.containerRgpd {
  display: flex;
  flex-direction: row-reverse;
  justify-content: start;
}

.checkbox {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  -border-radius: 4px;
  height: 15px;
  width: 15px;
  background: #fff;
  border: 1px solid #7ACFCA;
}

.checkbox:checked {
  background: #7ACFCA;
}

button {
  width: 100px;
  margin-left: auto;
  margin-right: auto;
  border-radius: 18px;
  border: 2px solid #7ACFCA;
}
</style>