<template>
  <v-app>
      <v-app-bar color="primary" app>

      </v-app-bar>
      <v-content>
          <v-container fluid>
              <router-view></router-view>
          </v-container>
      </v-content>
      <v-footer color="primary" app></v-footer>
  </v-app>
</template>

<script>
export default {
    name: 'App',
}
</script>

<style>

</style>