<template>
  <div class="p-5">
        <div class="d-flex">
            <div class="col-8">
                <div v-for="art in articleList" :key="art.id" style="margin-bottom:50px" >
                <router-link :to="{name:'article', params: {id: art.id}}">
                    <h3 class="bg-success text-center">{{art.titolo}}</h3>
                </router-link>
                
                <p>{{art.contenuto}}</p>
                <p>
                    Genere: {{art.category.name}} <br> Tags: <span v-for="tag in art.tags" :key="tag.id">{{tag.name}}</span>
                </p>                 
            </div>
            </div>
            
           
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
    name: "Home",
    data() {
        return {
            articleList: [],
            categoriesList: [],
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
        },
        
    },

    mounted() {
       this.getData();
      
    }

}
</script>
    
<style>

</style>