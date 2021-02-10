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
    <?php foreach ($registrasi_ulang as $data) : ?>
		<form method="post" action="<?php echo base_url().'user/updatelulususer'; ?>">
    <div hidden class="form-group">
        <label for="">ID</label>
        <input type="text" name="id" class="form-control" value="<?php echo $data->id;?>">
        </div>
        <div hidden class="form-group">
        <label for="">ID DAFTAR ULANG</label>
        <input type="text" name="id_daftarulang" class="form-control" value="<?php echo $data->id_daftarulang;?>">
        </div>

      <h2 class="text-info"><b>DATA RINCI SISWA</b></h2>
      <hr>
    <div class="row">
    <div class="col">

    <div class="row">
    <div class="col">
    <div class="form-group">
        <label for="">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $data->nama_lengkap;?>">
        </div>
        </div>
        <div class="col">
        <div class="form-group">
        <label for="">Nama Panggilan</label>
        <input type="text" name="nama_panggilan" class="form-control" value="<?php echo $data->nama_panggilan;?>">
        </div>
        </div>
        </div>


    <div class="form-group">
        <label for="">Tingkat</label>
        <input type="text" name="tingkat" class="form-control" value="<?php echo $data->tingkat?>">
        </div>
        <div class="form-group">
        <label for="">NISN</label>
        <input type="text" name="nisn" class="form-control" value="<?php echo $data->nisn;?>">
        </div>
        <div class="form-group">
        <label for="">Golongan Darah</label>
        <input type="text" name="goldar" class="form-control" value="<?php echo $data->goldar;?>">
        </div>
       
        <div class="row">
        <div class="col">
        <div class="form-group">
        <label for="">Anak Ke</label>
        <input type="text" name="anak_ke" class="form-control" value="<?php echo $data->anak_ke;?>">
        </div>
        </div>
        <div class="col">
        <div class="form-group">
        <label for="">Dari Bersaudara</label>
        <input type="text" name="dari_saudara" class="form-control" value="<?php echo $data->dari_saudara;?>">
        </div>
        </div>
        <div class="col">
        <div class="form-group">
        <label for="">Jarak Ke Sekolah (KM)</label>
        <input type="text" name="jk" class="form-control" value="<?php echo $data->jarak;?>">
        </div>
    </div>
    </div>
    </div>
    
    <div class="col">

    <div class="row">
    <div class="col">

    <div class="form-group">
        <label for="">Tempat Lahir</label>
        <input type="text" name="tpt_lahir" class="form-control" value="<?php echo $data->tpt_lahir;?>">
        </div>
        </div>

        <div class="col">
        <div class="form-group">
        <label for="">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $data->tgl_lahir;?>">
        </div>
        </div>
    </div>

    <div class="row">
    <div class="col">

    <div class="form-group">
        <label for="">Agama</label>
        <select class="form-control form-control" name="agama">
          <option selected hidden><?php echo $data->agama;?></option>
          <option>Islam</option>
          <option>Kristen</option>
          <option>Budha</option>
          <option>Hindu</option>
          <option>Konghucu</option>
          <option>Katolik</option>
          </select>
        </div>
        </div>

        <div class="col">
        <div class="form-group">
        <label for="">Suku</label>
        <select class="form-control form-control" name="suku">
          <option selected hidden><?php echo $data->suku;?></option>
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
        <input type="text" name="jk" class="form-control" value="<?php echo $data->jk;?>">
        </div>
        <div class="form-group">
        <label for="">Alamat</label>
        <textarea class="form-control" name="alamat" rows="1"><?php echo $data->alamat;?></textarea>
        </div>
        <div class="row">
        <div class="col">
        <div class="form-group">
        <label for="">Desa/Kelurahan</label>
        <input type="text" name="desa" class="form-control" value="<?php echo $data->desa;?>">
        </div>
        </div>
        <div class="col">
        <div class="form-group">
        <label for="">Kabupaten</label>
        <input type="text" name="kabupaten" class="form-control" value="<?php echo $data->kabupaten;?>">
        </div>
        </div>
        <div class="col"> 
        <div class="form-group">
        <label for="">Provinsi</label>
        <input type="text" name="provinsi" class="form-control" value="<?php echo $data->provinsi;?>">
        </div>
        </div>
        </div>
        </div>
        </div>
        <br>
        <br>

        <h2 class="text-info"><b>DATA AYAH</b></h2>
      <hr>
    <div class="row">
    <div class="col">
    <div class="form-group">
        <label for="">Nama Lengkap Ayah</label>
        <input type="text" name="nama_ayah" class="form-control" value="<?php echo $data->nama_ayah;?>">
        </div>

        <div class="form-group">
        <label for="">Pendidikan Terakhir</label>
        <select class="form-control form-control" name="pendidikan_ayah">
          <option selected hidden><?php echo $data->pendidikan_ayah;?></option>
          <option>SD</option>
          <option>SMP</option>
          <option>SMA</option>
          <option>S1/D4</option>
          <option>S2</option>
          <option>S3</option>
          </select>
        </div>
       
        <div class="form-group">
        <label for="">Penghasilan Per Bulan</label>
        <select class="form-control form-control" name="penghasilan_ayah">
          <option selected hidden><?php echo $data->penghasilan_ayah;?></option>
          <option>< Rp. 1.000.000</option>
          <option>Rp. 1.000.000 s/d Rp. 2.500.000</option>
          <option>Rp. 2.500.000 s/d Rp. 5.000.000</option>
          <option>> Rp. 5.000.000</option>
          </select>
        </div>

        <div class="form-group">
        <label for="">No Telp/HP Ayah</label>
        <input type="text" name="hp_ayah" class="form-control" value="<?php echo $data->hp_ayah;?>">
        </div>
    </div>
    
    <div class="col">
    <div class="row">
    <div class="col">

    <div class="form-group">
        <label for="">Tempat Lahir Ayah</label>
        <input type="text" name="tptlahir_ayah" class="form-control" value="<?php echo $data->tptlahir_ayah;?>">
        </div>
        </div>

        <div class="col">
        <div class="form-group">
        <label for="">Tanggal Lahir Ayah</label>
        <input type="date" name="tgllahir_ayah" class="form-control" value="<?php echo $data->tgllahir_ayah;?>">
        </div>
        </div>
    </div>
   
       
        <div class="form-group">
        <label for="">Pekerjaan Ayah</label>
        <input type="text" name="pekerjaan_ayah" class="form-control" value="<?php echo $data->pekerjaan_ayah;?>">
        </div>
        <div class="form-group">
        <label for="">Alamat</label>
        <textarea class="form-control" name="alamat_ayah" rows="1"><?php echo $data->alamat_ayah;?></textarea>
        </div>
        <div class="row">
        <div class="col">
        <div class="form-group">
        <label for="">Desa/Kelurahan</label>
        <input type="text" name="desa_ayah" class="form-control" value="<?php echo $data->desa_ayah;?>">
        </div>
        </div>
        <div class="col">
        <div class="form-group">
        <label for="">Kabupaten</label>
        <input type="text" name="kabupaten_ayah" class="form-control" value="<?php echo $data->kabupaten_ayah;?>">
        </div>
        </div>
        <div class="col"> 
        <div class="form-group">
        <label for="">Provinsi</label>
        <input type="text" name="provinsi_ayah" class="form-control" value="<?php echo $data->provinsi_ayah;?>">
        </div>
        </div>
        </div>
        </div>
        </div>
        <br>
        <br>


        <h2 class="text-info"><b>DATA IBU</b></h2>
      <hr>
    <div class="row">
    <div class="col">
    <div class="form-group">
        <label for="">Nama Lengkap Ibu</label>
        <input type="text" name="nama_ibu" class="form-control" value="<?php echo $data->nama_ibu;?>">
        </div>

        <div class="form-group">
        <label for="">Pendidikan Terakhir</label>
        <select class="form-control form-control" name="pendidikan_ibu">
          <option selected hidden><?php echo $data->pendidikan_ibu;?></option>
          <option>SD</option>
          <option>SMP</option>
          <option>SMA</option>
          <option>S1/D4</option>
          <option>S2</option>
          <option>S3</option>
          </select>
        </div>
       
        <div class="form-group">
        <label for="">Penghasilan Per Bulan</label>
        <select class="form-control form-control" name="penghasilan_ibu">
          <option selected hidden><?php echo $data->penghasilan_ibu;?></option>
          <option>< Rp. 1.000.000</option>
          <option>Rp. 1.000.000 s/d Rp. 2.500.000</option>
          <option>Rp. 2.500.000 s/d Rp. 5.000.000</option>
          <option>> Rp. 5.000.000</option>
          </select>
        </div>

        <div class="form-group">
        <label for="">No Telp/HP Ibu</label>
        <input type="text" name="hp_ibu" class="form-control" value="<?php echo $data->hp_ibu;?>">
        </div>
       
       
    </div>
    
    <div class="col">

    <div class="row">
    <div class="col">

    <div class="form-group">
        <label for="">Tempat Lahir Ibu</label>
        <input type="text" name="tptlahir_ibu" class="form-control" value="<?php echo $data->tptlahir_ibu;?>">
        </div>
        </div>

        <div class="col">
        <div class="form-group">
        <label for="">Tanggal Lahir Ibu</label>
        <input type="date" name="tgllahir_ibu" class="form-control" value="<?php echo $data->tgllahir_ibu;?>">
        </div>
        </div>
    </div>
   
       
        <div class="form-group">
        <label for="">Pekerjaan Ibu</label>
        <input type="text" name="pekerjaan_ibu" class="form-control" value="<?php echo $data->pekerjaan_ibu;?>">
        </div>
        <div class="form-group">
        <label for="">Alamat</label>
        <textarea class="form-control" name="alamat_ibu" rows="1"><?php echo $data->alamat_ibu;?></textarea>
        </div>
        <div class="row">
        <div class="col">
        <div class="form-group">
        <label for="">Desa/Kelurahan</label>
        <input type="text" name="desa_ibu" class="form-control" value="<?php echo $data->desa_ibu;?>">
        </div>
        </div>
        <div class="col">
        <div class="form-group">
        <label for="">Kabupaten</label>
        <input type="text" name="kabupaten_ibu" class="form-control" value="<?php echo $data->kabupaten_ibu;?>">
        </div>
        </div>
        <div class="col"> 
        <div class="form-group">
        <label for="">Provinsi</label>
        <input type="text" name="provinsi_ibu" class="form-control" value="<?php echo $data->provinsi_ibu;?>">
        </div>
        </div>
        </div>
        </div>
        </div>
        <br>
        <br>

        <h2 class="text-info"><b>DATA SEKOLAH ASAL SISWA</b></h2>
      <hr>
    <div class="row">
    <div class="col">
    <div class="form-group">
        <label for="">Sekolah Asal</label>
        <input type="text" name="sekolah_asal" class="form-control" value="<?php echo $data->sekolah_asal;?>">
        </div>

    <div class="form-group">
        <label for="">NPSN</label>
        <input type="text" name="npsn" class="form-control" value="<?php echo $data->npsn?>">
        </div>
    </div>
    
    <div class="col">
    <div class="row">
    <div class="col">
        <div class="form-group">
        <label for="">Alamat</label>
        <textarea class="form-control" name="alamat_sekolah" rows="1"><?php echo $data->alamat_sekolah;?></textarea>
        </div>
        <div class="row">
        <div class="col">
        <div class="form-group">
        <label for="">Kabupaten</label>
        <input type="text" name="kabupaten_sekolah" class="form-control" value="<?php echo $data->kabupaten_sekolah;?>">
        </div>
        </div>
        <div class="col"> 
        <div class="form-group">
        <label for="">Provinsi</label>
        <input type="text" name="provinsi_sekolah" class="form-control" value="<?php echo $data->provinsi_sekolah;?>">
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <br><br>

        
        <h2 class="text-info"><b>DATA KESEHATAN, MINAT DAN BAKAT SISWA</b></h2>
      <hr>
    <div class="row">
    <div class="col">
    <div class="form-group">
        <label for="">Penyakit Serius Yang Pernah Diderita</label>
        <input type="text" name="penyakit" class="form-control" value="<?php echo $data->penyakit;?>">
        </div>

        <div class="row">
        <div class="col">
        <div class="form-group">
        <label for="">Olahraga</label>
        <select class="form-control form-control" name="olah_raga">
          <option selected hidden><?php echo $data->olah_raga;?></option>
          <option>Ya</option>
          <option>Tidak</option>
          </select>
        </div>
        </div>
        <div class="col"> 
        <div class="form-group">
        <label for="">Seni Musik</label>
        <input type="text" name="seni" class="form-control" value="<?php echo $data->seni;?>">
        </div>
        </div>
        </div>
        </div>

    
    <div class="col">

    <div class="row">
        <div class="col">
        <div class="form-group">
        <label for="">Seni Tari</label>
        <input type="text" name="tari" class="form-control" value="<?php echo $data->tari;?>">
        </div>
        </div>
        <div class="col"> 
        <div class="form-group">
        <label for="">Seni Lukis</label>
        <input type="text" name="lukis" class="form-control" value="<?php echo $data->lukis;?>">
        </div>
        </div>
        </div>

        <div class="row">
        <div class="col">
        <div class="form-group">
        <label for="">Drama</label>
        <input type="text" name="drama" class="form-control" value="<?php echo $data->drama;?>">
        </div>
        </div>
        <div class="col"> 
        <div class="form-group">
        <label for="">Sastra</label>
        <input type="text" name="sastra" class="form-control" value="<?php echo $data->sastra;?>">
        </div>
        </div>
        <div class="col"> 
        <div class="form-group">
        <label for="">Organisasi</label>
        <input type="text" name="organisasi" class="form-control" value="<?php echo $data->organisasi;?>">
        </div>
        </div>
        </div>
       </div>
        </div>
        <div class="form-group">
        <label for="">Prestasi Yang Pernah Diraih</label>
        <textarea class="form-control" name="prestasi" rows="2"><?php echo $data->prestasi;?></textarea>
        </div>    
        <br><br>

        <h2 class="text-info"><b>INFORMASI TENTANG SEKOLAH</b></h2>
      <hr>
    
        <div class="form-group">
        <label for="">Alasan Anda Ingin Bersekolah Di Sekolah Sukma Bangsa</label>
        <textarea class="form-control" name="alasan" rows="2"><?php echo $data->alasan;?></textarea>
        </div>  

        <div class="form-group">
        <label for="">Apa Yang Anda Ketahui Tentang Sekolah Sukma Bangsa?</label>
        <textarea class="form-control" name="alasan" rows="2"><?php echo $data->alasan;?></textarea>
        </div>    
        <!-- <button type="submit" class="btn btn-primary" style="width:100%;"><i class="fa fa-save"></i> Simpan</button>          -->
        </form>
	<?php endforeach ;?>




    </section>
</div>
<br>