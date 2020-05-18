<template>

    <v-row >
     
      <v-col sm="2" md="1">
        <router-link :to="{ name: 'home'}">
          <v-btn text color="light-blue lighten-5">
            <v-icon left>mdi-home-outline</v-icon>Home
          </v-btn>
        </router-link>
      </v-col>
      <v-col sm="2" md="1">
        <router-link :to="{ name: 'home'}">
          <v-btn @click="showContact" text color="light-blue lighten-5">
            <v-icon left>mdi-card-account-phone-outline</v-icon>Contact
          </v-btn>
        </router-link>
      </v-col>
      <v-col sm="2" md="1">
        <router-link :to="{ name: 'work'}">
          <v-btn text color="light-blue lighten-5">
            <v-icon left>mdi-account-hard-hat</v-icon>Work
          </v-btn>
        </router-link>
      </v-col>
      <v-col sm="2" md="1">
        <router-link :to="{ name: 'bio'}">
          <v-btn text color="light-blue lighten-5">
            <v-icon left>mdi-biohazard</v-icon>My Bio
          </v-btn>
        </router-link>
      </v-col>
    </v-row>

</template>

<script>
export default {
  name: "TheNav",
  methods: {
    showContact() {
      setTimeout( ()=>{
        this.$root.$emit("showContact");
      }, 500);
    }
  }
};
</script>

<style>
</style>