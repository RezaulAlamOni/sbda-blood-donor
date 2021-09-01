<template>
    <section>
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0">Images</h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item">
                                        <router-link :to="{ name : 'admin_home'}"><i class="fas fa-home"></i>
                                        </router-link>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Gallery</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Images</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            <a href="#" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#add-image" >
                                <i class="fas fa-plus-circle fa-2x" > </i>
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
                            <h3 class="text-white mb-0">Gallery Images</h3>
                        </div>
                        <div class="table-responsive card-body ">
                            <div class="row col-md-12" style="margin: auto">
                                <div class="image-grid col-md-3 col-sm-3 col-lg-2 "
                                     @click="previewImage('event_4.jpg',1)">
                                    <img src="/images/event_4.jpg" class="img-thumbnail" alt="" height="200"
                                         width="200">
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--        Image preview modal  -->
        <div class="modal fade" tabindex="-1" id="image-preview" role="dialog" aria-labelledby="modal-default"
             aria-hidden="true">

            <div class="modal-dialog modal-lg modal-dialog-centered modal-" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h6 class="modal-title" id="modal-title-default">Preview Image & Action</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    <div class="modal-body" style="margin:auto">
                        <img :src="'/images/'+preview_image.img" alt="" width="100%">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

<!--        Image add modal  -->
        <div class="modal fade" tabindex="-1" id="add-image" role="dialog" aria-labelledby="modal-default"
             aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered modal-" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h6 class="modal-title" id="modal-default">Add New Gallery Image</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    <div class="modal-body" style="margin:auto">
                        <form>
                            <div class="custom-file">
                                <input type="file" name="img" class="custom-file-input" id="customFileLang" lang="en">
                                <label class="custom-file-label" for="customFileLang">Select file</label>
                            </div>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "gallery-admin",
    data() {
        return {
            preview_image: {
                img: null,
                id: null
            },
            save_image : {
                type : 'gallery',
                img: ''
            }
        }
    },
    mounted() {
    },
    methods: {
        previewImage(image, id) {
            this.preview_image.img = image;
            this.preview_image.id = id

            $('#image-preview').modal()

        }
    }
}
</script>

<style scoped>
.image-grid {
    padding: 1px 1px 12px 1px;
}

.card-body {
    min-height: calc(100vh - 255px);
}

.image-grid img {
    max-height: 100% !important;
    width: auto !important;
    cursor: pointer;
}

.image-grid img:hover {
    zoom: 1.5;
}


</style>
