<template>
  <v-row>
      <v-col>
          <v-card-title>hello contact</v-card-title>
      </v-col>
      <v-col>
          <the-nav></the-nav>
      </v-col>
  </v-row>
</template>

<script>
import TheNav from '../reusable/TheNav.vue';

export default {
    name: 'contact',
    components: {
        TheNav
    }
}
</script>

<style>

</style>