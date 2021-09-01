<template>
    <div class="container-fluid">
        <!-- Footer -->
        <footer class="footer pt-0">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6">
                    <div class="copyright text-center  text-lg-left  text-muted">
                        &copy; 2021 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">SBDA</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <router-link :to="{ name : 'home'}" class="nav-link" target="_blank">SBDA</router-link>
<!--                            <a href="https://www.creative-tim.com" ></a>-->
                        </li>
                        <li class="nav-item">
                            <router-link :to="{ name : 'about-us'}" class="nav-link" target="_blank">About Us</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link :to="{ name : 'gallery'}" class="nav-link" target="_blank">Gallery</router-link>
                        </li>
                        <li class="nav-item">

                            <a href="https://rezaul-oni.xyz" class="nav-link" target="_blank">Develop By <strong>Rezaul Alam Oni</strong> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
export default {
    name: "footer-c"
}
</script>

<style scoped>

</style>
