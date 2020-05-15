<template>
  <v-app>
    <v-app-bar color="light-blue darken-4" app></v-app-bar>
    <v-content>
    
        <router-view></router-view>
        <canvas id="particles-js"></canvas>
      
    </v-content>
    <v-footer class="p-3" color="light-blue darken-4" app></v-footer>
  </v-app>
</template>

<script>
import "particles.js/particles";
const particlesJS = window.particlesJS;
export default {
  name: "App",
  components: {},
  data: function() {
    return {};
  },
  methods: {
    getList: function() {
      axios
        .get("/list")
        .then(result => {
          console.log(result.data.msg);
        })
        .catch(err => {
          console.log(err);
        });
    }
  },
  mounted() {
    this.getList();
    particlesJS.load("particles-js", "/js/particles.json", function() {
      console.log("callback - particles-js config loaded");
    });
  }
};
</script>

<style scoped>
/* ---- reset ---- */
body {
  margin: 0;
  font: normal 75% Arial, Helvetica, sans-serif;
}
canvas {
  position: absolute;
  top: 0;
  left: 0;
  width: 100vw;
  height: 90vh;
} /* ---- particles.js container ---- */


</style>