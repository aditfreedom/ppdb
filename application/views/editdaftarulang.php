<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PPDB</a></li>
              <li class="breadcrumb-item active">Approval Daftar Ulang</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
    <?php foreach ($daftarulang as $data) : ?>
		<form method="post" action="<?php echo base_url().'home/updatelulus'; ?>">
    <div hidden class="form-group">
        <label for="">ID</label>
        <input type="text" name="id" class="form-control" value="<?php echo $data->id;?>">
        </div>
        <div hidden class="form-group">
        <label for="">ID DAFTAR ULANG</label>
        <input type="text" name="id_daftarulang" class="form-control" value="<?php echo $data->id_daftarulang;?>">
        </div>

      <h2><b>DATA RINCI SISWA</b></h2>
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
        <input type="text" name="tgl_lahir" class="form-control" value="<?php echo $data->tgl_lahir;?>">
        </div>
        </div>
    </div>
   
       
        <div class="form-group">
        <label for="">Agama</label>
        <input type="text" name="agama" class="form-control" value="<?php echo $data->agama;?>">
        </div>
        <div class="form-group">
        <label for="">Suku</label>
        <input type="text" name="suku" class="form-control" value="<?php echo $data->suku;?>">
        </div>
        <div class="form-group">
        <label for="">Jenis Kelamin</label>
        <input type="text" name="jk" class="form-control" value="<?php echo $data->jk;?>">
        </div>
        <div class="form-group">
        <label for="">Alamat</label>
        <textarea class="form-control" name="alamat" rows="3"><?php echo $data->alamat;?></textarea>
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

        <h2><b>DATA AYAH</b></h2>
      <hr>
    <div class="row">
    <div class="col">
    <div class="form-group">
        <label for="">Nama Lengkap Ayah</label>
        <input type="text" name="nama_ayah" class="form-control" value="<?php echo $data->nama_ayah;?>">
        </div>

    <div class="form-group">
        <label for="">Pendidikan Terakhir Ayah</label>
        <input type="text" name="pendidikan_ayah" class="form-control" value="<?php echo $data->pendidikan_ayah?>">
        </div>
       
        <div class="form-group">
        <label for="">Penghasilan Per Bulan</label>
        <input type="text" name="penghasilan_ayah" class="form-control" value="<?php echo $data->penghasilan_ayah;?>">
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
        <input type="text" name="tgllahir_ayah" class="form-control" value="<?php echo $data->tgllahir_ayah;?>">
        </div>
        </div>
    </div>
   
       
        <div class="form-group">
        <label for="">Pekerjaan Ayah</label>
        <input type="text" name="pekerjaan_ayah" class="form-control" value="<?php echo $data->pekerjaan_ayah;?>">
        </div>
        <div class="form-group">
        <label for="">Alamat</label>
        <textarea class="form-control" name="alamat_ayah" rows="3"><?php echo $data->alamat_ayah;?></textarea>
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


        <h2><b>DATA IBU</b></h2>
      <hr>
    <div class="row">
    <div class="col">
    <div class="form-group">
        <label for="">Nama Lengkap Ibu</label>
        <input type="text" name="nama_ibu" class="form-control" value="<?php echo $data->nama_ibu;?>">
        </div>

    <div class="form-group">
        <label for="">Pendidikan Terakhir Ibu</label>
        <input type="text" name="pendidikan_ibu" class="form-control" value="<?php echo $data->pendidikan_ibu?>">
        </div>
       
        <div class="form-group">
        <label for="">Penghasilan Per Bulan</label>
        <input type="text" name="penghasilan_ibu" class="form-control" value="<?php echo $data->penghasilan_ibu;?>">
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
        <input type="text" name="tgllahir_ibu" class="form-control" value="<?php echo $data->tgllahir_ibu;?>">
        </div>
        </div>
    </div>
   
       
        <div class="form-group">
        <label for="">Pekerjaan Ibu</label>
        <input type="text" name="pekerjaan_ibu" class="form-control" value="<?php echo $data->pekerjaan_ibu;?>">
        </div>
        <div class="form-group">
        <label for="">Alamat</label>
        <textarea class="form-control" name="alamat_ibu" rows="3"><?php echo $data->alamat_ibu;?></textarea>
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

        <h2><b>DATA SEKOLAH ASAL SISWA</b></h2>
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
        <textarea class="form-control" name="alamat_sekolah" rows="3"><?php echo $data->alamat_sekolah;?></textarea>
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



        <button type="submit" class="btn btn-primary" style="width:100%;"><i class="fa fa-save"></i> Simpan</button>         
        </form>
	<?php endforeach ;?>



    </section>
</div>
<br>