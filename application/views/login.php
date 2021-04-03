<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" href="<?=base_url()?>/logo.png" type="image/png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&family=Share+Tech+Mono&family=Varela+Round&display=swap" rel="stylesheet">    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'login.css';?>">
    <script src="https://kit.fontawesome.com/2d7830743a.js" crossorigin="anonymous"></script>

    <title>PPDB ONLINE SSB BIREUEN</title>
  </head>
  <div class="limiter">
  <body class="primcol"  style="background-image: url(<?php echo base_url('background_login.JPG');?>);background-size: cover;}">
      <div class="head font-weight-bold">
        <br><br>
  </div>
<div class="container shadow p-3 mb-5 bg-white rounded">
        <img class="img mx-auto d-block" src="<?php echo base_url('logo.png');?>" width="100px">
        <h6 class="text-center font-weight-bold" style="font-family: 'Share Tech Mono', monospace;">PPDB ONLINE TA.2021/2022<br>SEKOLAH SUKMA BANGSA<br>BIREUEN</h6>

        <?php echo form_open('hal/login_aksi');?>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Username" name="username" required>
            </div>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>
            <button type="submit" class="btn btn-info btn-block font-weight-bold" style="font-family: 'Varela Round', sans-serif;">LOGIN</button>
            <!-- <div class=" d-flex justify-content-center" style="margin-top:-20px;font-family: 'Varela Round', sans-serif;" ><strong ><a class="text-info"href="<?php echo base_url('hal/registrasi');?>">REGISTRASI AKUN</a></strong></div> -->
            <?php echo form_close();?>
    </div>
    <br><br>
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>