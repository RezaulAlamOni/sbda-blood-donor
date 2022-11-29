<template>
    <!--  SECTION GALLERY  -->

    <section class="section-content-block section-pure-white-bg">

        <div class="container">

            <div class="card">
                <div class="card-header">
                    <div class="col-md-12 row" style="padding: 0; margin: 0">
                        <div class="col-md-6">
                            <h2>Our Volunteer</h2>
                        </div>
                        <div class="col-md-6" style="margin : 0;padding: 0">
                            <input type="text" class="form-control" style="height: 40px;border-radius: 5px"
                                   @keyup="getVolunteers" v-model="search"
                                   placeholder="Find user by Name, Email, Phone Area and Blood group ">
                        </div>

                    </div>

                </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name <i class="fa fa-fw fa-sort"></i></th>
                            <th>Email <i class="fa fa-fw fa-sort"></i></th>
                            <th>Phone <i class="fa fa-fw fa-sort"></i></th>
                            <th>Area <i class="fa fa-fw fa-sort"></i></th>
                            <th>Blood Group <i class="fa fa-fw fa-sort"></i></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="(user,k) in users" :class="(k%2 == 0) ?  'table-custom-tr1' : 'table-custom-tr' " >
                            <th scope="row">{{ (k + 1) }}</th>
                            <td>{{ user.name }}</td>
                            <td>{{ user.email }}</td>
                            <td>{{ user.phone }}</td>
                            <td>{{ user.v_area ? user.v_area.name : '' }}</td>
                            <td class="text-center"> {{ user.blood_group ? user.blood_group.name : '' }}</td>
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
            users: [],
            search: '',
            filter: 'DESC',
            filter_type: 'id'
        }
    },
    mounted() {
        this.type = this.$attrs.type;
        this.search = this.$attrs.search;
        setTimeout(function () {
            $('.navbar-toggle').click()
        }, 200)

    },
    methods: {
        getVolunteers() {
            let _this = this;
            let url = `/users-type/volunteer?`;
            if (this.search.length > 0) {
                url = url + 'search=' + _this.search;
                url += '&';
            }
            url += 'filter=' + _this.filter + '&filter_type=' + _this.filter_type;
            this.axios.get(url)
                .then(resp => {
                    _this.users = resp.data.users.data;
                    _this.photo_s = resp.data.users
                })
        },
        show() {
            this.$viewerApi({
                images: this.photos
            })
        },
        async list(page = 1) {
            let _this = this;
            let url = `/users-type/volunteer?page=${page}`;
            if (this.search.length > 0) {
                url = url + '&search=' + _this.search;
                url += '&';
            }
            url += 'filter=' + _this.filter + '&filter_type=' + _this.filter_type;
            await axios.get(url)
                .then((resp) => {
                    _this.users = resp.data.users.data;
                    _this.photo_s = resp.data.users
                }).catch(({response}) => {
                    console.error(response)
                })
        }
    },
    created() {
        this.getVolunteers();
    },
    watch: {
        '$attrs.search': function (val) {
            this.search = val;
            this.getUsersType();
        }
    }

}
</script>

<style scoped>
.section-content-block {
    padding: 30px 0 100px 0;
}

thead tr {
    background: #fd989c;
}

.table-custom-tr {
    background: #dfecff;
}
.table-custom-tr {
    background: #ffedf5;
}
</style>
