<template>
    <!--  SECTION GALLERY  -->

    <section class="section-content-block section-pure-white-bg">

        <div class="container">

            <div class="row section-heading-wrapper">

                <div class="col-md-12 col-sm-12 text-center no-img-separator">
                    <h2>CAMPAIGN GALLERY</h2>
                    <span class="heading-separator"></span>
                    <h4>our prestigious voluntary work on campaigns by the team</h4>
                </div> <!-- end .col-sm-10  -->


            </div> <!-- end .row  -->

        </div> <!--  end .container -->

        <div class="container wow fadeInUp">

            <div class="row no-padding-gallery" v-if="photos.length > 0">

                <!--                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container" v-for="photo in photos" :key="photo.id">-->
                <a class="gallery-light-box" data-gall="myGallery" href="javascript:void(0)">

                    <!--                        <figure class="gallery-img">-->
                    <!--                            <img v-bind:src="app_url+photo.photo" alt="gallery image"/>-->

                    <!--                        </figure> &lt;!&ndash; end .gallery-img  &ndash;&gt;-->

                </a>

                <!--                </div>&lt;!&ndash; end .col-sm-3  &ndash;&gt;-->

                <viewer :images="photos" :options="{inline : false}">
                    <div class="gallery-container col-lg-3 col-md-3 col-sm-4 col-xs-12 " v-for="src in photos"
                         style="max-height: 200px !important;">
                        <a class="gallery-light-box" data-gall="myGallery" href="javascript:void(0)">
                            <figure class="gallery-img">
                                <img :key="src" :src="src" style="max-height: 180px !important;">
                            </figure>
                        </a>
                    </div>
                </viewer>
                <div class="text-center col-md-12">
                    <pagination align="center" :options="options" :data="photo_s" @pagination-change-page="list">
                        <span slot="prev-nav">&lt; Previous</span>
                        <span slot="next-nav">Next &gt;</span>
                    </pagination>
                </div>
            </div> <!-- end .row  -->


        </div><!-- end .container-fluid  -->

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
    name: "gallery",
    components:{
        pagination
    },
    data() {
        return {
            photos: [],
            photo_s: {},
            app_url: window.APP_URL,
            options : {

            }
        }
    },
    mounted() {
        this.photos = [
            // { id : 1 , photo : "storage/images/gallery/cropped-Jacos-main16305787611534073093.png"},
            // { id : 2 , photo : 'gallery_2.jpg'},
            // { id : 3 , photo : 'gallery_3.jpg'},
            // { id : 4 , photo : 'gallery_4.jpg'},
            // { id : 5 , photo : 'gallery_5.jpg'},
            // { id : 6 , photo : 'gallery_6.jpg'}
        ]
        console.log(this.photos)

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
