<template>
  <v-row justify="center">
    <v-col md="10">
      <v-card>
        <v-row justify="center">
          <v-img class="rounded" max-width="290px" max-height="350px" src="/photos/me.png"></v-img>
          <v-col md="6">
            <p class="h1 p-2">About Me</p>
            <p
              class="h5 p-2"
            >Hi! I’m John, a full-stack web developer based in Calgary, AB, Canada. When I’m not hammering away on a keyboard you can probably find me either growing or cooking food and maybe watching the occasional show on Netflix (I have even been known to ‘chill’).</p>
            <p class="h2 p-2">My Skills</p>
            <p class="h5 ps-2">Languages: PHP, JavaScript, HTML, SASS, CSS</p>
            <p class="h5 ps-2">Frameworks: Laravel, Vue.js</p>
          </v-col>
        </v-row>
        <!-- <v-row justify="center" align="center">
          <v-col md="4">
            <p class="h2 p-2">My Skills</p>
          </v-col>
          <v-col md="5">
            <p class="h5 ps-2">Languages: PHP, JavaScript, HTML, SASS, CSS</p>
            <p class="h5 ps-2">Frameworks: Laravel, Vue.js</p>
          </v-col>
        </v-row> -->
      </v-card>
    </v-col>
    <v-overlay dark="false" opacity="0.6" :value="overlay">
      <v-card max-width="400px" class="m-3">
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
          <v-btn text @click="overlay = false" color="light-blue darken-1">
            <v-icon left>mdi-close</v-icon>Close
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-overlay>
  </v-row>
</template>

<script>
export default {
  name: "bio",
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
  }
};
</script>

<style>
</style>