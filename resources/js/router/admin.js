import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter)

import home from '../components/admin/home'
import PageNotFound from '../components/404'


let base_url = window.APP_URL


let routes = [
    {
        path:  '/admin',
        component: home,
        name : 'admin_home'
    },

    { path: "*", component: PageNotFound }

];


const router = new VueRouter({
    mode: "history",
    routes
});

export default router;
