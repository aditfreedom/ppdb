<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" href="<?=base_url()?>/logo.png" type="image/png">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Daftar Akun Pengguna PPDB</title>
  </head>
  <body  style="background-image: url(<?php echo base_url('assets22/img/bg_regist.JPG');?>);background-size: cover;}">
     <div class="container text-center">
<h2 class="text-light font-weight-bold" style="margin-top:10px;">DAFTAR AKUN PENGGUNA<br>CALON PESERTA DIDIK BARU<br>SEKOLAH SUKMA BANGSA BIREUEN<br>TP. 2022-2023</h2>
</div>
<br>
    <div class="container">
    <?php echo form_open_multipart('hal/tambahuser');?>
    <div class="form-group">
        <label class="text-light font-weight-bold" for="">Jenis Pendaftaran</label>
        <select class="form-control form-control" name="jenis" style="height: 50px;">
          <option>Peserta Didik Baru SD</option>
          <option>Peserta Didik Baru SMP</option>
          <option>Peserta Didik Baru SMA</option>
          <option>Pindahan SD</option>
          <option>Pindahan SMP</option>
          <option>Pindahan SMA</option>
          </select>
        </div>
    <div class="form-group">
        <label class="text-light font-weight-bold" for="">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" class="form-control" style="height: 50px;" required>
        </div>
        <div class="form-group">
        <label class="text-light font-weight-bold" for="">Tempat Lahir</label>
        <input type="text" name="tptlahir" class="form-control" style="height: 50px;" required>
        </div>
        <div class="form-group">
        <label class="text-light font-weight-bold" for="">Tanggal Lahir</label>
        <input type="date" name="tgllahir" class="form-control" style="height: 50px;" required>
        </div>
        <div class="form-group">
        <label class="text-light font-weight-bold" for="">Sekolah Asal</label>
        <input type="text" name="sekolah_asal" class="form-control" style="height: 50px;" required>
        </div>
        <div class="form-group">
        <label class="text-light font-weight-bold" for="">No WhatsApp</label>
        <input type="number" name="no_wa" class="form-control" placeholder="Contoh yang benar : 6281325241234" style="height: 50px;" required>
        </div>       
        <button type="submit" class="btn btn-primary font-weight-bold shadow-lg" style="width:100%;height: 50px;">DAFTAR AKUN</button>
      </div>
        </form>

<br>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>