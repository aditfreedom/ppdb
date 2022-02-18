<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col">
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="alert alert-success" role="alert">
        <h5>Status Pendaftaran Formulir <b>SUDAH DIAPPROVE!</b><br>Silahkan Klik Tombol Berikut Untuk Cetak Resi Pendaftaran dan Kartu Peserta Tes</h5>
    <p class="align-left">
      <?php foreach($cetak_kartu as $dataku) : ?>
          <a href="<?=base_url('user/cetak_resi/').$dataku->id?>" class="btn btn-primary btn-lg text-decoration-none" target="_blank"><i class="fa fa-print"></i><b> CETAK RESI PENDAFTARAN DAN KARTU PESERTA TES</b></a>
      <?php endforeach;?>
    </p> 
      </div>
      <div class="row">
  <div class="col">
  <p align="center"><a class="btn btn-success" href="<?=base_url('user/isi_formulir/'.$id)?>" style="width:50%;" role="button"><i class="fa fa-arrow-left"></i> Sebelumnya</a></p>     
  </div>
  <div class="col">
  <p align="center"><a class="btn btn-success" href="<?=base_url('user/registrasi_ulang/'.$id)?>" style="width:50%;" role="button">Selanjutnya <i class="fa fa-arrow-right"></i></a></p>
  </div>
  </div>
  
    </section>
</div>
</div>
<br>