<template>
    <div>
       <h1>HOMEPAGE</h1>
    
       
            <div v-for="art in articleList" :key="art.id">
                <h3>{{art.titolo}}</h3>
                <p>{{art.contenuto}}</p>
                <p>
                    {{art.category.name}} -Tags: <span v-for="tag in art.tags" :key="tag.id">{{tag.name}}</span>

                </p>
                
            </div>
        
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