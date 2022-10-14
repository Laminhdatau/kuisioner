<?php if(!empty($detail)){ ?>
        <?php $i = 1; foreach ($soal as $soal) { ?>
                <label for="soal"><?= $i ?>. <?= $soal['pertanyaan']; ?></label>
                <div class="position-relative form-group ml-3">
                    <div class="form-row ml-3">
                        <div class="custom-radio custom-control col-md-3">
                            <input type="radio" id="exampleCustomRadio1<?=$i?>" name="opsi[<?=$i?>]" value="4" class="custom-control-input" required>
                            <label class="custom-control-label" for="exampleCustomRadio1<?=$i?>">Sangat Baik</label>
                        </div>
                        <div class="custom-radio custom-control col-md-3">
                            <input type="radio" id="exampleCustomRadio2<?=$i?>" name="opsi[<?=$i?>]" value="3" class="custom-control-input" required>
                            <label class="custom-control-label" for="exampleCustomRadio2<?=$i?>">Baik</label>
                        </div>
                        <div class="custom-radio custom-control col-md-3">
                            <input type="radio" id="exampleCustomRadio3<?=$i?>" name="opsi[<?=$i?>]" value="2" class="custom-control-input" required>
                            <label class="custom-control-label" for="exampleCustomRadio3<?=$i?>">Cukup</label>
                        </div>
                        <div class="custom-radio custom-control col-md-3">
                            <input type="radio" id="exampleCustomRadio4<?=$i?>" name="opsi[<?=$i?>]" value="1" class="custom-control-input" required>
                            <label class="custom-control-label" for="exampleCustomRadio4<?=$i?>">Kurang</label>
                        </div>
                    </div>
                </div>
        <?php $i++;} ?>
    <!-- end soal -->
        <div class="form-group">
            <label class="mt-4" for="username">Saran / Masukan</label>
            <div>
                <textarea id="exampleText" class="form-control" name="saran" placeholder="" ></textarea>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary float-right mb-3 mt-3" name="signup" value="Sign up">Submit
            </button>
        </div>
        <?php } ?>
    </div>