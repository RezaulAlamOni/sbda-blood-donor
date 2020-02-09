import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter)

import test_home from '../components/ExampleComponent'

let routes = [
    {
        path: "/test-home",
        component: test_home,
        name: "test-home"
    },

];




const router = new VueRouter({
    mode: "history",
    routes
});

export default router;
