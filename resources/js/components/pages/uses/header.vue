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
                            <li>
                                <a href="#" title="Members" class="dropdown-toggle">Unit</a>
                                <ul class="drop-down">
                                    <li>
                                        <a href="#about-membership">SBDA Volunteer</a>
                                    </li>
                                    <li>
                                        <a href="#about-membership">SBDA Medical Care</a>
                                    </li>
                                    <li><a href="#founder-member">Books</a></li>
                                </ul>
                            </li>
                            <li><a href="#" title="Excutive Committee">Committee</a>
                                <ul class="drop-down">
                                    <li><a href="#advisers">Advisers</a></li>
                                    <li><a href="#excutive-committee">Executive Committee</a></li>
                                    <li><a href="#excutive-committee">Founder Member</a></li>
                                </ul>
                            </li>

                            <li>
                                <router-link :to="{name : 'about-us'}">About Us</router-link>
                            </li>
                            <!--<li><a href="#blog">Blog</a></li>-->
                            <li >
                                <router-link to="gallery">gallery</router-link>
                            </li>
                            <li>
                                <router-link :to="{name : 'contact'}">Contact</router-link>
                            </li>
<!--                            <li><a href="#registration">Join as Donor</a></li>-->

                            <li><a href="#" title="Members">Join Us</a>
                                <ul class="drop-down">
                                    <li v-if="!auth">
                                        <router-link :to="{name : 'donor_registration'}">Become A Blood Donor</router-link>
                                    </li>
                                    <li> <router-link :to="{name : 'member_registration'}">Become A Member</router-link></li>
                                    <li><router-link :to="{name : 'volunteer_registration'}">Become A  Volunteer</router-link></li>
                                </ul>
                            </li>
                            <li v-if="!auth">
                                <router-link :to="{name : 'login'}">Login</router-link>
                            </li>

                            <li style="display: flex" v-else >
                                <span style="display: flex" class="profile-section">
                                    <img src="images/thumbnail.png" alt="" style="border-radius: 24px; height: 30px;margin-top: 8px;margin-right:0px;">
                                    <a href="#" title="Members" class="profile-name">{{ auth.name }}</a>
                                </span>

                                <ul class="drop-down">
                                    <li><a href="#about-membership">Donation history</a></li>
                                    <li>
                                        <form id="logout-form" action="logout" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        <a href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                    </li>
                                </ul>
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
    name: "header-component",
    data(){
        return {
            auth : null,
            app_url : window.APP_URL
        }
    },
    mounted() {
        this.get_auth();
    },
    methods : {
        get_auth() {
            let _this = this;
            axios.get(_this.app_url+'auth-check')
                .then(function (respose) {
                    _this.auth = respose.data.auth;
                    if ((_this.$route.name == 'member_registration' || _this.$route.name == 'login' ) && _this.auth) {
                        console.log(_this.$route.name)
                        _this.$router.push({name : 'home'})
                    }

                })
                .catch(function (er) {
                    console.log(er.message)
                })
                .finally(function () {

                })
        },
    }
}
</script>

<style scoped>
.profile-section {
    display: flex;
    background: #5082bb;
    padding: 0px 9px 6px 6px;
    border-radius: 25px;

}
.profile-name {
    margin: 8px 0px 0px 15px;
    font-size: 14px;
    font-weight: bold;
    color: white;
}

.router-link-active {
    background: none;
    border-bottom: 3px solid #ef3d32;
}

</style>
