import Vue from "vue";
import VueRouter from "vue-router";
import { VuejsDatatableFactory } from 'vuejs-datatable';
Vue.use(VuejsDatatableFactory)
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
import Committee from "../components/pages/uses/committee";
import Advisor from "../components/pages/uses/Advisor";
import FounderMember from "../components/pages/uses/Founder-Member";
import PageNotFound from "../components/404";
import donors from "../components/pages/uses/donors";
import volunteers from "../components/pages/uses/volunteers";
import profile from "../components/pages/uses/profile";
import axios from 'axios';

let base_url = window.APP_URL

const ifAuthenticated = (to, from, next) => {
    axios.get('auth-check')
        .then(function (respose) {
            if (respose.data.auth) {
                next();
                return;
            }
            router.push({
                name: 'home'
            });
        })
};
const authData = (to, from, next) => {
    axios.get('auth-check')
        .then(function (respose) {
            return respose.data.auth;
        })
}

let routes = [
    {
        path: "/",
        component: home,
        name: "home"
    },
    {
        path: "/profile",
        component: profile,
        name: "profile",
        params: {auth: authData},
        beforeEnter: ifAuthenticated
    },
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
    {
        path: "/executive-committee",
        component: Committee,
        name: "committee"
    },
    {
        path: "/advisor",
        component: Advisor,
        name: "advisor"
    },
    {
        path: "/founder-member",
        component: FounderMember,
        name: "founder-member"
    },
    {
        path: "/life-member",
        component: Committee,
        name: "life-member"
    },
    {
        path: "/donors",
        component: donors,
        name: "donors",
        beforeEnter: ifAuthenticated
    },
    {
        path: "/volunteers",
        component: volunteers,
        name: "volunteers"
    },


    { path: "*", component: PageNotFound }
];




const router = new VueRouter({
    mode: "history",
    routes
});

export default router;
