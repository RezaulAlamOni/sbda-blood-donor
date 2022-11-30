export const myMixin = {
    data() {
        return {
            authData : null,
            title: 'Mixins are cool',
            copyright: 'All rights reserved. Product of super awesome people'
        };
    },
    mounted() {
        this.getAuth()
    },
    created: function() {

    },
    methods: {
        getAuth() {
            let _this = this;
            axios.get('auth-check')
                .then(function (respose) {
                    _this.authData = respose.data.auth;
                })
                .catch(function (er) {
                    console.log(er.message)
                })
                .finally(function () {

                })
        },
    }
};
