<template>
    <div>
            <div v-for="art in articleList" :key="art.id" style="margin-bottom:50px">
                <h3>{{art.titolo}}</h3>
                <p>{{art.contenuto}}</p>
                <p>
                    {{art.category.name}} -Tags: <span v-for="tag in art.tags" :key="tag.id">{{tag.name}}</span>

                </p>
                
            </div>
           <ul style="display: flex;list-style: none;">
                <li v-for="page of lastPage" :key="page"  >
                    <button class="page-link" @click="getData(page)">{{page}}</button>
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
            currentPage: 1,
            lastPage: null,
            click: false 
        }
    },
    methods: {
      getData(page = 1){
           axios.get('/api/articles?page=' + page).then((resp) =>{
            this.articleList = resp.data.data;
            this.currentPage = resp.data.current_page;
            this.lastPage = resp.data.last_page; 
        });
        

      },
      onClick(){
            this.click = true;
        }
    },

    mounted() {
       this.getData();
    }

}
</script>

<style>
.acqua{
    background-color: aqua;
    color: white;
}
</style>