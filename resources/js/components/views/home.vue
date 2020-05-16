<template>
  <div id="content">
    <v-row align="center" justify="center">
      <v-col sm="5" md="5">
        <p class="h1">John Heslop</p>
        <p class="h3">Full-Stack Web Developer</p>
         <the-cta></the-cta>
      </v-col>
      <v-col sm="4" md="3">
       
      </v-col>
    </v-row>
  </div>
</template>

<script>

import TheCta from '../reusable/TheCta';

export default {
  name: "home",
  methods: {},
  data() {
    return {};
  },
  mounted() {},
  components: {
    TheCta
  }
};
</script>
<style scoped>
#content {
  position: relative;
  top: 35vh;
  left: 5vw;
}
</style>