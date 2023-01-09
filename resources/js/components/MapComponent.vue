<template>
  <section>
    <div>
      <h2>Nous rejoindre</h2>
    </div>
    <div class="containerMap">
      <l-map
          style="height: 350px; width: 350px; border-radius: 100%;-moz-border-radius: 100%; -webkit-border-radius: 100%;"
          :min-zoom="minZoom" :max-zoom="maxZoom"
          :zoom="zoom"
          :center="center"
          :options="{zoomControl: false}"
      >
        <l-tile-layer :url="url" :attribution="attribution"></l-tile-layer>
        <l-marker :lat-lng="markerLatLng">
          <l-popup>Indoor-santé</l-popup>
        </l-marker>

      </l-map>
      <p>10 Rue Schiller, 67000 Strasbourg</p>
      <div class="line"></div>
      <button @click="openMap">Ouvrir sur map</button>
    </div>
  </section>
  <section class="containerAdresse">
    <h2 class="title">Nous envoyer</h2>
    <h2>du courrier</h2>
    <p style="margin: 0;height: 27px">10 rue du Bain Aux Plantes
      67000 Strasbourg</p>
  </section>
</template>

<script>
import {LCircle, LControlZoom, LIcon, LMap, LMarker, LPopup, LTileLayer} from "@vue-leaflet/vue-leaflet";
import "leaflet/dist/leaflet.css"

export default {
  name: "MapComponent",
  components: {
    LMap,
    LTileLayer,
    LMarker,
    LIcon,
    LPopup,
    LCircle,
    LControlZoom
  },
  data() {
    return {
      url: "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
      attribution:
          '&copy; <a target="_blank" href="http://osm.org/copyright">OpenStreetMap</a> contributors',
      zoom: 16,
      center: [48.589801, 7.764869],
      markerLatLng: [48.589801, 7.764869],
      minZoom: 3,
      maxZoom: 18,
      myPosition: null,
    }
  },
  methods: {
    openMap() {
      this.geolocation();
      console.log(this.myPosition)

    },
    async geolocation() {
      navigator.geolocation.getCurrentPosition(async (position) => {
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;
        this.myPosition = [latitude, longitude];
        window.open(`https://www.google.com/maps/dir/${this.myPosition[0]},${this.myPosition[1]}/10+Rue+Schiller,+67000+Strasbourg/@48.5870343,7.7441244,15z/data=!3m1!4b1!4m10!4m9!1m1!4e1!1m5!1m1!1s0x4796c8f709d8796b:0x5f7e46b37e4884d2!2m2!1d7.7649904!2d48.589788!3e0`, '_blank');
      });
    },
  }
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
  padding-top: 30px;
}

.containerMap {
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
  height: 450px;
  width: 100%;
  position: relative;
  z-index: 1;
  /*border-radius: 100%;*/

  /*-khtml-border-radius: 100%;*/
  /*-moz-border-radius: 100%;*/
}

.containerMap p {
  color: white;
  font-family: Inter, sans-serif;
  font-size: 14px;
}

.line {
  width: 100px;
  height: 1px;
  background-color: white;
  margin-bottom: 20px;
}

.title {
  margin: 0;
}

p {
  color: white;
  font-family: Inter, sans-serif;
  font-size: 14px;
  text-align: center;
}

button {
  width: 100px;
  margin-left: auto;
  margin-right: auto;
  border-radius: 18px;
  border: 2px solid white;
  background: white;
  color: #7ACFCA;
  height: 30px;
  font-family: Inter, sans-serif;
  font-weight: 400;
  font-size: 12px;
  position: relative;
  z-index: 4;
}

@media screen and (min-width: 1200px) {
  .containerAdresse {
    display: none;
  }

  section {
    background-color: white;
  }

  h2 {
    color: #3CB9B1;
  }

  p {
    color: #3CB9B1 !important;
  }

  button {
    background: linear-gradient(0deg, #3CB9B1, #3CB9B1),
    linear-gradient(0deg, #7ACFCA, #7ACFCA);
    border: 2px solid #7ACFCA;
    color: white;
  }

  .containerMap {
    justify-content: space-between;
  }
}
</style>