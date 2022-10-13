

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Table <small><?= $jtable; ?></small></h3>
              </div>
            </div>

            <div class="clearfix"></div>
            
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Jenis <?= $jtable; ?></h2>
                    <h2><a href="<?= base_url('backend/formInputAnswer'); ?>" class="btn btn-primary btn-xs ml-3">Tambah Kuis</a></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                    <tr>
                        <th>No</th>
                        <th>Objektif</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                   <?php $no=1;
                        foreach($answer as $a) : ?>
                     
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $a->answer; ?></td>
                        <td>

                            <a href="<?= base_url('quisioner'); ?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="<?= base_url('backend/formeditanswer'); ?>/<?= $a->id_answer; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="<?= base_url('backend/deleteAnswer'); ?>/<?= $a->id_answer; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>

                        </td>
                    </tr>
                    <?php endforeach;  ?>
                </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>




                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

       
