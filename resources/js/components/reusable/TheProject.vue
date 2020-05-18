<template>
  <v-row justify="center">
    <v-col md="10">
      <v-card>
        <v-img
          class="white--text align-end rounded"
          max-height="200px"
          max-width="300px"
          src="/photos/stars2.jpg"
        >
          <v-card-title>{{project.name}}</v-card-title>
          <a :href="'http://' + project.ext_url">
            <v-card-subtitle class="white--text">{{project.ext_url}}</v-card-subtitle>
          </a>
        </v-img>

        <v-card-text class="p-5">
          <p class="h4">Summary</p>
          <p>{{project.summary}}</p>
        </v-card-text>
        <v-row class="m-3" v-for="post in project.posts" v-bind:key="post.id">
          <v-col>
            <v-card>
              <p class="h4 m-3 pt-1">{{post.title}}</p>
              <v-card-subtitle>{{post.subtitle}}, {{post.create_at}}</v-card-subtitle>

              <v-card-text>
                <p>{{post.para_1}}</p>
                <br />
                <p>{{post.para_2}}</p>
                <br />
                <p>{{post.para_3}}</p>
                <br />
                <p>{{post.para_4}}</p>
                <br />
                <p>{{post.para_5}}</p>
                <br />
                <p>{{post.para_6}}</p>
                <br />
              </v-card-text>
            </v-card>
          </v-col>
        </v-row>
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
  name: "Project",
  data() {
    return {
      project: null,
      overlay: false
    };
  },
  methods: {
    getProject() {
      let id = this.$route.params.id;
      axios
        .post("/get", {
          input: id
        })
        .then(result => {
          console.log(result.data);
          this.project = result.data.project;
        })
        .catch(err => {
          console.log(err);
        });
    },
    toggleContact() {
      if (this.overlay == true) {
        this.overlay = false;
      } else {
        this.overlay = true;
      }
    }
  },
  mounted() {
    this.getProject();
    this.$root.$on("showContact", this.toggleContact);
  }
};
</script>

<style>
</style>