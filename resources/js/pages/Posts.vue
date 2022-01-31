<template>
  <div>
    <h1>article</h1>
    <h1>{{post.titolo}}</h1>
    <img :src="post.coverImg" alt="#" style="max-height: 500px;width: 500px;object-fit:cover;" class="mb-4">
    

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