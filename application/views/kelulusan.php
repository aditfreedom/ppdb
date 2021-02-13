<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" href="<?=base_url()?>/logo.png" type="image/png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

  <script type="text/javascript">
$(document).ready( function () {
    $('#example').DataTable({
    });

} );
</script>
    <title>PPDB SEKOLAH SUKMA BANGSA BIREUEN</title>
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
  <img src="<?=base_url()?>/logo.png" type="image/png" alt="" width="40px"><a class="navbar-brand text-info" href="#"> <b>&nbspPPDB SSB BIREUEN</b></a></img>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#sd">PENGUMUMAN KELULUSAN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#jadwal">JADWAL DAFTAR ULANG & PERSYARATAN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#kontak">KONTAK</a>
      </li>
    </ul>
  </div>
  </div>
</nav>


<div  id="sd" style="height: 750px;padding-top:70px;background-color:#f5f8fd;">
<div class="container">
<div class="text-center">
          <div>
            <h2 class="featurette-heading"><b>PENGUMUMAN KELULUSAN PPDB<br><span class="text-info"> SEKOLAH SUKMA BANGSA BIREUEN TA.2021/2022</span></b>
            <hr class="my-4" style="border-color: #F05F40;width: 20%;margin-top:0px;border-width: 3px;">
          </h2><br>

            <table class="table table-hover" id="example">
          <thead class="text-center">
            <tr>
              <th scope="col">NO PESERTA</th>
              <th scope="col">NAMA LENGKAP</th>
              <th scope="col">NISN</th>
              <th scope="col">SEKOLAH ASAL</th>
              <th scope="col">JENIS PENERIMAAN</th>
              <th scope="col">STATUS KELULUSAN</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1; 
	        foreach ($kelulusan as $data) : ?>
		<tr class="nomor text-center">
            <td><?php echo $data->id;?></td>
            <td><?php echo $data->nama_lengkap;?></td>
            <td><?php echo $data->nisn;?></td>
            <td><?php echo $data->sekolah_asal;?></td>
            <td><?php echo $data->jenis;?></td>
    <?php
    $approval= $data->approve_lulus;
      if ($approval=="Antrian") {
        $class="btn-warning";
      }elseif($approval=="Lulus"){
        $class="btn-info";
      }
      else{
        $class="btn-danger";
      }    
    ?>
            <td><a class="font-weight-bold text-uppercase <?= $class;?> rounded-pill" style="width:60px;">&nbsp&nbsp<?php echo $data->approve_lulus?>&nbsp&nbsp</a></td>
		</tr>
		<?php $i++; ?>
	<?php endforeach ;?>
          </tbody>
        </table>
          </div>
          
        </div>
</div>
</div>

<div  id="jadwal" style="height: 950px;padding-top:70px;background-color:#f5f8fd;">
<div class="container">
<div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading"><b>JADWAL DAN SYARAT<span class="text-info"> DAFTAR ULANG</span></b></h2>
            <hr class="my-4" style="border-color: #F05F40;width: 35%;text-align: left;margin-left: 0;margin-top:0px;border-width: 3px;">
            <p class="lead" style="margin-bottom:0px;"><b>Jadwal Pendaftaran Ulang : </b></p>
            <li>13 - 30 April 2021, Di Sekolah Sukma Bangsa Bireuen</a></li> <br><br>
            <p class="lead" style="margin-bottom:0px;"><b>Syarat Pendaftaran Ulang : </b></p>
            <p>1. Login Kembali Pada <a href="<?=base_url()?>"><b>Link Berikut</b></a></b>, Lalu Mengisi Form Registrasi Ulang > Daftar Ulang</p> 
            <p>2. Mencetak dokumen Pendaftaran Ulang (Formulir, Surat Pernyataan & Pakta Integritas) Pada Aplikasi PPDB <a href="<?=base_url()?>"><b>Link Berikut</b></a></p> 
            <p>3. <i>Photocopy</i> Akta Kelahiran</p> 
            <p>4. <i>Photocopy</i> Kartu Keluarga (KK)</p> 
            <p>5. <i>Photocopy</i> Kartu Identitas Orang Tua</p> 
            <p>6. <i>Photocopy</i> Kartu NISN/ Surat Keterangan NISN (bagi siswa pindahan dan calon siswa SMP/SMA)</p> 
            <p>7. <i>Photocopy</i> Rapor (bagi siswa pindahan)</p> 
            <p>8. Pasfoto ukuran 3x4 cm dan 2x3 cm masing-masing 2 lembar</p> 
            <p>9. Surat Bebas Narkoba (khusus calon siswa SMA)</p> 
            <p>10. Surat Pindah (bagi siswa pindahan)</p><br>
            </div>

          <div class="col-md-5">
            <img class=" img-fluid mx-auto" src="<?=base_url()?>/foto.jpg" alt="Generic placeholder image">
          </div>
          <p class="text-danger"><b>Dokumen Tersebut Diatas Dibawa Dan Disatukan Dalam Map Berwarna Merah Saat Pendaftaran Ulang. Harap Membawa Masker Dan Menjaga Protokol Kesehatan Saat Proses Pendaftaran Ulang.</b></p> 


        </div>
</div>
</div>

<div  id="kontak" style="height: 550px;padding-top:70px;">
<div class="container">
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading"><b>KONTAK<span class="text-info"> PANITIA DAFTAR ULANG</span></b></h2>
          <hr class="my-4" style="border-color: #F05F40;width: 35%;text-align: left;margin-left: 0;margin-top:0px;border-width: 3px;">
            <p class="lead" style="margin-bottom:0px;">Alamat : </p>
            <p>Jln. Banda Aceh - Medan, Desa Cot Keutapang Kecamatan Jeumpa, Kabupaten Bireuen, 24251 Provinsi Aceh, Indonesia</p>
            
            <p class="lead" style="margin-bottom:0px;">Telepon : </p>
            <p>(0644) 324985/328996</p>

            <p class="lead" style="margin-bottom:0px;">Admin PPDB : </p>
            <p>081362059403 (WhatsApp)</p>

            <p class="lead" style="margin-bottom:0px;">E-Mail : </p>
            <p>ssb_bireuen@sukmabangsa.sch.id</p>
            
          </div>
          <div class="col-md-5 order-md-1">
            <img class=" img-fluid mx-auto" src="<?=base_url()?>/foto.jpg" alt="Generic placeholder image">
          </div>
        </div>
</div>
</div>

<hr class="featurette-divider">
<footer class="container" ID="kontak">
        <p class="float-right"><a href="#">Kembali Ke Atas</a></p>
        <p>&copy; 2021 Sekolah Sukma Bangsa Bireuen. &middot; <a href="http://www.sukmabangsabireuen.sch.id/">Website</a> &middot; <a href="https://www.facebook.com/profile.php?id=100013199972355">Facebook</a></p>
      </footer>
    </main>




    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>



<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable( {
      "lengthChange": false,
      "oLanguage": {
      "sSearch": "Cari Nama : ",
      "scrollX": true


 }

    } );
} );
</script>
  </body>
</html>