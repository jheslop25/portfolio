<template>
  <v-app>
    <v-app-bar color="light-blue darken-4" app></v-app-bar>
    <v-content>
      <v-container fluid id="particles-js">
        <router-view></router-view>
      </v-container>
    </v-content>
    <v-footer color="light-blue darken-4" app></v-footer>
  </v-app>
</template>

<script>
import 'particles.js/particles';
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
</style>