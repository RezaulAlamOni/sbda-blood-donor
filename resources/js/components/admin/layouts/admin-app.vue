<template>
    <section id="admin-app">
        <side-nav></side-nav>
        <router-view></router-view>
    </section>

</template>

<script>
import sidenav from './side-nav'
export default {
    name: "admin-app",
    components : {
        'side-nav': sidenav
    }
}
</script>

<style scoped>

</style>
