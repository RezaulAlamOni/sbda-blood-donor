<template>
    <div class="container bootstrap snippet" style="margin-top: 30px;margin-bottom: 15px">
        <div class="row">
            <div>
                <h2 class="text-center">
                    {{ authData.name }}
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3"><!--left col-->


                <div class="text-center">
                    <img :src=" authData.profile_photo ? authData.profile_photo : 'http://ssl.gstatic.com/accounts/ui/avatar_2x.png'" class="avatar img-circle img-thumbnail"
                         alt="avatar">
                    <h6>Upload a different photo...</h6>
                    <input type="file" class="text-center center-block file-upload_" @change="readURL" name="file">
                </div>
                <br>


                <div class="panel panel-default">
                    <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
                    <div class="panel-body"><a href="http://www.sbdabd.com">www.sbdabd.com</a></div>
                </div>


                <ul class="list-group">
                    <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right">
                        <span class="pull-left"><strong>Blood Group</strong></span> {{ authData.blood_group.name }}
                    </li>
                    <li class="list-group-item text-right">
                        <span class="pull-left"><strong>Donations</strong></span>
                        {{ authData.donation_count ? authData.donation_count : 0 }}
                    </li>
                    <li class="list-group-item text-right"><span class="pull-left">
                        <strong>Area</strong></span> {{ authData.v_area.name }}
                    </li>
                </ul>

                <div class="panel panel-default">
                    <div class="panel-heading">Social Media</div>
                    <div class="panel-body">
                        <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i
                        class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i
                        class="fa fa-google-plus fa-2x"></i>
                    </div>
                </div>

            </div><!--/col-3-->
            <div class="col-sm-9" style="margin-top: 20px">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Details</a></li>
                </ul>


                <div class="tab-content" >
                    <div class="tab-pane active" id="home">
                        <hr>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name"><h4>Full name</h4></label>
                                <input type="text" class="form-control" name="first_name" id="first_name"
                                       v-model="authData.name"
                                       placeholder="first name" title="enter your first name if any.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name"><h4>Blood Group</h4></label>
                                <input type="text" class="form-control" name="first_name" id="first_name"
                                       v-model="authData.blood_group.name"
                                       placeholder="first name" title="enter your first name if any." readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="mobile"><h4>Phone</h4></label>
                                <input type="text" class="form-control" name="mobile" id="mobile"
                                       v-model="authData.phone"
                                       placeholder="enter mobile number" title="enter your mobile number if any."
                                       readonly>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email"><h4>Email</h4></label>
                                <input type="email" class="form-control" name="email" id="email"
                                       v-model="authData.email"
                                       placeholder="you@email.com" title="enter your email." readonly>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="password"><h4>Password</h4></label>
                                <input type="password" class="form-control" name="password" id="password"
                                       v-model="authData.password"
                                       placeholder="password" title="enter your password.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="password"><h4>Confirm Password</h4></label>
                                <input type="password" class="form-control" name="password" id="password"
                                       v-model="authData.confirm_password"
                                       placeholder="password" title="enter your password.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12" style="text-align: right;">
                                <br>
                                <button class="btn btn-lg" type="reset">
                                    <i class="fa fa-recycle"></i>
                                    Reset
                                </button>
                                <button class="btn btn-lg btn-success"  @click="saveProfile">
                                    <i class="fa fa-save"></i> Save
                                </button>
                            </div>
                        </div>


                        <hr>

                    </div><!--/tab-pane-->
                    <div class="tab-pane" id="messages">

                        <h2></h2>

                        <hr>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name"><h4>First name</h4></label>
                                <input type="text" class="form-control" name="first_name" id="first_name"
                                       placeholder="first name" title="enter your first name if any.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="last_name"><h4>Last name</h4></label>
                                <input type="text" class="form-control" name="last_name" id="last_name"
                                       placeholder="last name" title="enter your last name if any.">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="phone"><h4>Phone</h4></label>
                                <input type="text" class="form-control" name="phone" id="phone"
                                       placeholder="enter phone" title="enter your phone number if any.">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="mobile"><h4>Mobile</h4></label>
                                <input type="text" class="form-control" name="mobile" id="mobile"
                                       placeholder="enter mobile number" title="enter your mobile number if any.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email"><h4>Email</h4></label>
                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="you@email.com" title="enter your email.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email"><h4>Location</h4></label>
                                <input type="email" class="form-control" id="location" placeholder="somewhere"
                                       title="enter a location">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="password"><h4>Password</h4></label>
                                <input type="password" class="form-control" name="password" id="password"
                                       placeholder="password" title="enter your password.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="password2"><h4>Verify</h4></label>
                                <input type="password" class="form-control" name="password2" id="password2"
                                       placeholder="password2" title="enter your password2.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i
                                    class="glyphicon glyphicon-ok-sign"></i> Save
                                </button>
                                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i>
                                    Reset
                                </button>
                            </div>
                        </div>


                    </div><!--/tab-pane-->
                </div>

            </div><!--/tab-pane-->
        </div><!--/tab-content-->

    </div><!--/col-9-->

</template>

<script>
export default {
    name: "profile",
    data() {
        return {
            authData: {},
            photo : null
        }
    },
    mounted() {
        let _this = this;
        this.getAuth();
    },
    methods: {
        getAuth() {
            let _this = this;
            axios.get('auth-check')
                .then(function (respose) {
                    _this.authData = respose.data.auth;
                    console.log(_this.authData)
                })
                .catch(function (er) {
                    console.log(er.message)
                })
                .finally(function () {

                })
        },
        readURL(e) {
            if (e.target.files.length > 0) {
                this.photo = e.target.files[0];
                this.authData.profile_photo = URL.createObjectURL(this.photo);
            }

        },
        saveProfile() {
            let _this = this;
            let formData = new FormData();
            formData.append('profile_photo', this.photo);
            formData.append('id', this.authData.id);
            formData.append('name', this.authData.name);
            formData.append('password', this.authData.password);
            formData.append('confirm_password', this.authData.confirm_password);
            if (this.authData.password === this.authData.confirm_password && this.authData.password.length > 0) {
                axios.post('/profile-update', formData)
                    .then(function (respose) {
                        console.log(respose.data)
                    })
                    .catch(function (er) {
                        console.log(er.message)
                    })
                    .finally(function () {

                    })
            } else {
                alert('Password not match')
            }
        }
    }
}
</script>

<style scoped>

</style>
