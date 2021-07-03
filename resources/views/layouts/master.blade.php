<!DOCTYPE html>
<html lang="en" class="ie8">
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1"/>
<head>
    <meta charset="utf-8">
    <title>SBDA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Reddrop Buddies - Blood Donation Campaign & Multi-Concept Activism Template">
    <meta name="author" content="xenioushk">
    <link rel="shortcut icon" href="{{asset('images/logo/logo.png')}}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/venobox.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}"/>
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}


<body>

<div id="preloader">
    <span class="margin-bottom"><img src="{{asset('images/loader.gif')}}" alt=""/></span>
</div>


<div id="app">

    <!--  HEADER -->

    <header class="main-header clearfix" data-sticky_header="true">

        <div class="top-bar clearfix">

            <div class="container">

                <div class="row">
                    <div class="col-md-6 col-sm-12"><p>Welcome to Saptagaon Blood Donor Association.</p></div>
                    <div class="col-md-2 col-sm-12"><p><i class="fa fa-phone"></i> <a href="tel:01905199278">01905 199
                                278</a></p></div>
                    <div class="col-md-4 col-sm-12">
                        <div class="top-bar-social"><a target="_blank" href="//www.facebook.com/sbdaofficialbd/"><i
                                    class="fa fa-facebook"></i></a> <a target="_blank"
                                                                       href="//www.twitter.com/sbdaofficialbd/"><i
                                    class="fa fa-twitter"></i></a> <a target="_blank"
                                                                      href="//www.instagram.com/sbdaofficialbd/"><i
                                    class="fa fa-instagram"></i></a> <a target="_blank"
                                                                        href="//www.youtube.com/channel/UCIDrZMXk0HnAqUa09dV7Q3A"><i
                                    class="fa fa-youtube"></i></a></div>
                    </div>
                </div>

            </div> <!--  end .container -->

        </div> <!--  end .top-bar  -->
        <section class="header-wrapper navgiation-wrapper">
            <div class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                        </button>
                        <a class="logo" href="/">
                            <img style="height: 60px;" alt="" src="images/logo/sbda-logo.png">
                        </a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#" title="Excutive Committee">Excutive Committee</a>
                                <ul class="drop-down">
                                    <li><a href="#advisers">Advisers</a></li>
                                    <li><a href="#excutive-committee">Excutive Committee</a></li>
                                </ul>
                            </li>
                            <li><a href="#" title="Members">Members</a>
                                <ul class="drop-down">
                                    <li><a href="#about-membership">About Membership</a></li>
                                    <li><a href="#">Apply for Membership</a></li>
                                    <li><a href="#">Life Member</a></li>
                                    <li><a href="#founder-member">Founder Member</a></li>
                                </ul>
                            </li>
                            <li><a href="#about-us" title="About Us">About Us</a></li>
                            <!--<li><a href="#blog">Blog</a></li>-->
                            <li>
                                <router-link to="gallery">gallery</router-link>
                            </li>
                            <li><a href="#contact-us">Contact</a></li>
                            <li><a href="#registration">Join as Donor</a></li>
                            <li><a href="#login">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


    </header> <!-- end main-header  -->

    <!--  HOME SLIDER BLOCK  -->

    <router-view></router-view>

    <!-- START FOOTER  -->

    <footer>

        <section class="footer-widget-area footer-widget-area-bg">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="about-footer">

                            <div class="row">

                                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                    <img src="images/logo-footer.png" alt=""/>
                                </div> <!--  end col-lg-3-->

                                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                    <p>
                                        We are world largest and trustful blood donation center. We have been working since
                                        1973 with a prestigious vision to helping patient to provide blood.
                                        We are working all over the world, organizing blood donation campaign to grow
                                        awareness among the people to donate blood.
                                    </p>
                                </div> <!--  end .col-lg-9  -->

                            </div> <!--  end .row -->

                        </div> <!--  end .about-footer  -->

                    </div> <!--  end .col-md-12  -->

                </div> <!--  end .row  -->

                <div class="row">

                    <div class="col-md-4 col-sm-6 col-xs-12">

                        <div class="footer-widget">

                            <div class="sidebar-widget-wrapper">

                                <div class="footer-widget-header clearfix">
                                    <h3>Contact Us</h3>
                                </div>  <!--  end .footer-widget-header -->


                                <div class="textwidget">

                                    <i class="fa fa-envelope-o fa-contact"></i>
                                    <p><a href="#">support@donation.com</a><br/><a href="#">helpme@donation.com</a></p>

                                    <i class="fa fa-location-arrow fa-contact"></i>
                                    <p>Road-2,3/A East Shibgonj<br/>Sylhet-3100, Bangladesh</p>

                                    <i class="fa fa-phone fa-contact"></i>
                                    <p>Office:&nbsp; (+880) 0823 560 433<br/>Cell:&nbsp; (+880) 0723 161 343</p>

                                </div>

                            </div> <!-- end .footer-widget-wrapper  -->

                        </div> <!--  end .footer-widget  -->

                    </div> <!--  end .col-md-4 col-sm-12 -->

                    <div class="col-md-4 col-sm-12 col-xs-12">

                        <div class="footer-widget clearfix">

                            <div class="sidebar-widget-wrapper">

                                <div class="footer-widget-header clearfix">
                                    <h3>Support Links</h3>
                                </div>  <!--  end .footer-widget-header -->


                                <ul class="footer-useful-links">

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right fa-footer"></i>
                                            Thalassemia
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right fa-footer"></i>
                                            Cell Elofrosis
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right fa-footer"></i>
                                            Myelodysasia
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right fa-footer"></i>
                                            Blood Count
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right fa-footer"></i>
                                            Hemolytimia
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right fa-footer"></i>
                                            Ychromas Eosis
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right fa-footer"></i>
                                            Hyrcoagulable
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right fa-footer"></i>
                                            Thrombo Xtosis
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right fa-footer"></i>
                                            Sicklenemiaxs
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right fa-footer"></i>
                                            Aplastic Anemia
                                        </a>
                                    </li>

                                </ul>

                            </div> <!--  end .footer-widget  -->

                        </div> <!--  end .footer-widget  -->

                    </div> <!--  end .col-md-4 col-sm-12 -->

                    <div class="col-md-4 col-sm-6 col-xs-12">

                        <div class="footer-widget">
                            <div class="sidebar-widget-wrapper">
                                <div class="footer-widget-header clearfix">
                                    <h3>Subscribe Us</h3>
                                </div>
                                <p>Signup for regular newsletter and stay up to date with our latest news.</p>
                                <div class="footer-subscription">
                                    <p>
                                        <input id="mc4wp_email" class="form-control" required=""
                                               placeholder="Enter Your Email" name="EMAIL" type="email">
                                    </p>
                                    <p>
                                        <input class="btn btn-default" value="Subscribe Now" type="submit">
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div> <!--  end .col-md-4 col-sm-12 -->

                </div> <!-- end row  -->

            </div> <!-- end .container  -->

        </section> <!--  end .footer-widget-area  -->

        <!--FOOTER CONTENT  -->

        <section class="footer-contents">

            <div class="container">

                <div class="row clearfix">

                    <div class="col-md-12 col-sm-12 text-center">
                        <p class="copyright-text"> Copyright 2018 - Blood Buddies by BlueWindLab. All Rights Reserved. </p>
                    </div>  <!-- end .col-sm-6  -->

                </div> <!-- end .row  -->

            </div> <!--  end .container  -->

        </section> <!--  end .footer-content  -->

    </footer>

    <!-- END FOOTER  -->
</div>





<!-- Back To Top Button  -->

<a id="backTop">Back To Top</a>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/jquery.backTop.min.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>
<script src="{{asset('js/waypoints-sticky.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/venobox.min.js')}}"></script>
<script src="{{asset('js/custom-scripts.js')}}"></script>

<script>
    window.APP_URL = '{{ config('app.url') }}';
</script>
</body>

</html>