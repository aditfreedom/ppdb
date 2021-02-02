<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" href="<?=base_url()?>/logo.png" type="image/png">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Registrasi Pengguna</title>
  </head>
  <body  >
  <nav class="navbar navbar-expand-lg navbar-light bg-info" style="height:50px">
 
    </nav>
    <div class="container text-center">
    <br>
    <img src="<?php echo base_url()?>logo.png" width="200px">
<h1 class="text-dark" style="margin-top:10px;">REGISTRASI PENGGUNA<br>CALON PESERTA DIDIK<br>SEKOLAH SUKMA BANGSA BIREUEN TA.2020-2021</h1>
</div>
<br>
    <div class="container">
    <?php echo form_open_multipart('home/tambauser');?>
    <div class="row">
    <div class="col">
    <div class="form-group">
        <label for="">Nama Panjang Calon Peserta Didik</label>
        <input type="text" name="nama" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Nama Panggilan</label>
        <input type="text" name="panggilan" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Username</label>
        <input type="text" name="username" class="form-control">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
        <label for="">Jenis Pendaftaran</label>
        <select class="form-control form-control" name="jenis">
          <option>Peserta Didik Baru SD</option>
          <option>Peserta Didik Baru SMP</option>
          <option>Peserta Didik Baru SMA</option>
          <option>Pindahan SD</option>
          <option>Pindahan SMP</option>
          <option>Pindahan SMA</option>
          <option>Alumni</option>
          </select>
        </div>

        <div class="form-group">
        <label for="">Foto</label>
        <input type="file" name="foto_rm" class="form-control" required>
        </div>
        <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" class="form-control" >
        </div>
    </div>
  </div>
        <button type="submit" class="btn btn-info font-weight-bold" style="width:100%;">DAFTAR</button>
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