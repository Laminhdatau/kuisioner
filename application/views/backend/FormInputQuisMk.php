  <div class="right_col" role="main">
                <div class="">
        <div class="x_content">

    <form  action="<?= base_url('backend/fungsiInputQuisMk'); ?>" method="post" novalidate>

      <span class="section">Tambah Kuis</span>
      <div class="field item form-group">
          <label class="col-form-label col-md-3 col-sm-3  label-align">Kuis</label>
          <div class="col-md-6 col-sm-6">
                <input type="hidden" class="form-control" name="kd_quisioner"/>
                <input  class="form-control" name="quisioner" placeholder="Silahkan Masukan Kuis" required/>
          </div>
      </div>

      <div class="field item form-group">
            <label class="col-form-label col-md-3 col-sm-3  label-align">Status</label>
      <div class="col-md-6 col-sm-6">
            <select name="status" class="form-control" required>
                <option value="">Pilih</option>
                <option value="1">Aktif</option>
                <option value="0">Non Aktif</option>
            </select>
      </div>                      
     <div class="ln_solid">
        <div class="form-group">
         <div class="col-md-6 offset-md-3">
            <button type='submit' class="btn btn-primary">Submit</button>
         </div>
        </div>
     </div>
     </form>
        </div>
</div>
  </div>
  </div>