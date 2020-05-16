<template>
  <!-- <div id="content"> -->
    <v-row justify="center" id="content">
      <v-col sm="5" md="5">
        <p class="h1 p-3">John Heslop</p>
        <p class="h3 p-3">Full-Stack Web Developer</p>
        <the-cta></the-cta>
      </v-col>
      <!-- <v-col class="d-none d-sm-flex" sm="4" md="3"></v-col> -->
      <v-overlay dark="false" opacity="0.6" :value="overlay">
        <v-card max-width="400px" class="">
          <v-card-title>Contact Me</v-card-title>
          <v-card-text>
            Have a question or want to work together?
            I am currently open to exploring new oportunities for both employment and contract work! I look forward to hearing from you!
          </v-card-text>
          <v-card-actions>
            <v-btn href="mailto:john@earthmountain.ca" color="light-blue accent-4" text><v-icon left>mdi-mail</v-icon> Email</v-btn>
            <v-btn href="tel:4038182749" color="light-blue accent-4" text><v-icon left>mdi-phone</v-icon> Phone</v-btn>
            <v-btn text @click="overlay = false" color="light-blue darken-4"><v-icon left>mdi-close</v-icon> Close</v-btn>
          </v-card-actions>
        </v-card>
      </v-overlay>
    </v-row>
  <!-- </div> -->
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

}
</style>