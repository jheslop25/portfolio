<template>
  <div id="content">
    <v-row align="center" justify="center">
      <v-col sm="5" md="5">
        <p class="h1 ml-2">John Heslop</p>
        <p class="h3 ml-2">Full-Stack Web Developer</p>
        <the-cta></the-cta>
      </v-col>
      <v-col class="d-none d-sm-flex" sm="4" md="3"></v-col>
    </v-row>
  </div>
</template>

<script>
import TheCta from "../reusable/TheCta";

export default {
  name: "home",
  methods: {
    toggleContact() {
      if (this.showContact == true) {
        this.showContact = false;
      } else {
        this.showContact = true;
      }
    }
  },
  data() {
    return {
      showContact: false
    };
  },
  mounted() {
    this.$root.$on("showContact", this.toggleContact);
  },
  components: {
    TheCta
  }
};
</script>
<style scoped>
#content {
  position: relative;
  top: 30vh;
  left: 5vw;
}
</style>