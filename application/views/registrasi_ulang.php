<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col">
          <div class="card">
            <div class="card-header bg-danger">
              <h4 class="text-uppercase"><b>Selamat! Anda Lulus Seleksi PPDB Sekolah Sukma Bangsa Bireuen
                  TP. 2023/2024</b></h4>
            </div>
            <div class="card-body">
              <h1 class="m-0 text-info font-weight-bold no-print"><b>REGISTRASI ULANG PESERTA DIDIK</b></h1>
              <footer class="blockquote-footer"><b>Mohon Diisi Formulir Pendaftaran Dengan Lengkap Dan Benar</b>
              </footer>

            </div>
          </div>
        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <section class="content">
    <?php foreach ($registrasi_ulang as $data) : ?>
      <form method="post" action="<?php echo base_url() . 'user/updatelulususer'; ?>">
        <div hidden class="form-group">
          <label for="">ID</label>
          <input type="text" name="id" class="form-control" value="<?php echo $data->id; ?>">
        </div>
        <div hidden class="form-group">
          <label for="">ID DAFTAR ULANG</label>
          <input type="text" name="id_daftarulang" class="form-control" value="<?php echo $data->id_daftarulang; ?>">
        </div>

        <div class="card">
          <div class="card-header bg-info">
            <h2 class="text-light"><b>DATA RINCI SISWA</b></h2>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">

                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="">Nama Lengkap</label>
                      <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" maxlength="200" value="<?php echo $data->nama_lengkap; ?>" required autofocus>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="">Nama Panggilan</label>
                      <input type="text" name="nama_panggilan" class="form-control" placeholder="Nama Panggilan" maxlength="100" value="<?php echo $data->nama_panggilan; ?>" required>
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label for="">Daftar Ulang Ke Tingkat</label>
                  <select class="form-control form-control" name="tingkat" required>
                    <option selected hidden>
                      <?php echo $data->tingkat; ?>
                    </option>
                    <option>SD</option>
                    <option>SMP</option>
                    <option>SMA</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">NISN</label>
                  <input type="number" name="nisn" class="form-control" maxlength="15" placeholder="Nomor Induk Siswa Nasional" value="<?php echo $data->nisn; ?>" required>
                </div>
                <div class="form-group">
                  <label for="">Golongan Darah</label>
                  <select class="form-control form-control" name="goldar" required>
                    <option selected hidden><?php echo $data->goldar; ?>
                    </option>
                    <option>A</option>
                    <option>B</option>
                    <option>AB</option>
                    <option>O</option>
                    <option>-</option>
                  </select>
                </div>

                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="">Anak Ke</label>
                      <input type="number" name="anak_ke" class="form-control" maxlength="2" value="<?php echo $data->anak_ke; ?>" required>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="">Dari Bersaudara</label>
                      <input type="number" name="dari_saudara" class="form-control" maxlength="2" value="<?php echo $data->dari_saudara; ?>">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="">Jarak Ke Sekolah (KM)</label>
                      <select class="form-control form-control" name="jarak" required>
                        <option selected hidden>
                          <?php echo $data->jarak; ?>
                        </option>
                        <option>
                          < 1 KM</option>
                        <option>1 - 3 KM</option>
                        <option>> 3 KM</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">

                <div class="row">
                  <div class="col">

                    <div class="form-group">
                      <label for="">Tempat Lahir</label>
                      <input type="text" name="tpt_lahir" class="form-control" maxlength="200" placeholder="Tempat Lahir" value="<?php echo $data->tpt_lahir; ?>" required>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label for="">Tanggal Lahir</label>
                      <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $data->tgl_lahir; ?>" required>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col">

                    <div class="form-group">
                      <label for="">Agama</label>
                      <select class="form-control form-control" name="agama" required>
                        <option selected hidden>
                          <?php echo $data->agama; ?>
                        </option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Budha</option>
                        <option>Hindu</option>
                        <option>Konghucu</option>
                        <option>Katolik</option>
                        <option>Lainnya</option>
                      </select>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label for="">Suku</label>
                      <select class="form-control form-control" name="suku" required>
                        <option selected hidden>
                          <?php echo $data->suku; ?>
                        </option>
                        <option>Aceh</option>
                        <option>Batak</option>
                        <option>Jawa</option>
                        <option>Gayo</option>
                        <option>Jawa</option>
                        <option>Tionghoa</option>
                        <option>Padang</option>
                        <option>Lainnya</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="">Jenis Kelamin</label>
                  <select class="form-control form-control" name="jk" required>
                    <option selected hidden><?php echo $data->jk; ?>
                    </option>
                    <option>Laki-Laki</option>
                    <option>Perempuan</option>
                  </select>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="">Alamat Jalan</label>
                      <textarea class="form-control" id="alamatjalananak" name="alamat" rows="1" placeholder="Alamat Jalan" maxlength="500" required><?php echo $data->alamat; ?></textarea>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label for="">Desa dan Kecamatan</label>
                          <input type="text" id="desaanak" name="desa" class="form-control" placeholder="Desa, Kecamatan" maxlength="45" value="<?php echo $data->desa; ?>" required>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label for="">Kabupaten</label>
                          <input type="text" id="kabupatenanak" name="kabupaten" class="form-control" placeholder="Kabupaten" maxlength="45" value="<?php echo $data->kabupaten; ?>" required>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label for="">Provinsi</label>
                          <input type="text" id="provinsianak" name="provinsi" class="form-control" placeholder="Provinsi" maxlength="45" value="<?php echo $data->provinsi; ?>" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>


        <div class="card">
          <div class="card-header bg-info">
            <h2 class="text-light"><b>DATA AYAH</b></h2>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="">Nama Lengkap Ayah</label>
                  <input type="text" name="nama_ayah" class="form-control" placeholder="Nama Ayah" maxlength="200" value="<?php echo $data->nama_ayah; ?>" required>
                </div>

                <div class="form-group">
                  <label for="">Pendidikan Terakhir</label>
                  <select class="form-control form-control" name="pendidikan_ayah" required>
                    <option selected hidden>
                      <?php echo $data->pendidikan_ayah; ?>
                    </option>
                    <option>SD</option>
                    <option>SMP</option>
                    <option>SMA</option>
                    <option>S1/D4</option>
                    <option>S2</option>
                    <option>S3</option>
                    <option>Lainnya</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="">Penghasilan Per Bulan</label>
                  <select class="form-control form-control" name="penghasilan_ayah" required>
                    <option selected hidden>
                      <?php echo $data->penghasilan_ayah; ?>
                    </option>
                    <option>
                      < Rp. 1.000.000</option>
                    <option>Rp. 1.000.000 s/d Rp. 2.500.000</option>
                    <option>Rp. 2.500.000 s/d Rp. 5.000.000</option>
                    <option>> Rp. 5.000.000</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="">No Telp/HP Ayah (Contoh : 6281376876109)</label>
                  <input type="number" name="hp_ayah" class="form-control" placeholder="Contoh : 6281376876109" maxlength="15" value="<?php echo $data->hp_ayah; ?>" required>
                </div>
              </div>

              <div class="col">
                <div class="row">
                  <div class="col">

                    <div class="form-group">
                      <label for="">Tempat Lahir Ayah</label>
                      <input type="text" name="tptlahir_ayah" class="form-control" placeholder="Tempat Lahir Ayah" maxlength="45" value="<?php echo $data->tptlahir_ayah; ?>" required>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label for="">Tanggal Lahir Ayah</label>
                      <input type="date" name="tgllahir_ayah" class="form-control" value="<?php echo $data->tgllahir_ayah; ?>" required>
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label for="">Pekerjaan Ayah</label>
                  <input type="text" name="pekerjaan_ayah" class="form-control" placeholder="Pekerjaan Ayah" maxlength="45" value="<?php echo $data->pekerjaan_ayah; ?>" required>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="">Alamat Jalan <a class="btn btn-danger btn-sm text-light text-decoration-none" onclick="alamatAyah()"><b>Klik
                            Jika
                            Alamat Ayah Sama Dengan
                            Anak</b></a></label>
                      <textarea class="form-control" id="alamatjalanayah" name="alamat_ayah" rows="1" placeholder="Alamat Jalan" maxlength="450" required><?php echo $data->alamat_ayah; ?></textarea>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label for="">Desa dan Kecamatan</label>
                          <input type="text" id="desaayah" name="desa_ayah" class="form-control" placeholder="Desa, Kecamatan" maxlength="45" value="<?php echo $data->desa_ayah; ?>" required>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label for="">Kabupaten</label>
                          <input type="text" id="kabupatenayah" name="kabupaten_ayah" class="form-control" placeholder="Kabupaten" maxlength="45" value="<?php echo $data->kabupaten_ayah; ?>" required>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label for="">Provinsi</label>
                          <input type="text" id="provinsiayah" name="provinsi_ayah" class="form-control" placeholder="Provinsi" maxlength="45" value="<?php echo $data->provinsi_ayah; ?>" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>


        <div class="card">
          <div class="card-header bg-info">
            <h2 class="text-light"><b>DATA IBU</b></h2>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="">Nama Lengkap Ibu</label>
                  <input type="text" name="nama_ibu" class="form-control" placeholder="Nama Lengkap Ibu" maxlength="200" value="<?php echo $data->nama_ibu; ?>" required>
                </div>

                <div class="form-group">
                  <label for="">Pendidikan Terakhir</label>
                  <select class="form-control form-control" name="pendidikan_ibu" required>
                    <option selected hidden>
                      <?php echo $data->pendidikan_ibu; ?>
                    </option>
                    <option>SD</option>
                    <option>SMP</option>
                    <option>SMA</option>
                    <option>S1/D4</option>
                    <option>S2</option>
                    <option>S3</option>
                    <option>Lainnya</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="">Penghasilan Per Bulan</label>
                  <select class="form-control form-control" name="penghasilan_ibu" required>
                    <option selected hidden>
                      <?php echo $data->penghasilan_ibu; ?>
                    </option>
                    <option>
                      < Rp. 1.000.000</option>
                    <option>Rp. 1.000.000 s/d Rp. 2.500.000</option>
                    <option>Rp. 2.500.000 s/d Rp. 5.000.000</option>
                    <option>> Rp. 5.000.000</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="">No Telp/HP Ibu (Contoh : 6281376876109)</label>
                  <input type="number" name="hp_ibu" class="form-control" placeholder="Contoh : 6281376876109" maxlength="15" value="<?php echo $data->hp_ibu; ?>" required>
                </div>


              </div>

              <div class="col">

                <div class="row">
                  <div class="col">

                    <div class="form-group">
                      <label for="">Tempat Lahir Ibu</label>
                      <input type="text" name="tptlahir_ibu" class="form-control" value="<?php echo $data->tptlahir_ibu; ?>" required>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label for="">Tanggal Lahir Ibu</label>
                      <input type="date" name="tgllahir_ibu" class="form-control" value="<?php echo $data->tgllahir_ibu; ?>" required>
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label for="">Pekerjaan Ibu</label>
                  <input type="text" name="pekerjaan_ibu" class="form-control" placeholder="Pekerjaan Ibu" maxlength="45" value="<?php echo $data->pekerjaan_ibu; ?>" required>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="">Alamat Jalan <a class="btn btn-danger btn-sm text-light text-decoration-none" onclick="alamatIbu()"><b>Klik
                            Jika
                            Alamat Ibu Sama Dengan
                            Anak</b></a></label>
                      <textarea class="form-control" id="alamatjalanibu" name="alamat_ibu" rows="1" placeholder="Alamat Jalan" maxlength="200" required><?php echo $data->alamat_ibu; ?></textarea>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label for="">Desa dan Kecamatan</label>
                          <input type="text" id="desaibu" name="desa_ibu" class="form-control" placeholder="Desa, Kecamatan" maxlength="45" value="<?php echo $data->desa_ibu; ?>" required>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label for="">Kabupaten</label>
                          <input type="text" id="kabupatenibu" name="kabupaten_ibu" class="form-control" placeholder="Kabupaten" maxlength="45" value="<?php echo $data->kabupaten_ibu; ?>" required>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label for="">Provinsi</label>
                          <input type="text" id="provinsiibu" name="provinsi_ibu" class="form-control" placeholder="Provinsi" maxlength="45" value="<?php echo $data->provinsi_ibu; ?>" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>


        <div class="card">
          <div class="card-header bg-info">
            <h2 class="text-light"><b>DATA SEKOLAH ASAL SISWA</b></h2>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="">Sekolah Asal</label>
                  <input type="text" name="sekolah_asal" class="form-control" placeholder="Sekolah Asal" maxlength="200" value="<?php echo $data->sekolah_asal; ?>" required>
                </div>

                <div class="form-group">
                  <label for="">NPSN Sekolah</label>
                  <input type="number" name="npsn" class="form-control" placeholder="NPSN Sekolah" value="<?php echo $data->npsn ?>">
                </div>
              </div>

              <div class="col">
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="">Alamat Sekolah</label>
                      <textarea class="form-control" name="alamat_sekolah" rows="1" maxlength="500" required><?php echo $data->alamat_sekolah; ?></textarea>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label for="">Kabupaten</label>
                          <input type="text" name="kabupaten_sekolah" class="form-control" maxlength="300" value="<?php echo $data->kabupaten_sekolah; ?>" required>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label for="">Provinsi</label>
                          <input type="text" name="provinsi_sekolah" class="form-control" maxlength="45" value="<?php echo $data->provinsi_sekolah; ?>" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header bg-info">
            <h2 class="text-light"><b>DATA KESEHATAN, MINAT DAN BAKAT SISWA</b></h2>
          </div>
          <div class="card-body">
            <div class="col">

              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="">Penyakit Serius Yang Pernah Diderita</label>
                    <input type="text" name="penyakit" class="form-control" maxlength="200" value="<?= $data->penyakit; ?>" required="">
                  </div>

                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <label for="">Olahraga</label>
                        <select class="form-control form-control" name="olah_raga" required="">
                          <option selected="<?= $data->olah_raga; ?>" hidden=""><?= $data->olah_raga; ?></option>
                          <option>Ya</option>
                          <option>Tidak</option>
                        </select>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label for="">Seni Musik</label>
                        <select class="form-control form-control" name="seni" required="">
                          <option selected="<?= $data->seni; ?>" hidden>
                            <?= $data->seni; ?>
                          </option>
                          <option>Ya</option>
                          <option>Tidak</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="col">

                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <label for="">Seni Tari</label>
                        <select class="form-control form-control" name="tari" required="">
                          <option selected hidden value="<?= $data->tari; ?>"><?= $data->tari; ?></option>
                          <option>Ya</option>
                          <option>Tidak</option>
                        </select>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label for="">Seni Lukis</label>
                        <select class="form-control form-control" name="lukis" required="">
                          <option selected hidden value="<?= $data->lukis; ?>"><?= $data->lukis; ?></option>
                          <option>Ya</option>
                          <option>Tidak</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <label for="">Drama</label>
                        <select class="form-control form-control" name="drama" required="">
                          <option selected hidden value="<?= $data->drama; ?>"><?= $data->drama; ?></option>
                          <option>Ya</option>
                          <option>Tidak</option>
                        </select>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label for="">Sastra</label>
                        <select class="form-control form-control" name="sastra" required="">
                          <option selected hidden value="<?= $data->sastra; ?>"><?= $data->sastra; ?></option>
                          <option>Ya</option>
                          <option>Tidak</option>
                        </select>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label for="">Organisasi</label>
                        <select class="form-control form-control" name="organisasi" required="">
                          <option selected hidden value="<?= $data->organisasi; ?>"><?= $data->organisasi; ?></option>
                          <option>Ya</option>
                          <option>Tidak</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="">Prestasi Yang Pernah Diraih</label>
                <textarea class="form-control" name="prestasi" rows="2" maxlength="450" required><?= $data->prestasi; ?></textarea>
              </div>
            </div>
          </div>

        </div>

        <div class="card">
          <div class="card-header bg-info">
            <h2 class="text-light"><b>INFORMASI PENGETAHUAN TENTANG SEKOLAH</b></h2>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="">Alasan Anda Ingin Bersekolah Di Sekolah Sukma Bangsa</label>
              <textarea class="form-control" name="alasan" rows="2" maxlength="200" required><?php echo $data->alasan; ?></textarea>
            </div>

            <div class="form-group">
              <label for="">Apa Yang Anda Ketahui Tentang Sekolah Sukma Bangsa?</label>
              <textarea class="form-control" name="tentang_sekolah" rows="2" maxlength="200" required><?php echo $data->tentang_sekolah; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary font-weight-bold" style="width:100%;"><i class="fa fa-save "></i>
              SIMPAN DATA</button>
          </div>
        </div>




      </form>
    <?php endforeach; ?>



    <br>
    <div class="row no-print">
      <div class="col">
        <p align="center"><a class="btn btn-success" href="<?= base_url('user/cetak_kartu/') ?>" style="width:50%;" role="button"><i class="fa fa-arrow-left"></i> Sebelumnya</a></p>
      </div>
      <div class="col">
        <p align="center"><a class="btn btn-success" href="<?= base_url('user/cetakdaftarulang/') ?>" style="width:50%;" role="button">Selanjutnya <i class="fa fa-arrow-right"></i></a></p>
      </div>
    </div>
  </section>
