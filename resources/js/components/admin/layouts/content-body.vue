<template>
    <div class="main-content" id="panel">
<!--        TOP nav-->
        <top-nav @search="getSearchValue"></top-nav>
        <!-- Header -->

        <router-view :search="search"></router-view>

<!--        FOOTER -->
        <footer-c></footer-c>

    </div>
</template>

<script>
import topNav from './top-nav'
import footer from './c-footer'
export default {
    name: "content-body",
    components : {
        'top-nav' : topNav,
        'footer-c' : footer,
    },
    data() {
        return {
            search : ''
        }
    },
    methods : {
        getSearchValue(value) {
            this.search = value
        }
    }
}
</script>

<style scoped>

</style>
