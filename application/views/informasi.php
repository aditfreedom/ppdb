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

    <title>PPDB SEKOLAH SUKMA BANGSA BIREUEN</title>
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
  <img src="<?=base_url()?>/logo.png" type="image/png" alt="" width="40px"><a class="navbar-brand text-info" href="#"> <b style="color:#00acac;">&nbspPPDB SSB BIREUEN</b></a></img>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#home">Home</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#kuota">Kuota Penerimaan</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#rincian">Rincian Biaya Pendidikan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#persyaratan">Persyaratan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#alur">Alur Pendaftaran</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#jadwal">Jadwal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#kontak">Kontak</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

<!-- <div class="jumbotron" id="home">
<div class="container" >
  <h1 class="display-4 text-white animate__animated animate__bounceInLeft">PENGUMUMAN KELULUSAN<br>PESERTA DIDIK BARU</h1>
  <h3 class="display-5 animate__animated animate__bounceInLeft text-white">SD - SMP - SMA</h3>
  <h3 class="display-5 animate__animated animate__bounceInLeft text-info">SEKOLAH SUKMA BANGSA BIREUEN <span class="font-weight-bold">TA.2021/2022</span></h3>
  <hr class="my-4 animate__animated animate__bounceInLeft">
  <a class="btn btn-info btn-lg animate__animated animate__bounceInLeft" id="demo3" href="<?=base_url('informasi/kelulusan')?>" role="button"><b>Lihat Sekarang</b></a>
</div>
</div> -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner" id="home">
  <div class="carousel-caption d-none d-md-block" style="margin-bottom:50px;" >
        <!-- pengumuman -->
        <!-- <h1 class="display-4 text-white animate__animated animate__bounceInLeft font-weight-bold" >PENGUMUMAN KELULUSAN<br>PESERTA DIDIK BARU</h1>
        <h3 class="display-5 animate__animated animate__bounceInLeft text-white">SD - SMP - SMA</h3>
        <h3 class="display-5 animate__animated animate__bounceInLeft text-info">SEKOLAH SUKMA BANGSA BIREUEN <span class="font-weight-bold">TA.2021/2022</span></h3>
        <hr class="my-4 animate__animated animate__bounceInLeft">
        <a class="btn btn-info btn-lg animate__animated animate__bounceInLeft" style="margin-bottom:50px;"  href="<?=base_url('informasi/kelulusan')?>" role="button"><b>Lihat Sekarang</b></a> -->


        <!-- pembukaan -->
        <h1 class="display-4 text-white  font-weight-bold">PENERIMAAN<br>PESERTA DIDIK BARU</h1>
        <h3 class="display-5  text-white">SD - SMP - SMA</h3>
        <h3 class="display-5" style="color:#00acac;">SEKOLAH SUKMA BANGSA BIREUEN <span class="font-weight-bold">TA.2021/2022</span></h3>
        <hr class="my-4 ">
        <h3 class="display-5 text-white " id="demo2" >Waktu Pendaftaran :</h3>
        <h1 id="demo" class=" text-danger"></h1><br>
        <a class="btn btn-info btn-lg " id="demo3" href="<?=base_url('hal/login')?>" style="background-color:#00acac;" role="button"><b>Daftar Sekarang</b></a>
      </div>
    <div class="carousel-item active">
      <img src="<?=base_url('bg1.JPG')?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?=base_url('bg2.JPG')?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?=base_url('bg3.JPG')?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?=base_url('bg4.JPG')?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?=base_url('bg5.JPG')?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?=base_url('bg6.JPG')?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?=base_url('bg7.JPG')?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?=base_url('bg8.JPG')?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?=base_url('bg9.JPG')?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!-- <div class="jumbotron" id="home">
<div class="container" >
  <h1 class="display-4 text-white animate__animated animate__bounceInLeft">PENERIMAAN<br>PESERTA DIDIK BARU</h1>
  <h3 class="display-5 animate__animated animate__bounceInLeft text-white">SD - SMP - SMA</h3>
  <h3 class="display-5 animate__animated animate__bounceInLeft text-info">SEKOLAH SUKMA BANGSA BIREUEN <span class="font-weight-bold">TA.2021/2022</span></h3>
  <hr class="my-4 animate__animated animate__bounceInLeft">
  <h3 class="display-5 text-white animate__animated animate__bounceInLeft" id="demo2">Waktu Pendaftaran :</h3>
  <h1 id="demo" class="animate__animated animate__bounceInLeft text-danger"></h1><br>
  <a class="btn btn-info btn-lg animate__animated animate__bounceInLeft" id="demo3" href="<?=base_url()?>" role="button"><b>Daftar Sekarang</b></a>
