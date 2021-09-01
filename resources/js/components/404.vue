<template>
    <section>
        <div class="page-wrap d-flex flex-row align-items-center" style="min-height: 90vh;    background: repeating-radial-gradient(#f6a6a6, transparent 2px);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <img src="/images/logo/logo.png" alt="SBDA" height="100">
                        <span class="display-1 d-block">404</span>
                        <div class="mb-4 lead">The page you are looking for was not found.</div>
                        <router-link to="/admin" class="btn btn-link">Back to Home</router-link>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "404"
}
</script>

<style scoped>
body {
    background: #ff0000;
}
.page-wrap {
    min-height: 100vh;
}
</style>
