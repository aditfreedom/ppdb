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
    <div class="card">
      <div class="card-header bg-success">
        <h4>Status Pendaftaran Formulir : <b>SUDAH DIAPPROVE!</b></h4>
      </div>
      <div class="card-body">
        <h6><b>Informasi : </b></h6>
        <ol>
          <li>Dalam file berikut terdapat file <b>Kartu Peserta Tes dan Resi Pendaftaran PPDB.</b></li>
          <li>Mohon untuk <b>mencetak dan membawa Kartu Tes</b> pada saat <b>hari tes berlangsung.</b></li>
          <li>Mohon untuk <b>mencetak dan membawa Resi Pendaftaran PPDB</b> pada saat <b>hari pendaftaran ulang.</b>
          </li>
          <li>Segala informasi resmi akan diinformasikan melalui <b>grup WhatsApp calon siswa dan pesan langsung oleh
              panitia PPDB</b>.</li>
          <li>Segala informasi <b>diluar</b> grup WhatsApp dan pesan langsung dari panitia PPDB merupakan <b>Informasi
              yang tidak resmi</b>.</li>
          <li><b>Silahkan Klik Tombol Berikut Untuk Cetak Resi</b>
            <?php foreach ($cetak_kartu as $dataku) : ?>
              <a href="<?= base_url('user/cetak_resi/') ?>" class="btn btn-primary btn-sm text-decoration-none" target="_blank"><i class="fa fa-print"></i><b> Cetak
                  Kartu Peserta Tes</b></a>
            <?php endforeach; ?>
          </li>
        </ol>

        <h6><b>Informasi Grup Calon Siswa </b><img src="<?= base_url('asset/wa.png') ?>" width="30px" />
        </h6>
        <ol>
          <li>Silahkan Bergabung Ke Grup WhatsApp <b>Calon Siswa SD</b> <a href="https://chat.whatsapp.com/BjzAkkfdreh3tZb0mURWHn" class="font-weight-bold text-decoration-none text-info" target="_blank">DISINI</a></li>
          <li>Silahkan Bergabung Ke Grup WhatsApp <b>Calon Siswa SMP</b> <a href="https://chat.whatsapp.com/JW3OxVOgw38H3PI2B51VPb" class="font-weight-bold text-decoration-none text-info" target="_blank">DISINI</a></li>
          <li>Silahkan Bergabung Ke Grup WhatsApp <b>Calon Siswa SMA</b> <a href="https://chat.whatsapp.com/DsvSMhHZSheIyhZXn68hda" class="font-weight-bold text-decoration-none text-info" target="_blank">DISINI</a></li>
        </ol>

      </div>
    </div>
    <div class="row">
      <div class="col">
        <p align="center"><a class="btn btn-success" href="<?= base_url('user/isi_formulir/') ?>" style="width:50%;" role="button"><i class="fa fa-arrow-left"></i> Sebelumnya</a></p>
      </div>
      <div class="col">
        <p align="center"><a class="btn btn-success" href="<?= base_url('user/registrasi_ulang/') ?>" style="width:50%;" role="button">Selanjutnya <i class="fa fa-arrow-right"></i></a></p>
      </div>
    </div>

  </section>
</div>
</div>
<br>