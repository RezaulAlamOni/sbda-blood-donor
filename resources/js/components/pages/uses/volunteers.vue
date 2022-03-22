<template>
    <!--  SECTION GALLERY  -->

    <section class="section-content-block section-pure-white-bg">

        <div class="container">

            <div class="card">
                <div class="card-header">
                    <h2>Our Volunteer</h2>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Blood Group</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="(user,k) in users">
                            <th scope="row">{{ (k+1) }}</th>
                            <td>{{ user.name }}</td>
                            <td>{{ user.email }}</td>
                            <td>{{ user.phone }}</td>
                            <td>{{ user.blood_group ? user.blood_group.name : '' }}</td>
                        </tr>

                        </tbody>
                    </table>
                    <div class="text-center col-md-12">
                        <pagination align="center" :options="options" :data="photo_s" @pagination-change-page="list">
                            <span slot="prev-nav">&lt; Previous</span>
                            <span slot="next-nav">Next &gt;</span>
                        </pagination>
                    </div>

<!--                    <datatable :columns="columns" :data="users"></datatable>-->
                </div>
            </div>
        </div> <!--  end .container -->

    </section> <!-- end .section-content-block  -->

    <!-- HIGHLIGHT CTA  -->
</template>

<script>
import 'viewerjs/dist/viewer.css'
import VueViewer from 'v-viewer'
import Vue from 'vue'
import pagination from 'laravel-vue-pagination'


Vue.use(VueViewer)
export default {
    name: "volunteer-list",
    components: {
        pagination,
    },
    data() {
        return {
            photos: [],
            photo_s: {},
            app_url: window.APP_URL,
            options: {},
            type: 0,
            users : []
        }
    },
    mounted() {
        this.type = this.$attrs.type;
        setTimeout(function () {
            $('.navbar-toggle').click()
        }, 200)

    },
    methods: {
        getGallery() {
            let _this = this;
            this.axios.get('/users-type/volunteer')
                .then(resp => {
                    _this.users = resp.data.users.data;
                    _this.photo_s =     resp.data.users
                })
        },
        show() {
            this.$viewerApi({
                images: this.photos
            })
        },
        async list(page = 1) {
            let _this = this;
            await axios.get(`/users-type/volunteer?page=${page}`)
                .then((resp) => {
                    _this.users = resp.data.users.data;
                    _this.photo_s =     resp.data.users
                }).catch(({response}) => {
                    console.error(response)
                })
        }
    },
    created() {
        this.getGallery();
    }

}
</script>

<style scoped>
.section-content-block {
    padding: 30px 0 100px 0;
}
</style>
