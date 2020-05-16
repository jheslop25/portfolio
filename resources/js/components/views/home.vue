<template>
  <div id="content">
    <v-row v-if="!showContact" align="center" justify="center">
      <v-col sm="5" md="5">
        <p class="h1 ml-2">John Heslop</p>
        <p class="h3 ml-2">Full-Stack Web Developer</p>
        <the-cta></the-cta>
      </v-col>
      <v-col class="d-none d-sm-flex" sm="4" md="3"></v-col>
    </v-row>
    <v-row v-if="showContact" justify="center">
      <v-col sm="5" md="5">
        <v-card>
          <v-card-title>Contact Me</v-card-title>
          <v-card-text>
            Have a question or want to work together?
            I am currently open to exploring new oportunities for both employment and contract work! I look forward to hearing from you!
          </v-card-text>
          <v-card-actions>
            <v-btn href="mailto:john@earthmountain.ca" color="light-blue accent-4" text>Email</v-btn>
            <v-btn href="tel:4038182749" color="light-blue accent-4" text>Phone</v-btn>
            <v-btn @click="toggleContact" text color="red accent-3">Back</v-btn>
          </v-card-actions>
        </v-card>
      </v-col>
      <v-spacer></v-spacer>
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