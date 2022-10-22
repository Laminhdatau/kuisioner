
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Page : <?= $jtable; ?></h2>
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
                        <th width="50%">Jenis</th>
                        <th><a href="<?= base_url('backend/formInputjenis_quisioner'); ?>" class="btn btn-primary btn-xs ml-3">+</a></th>
                    </tr>
                </thead>
                <tbody>
                   <?php $no=1;
                        foreach($jenis as $j) : ?>
                     
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $j->jenis_quisioner; ?></td>
                        <td>
                            <a href="<?= base_url('backend/getQuis'); ?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i></a>
                            <a href="<?= base_url('backend/formEditJenis'); ?>/<?= $j->id_jenis_quisioner; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>
                            <a href="<?= base_url('backend/deleteJenis'); ?>/<?= $j->id_jenis_quisioner; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
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

       
