<template>
  <div>
    <h1>article</h1>
    <h1>{{post.titolo}}</h1>
    <p>{{post.contenuto}}</p>
 
      
  </div>
</template>

<script>
export default {
  data() {
    return {
      post: []
    }
  },
  methods: {
    fetchPost() {
      
      const url = "/api/article/" + this.$route.params.id;
      axios.get(url).then( (resp) => {
        this.post = resp.data;
      })

    } 
  },
   mounted() {
    this.fetchPost();
  } 

}
</script>

<style>

</style>