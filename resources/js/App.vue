<template>
    <div>
        <nav class="nav-2 text-center">
            <ul class="d-flex justify-content-center"> 
                <li style="list-style:none;" class="mr-2">
                    <router-link to="/">Home</router-link>
                </li>
                 <li style="list-style:none;" class="mr-2">       
                    <router-link to="/contact">Contatti</router-link>                        
                </li>
                 <li style="list-style:none;" class="mr-2">                  
                    <router-link to="/about">Chi Siamo</router-link>                   
                </li>
            </ul>
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