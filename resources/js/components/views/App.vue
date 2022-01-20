<template>
    <div>
       <h1>HOMEPAGE</h1>
    
       <ul>
            <li v-for="art in articleList" :key="art.id">
                <h3>{{art.titolo}}</h3>
                <p>{{art.contenuto}}</p>
                
            </li>
        </ul> 
    </div>
</template>

<script>
export default {
    name: "App",
    data() {
        return {
            articleList: [],
        }
    },
    mounted() {
        axios.get('/api/articles').then((resp) =>{
            this.articleList = resp.data;
        });
    }

}
</script>

<style>

</style>