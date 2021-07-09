<template>
    <!--  SECTION GALLERY  -->

    <section class="section-content-block section-faq">

        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-4">
                    <form method="post" id="form_validation" action="/login"
                          data-fv-framework="bootstrap" data-bv-message="This value is not valid"
                          data-bv-feedbackicons-valid="" data-bv-feedbackicons-invalid=""
                          data-bv-feedbackicons-validating="" novalidate="novalidate" class="bv-form">
                        <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                        <div class="panel panel-primary">
                            <div class="panel-body">
                                <div class="text-center">
                                    <h4 class="text-red">Sign-In as SBDA Blood Donor.</h4>
                                    <small>
                                        <span class="text-danger">*</span> Required fields
                                    </small>
                                </div>
                                <hr>
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
                            <div class="panel-footer">
                                <div class="pull-left">
                                    <p style="padding-top: 10px;">
                                        <a class="text-primary" href="/password/reset">Forgot password?</a></p>
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
    name: "member-login",
    data(){
      return {
          photos : [],
          app_url: window.APP_URL
      }
    },
    mounted() {
        this.photos = []
    },

}
</script>

<style scoped>
.section-content-block {
    padding: 30px 0 100px 0;
}
</style>
