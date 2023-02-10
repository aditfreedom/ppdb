<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"><b>APPROVAL KELULUSAN</b></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">PPDB</a></li>
            <li class="breadcrumb-item active">Approval Kelulusan</li>
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
        <th class="text-center align-middle" scope="col">NO</th>
        <th class="text-center align-middle" scope="col">NO RESI</th>
        <th class="text-center align-middle" scope="col">NISN</th>
        <th class="text-center align-middle" scope="col">NAMA LENGKAP</th>
        <th class="text-center align-middle" scope="col">TEMPAT, TANGGAL LAHIR</th>
        <th class="text-center align-middle" scope="col">SEKOLAH ASAL</th>
        <th class="text-center align-middle" scope="col">ALAMAT</th>
        <th class="text-center align-middle" scope="col">NO WA</th>
        <th class="text-center align-middle" scope="col">JENIS PENERIMAAN</th>
        <th class="text-center align-middle" scope="col">STATUS KELULUSAN</th>
        <th class="text-center align-middle" scope="col">AKSI</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1;
        foreach ($lulus as $data) : ?>
          <tr class="nomor text-center">
            <th class="text-center align-middle" scope="row"><?php echo $i; ?></th>
            <td class="text-center align-middle"><b><?php echo $data->id; ?>/PPDB-BRN/2023</b></td>
            <td class="text-center align-middle"><?php echo $data->nisn; ?></td>
            <td class="text-center align-middle"><?php echo $data->nama_lengkap; ?></td>
            <td class="text-center align-middle"><?php echo $data->tptlahir; ?>, <?= $data->tgllahir; ?></td>
            <td class="text-center align-middle"><?php echo $data->sekolah_asal; ?></td>
            <td class="text-center align-middle"><?php echo $data->alamat; ?></td>
            <td class="text-center align-middle"><?php echo $data->no_wa; ?></td>
            <td class="text-center align-middle"><?php echo $data->jenis; ?></td>
            <?php
            $approval = $data->approve_lulus;
            if ($approval == "Antrian") {
              $class = "btn-warning";
            } elseif ($approval == "Lulus") {
              $class = "btn-info";
            } else {
              $class = "btn-danger";
            }
            ?>
            <td class="text-center align-middle"><a class="font-weight-bold text-uppercase <?= $class; ?> rounded-pill" href="#" role="button" style="width:60px;">&nbsp&nbsp<?php echo $data->approve_lulus ?>&nbsp&nbsp</a></td>
            <td class="text-center align-middle"><a href="<?= base_url('home/editlulus/') . $data->id ?>" class="btn btn-sm btn-primary"><b>EDIT DATA</b></u></a> <br><br>
              <!-- <a href="<?= 'https://wa.me/' . $data->no_wa ?>" class="btn btn-sm btn-success" target="_blank"><b>KIRIM WA</b></u></a> -->
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
          <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>