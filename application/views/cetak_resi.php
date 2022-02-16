<?php
  function tanggal_indo($tanggal)
  {
    $tgl = explode("-", $tanggal);
    $bln["01"]="Januari";
    $bln["02"]="Februari";
    $bln["03"]="Maret";
    $bln["04"]="April";
    $bln["05"]="Mei";
    $bln["06"]="Juni";
    $bln["07"]="Juli";
    $bln["08"]="Agustus";
    $bln["09"]="September";
    $bln["10"]="Oktober";
    $bln["11"]="November";
    $bln["12"]="Desember";
    if ($tgl[0]=="0000") 
    {
      return $tanggal;
    }
    else
    {
      return $tgl[2]." ".$bln[$tgl[1]]." ".$tgl[0];
    }
  }
  ?>

<?php foreach ($cetak_resi as $data) 
    {
      $nama=$data->nama_lengkap;
    }
?>
<!doctype html>
<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>RESI PENDAFTARAN <?=$nama;?></title>
  </head><body style="font-family: 'Times New Roman', Times, serif; color:black;">
      <div class="container">
        <?php foreach ($cetak_resi as $data) : ?>
            <!-- <img class="mx-auto d-block" src="<?=base_url('assets22/img/favicon.png')?>" width="80px"><br> -->
            <table style="width: 100%"  class="text-center">
                <tr>
                    <td><img src="<?=base_url()?>assets22/img/favicon.png" width="80px"></td>
                    <td><h4 class="text-center font-weight-bold">PENERIMAAN PESERTA DIDIK BARU<br>SEKOLAH SUKMA BANGSA BIREUEN<br>TP. 2022/2023</h4></td><br>
                </tr>
                <tr>
                  <td></td>
                  <td style="font-size:10px;">Jln. Banda Aceh - Medan, Desa Cot Keutapang Kecamatan Jeumpa, Kabupaten Bireuen,<br> Provinsi Aceh. Kode Pos : 24251
                      Telepon: (0644) 324985/328996
                      <br>Email: ssb_bireuen@sukmabangsa.sch.id
                  </td>
                </tr>
                </table>
                <hr>      
                <br>
                <h4 class="text-center"><b>BUKTI PENDAFTARAN PPDB</b></h4>
                <table style="width: 100%" border="1" >
                      <tr>
                        <td class="text-center">Jenis Pendaftaran</td>
                        <td>:</td>
                        <td  class="text-left"> <?=$data->jenis;?></td>
                        <td class="text-center"><b>PAS FOTO CALON PESERTA DIDIK</b></td>
                      </tr>
                      <tr>
                        <td class="text-center">Kode Pendaftaran</td>
                        <td>:</td>
                        <td><?=$data->id;?>/PPDB-BRN/2022</td>
                        <td rowspan="12" class="text-center"><img src="<?=base_url()?>asset/foto/<?=$data->foto?>" width="150px"></td>
                      </tr>
                      <tr>
                        <td class="text-center">Nama Lengkap</td>
                        <td>:</td>
                        <td class="text-left"> <?=$data->nama_lengkap;?></td>
                      </tr>
                      <tr>
                        <td class="text-center">Tempat Lahir</td>
                        <td>:</td>
                        <td class="text-left"> <?=$data->tptlahir;?></td>
                      </tr>
                      <tr>
                        <td class="text-center">Tanggal Lahir</td>
                        <td>:</td>
                        <td class="text-left"> <?=$data->tgllahir;?></td>
                      </tr>
                      <tr>
                        <td class="text-center">NISN</td>
                        <td>:</td>
                        <td class="text-left"> <?=$data->nisn;?></td>
                      </tr>
                      <tr>
                        <td class="text-center">Alamat Lengkap</td>
                        <td>:</td>
                        <td class="text-left"> <?=$data->alamat;?></td>
                      </tr>
                      <tr>
                        <td class="text-center">Asal Sekolah</td>
                        <td>:</td>
                        <td class="text-left"> <?=$data->sekolah_asal;?></td>
                      </tr>
                      <tr>
                        <td class="text-center">Nama Ayah</td>
                        <td>:</td>
                        <td class="text-left"> <?=$data->namaayah;?></td>
                      </tr>
                      <tr>
                        <td class="text-center">Nama Ibu</td>
                        <td>:</td>
                        <td class="text-left"> <?=$data->namaibu;?></td>
                      </tr>
                      <tr>
                        <td class="text-center">No. HP Orang Tua</td>
                        <td>:</td>
                        <td class="text-left"> <?=$data->no_hp;?></td>
                      </tr>
                      <tr>
                        <td class="text-center">No. WA Orang Tua</td>
                        <td>:</td>
                        <td class="text-left"> <?=$data->no_wa;?></td>
                      </tr>
                      <tr>
                        <td class="text-center">Status Approval Formulir</td>
                        <td>:</td>
                        <td class="text-left"><b> <?=$data->approve_formulir;?></b></td>
                      </tr>
                    </table>
                  <br><br>
                    <p>Catatan: <br>
                    Bukti Pendaftaran ini dibawa saat mengikuti ujian dan mendaftar ulang</p>
                    <br><br><br>

                    <table style="width: 100%" class="text-left">
                        <tr>
                          <td style="width: 25%"></td>
                          <td style="width: 25%"></td>
                          <td style="width: 15%"></td>
                          <td style="width: 35%">Bireuen, <?php echo tanggal_indo(date('Y-m-d'))?><br>Ketua Panitia,<br><img src="<?=base_url()?>asset/qr/qrppdb.png" width="100px"><br>Helmiati, S.Pd.I<br>NIP. 10061019</td>
                        </tr>
                      </table>

                      <table style="width: 100%"  class="text-center">
                <tr>
                    <td><img src="<?=base_url()?>assets22/img/favicon.png" width="80px"></td>
                    <td><h4 class="text-center font-weight-bold">PENERIMAAN PESERTA DIDIK BARU<br>SEKOLAH SUKMA BANGSA BIREUEN<br>TP. 2022/2023</h4></td><br>
                </tr>
                <tr>
                  <td></td>
                  <td style="font-size:10px;">Jln. Banda Aceh - Medan, Desa Cot Keutapang Kecamatan Jeumpa, Kabupaten Bireuen,<br> Provinsi Aceh. Kode Pos : 24251
                      Telepon: (0644) 324985/328996
                      <br>Email: ssb_bireuen@sukmabangsa.sch.id
                  </td>
                </tr>
                </table>
                <hr>      
                <br>
                <h4 class="text-center"><b>KARTU PESERTA TES</b></h4>
                <br>


                <table border="1">
                <tr>
                <td class="text-center" style="width: 120px"><img src="<?=base_url()?>assets22/img/favicon.png" width="80px"></td>
                <td class="text-center font-weight-bold" style="width: 300px">KARTU PESERTA TES<br>PENERIMAAN PESERTA DIDIK BARU<br>SEKOLAH SUKMA BANGSA BIREUEN<br>TP.2022-2023</td>
                </tr>
                <tr>
                  <td colspan="2"><pre> Jenis Pendaftaran     : <b><?=$data->jenis;?></b><br> Nomor Pendaftaran     : <b><?=$data->id;?>/PPDB-BRN/2022</b><br> Nama Calon PD         : <b><?=$data->nama_lengkap;?></b><br> Tempat/Tanggal Lahir  : <b><?=$data->tptlahir;?>/<?= tanggal_indo($data->tgllahir);?></b><br> Asal Sekolah          : <b><?=$data->sekolah_asal;?></b></pre>
                   <div width="300px"><pre>                          Bireuen, <?php echo tanggal_indo(date('Y-m-d'))?><br>                          Ketua Panitia,<br>                             <img src="<?=base_url()?>asset/qr/qrppdb.png" width="50"><br>                          Helmiati, S.Pd.I<br>                          NIP. 10061019</pre></div>
                </td>   
                               
                </tr>
                  </table>
                  
                  <br><br>    
                  <h4 class="text-danger font-weight-bold" style="font-size:17px;"><b>Note :</b></h4>
                  <h4 class="text-danger font-weight-bold" style="font-size:14px;"><b>*Kartu Peserta Tes Ini Harap Digunting dan Wajib Dibawa Saat Pelaksanaan Tes</b></h4>
                  <h4 class="text-danger font-weight-bold" style="font-size:14px;"><b>*Harap Memakai Masker & Membawa Surat Aktif Sekolah Saat Tes Berlangsung</b></h4>
                        <?php endforeach; ?>
      </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body></html>