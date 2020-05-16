<template>
    <v-row justify="left">
        <v-col>
            <router-link :to="{ name: 'contact'}"><v-btn color="orange lighten-1"><v-icon left>mdi-card-account-phone-outline</v-icon>Contact</v-btn></router-link>
        </v-col>
        <v-col>
            <router-link :to="{ name: 'work'}"><v-btn color="orange lighten-3"><v-icon left>mdi-account-hard-hat</v-icon>Work</v-btn></router-link>
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