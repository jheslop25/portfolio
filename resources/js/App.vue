<template>
  <v-app>
    <v-app-bar color="light-blue darken-3" app><the-nav></the-nav></v-app-bar>
    <v-content>
        <router-view></router-view>
        <div id="particles-js"></div>
    </v-content>
    <v-footer class="p-4" color="light-blue darken-3" ></v-footer>
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
  margin-top: -40vh;
  width: 100vw;
  height: 120vh;
  background-color: #E1F5FE;
  background-position: center;
  background-size: cover;
}


</style>