<template>
   <v-row class="d-none d-sm-flex">
       <v-spacer></v-spacer>
       <v-col sm="2" md="1">
            <router-link :to="{ name: 'home'}"><v-btn text color="light-blue lighten-5"><v-icon left>mdi-home-outline</v-icon>Home</v-btn></router-link>
        </v-col>
        <v-col sm="2" md="1">
            <router-link :to="{ name: 'contact'}"><v-btn text color="light-blue lighten-5"><v-icon left>mdi-card-account-phone-outline</v-icon>Contact</v-btn></router-link>
        </v-col>
        <v-col sm="2" md="1">
            <router-link :to="{ name: 'work'}"><v-btn text color="light-blue lighten-5"><v-icon left>mdi-account-hard-hat</v-icon>Work</v-btn></router-link>
        </v-col>
    </v-row>
</template>

<script>
export default {
    name: 'TheNav',
    methods: {
        showContact(){
            this.$root.$emit('showContact');
        }
    }
}
</script>

<style>

</style>