</div>
</div> -->

<div  id="kuota" style="height: 680px;padding-top:70px;background-color:#f5f8fd;">
<div class="container">
<div class="row featurette">
<h2 class="featurette-heading"><b>KUOTA<span class="text-info"> PENERIMAAN</span></b><br>
<hr class="my-4" style="border-color: #F05F40;width: 50%;text-align: left;margin-left: 0;margin-top:0px;border-width: 3px;">
</h2>

            <table class="table table-hover" id="example">
          <thead class="text-center">
            <tr>
              <th scope="col">NO</th>
              <th scope="col">JENIS PENERIMAAN</th>
              <th scope="col">KUOTA PENERIMAAN</th>
              <th scope="col">KETERANGAN</th>
            </tr>
          </thead>
          <tbody class="text-center">
          <?php $i = 1; 
	        foreach ($kuota as $data) : ?>
		      <tr class="nomor text-center">
            <th scope="row"><?php echo $i ;?></th>
            <td><?php echo $data->jenis;?></td>
            <td><?php echo $data->kuota;?></td>
            <td><?php echo $data->keterangan;?></td>
		      </tr>
		      <?php $i++; ?>
	        <?php endforeach ;?>
            </tbody>
            </table>
          </div>
</div>
</div>

<div  id="rincian" style="height: 680px;padding-top:70px;background-color:#f5f8fd;">
<div class="container">
<div class="row featurette">
<h2 class="featurette-heading"><b>RINCIAN BIAYA<span class="text-info"> PENDIDIKAN</span></b><br>
<hr class="my-4" style="border-color: #F05F40;width: 50%;text-align: left;margin-left: 0;margin-top:0px;border-width: 3px;">
</h2>

            <table class="table table-bordered" id="example">
          <thead class="text-center">
            <tr>
              <th scope="col" rowspan="2">NO</th>
              <th scope="col" rowspan="2">LEVEL</th>
              <th scope="col" rowspan="2">BIAYA PERAWATAN SEKOLAH (BPS)<br>*Dibayarkan Sekali Diawal Pendaftaran Ulang</th>
              <th scope="col" rowspan="2">BIAYA PARTISIPASI PENDIDIKAN (BPP)<br>*dibayarkan per bulan (Untuk daftar ulang BPP Juli)</th>
              <th scope="col" colspan="2">Biaya Paket Bakal Kain Seragam Sekolah + Kartu Tanda Siswa (KTS)</th>            
            </tr>
            <tr>
            <th>Putra</th>
            <th>Putri</th>
            </tr>
            
          </thead>
          <tbody class="text-center">
            <td scope="row">1</td>
            <td>SD</td>
            <td>Rp. 3.000.000</td>
            <td>Rp. 300.000</td>
            <td>Rp.  640.000</td>
            <td>Rp.  790.000</td>
            </tbody>
            <tbody class="text-center">
            <td scope="row">2</td>
            <td>SMP</td>
            <td>Rp. 3.000.000</td>
            <td>Rp. 370.000</td>
            <td>Rp.  720.000</td>
            <td>Rp.  840.000</td>
            </tbody>
            <tbody class="text-center">
            <td scope="row">3</td>
            <td>SMA</td>
            <td>Rp. 3.000.000</td>
            <td>Rp. 430.000</td>
            <td>Rp.   720.000</td>
            <td>Rp.  840.000</td>
            </tbody>
            </tbody>
            </table>
          </div>
</div>
</div>

<div  id="persyaratan" style="height: 680px;padding-top:70px;background-color:#f5f8fd;">
<div class="container">
<div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading"><b>SYARAT<span class="text-info"> PENDAFTARAN</span></b></h2>
            <hr class="my-4" style="border-color: #F05F40;width: 35%;text-align: left;margin-left: 0;margin-top:0px;border-width: 3px;">
            <p class="lead" style="margin-bottom:0px;"><b>Syarat Pendaftaran : </b></p>
            <p>1. Mendaftar Akun Dan Login Pada <a href="<?=base_url('hal/registrasi')?>" role="button"><b>Link Berikut</b></a></p> 
            <p class="lead" style="margin-bottom:0px;"><b>Syarat Mengikuti Tes : </b></p>
            <p>1. Mengisi Formulir Pendaftaran, Upload Akte Kelahiran Dan Upload Bukti Setor Bank (<b>Tidak Transfer Melalui ATM</b>) Ke Rek. Bank Aceh <b>10002240000336</b> a.n Panitia PPDB Sekolah Sukma Bangsa Bireuen Sebesar <b>Rp.100.000</b></p> 
            <p>2. Mencetak Dan Membawa Kartu Peserta Ujian Tes Masuk Pada Saat Tes Berlangsung</p> 

          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="<?=base_url()?>/syarat.JPG" alt="Generic placeholder image">
          </div>
        </div>
