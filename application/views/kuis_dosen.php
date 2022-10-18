


<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Sedang Di Proses...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid  bg-purple">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="javascript:void(0);">
                    <h4>SISTEM AKADEMIK - POLITEKNK GORONTALO</h4>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Notifications -->
                    <!-- <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 sales made</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy Doe</b> deleted account</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy</b> changed name</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> commented your post</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> updated status</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                                        <img src="<?= base_url('assets'); ?>assets/images/pasphoto/7501132407010001.jpg" width="45" height="45" alt="User" />
                                    </div>
                <div class="info-container">
                                        <div class="name">
                        <code>Lamin H.Datau</code>
                        <br>
                        <code>Mahasiswa</code>
                    </div>
                                        <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="true">arrow_drop_down_circle</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?= base_url('assets'); ?>profile"><i
                                        class="material-icons">person</i>Biodata</a></li>
                            <li><a href="<?= base_url('assets'); ?>keluar"><i class="material-icons">input</i>Keluar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <style>
    .btn-disabled,
    .btn-disabled[disabled] {
      opacity: .4;
      cursor: default !important;
      pointer-events: none;
    }
</style>

<div class="menu">
   <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 722px;">
        <ul class="list" style="overflow: hidden; width: auto; height: 722px;">
            <li class="active"></li>
            <!-- <li class="header bg-pink" align="center"><b>MENU UTAMA</b></li> -->
            <li class="header bg-orange"><b>MENU UTAMA</b></li>
                            <li class="active">
                            <a href="<?= base_url('assets'); ?>home">
                    <i class="material-icons">home</i>
                    <span>Halaman Utama</span>
                </a>
            </li>
                                                                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">people</i>
                    <span>Program Studi</span>
                </a>
                <ul class="ml-menu">
                                                                                           <li>
                                                        <a href="<?= base_url('assets'); ?>id=cc4aaa1245234d2de974b392f8b4d880">
                                            <i class="material-icons">people</i>
                            <span>Kartu Rencana Studi</span>
                        </a>
                    </li>
                                            </ul>
    </div>
</div>            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy;2018-2019 <a href="javascript:void(0);">Siakad Poligon</a>
                    <b>Version: </b> 2.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <script src="assets/jquery.min.js"></script>
<ol class="breadcrumb breadcrumb-bg-teal">
    <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home Siakad Poligon</a></li>
</ol>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                   <b> Selamat Datang Di Halaman Utama</b>
                </h2>
             </div>
            <!-- <div></div> -->
        <!--        -->
       </div>
    </div>
</div>
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="<?= base_url('assets'); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core Js -->
    <script src="<?= base_url('assets'); ?>assets/plugins/bootstrap/js/bootstrap.js"></script>
    <!-- Select Plugin Js -->
    <script src="<?= base_url('assets'); ?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="<?= base_url('assets'); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="<?= base_url('assets'); ?>assets/plugins/node-waves/waves.js"></script>
    <!-- Autosize Plugin Js -->
    <script src="<?= base_url('assets'); ?>assets/plugins/autosize/autosize.js"></script>
    <!-- Moment Plugin Js -->
    <script src="<?= base_url('assets'); ?>assets/plugins/momentjs/moment.js"></script>
    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script
        src="<?= base_url('assets'); ?>assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js">
    </script>
    <!-- Custom Js -->
    <script src="<?= base_url('assets'); ?>assets/js/admin.js"></script>

    <script src="<?= base_url('assets'); ?>assets/js/pages/ui/dialogs.js"></script>

    <script src="<?= base_url('assets'); ?>assets/js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="<?= base_url('assets'); ?>assets/js/demo.js"></script>
    <!-- Jquery DataTable Plugin Js -->
    <script src="<?= base_url('assets'); ?>assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?= base_url('assets'); ?>assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js">
    </script>

    <script src="<?= base_url('assets'); ?>assets/js/pages/tables/jquery-datatable.js"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="<?= base_url('assets'); ?>assets/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="<?= base_url('assets'); ?>assets/plugins/bootstrap-notify/bootstrap-notify.js"></script>
</body>

</html>
