<template>
    <section>

        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
<!--                            <h6 class="h2 text-white d-inline-block mb-0">Images</h6>-->
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item">
                                        <router-link :to="{ name : 'admin_home'}"><i class="fas fa-home"></i>
                                        </router-link>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Users</a></li>
                                    <li class="breadcrumb-item active text-capitalize" aria-current="page">{{ type }}</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            <input type="file" style="display: none" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" id="csv_input" @change="uploadCsvData" >
                            <a href="#" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#add-image" @click="clickOnCsvFile()">
                                <i class="fas fa-plus-circle fa-2x"> </i>
                            </a>
                            <a href="#" class="btn btn-sm btn-neutral">
                                <i class="fas fa-filter fa-2x"> </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->

        <div class="container-fluid mt--6">
            <!-- Dark table -->
            <div class="row">
                <div class="col">
                    <div class="card bg-default shadow">
                        <div class="card-header bg-transparent border-0">
                            <h3 class="text-white mb-0 text-capitalize">{{ type }} lists</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-dark table-flush">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Name</th>
                                    <th scope="col" class="sort" data-sort="budget">Email</th>
                                    <th scope="col" class="sort" data-sort="status">Phone</th>
                                    <th scope="col" class="sort" data-sort="status">Area</th>
                                    <th scope="col" class="sort" data-sort="status">Blood Group</th>
                                    <!--                                    <th scope="col">Users</th>-->
                                    <!--                                    <th scope="col" class="sort" data-sort="completion">Completion</th>-->
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                <tr v-for="user in users">
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="#" :src="user.profile_photo ?  user.profile_photo : '/images/thumbnail.png'">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">{{ user.name }}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        {{ user.email }}
                                    </td>
                                    <td>{{ user.phone }}</td>
                                    <td>{{ user.area ? user.area.name : '' }}</td>
                                    <td>{{ user.blood_group ? user.blood_group.name : null }}</td>
                                    <td>
                                        <span class="badge badge-dot mr-4" >
                                            <template v-if="user.status == 0">
                                                 <i class="bg-warning"></i>
                                                <span class="status text-capitalize ">pending</span>
                                            </template>
                                            <template v-else>
                                                <i class="bg-success"></i>
                                                <span class="status text-capitalize ">Active</span>
                                            </template>

                                        </span>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "volunteer",
    data() {
        return {
            type: null,
            users : []
        }
    },
    mounted() {
        this.type = this.$attrs.type;
        this.getUsersType();
    },
    methods: {
        getUsersType() {
            let _this = this;
            this.axios.get('/admin/users-type/'+_this.type)
                .then(resp => {
                    _this.users = resp.data.users;
                    if (_this.type == 'volunteer') {
                        _this.users = _this.users.map(function (user){
                            user.area = user.v_area;
                            return user;
                        })
                    }
                })
        },
        uploadCsvData(e) {
            let _this = this;
            let file = e.target.files[0]
            let fd = new FormData()

            fd.append('file', file)

            fd.append('type', _this.type)

            this.axios.post('/admin/csv-upload', fd)
                .then(resp => {
                    $('#add-image').modal('hide')
                    _this.save_image = [];
                    _this.upload_preview = [];
                    _this.getUsersType();
                })


        },

        clickOnCsvFile() {
            $('#csv_input').click()
        }

    },
    watch: {
        '$attrs.type': function (val) {
            this.type = val;
            this.getUsersType();
        }
    }
}
</script>

<style scoped>

</style>
