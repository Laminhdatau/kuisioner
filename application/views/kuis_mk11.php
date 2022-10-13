<div class="container md-5">
    <h3 class="text-center"><?= $title; ?></h3>
    <div class="row ">
    <div class="alert alert-dark mx-auto">

      <label for="select">Periode : </label>
      <select id="select">
        <option value="">Semester</option>
          <option value="">Ganjil</option>
          <option value="">Genap</option>
      </select>
      <select id="select">
        <option value="">Tahun</option>
          <option value="">2022</option>
          <option value="">2021</option>
          <option value="">2020</option>
      </select>
          <button class="badge badge-info">Tampil</button>
    </div>
</div>

</div>         
         <div class="container text-center mt-4">
            <div class="row">
                <div class="col col-lg-12">
                    <h3 class="">Riwayat Pengisian Kuisioner</h3>
                </div>
                <div class="col col-lg-12">
                   <center> <p><b>INFO :</b> <span> Data diupdate setiap 1 jam</span></p></center>
                </div>
            </div>



        

            <div class="container container-fluid">
                <div class="row">
                    <table class="table table-striped table-bordered table-hover table-responsive-xl">
                        <thead class="bg-info text-white text-center">
                            <tr>
                                <th scope="col" rowspan="2">NO</th>
                                <th scope="col" rowspan="2">MATA KULIAH</th>
                                <th scope="col" rowspan="2">DOSEN</th>
                                <th scope="col" colspan="2">KUISIONER</th>
                                <tr>
                                    <th>Dosen</th>
                                    <th>Mata Kuliah</th>
                                </tr>
                            </tr>
                            
                        </thead>
                       
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td scope="row">Framework</td>
                            <td scope="row">Saiful Bahri Musa</td>
                            <td scope="row">Selesai</td>
                            <td scope="row">Belum Selesai</td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
            </div>
            <hr>

    <div class="alert alert-dark mx-auto">
        <label for="select">Mata Kuliah : </label>
        <select id="select">
                <option value="">Pilih</option>
                <option value="">KD MK - MATAKULIAH - DOSEN</option>
        </select>
    </div>
</div>

</div>
<form action="<?= base_url('quisioner/sukses'); ?>" method="post">
<!-- AWAL PERTANYAAN -->
    <div class="card">
    <div class="card-header">
    <table class="table table-striped table-bordered table-hover table-responsive-xl">
  <thead class="thead bg-info text-white">
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
  <tbody>
    <?php $no=1; foreach($quismk as $q): ?>
    <tr>
      <th scope="row"><?= $no++; ?></th>
      <td><?= $q->quisioner; ?></td>
      <td><input type="radio"></td>
      <td><input type="radio"></td>
      <td><input type="radio"></td>
      <td><input type="radio"></td>
    </tr>
    <?php endforeach; ?>
    
  </tbody>
  </div>
</table>
</div>
<!-- AKHIR PERTANYAAN -->

<div class="jumbotron ">
    <div class="card">
       <div class="card-header text-center">
            <h2>Komentar Untuk Mata Kuliah : Saiful Bahri Musa</h2>
       </div>
       <div class="card-body" >
            <div class="col col-lg-12">
                <textarea cols="50" rows="10"></textarea>
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
</div>
</form>