</div>
<br>


<script>
  function alamatAyah() {
    var alamatjalananak = document.getElementById("alamatjalananak").value;
    var desaanak = document.getElementById("desaanak").value;
    var kabupatenanak = document.getElementById("kabupatenanak").value;
    var provinsianak = document.getElementById("provinsianak").value;

    document.getElementById("alamatjalanayah").innerHTML = alamatjalananak;
    document.getElementById("alamatjalanayah").setAttribute('value', alamatjalananak);
    document.getElementById("desaayah").setAttribute('value', desaanak);
    document.getElementById("kabupatenayah").setAttribute('value', kabupatenanak);
    document.getElementById("provinsiayah").setAttribute('value', provinsianak);
  }

  function alamatIbu() {
    var alamatjalananak = document.getElementById("alamatjalananak").value;
    var desaanak = document.getElementById("desaanak").value;
    var kabupatenanak = document.getElementById("kabupatenanak").value;
    var provinsianak = document.getElementById("provinsianak").value;

    document.getElementById("alamatjalanibu").innerHTML = alamatjalananak;
    document.getElementById("alamatjalanibu").setAttribute('value', alamatjalananak);
    document.getElementById("desaibu").setAttribute('value', desaanak);
    document.getElementById("kabupatenibu").setAttribute('value', kabupatenanak);
    document.getElementById("provinsiibu").setAttribute('value', provinsianak);
  }
</script>