<template>
  <v-row justify="center" align="center" id="content">
    <v-col md="10">
      <v-card shaped class="p-3">
        <v-card-title>Selected Projects</v-card-title>
        <v-row justify="center">
          <v-col md="4">
            <v-card>
              <v-img
                class="white--text align-end"
                height="200px"
                src="https://cdn.vuetifyjs.com/images/cards/docks.jpg"
              >
                <v-card-title>title</v-card-title>
              </v-img>
              <v-card-subtitle>subtitle</v-card-subtitle>
              <v-card-text>
                  <p>some text of a summary</p>
              </v-card-text>
              <v-card-actions>
                  <v-btn text color="light-blue accent-4" >view</v-btn>
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
  name: "work"
};
</script>

<style scoped>
#content {
  position: relative;
  top: 10vh;

}
</style>