<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col">
          <div class="card">
            <div class="card-header bg-info">
              <h1 class="m-0 text-light text-bold">ISI FORMULIR & UPLOAD BUKTI TRANSFER PEMBAYARAN</h1>
            </div>
            <div class="card-body">
              <footer class="blockquote-footer"><b>Mohon Diisi Formulir Pendaftaran Dengan Lengkap Dan Benar</b></footer>
              <footer class="blockquote-footer">Rek. Bank Syariah Indonesia (BSI) : <b>7222556637</b><cite title="Source Title"> a.n PPDB Sekolah Sukma Bangsa Bireuen (Rp.150.000)</cite></footer>
              <footer class="blockquote-footer">Apabila Sudah Melengkapi Isian, Mohon Cek Secara Berkala Untuk Proses Cetak Resi Pendaftaran & Kartu Ujian Atau Hubungi Admin Melalui WA : <b><a href="http://wa.me/6281376876109" target="_blank">+62813-7687-6109</a></b></footer>
            </div>
          </div>
        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <section class="content">
    <div class="card">
      <div class="card-header bg-danger">
        <h3 class="m-0 text-light text-bold">DATA DIRI</h3>
        <footer class="blockquote-footer text-light"><b>Silahkan Lengkapi Data Diri Anda.</b></footer>
      </div>
      <div class="card-body">
        <?php foreach ($isi_formulir as $data) : ?>
          <?php echo form_open_multipart('user/updateformulir'); ?>
          <div class="form-group">
            <input type="hidden" name="id" class="form-control" value="<?php echo $data->id; ?>" required>
          </div>
          <div class="form-group">
            <label for="">Nama Lengkap Calon Peserta Didik</label>
            <input type="text" name="nama" class="form-control" maxlength="200" value="<?php echo $data->nama_lengkap; ?>" required>
          </div>

          <div class="form-group">
            <label for="">Tempat Lahir Calon Peserta Didik</label>
            <input type="text" name="tptlahir" class="form-control" maxlength="200" value="<?php echo $data->tptlahir; ?>" required>
          </div>

          <div class="form-group">
            <label for="">Tanggal Lahir Calon Peserta Didik</label>
            <input type="date" name="tgllahir" class="form-control" maxlength="200" value="<?php echo $data->tgllahir; ?>" required>
          </div>

          <div class="form-group">
            <label for="">Jenis Penerimaan</label>
            <select class="form-control form-control" name="jenis">
              <option selected hidden><?php echo $data->jenis; ?></option>
              <option>Peserta Didik Baru SD</option>
              <option>Peserta Didik Baru SMP</option>
              <option>Peserta Didik Baru SMA</option>
              <option>Pindahan SD</option>
              <option>Pindahan SMP</option>
              <option>Pindahan SMA</option>
              <option>Jalur Prestasi SD</option>
              <option>Jalur Prestasi SMP</option>
              <option>Jalur Prestasi SMA</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Pindah Ke Kelas <b class="text-danger">(Khusus Calon Siswa Pindahan)</b></label>
            <select class="form-control form-control" name="pindah_kelas">
              <option selected hidden><?php echo $data->pindah_kelas; ?></option>
              <option values="-">-</option>
              <option values="I">I</option>
              <option values="XI">XI</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">NISN (Nomor Induk Siswa Nasional)</label>
            <input type="number" name="nisn" placeholder="Nomor Induk Sekolah Nasional" maxlength="15" class="form-control" value="<?php echo $data->nisn; ?>" required>
          </div>
          <div class="form-group">
            <label for="">Alamat Lengkap</label>
            <input type="text" name="alamat" class="form-control" maxlength="400" value="<?php echo $data->alamat; ?>" required>
          </div>
          <div class="form-group">
            <label for="">Sekolah Asal</label>
            <input type="text" name="sekolah_asal" class="form-control" maxlength="200" value="<?php echo $data->sekolah_asal; ?>" required>
          </div>
          <div class="form-group">
            <label for="">Nama Ayah</label>
            <input type="text" name="namaayah" class="form-control" maxlength="200" value="<?php echo $data->namaayah; ?>" required>
          </div>
          <div class="form-group">
            <label for="">Nama Ibu</label>
            <input type="text" name="namaibu" class="form-control" maxlength="200" value="<?php echo $data->namaibu; ?>" required>
          </div>
          <div class="form-group">
            <label for="">No HP Orang Tua</label>
            <input type="number" name="no_hp" class="form-control" placeholder="Contoh : 6281376876109" maxlength="15" value="<?php echo $data->no_hp; ?>" required>
          </div>
          <div class="form-group">
            <label for="">No WA Aktif Orang Tua</label>
            <input type="number" name="no_wa" class="form-control" placeholder="Contoh : 6281376876109" maxlength="15" value="<?php echo $data->no_wa; ?>" required>
          </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-danger">
        <h3 class="m-0 text-light text-bold">UPLOAD BERKAS PERSYARATAN</h3>
        <footer class="blockquote-footer text-light"><b>Silahkan Upload Pas Foto Calon Siswa, Akte Kelahiran (Bagi Calon Siswa SD) dan Bukti Pembayaran</b></footer>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="">UPLOAD PAS FOTO CALON SISWA <br><b class="text-danger">(LAYAR MERAH UK. 2X3)</b> [Tipe JPEG/JPG]</label><br>
          <input type="hidden" name="foto" class="form-control" value="<?php echo $data->foto; ?>">
          <img src="<?php echo base_url(); ?>asset/foto/<?php echo $data->foto; ?>" class="border border-dark rounded" width="150px"><br><br>
          <input type="file" name="foto_baru" class="form-control">
        </div>
        <hr>
        <br>
        <div class="form-group">
          <label for="">UPLOAD AKTE KELAHIRAN <b class="text-danger">(Wajib Bagi Calon Peserta Didik Baru SD)<br></b> Atau Surat Keterangan/Sertifikat Prestasi <b class="text-danger">(Khusus Jalur Prestasi)</b> [Tipe JPEG/JPG]</label><br>
          <input type="hidden" name="akte" class="form-control" value="<?php echo $data->akte; ?>">
          <img src="<?php echo base_url(); ?>asset/akte/<?php echo $data->akte; ?>" class="border border-dark rounded" width="150px"><br><br>
          <input type="file" name="akte_baru" class="form-control">
        </div>
        <hr> <br>

        <div class="form-group">
          <label for="">UPLOAD BUKTI PEMBAYARAN FORMULIR <b class="text-danger"> [Tipe JPEG/JPG]</label>
          <footer class="blockquote-footer">Rek. Bank Syariah Indonesia(BSI): <b>7222556637</b><br><cite title="Source Title">a.n PPDB Sekolah Sukma Bangsa Bireuen (Rp.150.000)</cite></footer><br>
          <input type="hidden" name="bukti_tf" class="form-control" value="<?php echo $data->bukti_tf; ?>">
          <img src="<?php echo base_url(); ?>asset/buktitf/<?php echo $data->bukti_tf; ?>" class="border border-dark rounded" width="150px"><br><br>
          <input type="file" name="buktitf_baru" class="form-control">
        </div>
        <div class="form-group">
          <input type="hidden" name="username" class="form-control" value="<?php echo $data->username; ?>">
        </div>
        <div class="form-group">
          <input type="hidden" name="password" class="form-control" value="<?php echo $data->password; ?>">
        </div>
        <div class="form-group">
          <input type="hidden" name="role" class="form-control" value="<?php echo $data->role; ?>">
        </div>
        <div class="form-group">
          <input type="hidden" name="approve_formulir" class="form-control" value="<?php echo $data->approve_formulir; ?>">
        </div>
        <div class="form-group">
          <input type="hidden" name="approve_lulus" class="form-control" value="<?php echo $data->approve_lulus; ?>">
        </div>
        <div class="form-group">
          <input type="hidden" name="approve_daftarulang" class="form-control" value="<?php echo $data->approve_daftarulang; ?>">
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary font-weight-bold" style="width:100%;"><i class="fa fa-save"></i> SIMPAN DATA</button>
    </form>
  <?php endforeach; ?>
  <br><br>
  <div class="row">
    <div class="col">
      <p align="center"><a class="btn btn-success" href="<?= base_url('user') ?>" style="width:50%;" role="button"><i class="fa fa-arrow-left"></i> Sebelumnya</a></p>
    </div>
    <div class="col">
      <p align="center"><a class="btn btn-success" href="<?= base_url('user/cetak_kartu/' . $id) ?>" style="width:50%;" role="button">Selanjutnya <i class="fa fa-arrow-right"></i></a></p>
    </div>
  </div>


  </section>
</div>
<br>