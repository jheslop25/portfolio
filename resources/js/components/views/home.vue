<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-title>hello world</v-card-title>
      </v-card>
    </v-col>
  </v-row>
</template>

<script>
//import particlesJS from "particles.js";

export default {
  name: "home",
  methods: {},
  data() {
    return {};
  },
  mounted() {
    particlesJS.load("particles-js", 'js/particles.json', function() {
      console.log("callback - particles-js config loaded");
    });
  }
};
</script>
<style scoped>
</style>