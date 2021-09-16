import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter)

import home from '../components/admin/home'
import PageNotFound from '../components/404'
import GalleryAdmin from '../components/admin/gallery-admin'
import SliderSetting from '../components/admin/sider-admin'
import Volunteer from '../components/admin/volunteer'


let base_url = window.APP_URL


let routes = [
    {
        path:  '/admin',
        component: home,
        name : 'admin_home',
    },
    {
        path: '/admin/gallery-image',
        component: GalleryAdmin,
        name: 'gallery-image'
    },
    {
        path: '/admin/slider-image',
        component: SliderSetting,
        name: 'slider-image'
    },
    {
        path: '/admin/users/:type',
        component: Volunteer,
        props: true,
        name: 'admin-volunteer'
    },


    { path: "*", component: PageNotFound }

];


const router = new VueRouter({
    mode: "history",
    routes
});

export default router;
