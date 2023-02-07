<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"><b>APPROVAL FORMULIR PENDAFTARAN</b></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">PPDB</a></li>
            <li class="breadcrumb-item active">Approval Formulir Pendaftaran</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <hr>

  <!-- /.content-header -->
  <div class="content">
    <!-- <p align="right">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-plus"></i> Tambah Data</button><br><br></p> -->

    <table class="table table-hover table-striped table-sm text-sm table-responsive-sm" id="example">
      <thead class="text-center bg-dark">
        <tr>
          <th class="text-center" scope="col">NO</th>
          <th class="text-center" scope="col">NO RESI</th>
          <th class="text-center" scope="col">NISN</th>
          <th class="text-center" scope="col">NAMA LENGKAP</th>
          <th class="text-center" scope="col">TEMPAT, TANGGAL LAHIR</th>
          <th class="text-center" scope="col">SEKOLAH ASAL</th>
          <th class="text-center" scope="col">ALAMAT</th>
          <th class="text-center" scope="col">NO WA</th>
          <th class="text-center" scope="col">JENIS PENERIMAAN</th>
          <th class="text-center" scope="col">APPROVAL FORMULIR</th>
          <th class="text-center" scope="col">WAKTU MENDAFTAR AKUN</th>
          <th class="text-center" scope="col">AKSI</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1;
        foreach ($formulir as $data) : ?>
          <tr class="nomor text-center">
            <th scope="row"><?php echo $i; ?></th>
            <td><b><?php echo $data->id; ?>/PPDB-BRN/2023</b></td>
            <td><?php echo $data->nisn; ?></td>
            <td><?php echo $data->nama_lengkap; ?></td>
            <td><?php echo $data->tptlahir; ?>, <?= $data->tgllahir; ?></td>
            <td><?php echo $data->sekolah_asal; ?></td>
            <td><?php echo $data->alamat; ?></td>
            <td><?php echo $data->no_wa; ?></td>
            <td><?php echo $data->jenis; ?></td>
            <?php
            $approval = $data->approve_formulir;
            if ($approval == "Antrian") {
              $class = "btn-warning";
            } elseif ($approval == "Diterima") {
              $class = "btn-info";
            } else {
              $class = "btn-danger";
            }
            ?>
            <td><a class="font-weight-bold text-uppercase <?= $class; ?> rounded-pill" href="#" role="button">&nbsp&nbsp<?php echo $data->approve_formulir ?>&nbsp&nbsp</a> </td>
            <td><b><?php echo $data->created_tima; ?></b></td>
            <td>
                <a href="<?=base_url('home/editapproval/'.$data->id); ?>" class="btn btn-sm btn-primary mb-2"><b>EDIT DATA</b></i></u></a>
                <a href="<?=base_url('home/cetak_resi/'.$data->id); ?>" class="btn btn-sm btn-danger mb-2" target="_blank"><b>CETAK RESI</b></i></u></a>
                <a href="<?= 'https://wa.me/' . $data->no_wa . '?text=Terimakasih *' . $data->nama_lengkap . '* Telah Mendaftar Di Sekolah Sukma Bangsa Bireuen, Berikut Kami Lampirkan Resi Pendaftaran Dan Kartu Tes Seleksi Penerimaan Peserta Didik Baru. %0A*INFORMASI :*%0AJadwal Tes Pemetaan Akan Diinfokan lebih lanjut pada grup WhatsApp*' ?>" class="btn btn-sm btn-success" target="_blank"><b>KIRIM WA</b></i></u></a>
            </td>


          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>

  </div>

</div>

</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kuota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url() . 'home/tambahkuota'; ?>">
          <div class="form-group">
            <label for="">Jenis Penerimaan</label>
            <select class="form-control form-control" name="jenis">
              <option>Peserta Didik Baru SD</option>
              <option>Peserta Didik Baru SMP</option>
              <option>Peserta Didik Baru SMA</option>
              <option>Pindahan SD</option>
              <option>Pindahan SMP</option>
              <option>Pindahan SMA</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Kuota Penerimaan</label>
            <input type="text" name="kuota" class="form-control">
          </div>
          <div class="form-group">
            <button type="submit" class="form-control btn btn-primary">Simpan</button>
          </div>
      </div>
      </form>
    </div>
  </div>
</div>
</div>