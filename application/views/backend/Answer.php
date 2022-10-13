

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
                        <th>Pilihan Jawaban Option</th>
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
                            <a href="<?= base_url('quisioner'); ?>"><i class="fas fa-eye"></i></a>
                            <a href="<?= base_url('backend/formeditanswer'); ?>/<?= $a->id_answer; ?>"><i class="fas fa-sync"></i></a> 
                            <a href="<?= base_url('backend/deleteAnswer'); ?>/<?= $a->id_answer; ?>"><i class="fas fa-trash-alt"></i></a>
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

       
