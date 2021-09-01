import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter)

import home from '../components/admin/home'


let base_url = window.APP_URL


let routes = [
    {
        path:  '/admin',
        component: home,
        name : 'admin_home'
    }

];


const router = new VueRouter({
    mode: "history",
    routes
});

export default router;
