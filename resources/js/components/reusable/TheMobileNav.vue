<template>
  <v-row justify="center">
      <v-spacer></v-spacer>
      <v-col>
          <router-link :to="{ name: 'home'}"><v-icon color="light-blue lighten-5" x-large>mdi-home-outline</v-icon></router-link>
      </v-col>
      <v-col>
          <v-icon  @click="showContact" color="light-blue lighten-5" x-large>mdi-card-account-phone-outline</v-icon>
      </v-col>
      <v-col>
          <router-link :to="{ name: 'work'}"><v-icon color="light-blue lighten-5" x-large>mdi-account-hard-hat</v-icon></router-link>
      </v-col>
      <v-spacer></v-spacer>
  </v-row>
</template>

<script>
export default {
    name: 'TheMobileNav',
    methods: {
    showContact() {
      this.$root.$emit("showContact");
    }
  }
}
</script>

<style>

</style>