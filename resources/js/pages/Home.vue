<template>
  <div class="p-5">
        <div class="progress mb-3" v-if="loading">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
        </div>
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
            
            <div class="col-4  text-right">
                <h5>{{cat}}</h5>
                <ul class="list-unstyled">
                    <li v-for="category of categoriesList" :key="category.id">
                        <router-link :to="{name: 'postall', query: {category : category.id} }" class="side-link">{{category.name}}</router-link>
                    </li>
                </ul>
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
            loading: true,
            cat: null,
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
      categorie(){
          this.cat = 'Categorie';
      },
      loader (){          
           this.loading = false;       
      },  
      onClick(){
            this.click = true;
        },
        getCategories(){
            axios.get('/api/categories').then((resp) => {
                this.categoriesList = resp.data;
            })
        }
    },

    mounted() {
       setTimeout(this.loader,1000);
       setTimeout(this.getData,1000);
       setTimeout(this.getCategories,1000);
       setTimeout(this.categorie,1000);

       /* this.getData(); */
      
    }

}
</script>
    
<style>

</style>