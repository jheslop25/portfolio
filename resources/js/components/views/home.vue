<template>
  <div id="content">
    <v-row align="center" justify="center">
      <v-col sm="5" md="5">
        <p class="h1 ml-2">John Heslop</p>
        <p class="h3 ml-2">Full-Stack Web Developer</p>
        <the-cta></the-cta>
      </v-col>
      <v-col class="d-none d-sm-flex" sm="4" md="3"></v-col>
      <v-overlay light="true" :value="overlay">
        <v-card class="mt-12 ms-3">
          <v-card-title>Contact Me</v-card-title>
          <v-card-text>
            Have a question or want to work together?
            I am currently open to exploring new oportunities for both employment and contract work! I look forward to hearing from you!
          </v-card-text>
          <v-card-actions>
            <v-btn href="mailto:john@earthmountain.ca" color="light-blue accent-4" text>Email</v-btn>
            <v-btn href="tel:4038182749" color="light-blue accent-4" text>Phone</v-btn>
            <v-btn text @click="overlay = false" color="light-blue lighten-4"><v-icon left>mdi-close</v-icon> Close</v-btn>
          </v-card-actions>
        </v-card>
      </v-overlay>
    </v-row>
  </div>
</template>

<script>
import TheCta from "../reusable/TheCta";

export default {
  name: "home",
  methods: {
    toggleContact() {
      if (this.overlay == true) {
        this.overlay = false;
      } else {
        this.overlay = true;
      }
    }
  },
  data() {
    return {
      overlay: false
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