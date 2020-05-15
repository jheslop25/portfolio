<template>
  <div id="content">
    <v-row align="center" justify="center">
      <v-col md="5">
        <p class="h1">John Heslop</p>
        <p class="h4">Full-Stack Web Developer</p>
      </v-col>
      <v-col md="3">
        <the-nav></the-nav>
      </v-col>
    </v-row>
  </div>
</template>

<script>

import TheNav from '../reusable/TheNav';

export default {
  name: "home",
  methods: {},
  data() {
    return {};
  },
  mounted() {},
  components: {
    TheNav
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