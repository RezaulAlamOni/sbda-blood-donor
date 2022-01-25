<template>
    <!--  SECTION GALLERY  -->

    <section class="section-content-block section-pure-white-bg">

        <div class="container">

            <div class="row section-heading-wrapper">

                <div class="col-md-12 col-sm-12 text-center no-img-separator">

                    <img src="images/sbda/Advisor.png" alt="Executive Committee" style="width: 100%">

                </div> <!-- end .col-sm-10  -->


            </div> <!-- end .row  -->

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
    name: "Advisor",
    components:{
        pagination
    },
    data() {
        return {
            photos: [],
            photo_s: {},
            app_url: window.APP_URL,
            options : {

            },
            type : 0
        }
    },
    mounted() {
        setTimeout(function () {
            $('.navbar-toggle').click()
        },200)
        this.type = this.$attrs.type;

    },
    methods: {
        getGallery() {
            let _this = this;
            this.axios.get('/photos/gallery')
                .then(resp => {
                    let photos = resp.data.photos.data;
                    _this.photo_s = resp.data.photos;
                    // _this.photos = resp.data.photos;
                    let gallery = [];
                    // _this.photos = [
                    //     { id : 1 , photo : "storage/images/gallery/cropped-Jacos-main16305787611534073093.png"},
                    // ];
                    // gallery.push({ id : 1 , photo : "storage/images/gallery/cropped-Jacos-main16305787611534073093.png"})
                    photos.map(function (photo) {
                        gallery.push(photo.photo)
                    });
                    _this.photos = gallery;


                })
        },
        show() {
            this.$viewerApi({
                images: this.photos
            })
        },
        async list(page = 1) {
            let _this = this;
            await axios.get(`/photos/gallery?page=${page}`)
                .then((resp) => {
                    let photos = resp.data.photos.data;
                    _this.photo_s = resp.data.photos;
                    // _this.photos = resp.data.photos;
                    let gallery = [];
                    photos.map(function (photo) {
                        gallery.push(photo.photo)
                    });
                    _this.photos = gallery;
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
