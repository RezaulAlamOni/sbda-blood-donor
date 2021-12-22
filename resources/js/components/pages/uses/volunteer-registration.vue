<template>
    <!--  SECTION GALLERY  -->

    <section class="section-content-block section-faq">

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form method="post" id="form_validation" :action="app_url+'register'"
                          data-fv-framework="bootstrap" data-bv-message="This value is not valid"
                          data-bv-feedbackicons-valid="" data-bv-feedbackicons-invalid=""
                          data-bv-feedbackicons-validating="" novalidate="novalidate" class="bv-form">
                        <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                        <input type="hidden" value="volunteer"  name="type" >
                        <div class="panel panel-primary">
                            <div class="panel-body">
                                <div class="text-center">
                                    <h4>Join as SBDA Volunteer</h4>
                                    <small>
                                        <span class="text-danger">*</span> Required fields
                                    </small>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Full Name:
                                                <small class="text-danger">*</small>
                                            </label>
                                            <input type="text" class="form-control" id="name"
                                                   name="name" value=""
                                                   data-bv-notempty="true"
                                                   placeholder="enter full name"
                                                   data-bv-field="email">
                                            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="email"
                                                   data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">E-mail/Mobile:
                                                <small class="text-danger">*</small>
                                            </label>
                                            <input type="text" class="form-control" id="email"
                                                   name="email" value=""
                                                   data-bv-notempty="true"
                                                   placeholder="enter email/mobile"
                                                   data-bv-field="email">
                                            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="email"
                                                   data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Password:
                                                <small class="text-danger">*</small>
                                            </label>
                                            <input type="password" class="form-control"
                                                   id="password" name="password" value=""
                                                   data-bv-notempty="true"
                                                   placeholder="enter password"
                                                   data-bv-field="password">
                                            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="password" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Phone:
                                                <small class="text-danger">*</small>
                                            </label>
                                            <input type="text" class="form-control"
                                                   id="phone" name="phone" value=""
                                                   data-bv-notempty="true"
                                                   placeholder="enter phone number"
                                                   data-bv-field="password">
                                            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="password" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Address :
                                                <small class="text-danger">*</small>
                                            </label>
                                            <input type="text" class="form-control"
                                                   id="address" name="address" value=""
                                                   data-bv-notempty="true"
                                                   placeholder="enter full address"
                                                   data-bv-field="password">
                                            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="password" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Blood Group :
                                                <small class="text-danger">*</small>
                                            </label>
                                            <select class="form-select form-control" name="blood_group" aria-label="Default select example">
                                                <option value="0" >Select Blood Group</option>
                                                <option v-for="b_group in blood_groups" :value="b_group.id">{{ b_group.id }}) {{ b_group.name }}</option>
                                            </select>
                                            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="password" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small>
                                        </div>
<!--                                        <div class="form-group">-->
<!--                                            <label class="control-label">Member Area :-->
<!--                                                <small class="text-danger">*</small>-->
<!--                                            </label>-->
<!--                                            <select class="form-select form-control" name="area" aria-label="Default select example">-->
<!--                                                <option value="0" >Select Member Area </option>-->
<!--                                                <option v-for="areas in member_areas" :value="areas.id">{{ areas.id }}) {{ areas.name }}</option>-->
<!--                                            </select>-->
<!--                                            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="password" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small>-->
<!--                                        </div>-->
                                    </div>

                                </div>

                            </div>
                            <div class="panel-footer">
                                <div class="pull-left">
                                    <p style="padding-top: 10px;">
                                        <a class="text-primary" href="https://saptagaon.com/forgotpassword">Forgot password?</a></p>
                                </div>
                                <div class="pull-right">
                                    <button class="btn btn-lg btn-primary" type="submit"><i class="fa fa-key"></i> Join now
                                    </button>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section><!-- HIGHLIGHT CTA  -->
</template>

<script>
export default {
    name: "member-registration",
    data(){
      return {
          photos : [],
          app_url: window.APP_URL,
          blood_groups : [],
          member_areas : [],
          router_name : null
      }
    },
    mounted() {
        this.photos = []
        this.getAllBloodGroups();
        this.getAllAreas();
        this.router_name =  this.$route.name;
    },
    methods :{
        getAllBloodGroups() {
            let _this = this;
            axios.get(_this.app_url+'blood-groups')
            .then(function (respose) {
                console.log( respose.data)
                _this.blood_groups = respose.data.data;

            })
            .catch(function (er) {
                console.log(er.message)
            })
            .finally(function () {

            })
        },
        getAllAreas() {
            let _this = this;
            axios.get(_this.app_url+'member-areas')
            .then(function (respose) {
                console.log( respose.data)
                _this.member_areas = respose.data.areas;

            })
            .catch(function (er) {
                console.log(er.message)
            })
            .finally(function () {

            })
        }
    },

}
</script>

<style scoped>
.section-content-block {
    padding: 30px 0 100px 0;
}
</style>
