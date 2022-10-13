<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php if (isset($periode)) : ?>
                Pengisian Kuesioner Telah Dibuka !
            <?php else : ?>
                Pengisian Kuesioner ditutup !
            <?php endif; ?>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Sweet Alert -->
        <?php if ($this->session->flashdata('message')) : ?>
            <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('message'); ?>"></div>
        <?php endif; ?>

        <?php
        if (isset($periode)) {
            if (empty($answer)) : ?>
                <form method="post" class="form-horizontal" enctype="multipart/form-data" action="">
                    <?php foreach ($aspek as $asp) { ?>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box box-primary">
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="table-responsive-sm">
                                            <table border="1" class="display table table-striped table-hover table-sm" bordercolor=#9B9B9B align="center" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td rowspan="2" align="center" bgcolor="#FF9D9D" class="bg-primary">
                                                        <b>
                                                            <font face="Calibri" size="4">NO.</font>
                                                        </b>
                                                    </td>
                                                    <td rowspan="2" align="left" bgcolor="#FF9D9D" class="bg-primary">
                                                        <b>
                                                            <font face="Calibri" size="4"><?= strtoupper($asp['nama_aspek']) ?></font>
                                                        </b>
                                                    </td>
                                                    <td align="center" colspan="4" class="bg-primary">
                                                        <b>
                                                            <font face="Calibri" size="4">HARAPAN</font>
                                                        </b>
                                                    </td>
                                                    <td align="center" colspan="4" bgcolor="#FF9D9D" class="bg-info">
                                                        <b>
                                                            <font face="Calibri" size="4">KENYATAAN</font>
                                                        </b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center" class="bg-primary"><b>
                                                            <font face="Calibri" size="4">1</font>
                                                        </b></td>
                                                    <td align="center" class="bg-primary"><b>
                                                            <font face="Calibri" size="4">2</font>
                                                        </b></td>
                                                    <td align="center" class="bg-primary"><b>
                                                            <font face="Calibri" size="4">3</font>
                                                        </b></td>
                                                    <td align="center" class="bg-primary"><b>
                                                            <font face="Calibri" size="4">4</font>
                                                        </b></td>

                                                    <td align="center" class="bg-info"><b>
                                                            <font face="Calibri" size="4">1</font>
                                                        </b></td>
                                                    <td align="center" class="bg-info"><b>
                                                            <font face="Calibri" size="4">2</font>
                                                        </b></td>
                                                    <td align="center" class="bg-info"><b>
                                                            <font face="Calibri" size="4">3</font>
                                                        </b></td>
                                                    <td align="center" class="bg-info"><b>
                                                            <font face="Calibri" size="4">4</font>
                                                        </b></td>
                                                </tr>
                                                <?php $no = 1;
                                                $asked = $this->db->query("SELECT * FROM kuesioner where id_aspek = '" . $asp['id_aspek'] . "' AND id_level = '" . $this->session->userdata('id_level') . "'");
                                                foreach ($asked->result_array() as $ask) { ?>
                                                    <input type="hidden" name="id_periode[<?= $ask['id_kuesioner'] ?>]" value="<?= $periode['id_periode'] ?>">
                                                    <input type="hidden" name="id_kuesioner[<?= $ask['id_kuesioner'] ?>]" value="<?= $ask['id_kuesioner'] ?>">
                                                    <input type="hidden" name="id_aspek[<?= $ask['id_kuesioner'] ?>]" value="<?= $asp['id_aspek'] ?>">
                                                    <input type="hidden" name="typeaspek[<?= $ask['id_kuesioner'] ?>]" value="<?= $asp['typeaspek'] ?>">
                                                    <input type="hidden" name="username[<?= $ask['id_kuesioner'] ?>]" value="<?= $this->session->userdata('username') ?>">
                                                    <tr>
                                                        <td bgcolor=#F9EDED align="center">
                                                            <font face="Calibri" size="3"><?= $no ?></font>
                                                        </td>
                                                        <td bgcolor=#F9EDED>
                                                            <font face="Calibri" size="3"><?= $ask['pertanyaan'] ?></font>
                                                        </td>
                                                        <td bgcolor=#F9EDED align="center">
                                                            <input name="harapan[<?= $ask['id_kuesioner'] ?>]" type="radio" value="1" required>
                                                        </td>
                                                        <td bgcolor=#F9EDED align="center">
                                                            <input name="harapan[<?= $ask['id_kuesioner'] ?>]" type="radio" value="2" required>
                                                        </td>
                                                        <td bgcolor=#F9EDED align="center">
                                                            <input name="harapan[<?= $ask['id_kuesioner'] ?>]" type="radio" value="3" required>
                                                        </td>
                                                        <td bgcolor=#F9EDED align="center">
                                                            <input name="harapan[<?= $ask['id_kuesioner'] ?>]" type="radio" value="4" required>
                                                        </td>
                                                        <td bgcolor=#F9EDED align="center">
                                                            <input name="nyata[<?= $ask['id_kuesioner'] ?>]" type="radio" value="1" required>
                                                        </td>
                                                        <td bgcolor=#F9EDED align="center">
                                                            <input name="nyata[<?= $ask['id_kuesioner'] ?>]" type="radio" value="2" required>
                                                        </td>
                                                        <td bgcolor=#F9EDED align="center">
                                                            <input name="nyata[<?= $ask['id_kuesioner'] ?>]" type="radio" value="3" required>
                                                        </td>
                                                        <td bgcolor=#F9EDED align="center">
                                                            <input name="nyata[<?= $ask['id_kuesioner'] ?>]" type="radio" value="4" required>
                                                        </td>
                                                    </tr>
                                                    <?php $no++;
                                                } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-primary">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="harapan" class="col-sm-2 control-label">Harapan</label>
                                        <div class="col-sm-10">
                                            <textarea type="text" class="form-control" required id="editor" name="textharapan" value="<?php echo set_value('harapan'); ?>" placeholder="Masukan Harapan Saudara Terhadap Layanan Manajemen di Universitas Catur Insan Cendekia Cirebon*"></textarea>
                                            <?php echo form_error('harapan', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="masukan" class="col-sm-2 control-label">Masukan</label>
                                        <div class="col-sm-10">
                                            <textarea type="text" class="form-control" required id="editor1" name="textmasukan" value="<?php echo set_value('masukan'); ?>" placeholder="Masukan Saran Saudara Terhadap Layanan Manajemen di Universitas Catur Insan Cendekia Cirebon*"></textarea>
                                            <?php echo form_error('masukan', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Send</button>
                    <input type="hidden" name="submitted" value="insert" />
                <?php else : ?>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-primary">
                                <div class="box-body">
                                    <h2 class="text-center">CSI Result</h2>
                                    <?php
                                    $h = 0;
                                    $n = 0;
                                    $no = 1;
                                    foreach ($total->result_array() as $tot) {
                                        $h += $tot['harapan'];
                                        $n += $tot['nyata'];
                                    }
                                    $no = 1;
                                    $na = 0;
                                    foreach ($total->result_array() as $tot) {
                                        $na += ((($tot['harapan'] / $h) * 100) / 100);
                                    }
                                    $ms = 0;
                                    $ws = 0;
                                    $no = 1;
                                    foreach ($total->result_array() as $tot) {
                                        $ms += $tot['nyata'];
                                        $ws += ((($tot['harapan'] / $h) * 100) / 100) * $tot['nyata'];
                                    } ?>
                                    <div class="col-lg-4 col-xs-6">
                                    </div>
                                    <div class="col-lg-4 col-xs-6">
                                        <!-- small box -->
                                        <div class="small-box bg-green">
                                            <div class="inner">
                                                <h1 class="text-center" style="font-size: 20px"><?= $a ?></h1>
                                                <br>
                                                <br>
                                                <h3 class="text-center"><?= number_format((($ws / 4) / (100 / 100) * 100), 2) ?><sup style="font-size: 20px">%</sup></h3>
                                                <?php if (number_format((($ws / 4) / (100 / 100) * 100), 2) <= 25) {
                                                    $ket = "Kurang";
                                                } elseif (number_format((($ws / 4) / (100 / 100) * 100), 2) >= 26 && number_format((($ws / 4) / (100 / 100) * 100), 2) <= 50) {
                                                    $ket = "Cukup";
                                                } elseif (number_format((($ws / 4) / (100 / 100) * 100), 2) >= 51 && number_format((($ws / 4) / (100 / 100) * 100), 2) <= 75) {
                                                    $ket = "Baik";
                                                } else {
                                                    $ket = "Sangat Baik";
                                                } ?>
                                                <p class="text-center"><?= $ket ?></p>
                                            </div>
                                            <div class="icon">
                                                <br> <i class="ion ion-stats-bars"></i>
                                            </div>
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-xs-6">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif;
        } else { ?>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-primary">
                            <div class="box-body">
                                <h2 class="text-center">Tidak ada pengisian kuesioner !</h2>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>

        </form>
    </section>
</div>