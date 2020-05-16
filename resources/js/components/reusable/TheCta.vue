<template>
    <v-row justify="left">
        <v-col>
            <v-btn @click="showContact" text color="light-blue darken-4"><v-icon left>mdi-card-account-phone-outline</v-icon>Contact</v-btn>
        </v-col>
        <v-col>
            <router-link :to="{ name: 'work'}"><v-btn text color="light-blue darken-4"><v-icon left>mdi-account-hard-hat</v-icon>Work</v-btn></router-link>
        </v-col>
        <v-spacer></v-spacer>
    </v-row>
</template>

<script>
export default {
    name: 'TheNav',
    methods: {
        showContact: function(){
            this.$root.$emit('showContact');
        }
    }
}
</script>

<style>

</style>