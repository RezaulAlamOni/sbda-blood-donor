<template>

    <section>
        <div class="top-bar clearfix">

            <div class="container">

                <div class="row">
                    <div class="col-md-6 col-sm-12"><p>Welcome to Saptagaon Blood Donor Association.</p></div>
                    <div class="col-md-2 col-sm-12">
                        <p>
                            <i class="fa fa-phone"></i>
                            <a href="tel:01905199278">01905 199
                                278</a>
                        </p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="top-bar-social">
                            <a target="_blank" href="//www.facebook.com/sbdaofficialbd/">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a target="_blank" href="//www.twitter.com/sbdaofficialbd/">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a target="_blank" href="//www.instagram.com/sbdaofficialbd/">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a target="_blank" href="//www.youtube.com/channel/UCIDrZMXk0HnAqUa09dV7Q3A"><i
                                class="fa fa-youtube"></i>
                            </a>
                        </div>
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
                                    <li>
                                        <router-link to="member-registration">Apply for Membership</router-link>

                                    </li>
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
                            <li>
                                <router-link to="login">Login</router-link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </section>

</template>

<script>
export default {
    name: "header-component"
}
</script>

<style scoped>

</style>
