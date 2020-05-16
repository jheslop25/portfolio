<template>
    <v-row justify="left">
        <v-col>
            <router-link :to="{ name: 'contact'}"><v-btn text color="light-blue darken-4"><v-icon left>mdi-card-account-phone-outline</v-icon>Contact</v-btn></router-link>
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

}
</script>

<style>

</style>