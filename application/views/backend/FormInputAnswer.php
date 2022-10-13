
<div class="container container-fluid">
    <div class="row">
        <div class="container">
            <h2 class="h3">Form Tambah Pilihan Jawaban</h2>
            <form action="<?= base_url('backend/fungsiInputAnswer'); ?>" method="post">
                <div class="form-group">
                    <label for="">Jawaban</label>
                    <input type="hidden" class="form-control" name="id_answer">
                    <input type="text" class="form-control" name="answer" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="<?= base_url(); ?>" class="btn btn-danger" >Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
