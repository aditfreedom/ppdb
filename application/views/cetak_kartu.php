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
    <p align="right"><button type="button" onclick="window.print();" class="btn btn-success no-print"><i class="fa fa-print"></i> Cetak Kartu Ujian</button></button></p>
    <div class="container">
    <table border="1" style="margin-right:20px;background:white;width=50%;">
    <td style="padding:15px;">
    <?php foreach ($cetak_kartu as $data) : ?>
      <?php echo form_open_multipart('user/updateformulir');?>
      <label for="">ID : <?php echo $data->id;?></label>
      <img class="mx-auto d-block" src="<?= base_url();?>/logo.png" width="100" style="margin-bottom:5px;">
      <h5 class="text-center text-bold">PENERIMAAN PESERTA DIDIK BARU <br>SEKOLAH SUKMA BANGSA BIREUEN<br>TA.2021/2022</h5><br>

      <img src="<?php echo base_url();?>asset/foto/<?php echo $data->foto;?>" class="border border-dark rounded mx-auto d-block" width="100px">
    <div class="form-group">
        <input type="hidden" name="id" class="form-control" value="<?php echo $data->id;?>">
        </div>
        <div class="form-group">
        <label for="" class="text-center">Nama Lengkap</label>
        <input  readonly type="text" name="nama" class="form-control" value="<?php echo $data->nama_lengkap;?>">
        </div>
        <div class="form-group">
        <label for="">NISN</label>
        <input  readonly type="text" name="nisn" class="form-control" value="<?php echo $data->nisn;?>">
        </div>
        <div class="form-group">
        <label for="">Sekolah Asal</label>
        <input readonly type="text" name="sekolah_asal" class="form-control" value="<?php echo $data->sekolah_asal;?>">
        </div>
        </form>
	<?php endforeach ;?> 
  <br>
    </td>
  </table>
  <br>
    </div>
    </section>
</div>
</div>
<br>