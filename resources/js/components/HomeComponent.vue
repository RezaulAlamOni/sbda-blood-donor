<template>
    <section>
        <div class="slider-wrap">
<!--            <vue-image-slider :images="sliders" :intervalVal=6000 :height=700 :width="'100%'">-->
<!--                <button class="btn btn-success">Update</button>-->
<!--            </vue-image-slider>-->

            <slider></slider>
        </div> <!-- end .slider_1  -->


        <!--  FEATURED ABOUT US SECTION-->

        <section class="section-content-block">

            <div class="container">

                <div class="row">

                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

                        <div class="about-us-container theme-custom-box-shadow">

                            <div class="row section-heading-wrapper margin-bottom-11">

                                <div class="col-lg-12 col-md-12 col-sm-12 text-left no-img-separator">
                                    <!--                                    <h2><strong>Who We Are?</strong></h2>-->
                                    <span class="heading-separator heading-separator-horizontal"></span>
                                </div> <!-- end .col-sm-10  -->

                            </div>

                            <div class="about-details">

                                <p>
                                    সপ্তগাঁও ব্লাড ডোনার এসোসিয়েশন’ একটি স্বেচ্ছাসেবী, অরাজনৈতিক ও অলাভজনক সংগঠন। এসোসিয়েশনের সদস্যরা স্বেচ্ছায় রক্তদান এবং অন্যান্য সামাজিক ও মানবিক
                                    কাজ করে থাকে। বিনামূল্যে রক্তদান, বিনামূল্যে রক্তের গ্রুপ নির্ণয়, রক্তদান নিয়ে সামাজিক সচেতনতা বৃদ্ধি কার্যক্রম ছাড়াও বিশেষজ্ঞ ডাক্তারদের সমন্বয়ে গঠিত মেডিকেল ইউনিটের
                                    মাধ্যমে অসহায় রোগীদের জন্য বিনামূল্যে স্বাস্থ্যসেবা নিশ্চিত করে থাকে এই সংগঠন। গ্রামীন সামাজিক অবক্ষয় দূরীকরণে এই সংগঠনটির বিশেষ ভূমিকা রয়েছে।
                                </p>


                            </div> <!--  end .about-details -->

                        </div>

                    </div> <!--  end .col-lg-6 col-md-6 col-sm-12 col-xs-12 -->


                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

                        <figure class="about-img theme-custom-box-shadow">
                            <a class="venobox wow bounceIn" data-vbtype="video" data-autoplay="true"
                               href="https://www.youtube.com/watch?v=nrJtHemSPW4"><i class="fa fa-play"></i></a>
                            <img src="images/sbda/about-us1.jpg" alt="about"/>
                        </figure> <!-- end .cause-img  -->

                    </div> <!--  end .col-lg-6 col-md-6 col-sm-12 col-xs-12  -->

                </div> <!--  end .row  -->
            </div>

        </section> <!--  end .section-about-us -->

        <!-- SECTION TESTIMONIAL   -->

<!--        <section class="section-content-block section-custom-bg" data-bg_img='images/testimony_feat_bg.jpg'-->
<!--                 data-bg_size='cover'-->
<!--                 data-bg_position='top center' data-bg_opacity="0">-->

<!--            <div class="container margin-top-80">-->
<!--                <div class="row section-heading-wrapper-alt">-->

<!--                    <div class="col-md-12 col-sm-12 text-center no-img-separator">-->
<!--                        <h4>Awesome Words From Members</h4>-->
<!--                        <span class="heading-separator heading-separator-horizontal"></span>-->
<!--                        <h2 class="extra-large">JOIN WITH US AND SAVE LIFE</h2>-->

<!--                    </div> &lt;!&ndash; end .col-sm-10  &ndash;&gt;-->

<!--                </div>-->
<!--            </div>-->

<!--            <div-->
<!--                class="container theme-custom-box-shadow  section-pure-white-bg margin-top-48 margin-bottom-48 wow fadeInUp">-->

<!--                <div class="row">-->

<!--                    <div class="col-lg-6 col-md-12 col-sm-12">-->

<!--                        <div class="testimonial-container owl-carousel text-left" data-items="1">-->

<!--                            <div class="col-md-12 col-sm-12">-->

