<template>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="javascript:void(0)">
                    <img src="/images/logo/sbda-logo.png" class="navbar-brand-img" alt="...">
                </a>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <router-link class="nav-link active" :to="{ name: 'admin_home'}">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#navbar-payment" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                                <i class="fa fa-images text-info"></i>
                                <span class="nav-link-text">Images</span>
                            </a>
                            <div class="collapse" id="navbar-payment" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">

                                        <router-link :to="{ name : 'gallery-image'}"  class="nav-link">
                                            <i class="fa fa-image text-primary" style="    min-width: 20px;"></i>
                                            Gallery Image
                                        </router-link>
                                    </li>
                                    <li class="nav-item">

                                        <router-link :to="{ name : 'slider-image'}"  class="nav-link">
                                            <i class="fa fa-image text-primary" style="    min-width: 20px;"></i>
                                            Home Sliders
                                        </router-link>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#users" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                                <i class="fa fa-users-cog text-success"></i>
                                <span class="nav-link-text">Users</span>
                            </a>
                            <div class="collapse" id="users" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">

                                        <router-link :to="{ name : 'admin-volunteer', params : { type : 'member' }}" class="nav-link" :key ='$route.params'>
                                            <i class="fa fa-user text-blue" style="    min-width: 20px;"></i>
                                            Members
                                        </router-link>
                                    </li>
                                    <li class="nav-item">
                                        <router-link :to="{ name : 'admin-volunteer', params : { type : 'donor' }}"  class="nav-link" :key ='$route.params'>
                                            <i class="fa fa-user text-blue" style="    min-width: 20px;"></i>
                                            Donors
                                        </router-link>
                                    </li>
                                    <li class="nav-item">
                                        <router-link :to="{ name : 'admin-volunteer', params : { type : 'volunteer' }}"  class="nav-link" :key ='$route.params'>
                                            <i class="fa fa-user text-blue" style="    min-width: 20px;"></i>
                                            Volunteer
                                        </router-link>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="examples/icons.html">
                                <i class="ni ni-planet text-orange"></i>
                                <span class="nav-link-text">Icons</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="examples/map.html">
                                <i class="ni ni-pin-3 text-primary"></i>
                                <span class="nav-link-text">Google</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="examples/profile.html">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="examples/tables.html">
                                <i class="ni ni-bullet-list-67 text-default"></i>
                                <span class="nav-link-text">Tables</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="examples/login.html">
                                <i class="ni ni-key-25 text-info"></i>
                                <span class="nav-link-text">Login</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="examples/register.html">
                                <i class="ni ni-circle-08 text-pink"></i>
                                <span class="nav-link-text">Register</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="examples/upgrade.html">
                                <i class="ni ni-send text-dark"></i>
                                <span class="nav-link-text">Upgrade</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">
                    <!-- Heading -->
                    <h6 class="navbar-heading p-0 text-muted">
                        <span class="docs-normal">Documentation</span>
                    </h6>

                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
</template>

<script>
export default {
    name: "side-nav"
}
</script>

<style scoped>

</style>
