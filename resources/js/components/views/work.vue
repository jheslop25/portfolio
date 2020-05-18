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
  </v-row>
</template>

<script>
export default {
  name: "work",
  computed: {
      list: function(){
          return this.$store.state.list;
      }
  }
};
</script>

<style scoped>
#content {
  position: relative;
  top: 10vh;

}
</style>