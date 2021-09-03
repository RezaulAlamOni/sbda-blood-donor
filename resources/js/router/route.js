import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter)

import test_home from '../components/ExampleComponent'
import home from '../components/HomeComponent';
import gallery from "../components/pages/uses/gallery";
import donor_registration from "../components/pages/uses/donor-registration";
import volunteer_registration from "../components/pages/uses/volunteer-registration";
import member_note from "../components/pages/uses/members-note";
import member_login from "../components/pages/uses/member-login";
import Contact from "../components/pages/sbda/contact";
import AboutUs from "../components/pages/sbda/about-us";
import PageNotFound from "../components/404";

let base_url = window.APP_URL


let routes = [
    // {
    //     path: "/",
    //     component: home,
    //     name: "home"
    // },
    {
        path: "/gallery",
        component: gallery,
        name: "gallery"
    },
    {
        path: "/member-registration-note",
        component: member_note,
        name: "member_registration"
    },
    {
        path: "/donor-registration",
        component: donor_registration,
        name: "donor_registration"
    },
    {
        path: "/volunteer-registration",
        component: volunteer_registration,
        name: "volunteer_registration"
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


    { path: "*", component: PageNotFound }
];




const router = new VueRouter({
    mode: "history",
    routes
});

export default router;
