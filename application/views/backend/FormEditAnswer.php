<div class="container container-fluid">
    <div class="row">
        <div class="container">
            <h2 class="">Form Edit Answer</h2>
            <form action="<?= base_url('backend/fungsiEditAnswer/'); ?><?= $answer->id_answer; ?> " method="post">

                <div class="form-group">
                    <label>Jawaban</label>
                    <input type="hidden" class="form-control" name="id_answer" id="id_answer" value="<?= $answer->id_answer; ?>">
                    <input type="text" class="form-control" name="answer" id="answer" value="<?= $answer->answer; ?>">
                </div>
               
                <div class="form-group">
                    <button type="submit" class="btn btn-warning">Update</button>
                    <a href="<?= base_url('backend/quisdosen'); ?>" class="btn btn-danger">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>