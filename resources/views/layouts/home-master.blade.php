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
        <header-component></header-component>
    </header>

    <!-- end main-header  -->

    <!--  HOME SLIDER BLOCK  -->
    @yield('content')

<!-- START FOOTER  -->

    <footer>

        <section class="footer-widget-area footer-widget-area-bg">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="about-footer">

                            <div class="row">

                                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                    <img src="images/logo/logo.png" alt="" height="120"/>
                                </div> <!--  end col-lg-3-->

                                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                    <p>Saptagaon Blood Donor Association is a voluntary, non-political and non-profit organization. The members of the association voluntarily donate blood and do other social and humanitarian work. In addition to free blood donation, free blood group diagnosis, social awareness raising activities on blood donation, the organization ensures free healthcare for helpless patients through a medical unit consisting of specialist doctors. This organization has a special role in eradicating rural social degradation.</p>
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
                                    <p><a href="#">ssbdaofficialbd@gmail.com</a></p>

                                    <i class="fa fa-location-arrow fa-contact"></i>
                                    <p>Madrasha Market (1st Floor),<br>
                                        Islampur, Chatkhil, Noakhali-3874<br>
                                        Bangladesh</p>

                                    <i class="fa fa-phone fa-contact"></i>
                                    <p>Office:&nbsp; (+880) 1933018532</p>

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
                        <p class="copyright-text"> Copyright 2021 - SBDA. All Rights Reserved. </p>
                        Developed By <a href="www.rezaul-oni.xyz" class="float-right"> <strong>Rezaul Alam Oni</strong></a>
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
<script src="{{asset('js/gmaps.js')}}"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyDTSNL3kqBW0Go4Fa2xOf58_uWU6vXKnT8"></script>


<script>
    window.APP_URL = '{{ config('app.url') }}';
</script>
</body>

</html>
