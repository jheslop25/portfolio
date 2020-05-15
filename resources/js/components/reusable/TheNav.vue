<template>
    <v-row>
        <v-col>
            <router-link :to="{ name: 'contact'}"><v-btn><v-icon left>mdi-card-account-phone-outline</v-icon>  Contact</v-btn></router-link>
        </v-col>
        <v-col>
            <router-link :to="{ name: 'work'}"><v-btn><v-icon left>mdi-account-hard-hat</v-icon>Work</v-btn></router-link>
        </v-col>
    </v-row>
</template>

<script>
export default {
    name: 'TheNav',

}
</script>

<style>

</style>