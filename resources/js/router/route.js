import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter)

import test_home from '../components/ExampleComponent'
import home from '../components/HomeComponent';
import gallery from "../components/pages/uses/gallery";
import member_registration from "../components/pages/uses/member-registration";
import member_login from "../components/pages/uses/member-login";

let base_url = window.APP_URL


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
    {
        path: "/member-registration",
        component: member_registration,
        name: "member-registration"
    },{
        path: "/login",
        component: member_login,
        name: "login"
    },

];




const router = new VueRouter({
    mode: "history",
    routes
});

export default router;
