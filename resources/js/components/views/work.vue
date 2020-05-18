<template>
  <v-row justify="center" align="center" id="content">
    <v-col md="10">
      <v-card class="p-3">
        <v-card-title>My Work</v-card-title>
        <v-row justify="center">
          <v-col md="4" v-for="item in list" v-bind:key="item.id">
            <v-card>
              <v-img
                class="white--text align-end"
                height="200px"
                src="https://cdn.vuetifyjs.com/images/cards/docks.jpg"
              >
                <v-card-title>{{item.name}}</v-card-title>
                <v-card-subtitle class="white--text">{{item.ext_url}}</v-card-subtitle>
              </v-img>
              <v-card-text>
                  <p>{{item.summary}}</p>
              </v-card-text>
              <v-card-actions>
                  <router-link :to="{ path: '/projects/' + item.id }"><v-btn text color="light-blue accent-4">view</v-btn></router-link>
              </v-card-actions>
            </v-card>
          </v-col>
        </v-row>
      </v-card>
    </v-col>
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
</template>

<script>
export default {
  name: "work",
  computed: {
      list: function(){
          return this.$store.state.list;
      }
  },
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

<style scoped>
#content {
  position: relative;
  top: 10vh;

}
</style>