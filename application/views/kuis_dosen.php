

<body>
<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
    <h1 class="display-6"><?= $title; ?></h1>
  </div>
  


<!-- awal container -->

<div class="container text-center">
    <div class="row">
        <div class="alert alert-dark mx-auto ">
            <h5>TI &#45; PEMROGRAMAN MOBILE &#45; &#91; A &#93;</h5>


            <h5><?= $dosen->nama_dosen; ?> &#45; &#91; <?= $dosen->kd_dosen_pengampu; ?> &#93;</h5>
        </div>
      
    </div>
    <div class="row">
        <div class="col mt-3 text-center">
            <a href="<?= base_url('quisioner/getquismk'); ?>">&lt;&lt;  Kembali ke kuesioner Mata Kuliah</a>
        </div>
    </div>
    <div class="row text-center">
        <div class="col mt-3">
            <h2 class="text-dark">Daftar Pertanyaan Untuk Penilaian</h2>
        </div>
    </div>
</div>
<!-- akhir container -->




<form method="post" action="<?= base_url('quisioner/inputquisdosen'); ?>">


<!-- AWAL PERTANYAAN -->
<div class="card">
    <div class="card-header">
    <table class="table table-bordered">
  <thead class="bg-info text-white">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Pertanyaan</th>
      <th scope="col">Kurang</th>
      <th scope="col">Cukup</th>
      <th scope="col">Baik</th>
      <th scope="col">Sangat Baik</th>
    </tr>
  </thead>
  </div>
  <div class="card-body">
  <?php $no=1;foreach($quisdosen as $q): ?>
    <tbody>
      <td><?= $no++; ?></td>
      <td><input type="hidden" name="kd_quisioner" ><?= $q->quisioner; ?> </td>
      <td><input type="radio" name="id_answer" value="1" ></td>
      <td><input type="radio" name="id_answer" value="2"></td>
      <td><input type="radio" name="id_answer" value="3"></td>
      <td><input type="radio" name="id_answer" value="4"></td>
  </tbody>
  <?php endforeach; ?>
  </div>
</table>
</div>
<!-- AKHIR PERTANYAAN -->

<div class="jumbotron ">
    <div class="card">
       <div class="card-header text-center">
            <h2>Komentar Untuk Dosen : <?php echo $dosen->nama_dosen; ?></h2>
       </div>
       <div class="card-body" >
            <div class="col col-lg-12">
                <textarea cols="50" rows="10" name="comments" ></textarea>
            </div>
            
       </div>
    </div>
</div>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h6>Keterangan :</h6>
    <h6>1) Rencana pembelajaran (RP) berisi paparan tentang kompetensi dan subkompetensi yang sesuai dengan materi kuliahnya.</h6>
    <h6>2) Metode SCL dapat berbentuk diskusi/tanya jawab/asistensi/pembelajaran berbasis laboratorium/tugas/studi kasus/pembelajaran berbasis proyek/praktek kerja/kuliah lapangan/pengalaman belajar on-line/studio,dll.</h6>
    <h6>3) Sumber belajar meliputi buku teks, buku ajar,modul ajar,jurnal,petunjuk praktikum,multimedia seperti virtual laboratory,video,simulasi,software,materi belajar di share its, dll.</h6>
    <h6>4) Kompetensi adalah kemampuan yang dicapai mahasiswa dari hasil belajar mata kuliah ini.</h6><br>
  
</div>
<hr>
<div class="container mb-1 ">
    <div class="row">
            <h5 class="text-danger">PERHATIAN</h5>
    </div>
        <div>&diams; Anda hanya bisa mengisi kuesioner satu kali.</div>
        <div>&diams; Data yang sudah disimpan tidak dapat diedit jadi pastikan data yang and inputkan sudah benar.</div>
        <div>&diams; Berikanlah tanda centang pada checkbox berikut untuk menyimpan.</div><br>

    <div class="text-center">
        <input type="checkbox" >Data yang anda isikan sudah benar
    </div>
    
    <div class="row mx-auto mt-2">
        <div class="col text-center">
            <a href="" class="btn btn-dark">RESET</a>
            <button type="submit" class="btn btn-info">SIMPAN</button> 
        </div>
    </div>
    </form>
</div>
</div>