<!--                                <div class="testimony-layout-1">-->
<!--                                    <h3 class="people-quote">Donor Opinion</h3>-->
<!--                                    <p class="testimony-text">-->
<!--                                        I proudly donate blood on a regular basis because it gives others something they-->
<!--                                        desperately need to survive. Just knowing I can make a difference in someone-->
<!--                                        else's life-->
<!--                                        makes me feel great!-->
<!--                                    </p>-->

<!--                                    <img src="images/user_1.jpg" alt=""/>-->
<!--                                    <h6>Brandon Munson</h6>-->
<!--                                    <span>CTO, Fulcrum Design, USA</span>-->

<!--                                </div> &lt;!&ndash; end .testimony-layout-1  &ndash;&gt;-->

<!--                            </div> &lt;!&ndash;  end col-md-10  &ndash;&gt;-->

<!--                            <div class="col-md-12 col-sm-12">-->

<!--                                <div class="testimony-layout-1">-->
<!--                                    <h3 class="people-quote">Donor Opinion</h3>-->
<!--                                    <p class="testimony-text">-->
<!--                                        I have been a donor since high school. Although I have not been a donor every-->
<!--                                        year, I-->
<!--                                        always want to give to the human race. I love to help others! Moreover it gives-->
<!--                                        a real-->
<!--                                        peace in my mind.-->
<!--                                    </p>-->

<!--                                    <img src="images/user_2.jpg" alt=""/>-->
<!--                                    <h6>Munson Brandon</h6>-->
<!--                                    <span>CTO, Fulcrum Design, USA</span>-->

<!--                                </div> &lt;!&ndash; end .testimony-layout-1  &ndash;&gt;-->

<!--                            </div> &lt;!&ndash;  end col-md-10  &ndash;&gt;-->

<!--                            <div class="col-md-12 col-sm-12">-->

<!--                                <div class="testimony-layout-1">-->
<!--                                    <h3 class="people-quote">Recipient Opinion</h3>-->
<!--                                    <p class="testimony-text">-->
<!--                                        I wish I could tell you my donor how grateful I am for your selfless act.You-->
<!--                                        gave me new-->
<!--                                        life. We may be coworkers or schoolmates or just two in the same community.I'm-->
<!--                                        very-->
<!--                                        grateful to you.-->
<!--                                    </p>-->

<!--                                    <img src="images/user_3.jpg" alt=""/>-->
<!--                                    <h6>Logan Munson</h6>-->
<!--                                    <span>CTO, Fulcrum Design, USA</span>-->

<!--                                </div> &lt;!&ndash; end .testimony-layout-1  &ndash;&gt;-->

<!--                            </div> &lt;!&ndash;  end col-md-10  &ndash;&gt;-->

<!--                        </div>  &lt;!&ndash;  end .row  &ndash;&gt;-->
<!--                    </div>-->

<!--                    <div class="col-lg-6 hidden-md hidden-xs hidden-sm no-padding">-->
<!--                        <figure>-->
<!--                            <img src="images/testimony_feat_img.jpg" alt="" class="db"/>-->
<!--                        </figure>-->
<!--                    </div>-->

<!--                </div>-->


<!--            </div> &lt;!&ndash; end .container  &ndash;&gt;-->