</div>
</div>

<div  id="alur" style="height: 680px;padding-top:70px;">
<div class="container">
          <h2 class="featurette-heading text-center"><b>ALUR PENDAFTARAN<span class="text-info"> PPDB ONLINE TA.2021/2022</span></b></h2>
          <hr class="my-4" style="border-color: #F05F40;width: 20%;margin-top:0px;border-width: 3px;">

</div>
<img class="mx-auto d-block" src="<?=base_url()?>/background_login.jpg" height="500px" style="width:100%;">

</div>

<div  id="jadwal" style="height: 680px;padding-top:70px;background-color:#f5f8fd;">
<div class="container">
<div class="row featurette">
<h2 class="featurette-heading"><b>JADWAL<span class="text-info"> PENDAFTARAN</span></b><br>
<hr class="my-4" style="border-color: #F05F40;width: 50%;text-align: left;margin-left: 0;margin-top:0px;border-width: 3px;">
</h2>

            <table class="table table-hover" id="example">
          <thead class="text-center">
            <tr>
              <th scope="col">NO</th>
              <th scope="col">TANGGAL</th>
              <th scope="col">KEGIATAN</th>
              <th scope="col">TEMPAT</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <td scope="row">1</td>
            <td>01-31 Maret 2021</td>
            <td>Pembukaan PPDB Online TA.2021/2022</td>
            <td>ONLINE</td>
            </tbody>
            <tbody class="text-center">
            <td scope="row">2</td>
            <td>05-06 April 2021</td>
            <td>Tes SD</td>
            <td>Sekolah Sukma Bangsa Bireuen</td>
            </tbody>
            <tbody class="text-center">
            <td scope="row">3</td>
            <td>07-08 April 2021</td>
            <td>Tes SMP & SMA</td>
            <td>Sekolah Sukma Bangsa Bireuen</td>
            </tbody>
            <tbody class="text-center">
            <td scope="row">4</td>
            <td>12 April 2021</td>
            <td>Pengumuman Kelulusan PPDB TA.2021/2022</td>
            <td>ONLINE</td>
            </tbody>
            <tbody class="text-center">
            <td scope="row">5</td>
            <td>24 Mei - 15 Juni 2021</td>
            <td>Pendaftaran Ulang Siswa Baru</td>
            <td>Sekolah Sukma Bangsa Bireuen</td>
            </tbody>
            </table>
            <h6 class="text-danger">*Harap Membawa Masker Dan Patuhi Protokol Kesehatan Saat Tes Berlangsung</h6>
          </div>
</div>
</div>

<div  id="kontak" style="height: 550px;padding-top:70px;">
<div class="container">
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading"><b>KONTAK<span class="text-info"> PANITIA PENDAFTARAN</span></b></h2>
          <hr class="my-4" style="border-color: #F05F40;width: 35%;text-align: left;margin-left: 0;margin-top:0px;border-width: 3px;">
            <p class="lead" style="margin-bottom:0px;">Alamat : </p>
            <p>Jln. Banda Aceh - Medan, Desa Cot Keutapang Kecamatan Jeumpa, Kabupaten Bireuen, 24251 Provinsi Aceh, Indonesia</p>
            
            <p class="lead" style="margin-bottom:0px;">Telepon Sekolah: </p>
            <p>(0644) 324985/328996</p>

            <p class="lead" style="margin-bottom:0px;">Panitia PPDB : </p>
            <p style="margin-bottom:0px;">085377137849 - Helmiati (WhatsApp)</p>
            <p>085206743404 - Amrul Hakim (WhatsApp)</p>

            <p class="lead" style="margin-bottom:0px;">E-Mail : </p>
            <p>suk_ma2012@yahoo.com</p>
            
          </div>
          <div class="col-md-4 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="<?=base_url()?>/kontak.JPG" alt="Generic placeholder image" width="300px">
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
    <script>
// Set the date we're counting down to
var countDownDate = new Date("Mar 31, 2021 23:59:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + " Hari " + hours + " Jam "
  + minutes + " Menit " + seconds + " Detik ";
  var x = document.getElementById("demo2");
  var y = document.getElementById("demo3");


    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "PENDAFTARAN TELAH DITUTUP";
    x.style.display = "none";
    y.style.display = "none";


  }
}, 1000);
</script>
  </body>
</html>