import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './components/views/home.vue';
import Contact from './components/views/contact.vue';
import Work from './components/views/work.vue';
import NotFound from './components/views/notfound.vue';
import Bio from './components/views/bio.vue';

Vue.use(VueRouter);

const router = new VueRouter({

    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/contact',
            name: 'contact',
            component: Contact
        },
        {
            path: '/work',
            name: 'work',
            component: Work
        },
        {
            path: '/bio',
            name: 'bio',
            component: Bio,
        },
        {
            path: '/*',
            name: '404',
            component: NotFound
        }
    ]


});

export default router;
