// import Vue from 'vue';
// import * as Vue from 'vue';
// import { Vue } from 'vue'
import Vue from 'vue/dist/vue.js';

import {createRouter, createWebHistory} from 'vue-router';
import Home from './pages/Home.vue';
import About from './pages/About.vue';

Vue.use(createRouter);

const router = new createRouter({
    // mode: 'history',
    history: createWebHistory(import.meta.env.BASE_URL),
    linkExactActiveClass: 'active',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/about',
            name: 'about',
            component: About
        },
    ]
});

export default router;