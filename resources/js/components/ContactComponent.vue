<template>
  <section class="containerMain">
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
        <input :class="firstnameC" @blur="v$.form.firstname.$touch" type="text" v-model="form.firstname"
               placeholder="prénom"/>
        <div v-if="v$.form.firstname.$error" style="display: none">
          {{ this.firstnameC = "notCorrect" }}
        </div>
        <div v-else style="display: none">
          {{ this.firstnameC = "correct" }}
        </div>

        <input :class="lastnameC" @blur="v$.form.lastname.$touch" type="text" v-model="form.lastname" placeholder="nom">
        <div style="display: none" v-if="v$.form.lastname.$error">
          {{ this.lastnameC = "notCorrect" }}
        </div>
        <div style="display: none" v-else>
          {{ this.lastnameC = "correct" }}
        </div>
      </div>

      <input :class="phoneC" @blur="v$.form.phone.$touch" type="text" @input="phone" :value="form.phone" maxlength="10"
             minlength="10" placeholder="telephone"/>
      <div style="display: none" v-if="v$.form.phone.$error">
        {{ this.phoneC = "notCorrect" }}
      </div>
      <div style="display: none" v-else>
        {{ this.phoneC = "correct" }}
      </div>
      <input :class="emailC" @blur="v$.form.email.$touch" type="email" v-model="form.email" placeholder="email">
      <div style="display: none" v-if="v$.form.email.$error">
        {{ this.emailC = "notCorrect" }}
      </div>
      <div style="display: none" v-else>
        {{ this.emailC = "correct" }}
      </div>
      <input v-if="toggle" v-model="form.occupation" type="text"
             placeholder="metier">
      <textarea :class="contentC" @blur="v$.form.content.$touch" v-model="form.content"
                placeholder="écrire texte ici"></textarea>
      <div style="display: none" v-if="v$.form.content.$error">
        {{ this.contentC = "notCorrectT" }}
      </div>
      <div style="display: none" v-else>
        {{ this.contentC = "correctT" }}
      </div>
      <div class="containerRgpd">
        <label>RGPD</label>
        <input v-model="form.check" class="checkbox" type="checkbox">
      </div>
      <button>Envoyer</button>
    </form>
    <div class="containerVerification" v-if="show">
      <p>Un lien de vérification vous est envoyé sur votre email, vous avez 10 min pour cliquer sur le lien </p>
    </div>
    <img alt="vector" class="vector" :src="vector">
  </section>
</template>

<script>
import vector from "../../assets/Vector 2.png"
import useVuelidate from "@vuelidate/core"
import {email, maxLength, minLength, required} from "@vuelidate/validators"
import axios from "axios";

export default {
  name: "ContactComponent",
  setup() {
    return {v$: useVuelidate()};
  },
  validations() {
    return {
      form: {
        lastname: {required},
        firstname: {required},
        phone: {
          required,
          minLength: minLength(10),
          maxLength: maxLength(10)
        },
        email: {required, email},
        content: {required},
      }
    }
  },
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
      },
      lastnameC: "correct",
      firstnameC: "correct",
      phoneC: "correct",
      emailC: "correct",
      contentC: "correctT",
      show: false,
      vector: vector,
    }
  },
  methods: {
    async sendForm() {
      if (this.toggle === false) {
        this.form.occupation = null;
      }
      console.log(this.form)
      const res = await axios.post("api/formulaire", this.form);
      console.log(res);
      if (res.data.message === "success") {
        this.show = true;
      }
    },
    phone(e) {
      if (isNaN(e.target.value)) {
        e.target.value = this.form.phone;
        return;
      }
      this.form.phone = e.target.value;
    },
  }
}
</script>

<style scoped>
.containerMain{
  height: 70vh;
  position: relative;
}
.correct {
  margin: 4px 0 0;
  border-radius: 27px;
  border: 2px solid #7ACFCA;
  outline: none;
  color: #3CB9B1;
  font-family: Inter, sans-serif;
  padding: 1px 4px 1px 4px;
}

.notCorrect {
  margin: 4px 0 0;
  border-radius: 27px;
  border: 2px solid red;
  outline: none;
  color: #3CB9B1;
  font-family: Inter, sans-serif;
  padding: 1px 4px 1px 4px;
}

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
  margin: 4px 0 0;
  border-radius: 27px;
  border: 2px solid #7ACFCA;
  outline: none;
  color: #3CB9B1;
  font-family: Inter, sans-serif;
  padding: 1px 4px 1px 4px;
}

.correctT {
  margin-top: 4px;
  border-radius: 3vw;
  height: 125px;
  resize: none;
  border: 2px solid #7ACFCA;
  outline: none;
  color: #3CB9B1;
  font-family: Inter, sans-serif;
  padding: 4px 4px 4px 4px;
  font-size: 14px;
  position: relative;
  z-index: 4;
}

.notCorrectT {
  border: 2px solid red;
  margin-top: 4px;
  border-radius: 3vw;
  height: 125px;
  resize: none;
  outline: none;
  color: #3CB9B1;
  font-family: Inter, sans-serif;
  padding: 4px 4px 4px 4px;
  font-size: 14px;
  position: relative;
  z-index: 4;
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
  position: relative;
  z-index: 4;
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
  background: linear-gradient(0deg, #3CB9B1, #3CB9B1),
  linear-gradient(0deg, #7ACFCA, #7ACFCA);
  color: white;
  height: 30px;
  font-family: Inter, sans-serif;
  font-weight: 400;
  font-size: 12px;
  position: relative;
  z-index: 4;
}

.containerVerification {
  width: 80%;
  margin-left: auto;
  margin-right: auto;
}

.containerVerification p {
  font-weight: 400;
  font-family: Inter, sans-serif;
  font-size: 12px;
  color: #3CB9B1;
  text-align: justify;
}

.vector {
  width: 100%;
  height: 24vh;
  position: absolute;
  bottom: 0;
  z-index: 1;
}
</style>