<template>
    <section>
        <side-nav></side-nav>
        <body-content></body-content>
    </section>

</template>

<script>
import sidenav from './side-nav'
import body from './content-body'
export default {
    name: "admin-app",
    components : {
        'side-nav': sidenav,
        'body-content': body,
    }
}
</script>

<style scoped>

</style>
