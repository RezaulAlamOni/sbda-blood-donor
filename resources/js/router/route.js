import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter)

import test_home from '../components/ExampleComponent'
import home from '../components/HomeComponent';
import gallery from "../components/pages/uses/gallery";
import member_registration from "../components/pages/uses/member-registration";
import member_login from "../components/pages/uses/member-login";
import Contact from "../components/pages/sbda/contact";
import AboutUs from "../components/pages/sbda/about-us";

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
        name: "donor_registration"
    },
    {
        path: "/member-login",
        component: member_login,
        name: "login"
    },
    {
        path: "/contacts",
        component: Contact,
        name: "contact"
    },
    {
        path: "/about-us",
        component: AboutUs,
        name: "about-us"
    },
    {
        path : '/admin',
        child : {
            path : '/'
        }

    }

];




const router = new VueRouter({
    mode: "history",
    routes
});

export default router;
