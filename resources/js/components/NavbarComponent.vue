<template>
  <div class="modal-overlay" v-show="toggle" @click="closeMenu"></div>
  <nav id="nav">
    <img alt="logo" :src="logo" class="logo" @click="this.$router.push({path:'/',hash:'#top'})">
    <div class="menu-hamburger">
      <i @click="openMenu" class="fa-solid fa-bars"></i>
    </div>
    <transition>
      <div :class="navLinks" id="navMain">
        <ul>
          <div>
            <li class="x" @click="closeMenu"><i class="fa-solid fa-xmark"></i></li>
            <li @click="closeMenu">
              <router-link :to="{name:'home', hash:'#top'}">Accueil</router-link>
            </li>
          </div>
          <li @click="closeMenu">
            <router-link :to="{name:'programme', hash:'#top'}">Programme</router-link>
          </li>
          <li @click="closeMenu">
            <router-link :to="{name:'qui', hash:'#top'}">Qui sommes-nous</router-link>
          </li>
          <li @click="closeMenu">
            <router-link :to="{name:'offres', hash:'#top'}">Offres</router-link>
          </li>
          <li @click="closeMenu">
            <router-link :to="{name:'créneaux', hash:'#top'}">Créneaux</router-link>
          </li>
          <li @click="closeMenu">
            <router-link :to="{name:'contact', hash:'#top'}">Contact</router-link>
          </li>
        </ul>
      </div>
    </transition>
  </nav>
</template>

<script>
import logo from "../../assets/logo.png";

export default {
  name: "NavbarComponent",
  data() {
    return {
      toggle: false,
      navLinks: "close",
      logo: logo
    }
  },
  methods: {
    openMenu() {
      this.navLinks = "open";
      this.toggle = true;
    },
    closeMenu() {
      this.navLinks = "close";
      this.toggle = false;
    },
  }
}
</script>

<style scoped>
.open {
  width: 0;
}

/*.test{*/
/*  background-color: red;*/
/*  position: sticky;*/
/*  top: 10px;*/
/*}*/
@font-face {
  font-family: 'Inter';
  font-weight: 400;
  src: url("/resources/assets/fonts/Inter-Regular.ttf") format('truetype');
}

.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 98;
  height: 100%;
  cursor: pointer;
  background-color: #1d1d1dcc;
}

.logo {
  height: 50px;
  align-self: center;
  margin-left: 30px;
  cursor: pointer;
}

nav {
  display: flex;
  justify-content: space-between;
  height: 8.5Vh;
  width: 100%;
  /*border-bottom: 1px solid black;*/
  box-shadow: 0px 3px 5px -4px rgba(0, 0, 0, 0.75);
  -webkit-box-shadow: 0px 3px 5px -4px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: 0px 3px 5px -4px rgba(0, 0, 0, 0.75);
  /*position: sticky;*/
  /*top:30px;*/
  /*background-color: red;*/
  /*z-index: 200;*/
}

nav p {
  margin-left: 30px;
  align-self: center;
}

nav .menu-hamburger {
  display: flex;
  flex-direction: column;
  gap: 5px;
  margin-right: 30px;
  justify-content: center;
}

nav .menu-hamburger i {
  color: #7ACFCA;
  position: absolute;
  right: 30px;
  font-size: 25px;
}

ul {
  list-style-type: none;
}

a {
  text-decoration: none;
  color: #3CB9B1;
}

@media screen and (max-width: 900px) {
  .close {
    position: fixed;
    right: -700px;
    height: 100vh;
    width: 0;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    background-color: white;
    transition: all 0.5s ease-in;
    z-index: 100;
  }

  .open {
    position: fixed;
    top: 0;
    right: 0;
    height: 100vh;
    width: 280px;
    display: flex;
    align-items: flex-start;
    background-color: white;
    transition: all 0.5s ease;
    z-index: 100;
  }

  ul {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    gap: 20px;
    align-items: flex-end;
    margin: 0;
    padding: 0;
  }

  ul li {
    margin-right: 30px;
    margin-top: 30px;
    font-family: Inter, sans-serif;
    font-size: 1.5em;
    height: fit-content;

  }

  .x {
    margin-left: 30px;
  }

  i {
    color: #3CB9B1;
    cursor: pointer;
  }

  ul div {
    display: flex;
    justify-content: space-between;
    width: 280px;
    height: fit-content;
  }
}

@media screen and (min-width: 900px) {
  i {
    display: none;
  }

  ul {
    display: flex;
    justify-content: flex-end;
    margin: 0 30px 0 0;
    align-items: center;
    gap: 40px;
    padding: 0;
    height: 100%;
  }

  a::after {
    display: block;
    content: "";
    border-bottom: solid 2px;
    transform: scaleX(0);
    transition: transform 250ms ease-in-out;
    transform-origin: 0 50%;
  }

  a:hover::after {
    transform: scaleX(1);
  }
}

</style>