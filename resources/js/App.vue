<template>
  <v-app>
    <v-app-bar color="light-blue darken-4" app><the-nav></the-nav></v-app-bar>
    <v-content>
        <router-view></router-view>
        <div id="particles-js"></div>
    </v-content>
    <v-footer class="p-3" color="light-blue darken-4" app></v-footer>
  </v-app>
</template>

<script>
import "particles.js/particles";

import TheNav from './components/reusable/TheNav';
// const particlesJS = window.particlesJS;
export default {
  name: "App",
  components: {
    TheNav
  },
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
  
}
#particles-js {
  margin-top: -20vh;
  width: 100vw;
  height: 90vh;
}


</style>