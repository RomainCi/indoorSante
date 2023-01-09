<template>
  <footer>
    <div class="line">
<!--      lol-->
    </div>
    <div class="containerSocial">
      <a href="https://www.instagram.com/indoor_sante/" target="_blank"> <img alt="instagram" :src="instagram"></a>
      <a href="https://www.facebook.com/indoorsante" target="_blank"> <img alt="facebook" :src="facebook"></a>
      <a href="https://www.linkedin.com/company/indoor-sante/" target="_blank"> <img alt="linkedin" :src="linkedin"></a>
      <img alt="telephone" :src="telephone">
      <img alt="mail" :src="mail">
    </div>
    <p><a href="#">Mentions légales</a></p>
  </footer>
</template>

<script>
import instagram from "../../assets/iconsSocial/Instagram_white.png"
import facebook from "../../assets/iconsSocial/Facebook_white.png"
import linkedin from "../../assets/iconsSocial/LinkedIN_white.png"
import telephone from "../../assets/iconsSocial/Phone_white.png"
import mail from "../../assets/iconsSocial/Mail_white.png"

export default {
  name: "FooterGreenComponent",
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
  background-color: #3CB9B1;
  height: 9.5vh;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.line {
  width: 100px;
  height: 1px;
  background-color: white;
}

.containerSocial {
  margin-top: 10px;
  display: flex;
  width: 100%;
  /*height: 100%;*/
  justify-content: center;
  gap: 15px;
}

.containerSocial img {
  cursor: pointer;
}

p {
  font-size: 0.5em;
  margin: 12px 0 0;
}

p a {
  font-family: Inter, sans-serif;
  text-decoration: none;
  color: white;
  cursor: pointer;
}
</style>