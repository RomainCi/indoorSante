<template>
  <section>
    <h1>Nous rejoindre</h1>
    <div class="containerImg">
      <!--      <img :src="map" alt="map">-->
      <l-map :LControlZoom="false" style="width: 315px;height: 315px;border-radius: 50%" :zoom="16" :center="center"
             :options="{zoomControl: false}">
        <l-tile-layer :url="url" :attribution="attribution"></l-tile-layer>
        <l-marker :lat-lng="center"></l-marker>
      </l-map>
      <p>10 Rue Schiller,67000 Strasbourg</p>
      <button @click="openMap">Ouvrir sur Maps</button>
      <!--      <a href="https://www.google.com/maps/dir//10+Rue+Schiller,+67000+Strasbourg">lol</a>-->
    </div>
  </section>
</template>

<script>
// var map = L.map("map", {
//   zoomControl: false
//   //... other options
// });
import map from "../../assets/map.png"
import "leaflet/dist/leaflet.css"
import {LMap, LMarker, LTileLayer} from "@vue-leaflet/vue-leaflet";

export default {
  name: "MapComponent",
  components: {
    LMap,
    LTileLayer,
    LMarker,
  },
  data() {
    return {
      map: map,
      url: "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
      attribution:
          '&copy; <a target="_blank" href="http://osm.org/copyright">OpenStreetMap</a> contributors',
      center: [48.5897387, 7.7649468],
    }
  },
  // async beforeMount() {
  //   // HERE is where to load Leaflet components!
  //   const {circleMarker} = await import("leaflet/dist/leaflet-src.esm");
  //
  //   // And now the Leaflet circleMarker function can be used by the options:
  //   this.geojsonOptions.pointToLayer = (feature, latLng) =>
  //       circleMarker(latLng, {radius: 8});
  //   this.mapIsReady = true;
  // },
  methods: {
    openMap() {
      window.location.href = "https://www.google.fr/maps/place/48%C2%B035'23.1%22N+7%C2%B045'53.8%22E/@48.5897387,7.7649468,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xafa051be41110159!8m2!3d48.5897387!4d7.7649468"
      // window.location.href = "https://www.google.com/maps/dir//10+Rue+Schiller,+67000+Strasbourg/@48.5901171,7.750488,13z/data=!4m7!4m6!1m1!4e2!1m2!1m1!1s0x4796c8f709d8796b:0x5f7e46b37e4884d2!3e0";
    }
  }
}
</script>

<style scoped>
section {
  background: #3CB9B1;
}

h1 {
  font-family: Amatic SC, sans-serif;
  margin: 0;
  text-align: center;
  font-size: 28px;
  color: white;
  text-transform: uppercase;
  Letter-spacing: 8px;
}

.containerImg {
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
}

.containerImg img {
  width: 80%;
}

.containerImg p {
  color: white;
  font-family: Inter, sans-serif;
  font-size: 14px;
}

.mapTest {
  height: 345px;
  width: 345px;
}

.test {
  border-radius: 100%;
}

.place-card {
  display: none;
}

.leaflet-control-zoom {
  display: none;
}
</style>