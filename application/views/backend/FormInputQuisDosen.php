
<div class="container container-fluid">
    <div class="row">
        <div class="container">
            <h2 class="h3">Form Tambah Quis</h2>
            <form action="<?= base_url('backend/fungsiInputQuisDosen'); ?>" method="post">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="kd_quisioner">
                </div>
                <div class="form-group">
                    <label for="">Quis</label>
                    <input type="text" class="form-control" name="quisioner" required>
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" class="form-control" required>
                        <option value="">Pilih</option>
                        <option value="1">Aktif</option>
                        <option value="0">Non Aktif</option>
                    </select>
                </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="<?= base_url(); ?>" class="btn btn-danger" >Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
