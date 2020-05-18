<template>
  <!-- <div id="content"> -->
    <v-row justify="center" id="content">
      <v-col sm="5" md="5">
        <p class="h1 pl-3">John Heslop</p>
        <p class="h3 pl-3">Full-Stack Web Developer</p>
        <the-cta class="pl-2"></the-cta>
      </v-col>
      <!-- <v-col class="d-none d-sm-flex" sm="4" md="3"></v-col> -->
      <v-overlay dark="false" opacity="0.6" :value="overlay">
      <v-card max-width="500px" class="m-3">
        <v-card-title>Contact Me</v-card-title>
        <v-card-text>
          Have a question or want to work together?
          I am currently open to exploring new oportunities for both employment and contract work! I look forward to hearing from you!
        </v-card-text>
        <v-card-actions>
          <v-btn href="mailto:john@earthmountain.ca" color="light-green darken-1" text>
            <v-icon left>mdi-mail</v-icon>Email
          </v-btn>
          <v-btn href="tel:4038182749" color="light-green darken-1" text>
            <v-icon left>mdi-phone</v-icon>Phone
          </v-btn>
          <v-btn href="https://www.linkedin.com/in/john-heslop-49ab57a4/" color="light-green darken-1" text>
            <v-icon >mdi-linkedin</v-icon>Linkedin
          </v-btn>
          <v-btn text @click="overlay = false" color="light-blue darken-1">
            <v-icon left>mdi-close</v-icon>Close
          </v-btn>
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