<!--        </section>-->

        <!--  SECTION CAMPAIGNS   -->

        <section class="section-content-block section-pure-white-bg">

            <div class="container">


                <div class="row">

                    <div class="col-sm-12 col-md-5">

                        <div class="row section-heading-wrapper">

                            <div class="col-md-12 col-sm-12 text-left no-img-separator">
                                <h2>OUR CAMPAIGNS</h2>
                                <span class="heading-separator heading-separator-horizontal"></span>
                                <h4 class="margin-top-24">
                                    <small>
                                        বিনামূল্যে রক্তদান, বিনামূল্যে রক্তের গ্রুপ নির্ণয়, বিনামূল্যে স্বাস্থ্যসেবা ও স্বেচ্ছাসেবী কার্যক্রম - এই চার সেবা নিয়ে বর্তমানে এসবিডিএ'র কার্যক্রম পরিচালিত হচ্ছে।
                                    </small>
                                </h4>
                                <a class="btn btn-theme margin-top-32" href="#">Load All Campaigns</a>
                            </div> <!-- end .col-sm-12  -->

                        </div> <!-- end .row  -->

                    </div>

                    <div class="col-sm-12 col-md-7">

                        <div class="row wow fadeInRight">

                            <div class="event-carousel owl-carousel" data-nav="false" data-dots="true" data-items="1">

                                <div class="col-md-6 col-sm-12">
                                    <div class="event-layout-1 theme-custom-box-shadow clearfix">
                                        <figure class="event-img">
                                            <a href="#">
                                                <img src="images/event_1.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="event-info">
                                            <a class="event-date" href="#"><i class="fa fa-calendar-o"></i> 24 February,
                                                2018</a>
                                            <h4>
                                                <a href="#">Opening Donation Day</a>
                                            </h4>
                                            <div class="event-exceprt">Lorem ipsum dolor sit amet turadipi scing elit
                                                lobort
                                                issim consecte lodign pharetra. Lobort qssim tronsecte diagnosis
                                                sharetrx mauris
                                                gone do.
                                            </div>
                                            <div class="event-time">
                                                <a href="#"><i class="fa fa-clock-o"></i> 10.00 - 3.00</a>
                                                <a href="#"> <i class="fa fa-map-marker"></i> California, USA</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="event-layout-1 theme-custom-box-shadow clearfix">
                                        <figure class="event-img">
                                            <a href="#">
                                                <img src="images/event_3.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="event-info">
                                            <a class="event-date" href="#"><i class="fa fa-calendar-o"></i> 11 March,
                                                2018</a>
                                            <h4>
                                                <a href="#">Free Group Checking</a>
                                            </h4>
                                            <div class="event-exceprt">Lorem ipsum dolor sit amet turadipi scing elit
                                                lobort
                                                issim consecte lodign pharetra. Lobort qssim tronsecte diagnosis
                                                sharetrx mauris
                                                gone do.
                                            </div>
                                            <div class="event-time">
                                                <a href="#"><i class="fa fa-clock-o"></i> 10.00 - 3.00</a>
                                                <a href="#"> <i class="fa fa-map-marker"></i> California, USA</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="event-layout-1 theme-custom-box-shadow clearfix">
                                        <figure class="event-img">
                                            <a href="#">
                                                <img src="images/event_4.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="event-info">
                                            <a class="event-date" href="#"><i class="fa fa-calendar-o"></i> 14 June,
                                                2018</a>
                                            <h4>
                                                <a href="#">Blood Group Collection</a>
                                            </h4>
                                            <div class="event-exceprt">Lorem ipsum dolor sit amet turadipi scing elit
                                                lobort
                                                issim consecte lodign pharetra. Lobort qssim tronsecte diagnosis
                                                sharetrx mauris
                                                gone do.
                                            </div>
                                            <div class="event-time">
                                                <a href="#"><i class="fa fa-clock-o"></i> 10.00 - 3.00</a>
                                                <a href="#"> <i class="fa fa-map-marker"></i> California, USA</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="event-layout-1 theme-custom-box-shadow clearfix">
                                        <figure class="event-img">
                                            <a href="#">
                                                <img src="images/event_2.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="event-info">
                                            <a class="event-date" href="#"><i class="fa fa-calendar-o"></i> 31 July,
                                                2018</a>
                                            <h4>
                                                <a href="#">Blood Donation Camp</a>
                                            </h4>
                                            <div class="event-exceprt">Lorem ipsum dolor sit amet turadipi scing elit
                                                lobort
                                                issim consecte lodign pharetra. Lobort qssim tronsecte diagnosis
                                                sharetrx mauris
                                                gone do.
                                            </div>
                                            <div class="event-time">
                                                <a href="#"><i class="fa fa-clock-o"></i> 10.00 - 3.00</a>
                                                <a href="#"> <i class="fa fa-map-marker"></i> California, USA</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div> <!--  end .container  -->

        </section>


    </section>
</template>

<script>
import VueImageSlider from 'vue-image-slider'
import slider from './pages/uses/slider'

export default {
    name: "HomeComponent",
    components: {
        VueImageSlider,
        slider
    },
    data() {
        return {
            type: '',
            sliders: []
        }
    },
    mounted() {
        this.getSliders();
    },
    methods: {
        getSliders() {
            let _this = this;
            _this.type = 'slider';
            this.axios.get('/photos/' + _this.type)
                .then(resp => {
                    let sliders = resp.data.photos.data;
                    _this.sliders = sliders.map(function (slide) {
                        return '/' + slide.photo
                    })
                })
        },
    }
}
</script>

<style scoped>

.slider-wrap .container {
    padding: 5px 10px !important;
    width: 100% !important;
}

</style>
