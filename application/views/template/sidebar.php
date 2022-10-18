
        <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?= base_url(); ?>" class="site_title"><i class="fa fa-paw"></i> <span><?= $title; ?></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?= base_url('assets'); ?>/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?= base_url(); ?>"><i class="fa fa-home"></i> Dashboard</a>

                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('backend/quisdosen'); ?>">Kuis Dosen</a></li>
                      <li><a href="<?= base_url('backend/quismatakuliah'); ?>">Kuis Mata Kuliah</a></li>
                      <li><a href="<?= base_url('backend/getAnswer'); ?>">Option Jawaban</a></li>
                      <li><a href="<?= base_url('backend/getJenis'); ?>">Jenis Kuis</a></li>
                      <li><a href="<?= base_url('backend/AnswerQuisioner'); ?>">Hasil Kuis</a></li>
                      <li><a href="#">Grafik</a></li>
                    </ul>
                  </li>
                  
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

          </div>
        </div>