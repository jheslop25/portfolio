<template>
  <v-row justify="center">
      <v-col md="10">
          <v-card>
              <v-img
               class="white--text align-end rounded"
               max-height="200px"
               max-width="300px"
               src="/photos/stars2.jpg"
              ><v-card-title>{{project.name}}</v-card-title>
              <a :href="'http://' + project.ext_url"><v-card-subtitle class="white--text">{{project.ext_url}}</v-card-subtitle></a></v-img>
              
              <v-card-text class="p-5">
                  <p class="h4">Summary</p>
                  <p>{{project.summary}}</p>
              </v-card-text>
              <v-row class="m-3" v-for="post in project.posts" v-bind:key="post.id">
                  <v-col>
                      <v-card>
                          <v-card-title>{{post.title}}</v-card-title>
                          <v-card-subtitle>{{post.subtitle}}, {{post.create_at}}</v-card-subtitle>

                          <v-card-text>
                              <p>{{post.para_1}}</p><br>
                              <p>{{post.para_2}}</p><br>
                              <p>{{post.para_3}}</p><br>
                              <p>{{post.para_4}}</p><br>
                              <p>{{post.para_5}}</p><br>
                              <p>{{post.para_6}}</p><br>
                          </v-card-text>
                      </v-card>
                  </v-col>
              </v-row>
          </v-card>
      </v-col>
  </v-row>
</template>
<script>
export default {
    name: 'Project',
    data(){
        return {
            project: null,
        }
    },
    methods: {
        getProject(){
            let id = this.$route.params.id;
            axios.post('/get', {
                input: id
            }).then((result) => {
                console.log(result.data);
                this.project = result.data.project;
            }).catch((err) => {
                console.log(err);
            });
        }
    },
    mounted(){
        this.getProject();
    }
}
</script>

<style>

</style>