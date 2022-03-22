<template>
    <!--  SECTION GALLERY  -->

    <section class="section-content-block section-pure-white-bg">

        <div class="container">

            <div class="card">
                <div class="card-header">
                    <h2>Our Donors</h2>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Blood Group</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="(user,k) in users">
                            <th scope="row">{{ (k+1) }}</th>
                            <td>{{ user.name }}</td>
                            <td>{{ user.phone }}</td>
                            <td>{{ user.blood_group ? user.blood_group.name : '' }}</td>
                        </tr>

                        </tbody>
                    </table>
                    <div class="text-center col-md-12">
                        <pagination align="center" :options="options" :data="photo_s" @pagination-change-page="list">
                            <span slot="prev-nav">&lt; Previous</span>
                            <span slot="next-nav">Next &gt;</span>
                        </pagination>
                    </div>

<!--                    <datatable :columns="columns" :data="users"></datatable>-->
                </div>
            </div>
        </div> <!--  end .container -->

        <!--        <div class="container wow fadeInUp">-->

        <!--            <div class="row no-padding-gallery" v-if="photos.length > 0">-->

        <!--                &lt;!&ndash;                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container" v-for="photo in photos" :key="photo.id">&ndash;&gt;-->
        <!--                <a class="gallery-light-box" data-gall="myGallery" href="javascript:void(0)">-->

        <!--                    &lt;!&ndash;                        <figure class="gallery-img">&ndash;&gt;-->
        <!--                    &lt;!&ndash;                            <img v-bind:src="app_url+photo.photo" alt="gallery image"/>&ndash;&gt;-->

        <!--                    &lt;!&ndash;                        </figure> &lt;!&ndash; end .gallery-img  &ndash;&gt;&ndash;&gt;-->

        <!--                </a>-->

        <!--                &lt;!&ndash;                </div>&lt;!&ndash; end .col-sm-3  &ndash;&gt;&ndash;&gt;-->

        <!--                <viewer :images="photos" :options="{inline : false}">-->
        <!--                    <div class="gallery-container col-lg-3 col-md-3 col-sm-4 col-xs-12 " v-for="src in photos"-->
        <!--                         style="max-height: 200px !important;">-->
        <!--                        <a class="gallery-light-box" data-gall="myGallery" href="javascript:void(0)">-->
        <!--                            <figure class="gallery-img">-->
        <!--                                <img :key="src" :src="src" style="max-height: 180px !important;">-->
        <!--                            </figure>-->
        <!--                        </a>-->
        <!--                    </div>-->
        <!--                </viewer>-->
        <!--                <div class="text-center col-md-12">-->
        <!--                    <pagination align="center" :options="options" :data="photo_s" @pagination-change-page="list">-->
        <!--                        <span slot="prev-nav">&lt; Previous</span>-->
        <!--                        <span slot="next-nav">Next &gt;</span>-->
        <!--                    </pagination>-->
        <!--                </div>-->
        <!--            </div> &lt;!&ndash; end .row  &ndash;&gt;-->


        <!--        </div>&lt;!&ndash; end .container-fluid  &ndash;&gt;-->

    </section> <!-- end .section-content-block  -->

    <!-- HIGHLIGHT CTA  -->
</template>

<script>
import 'viewerjs/dist/viewer.css'
import VueViewer from 'v-viewer'
import Vue from 'vue'
import pagination from 'laravel-vue-pagination'


Vue.use(VueViewer)
export default {
    name: "donor-list",
    components: {
        pagination,
    },
    data() {
        return {
            photos: [],
            photo_s: {},
            app_url: window.APP_URL,
            options: {},
            type: 0,
            users : []
        }
    },
    mounted() {
        this.type = this.$attrs.type;
        setTimeout(function () {
            $('.navbar-toggle').click()
        }, 200)

    },
    methods: {
        getGallery() {
            let _this = this;
            this.axios.get('/users-type/donor')
                .then(resp => {
                    _this.users = resp.data.users.data;
                    _this.photo_s =     resp.data.users
                })
        },
        show() {
            this.$viewerApi({
                images: this.photos
            })
        },
        async list(page = 1) {
            let _this = this;
            await axios.get(`/users-type/donor?page=${page}`)
                .then((resp) => {
                    _this.users = resp.data.users.data;
                    _this.photo_s =     resp.data.users
                }).catch(({response}) => {
                    console.error(response)
                })
        }
    },
    created() {
        this.getGallery();
    }

}
</script>

<style scoped>
.section-content-block {
    padding: 30px 0 100px 0;
}
</style>
