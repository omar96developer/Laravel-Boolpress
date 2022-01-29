import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './pages/Home.vue';
import About from './pages/About.vue';
import Contact from './pages/Contact.vue';
import Posts from './pages/Posts.vue';
import Postall from './pages/Postall.vue';


Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },   
        {
            path: '/postall',
            name: 'postall',
            component: Postall
        },    
        {
            path: '/about',
            name: 'about',
            component: About
        },
        {
            path: '/contact',
            name: 'contact',
            component: Contact
        },
        {
            path: '/article/:id',
            name: 'article',
            component: Posts
        },
      
    ]
})
export default router;