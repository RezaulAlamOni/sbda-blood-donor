import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter)

import test_home from '../components/ExampleComponent'


let base_url = window.APP_URL


let routes = [
    {
        path : '/admin',
        child : {
            path: "/user",
            component: test_home,
            name: "about-us"
        }

    }

];




const admin = new VueRouter({
    mode: "history",
    routes
});

export default admin;
