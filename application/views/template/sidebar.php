
        <body class="nav-md" style="background-color:#e19ee4;">
    <div class="container body" >
      <div class="main_container" style="background-color:#e19ee4;">
        <div class="col-md-3 left_col" style="background-color:#e19ee4;">
          <div class="left_col scroll-view"  style="background-color:#e19ee4;">
            <div class="navbar nav_title" style=" background-color:#75006a;">
              <a href="<?= base_url(); ?>" class="site_title">
              <img src="<?= base_url('assets'); ?>/images/poltekgo.png" width="35px">
              <?= $title; ?></span></a>
            </div>

            <div class="clearfix"></div>

           

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Admin</h3>
                <ul class="nav side-menu">
                  <li><a href="<?= base_url(); ?>"><i class="fa fa-home"></i> Dashboard</a>
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('backend/quisdosen'); ?>">Kuis Dosen</a></li>
                      <li><a href="<?= base_url('backend/quismatakuliah'); ?>">Kuis Mata Kuliah</a></li>
                      <li><a href="<?= base_url('backend/getAnswer'); ?>">Option Jawaban</a></li>
                      <li><a href="<?= base_url('backend/getJenis'); ?>">Jenis Kuis</a></li>
                      <li><a href="<?= base_url('backend/AnswerQuisioner'); ?>">Hasil Kuis</a></li>
                    </ul>
                  </li>
                  
                </ul>


                 <h3>User</h3>
                <ul class="nav side-menu">
                  <li>
                    <a>
                      <i class="fa fa-table"></i> Kuisioner <span class="fa fa-chevron-down"></span>
                    </a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('quisioner'); ?>">Kuis Dosen</a></li>
                      <li><a href="<?= base_url('quisioner/getQuisMK'); ?>">Kuis Mk</a></li>
                    </ul>
                  </li>
                  
                </ul>


                <h3>Dosen</h3>
                <ul class="nav side-menu">
                  <li>
                    <a>
                      <i class="fa fa-table"></i> Grafik <span class="fa fa-chevron-down"></span>
                    </a>
                    <ul class="nav child_menu">
                      <li><a href="#">Grafik</a></li>
                      <li><a href="#">Grafik Mata Kuliah</a></li>
                    </ul>
                  </li>
                  
                </ul>

                <h3>Upm</h3>
                <ul class="nav side-menu">
                  <li>
                    <a>
                      <i class="fa fa-table"></i> Grafik <span class="fa fa-chevron-down"></span>
                    </a>
                    <ul class="nav child_menu">
                      <li><a href="#">Grafik</a></li>
                      <li><a href="#">Grafik Mata Kuliah</a></li>
                    </ul>
                  </li>
                  
                </ul>
              </div>

            </div>
            <style>
              .sidebar-footer {
                heigth: 78%;
                
              }
            </style>
            <!-- /sidebar menu -->
                <div class="sidebar-footer  hidden-small">
                </div>
          </div>
        </div>






  