<template>
  <footer :style="{
              'background-color': `${back}`,
            }">
    <div class="line"></div>
    <div  class="containerSocial">
      <img alt="instagram" :src="instagram">
      <img alt="facebook" :src="facebook">
      <img alt="linkedin" :src="linkedin">
      <img alt="telephone" :src="telephone">
      <img alt="mail" :src="mail">
    </div>
    <p><a href="#">Mentions légales</a></p>
  </footer>
</template>

<script>
import instagram from "../../assets/iconsSocial/Instagram_green.png"
import facebook from "../../assets/iconsSocial/Facebook_green.png"
import linkedin from "../../assets/iconsSocial/LinkedIN_green.png"
import telephone from "../../assets/iconsSocial/Phone_green.png"
import mail from "../../assets/iconsSocial/Mail_green.png"
export default {
  name: "FooterWhiteComponent",
  props:{
    back:String
  },
  data() {
    return {
      instagram: instagram,
      facebook: facebook,
      linkedin: linkedin,
      telephone: telephone,
      mail: mail,
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
footer {
  height:7.5vh;
  display: flex;
  flex-direction: column;
  align-items: center;
}
.line{
  width: 100px;
  height: 1px;
  background-color: #3CB9B1;
}
.containerSocial{
  margin-top: 10px;
  display: flex;
  width: 100%;
  /*height: 100%;*/
  justify-content: center;
  gap: 15px;
}
.containerSocial img{
  cursor: pointer;
}
p{
  font-size: 0.5em;
  margin: 12px 0 0;
}
p a {
  font-family: Inter, sans-serif;
  text-decoration: none;
  color: #3CB9B1;
  cursor: pointer;
}
</style>