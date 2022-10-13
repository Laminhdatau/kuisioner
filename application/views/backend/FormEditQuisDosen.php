<div class="container container-fluid">
    <div class="row">
        <div class="container">
            <h2 class="">Form Edit Quis</h2>
            <form action="<?= base_url('backend/fungsiEditQuisDosen/'); ?><?= $editquis->kd_quisioner; ?> " method="post">

                <div class="form-group">
                    <label>Quis</label>
                    <input type="hidden" class="form-control" name="kd_quisioner" id="kd_quisioner" value="<?= $editquis->kd_quisioner; ?>">
                    <input type="text" class="form-control" name="quisioner" id="quisioner" value="<?= $editquis->quisioner; ?>">
                </div>
                
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control">
                        <option value="1" <?php if($editquis->status == "1") { echo "SELECTED"; } ?>>Aktif</option>
                        <option value="0" <?php if($editquis->status == "0") { echo "SELECTED"; } ?>>Non Aktif</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-warning">Update</button>
                    <a href="<?= base_url('backend/quisdosen'); ?>" class="btn btn-danger">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>