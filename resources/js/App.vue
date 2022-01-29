<template>
    <div>
        <nav class="nav-2 text-center navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center" style="width: 100%;">
                    <li class="nav-item">
                        <router-link class="nav-link active" aria-current="page" to="/">Home</router-link> 
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link active" aria-current="page" to="/postall">All Post</router-link> 
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link active" aria-current="page" to="/contact">Contatti</router-link> 
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link active" aria-current="page" to="/about">Chi Siamo</router-link> 
                    </li>
                    
                </ul>
            </div>
   
        </nav>
      
        <router-view ></router-view>
    </div>
</template>

<script>
export default{
    name:'App',
    
}
</script>

<style>
.acqua{
    background-color: aqua;
    color: white;
}
</style>