import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter)

import test_home from '../components/ExampleComponent'
import home from '../components/HomeComponent';
import gallery from "../components/pages/gallery";

let routes = [
    {
        path: "/",
        component: home,
        name: "home"
    },
    {
        path: "/gallery",
        component: gallery,
        name: "gallery"
    },

];




const router = new VueRouter({
    mode: "history",
    routes
});

export default router;
