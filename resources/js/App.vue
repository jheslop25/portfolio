<template>
  <v-app>
    <v-app-bar color="light-blue darken-3" app><the-nav class="d-none d-sm-flex"></the-nav><the-mobile-nav class="d-sm-none d-flex"></the-mobile-nav></v-app-bar>
    <v-content>
      <v-container fluid>
        
        <router-view></router-view>
        <div id="particles-js"></div>
      </v-container>
    </v-content>
    <v-footer class="p-4" color="light-blue darken-3"></v-footer>
  </v-app>
</template>

<script>
import "particles.js/particles";
import TheNav from "./components/reusable/TheNav";
import TheMobileNav from "./components/reusable/TheMobileNav.vue";

// const particlesJS = window.particlesJS;
export default {
  name: "App",
  components: {
    TheNav,
    TheMobileNav
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

<style>
/* ---- reset ---- */
body {
  margin: 0;
}
#particles-js {
  margin-top: -90vh;
  margin-left: -5vw;
  margin-bottom: -5vh;
  width: 105vw;
  height: 200vh;
  background-color: #e1f5fe;
  background-position: center;
  background-size: cover;
}
</style>