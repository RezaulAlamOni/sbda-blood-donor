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

            <div class="row no-padding-gallery">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container" v-for="photo in photos" :key="photo.id">
                    <a class="gallery-light-box" data-gall="myGallery" :href="'images/'+photo.photo">

                        <figure class="gallery-img">
                            <img v-bind:src="app_url+'images/'+photo.photo" alt="gallery image"/>

                        </figure> <!-- end .gallery-img  -->

                    </a>

                </div><!-- end .col-sm-3  -->
            </div> <!-- end .row  -->


        </div><!-- end .container-fluid  -->

    </section> <!-- end .section-content-block  -->

    <!-- HIGHLIGHT CTA  -->
</template>

<script>
export default {
    name: "gallery",
    data(){
      return {
          photos : [],
          app_url: window.APP_URL
      }
    },
    mounted() {
        this.photos = [
                { id : 1 , photo : 'gallery_1.jpg'},
                { id : 2 , photo : 'gallery_2.jpg'},
                { id : 3 , photo : 'gallery_3.jpg'},
                { id : 4 , photo : 'gallery_4.jpg'},
                { id : 5 , photo : 'gallery_5.jpg'},
                { id : 6 , photo : 'gallery_6.jpg'}
            ]
    },

}
</script>

<style scoped>
.section-content-block {
    padding: 30px 0 100px 0;
}
</style>
