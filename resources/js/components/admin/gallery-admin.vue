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

            <div class="modal-dialog modal-lg modal-dialog-centered modal-" role="document">
                <div class="modal-content">

                    <div class="modal-header" style="background: #4c1313">
                        <h4 class="modal-title text-white" id="modal-default">Add New Gallery Image</h4>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="text-white">×</span>
                        </button>
                    </div>

                    <div class="modal-body" >
                        <span v-if="upload_preview.length > 0" class=" float-right my-2"> {{ upload_preview.length }} Images Selected </span>
                        <div class="custom-file" style="width: 50% !important;">
                            <input type="file" name="img" class="custom-file-input" @change="uploadImage"
                                   style="opacity: 0 !important;" accept="image/png, image/gif, image/jpeg, image/jpg"
                                   multiple   id="customFileLang" lang="en">
                            <label class="custom-file-label" for="customFileLang">Select file</label>
                        </div>
                        <div v-if="upload_preview.length > 0"  style="margin-top: 6px; border-top: 1px solid lightgray;">
                            <div id="preview" v-for="(preview, key ) in upload_preview">
                                <img v-if="preview" class="img-thumbnail"  v-bind:ref="'image' +parseInt( key )"/>
                            </div>
                        </div>


                    </div>


                    <div class="modal-footer"  style="border-top: 1px solid #e6e5e5;padding: 2px 10px;">
<!--                        <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>-->
                        <button type="button" class="btn btn-primary" @click="saveImage()">
                            <i class="fas fa-save mr-2"> </i>
                            Save</button>
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
            save_image : [],
            upload_preview : [],
            gallery : []

        }
    },
    mounted() {
        this.getGallery();
    },
    methods: {
        getGallery() {
            let _this = this;
            // this.axios.get('/admin/image-upload')
            //     .then(resp => {
            //         $('#image-preview').modal('hide')
            //         _this.save_image = [];
            //         _this.upload_preview = [];
            //         console.log(resp)
            //     })
        },
        previewImage(image, id) {
            this.preview_image.img = image;
            this.preview_image.id = id

            $('#image-preview').modal({backdrop: 'static'})

        },
        saveImage() {
            let fd = new FormData()
            let _this = this;

            for (let i = 0; i < _this.save_image.length ; i++) {
                fd.append('file[]', _this.save_image[i].img)
            }
            fd.append('type', 'gallery')
            if (_this.save_image.length > 0) {
                this.axios.post('/admin/image-upload', fd)
                    .then(resp => {
                        $('#add-image').modal('hide')
                        _this.save_image = [];
                        _this.upload_preview = [];
                        _this.getGallery();
                    })
            }

        },
        uploadImage (e) {
            let _this = this;
            let files = e.target.files

            for (let i = 0; i < files.length ; i++) {
                let file = files[i];
                _this.save_image.push({
                    img: file
                })
                // let tem_path = URL.createObjectURL(_this.save_image.img);
                // let tem_path = window.URL.createObjectURL(_this.save_image.img)
                _this.upload_preview.push(file)
            }

            for (let i = 0; i< _this.upload_preview.length; i++) {
                let reader = new FileReader(); //instantiate a new file reader
                reader.addEventListener('load', function () {
                    this.$refs['image' + parseInt(i)][0].src = reader.result;
                }.bind(this), false);  //add event listener

                reader.readAsDataURL(_this.upload_preview[i]);

            }
        }
    }
}
</script>

<style scoped>

    #preview {
        display: contents;
        justify-content: center;
        align-items: center;
    }

#preview img {
    max-width: 30%;
    max-height: 100px;
    padding: 5px;
    margin: 3px;
}

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
