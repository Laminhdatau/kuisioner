

<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Form Elements</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Tambah Kuis</h2>
									
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form method="post" action="<?= base_url('backend/fungsiEditQuisDosen/'); ?><?= $editquis->kd_quisioner; ?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="kuis">Kuis<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                                                <input type="hidden" id="kuis" name="kd_quisioner"  class="form-control" value="<?= $editquis->kd_quisioner; ?>">
												<input type="text" id="kuis" name="quisioner" required="required" class="form-control" value="<?= $editquis->quisioner; ?>">
											</div>
										</div>
										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="status">Status</label>
											<div class="col-md-6 col-sm-6 ">
												<label for="status">Status</label>
                                                <select name="status" class="form-control">
                                                    <option value="1" <?php if($editquis->status == "1") { echo "SELECTED"; } ?>>Aktif</option>
                                                    <option value="0" <?php if($editquis->status == "0") { echo "SELECTED"; } ?>>Non Aktif</option>
                                                </select>
											</div>
										</div>
										
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<a href="<?= base_url('backend/quisdosen'); ?>" class="btn btn-primary" type="button">Cancel</a>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>


