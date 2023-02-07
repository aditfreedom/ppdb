
<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><b>EDIT APPROVAL FORMULIR</b></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PPDB</a></li>
              <li class="breadcrumb-item active">Edit Approval</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <hr>
    <section class="content">
    <?php foreach ($approval as $data) : ?>
		<form method="post" action="<?php echo base_url().'home/cetakformulir'; ?>">
        <div class="form-group">
        <input hidden type="text" name="nama" class="form-control" value="<?php echo $data->nama_lengkap;?>">
        </div>
    <div class="form-group">
        <select hidden class="form-control form-control" name="jenis">
          <option selected hidden><?php echo $data->jenis;?></option>
          <option>Peserta Didik Baru SD</option>
          <option>Peserta Didik Baru SMP</option>
          <option>Peserta Didik Baru SMA</option>
          <option>Pindahan SD</option>
          <option>Pindahan SMP</option>
          <option>Pindahan SMA</option>
          </select>
      </div>
        <div class="form-group">
        <input hidden type="text" name="nisn" class="form-control" value="<?php echo $data->nisn;?>">
        </div>
        <div class="form-group">
        <input hidden type="text" name="alamat" class="form-control" value="<?php echo $data->alamat;?>">
        </div>
        <div class="form-group">
        <input hidden type="text" name="sekolahasal" class="form-control" value="<?php echo $data->sekolah_asal;?>">
        </div>
        <div class="form-group">
        <input hidden type="text" name="no_hp" class="form-control" value="<?php echo $data->no_hp;?>">
        </div>

        <p align="right" hidden><button type="submit" class="btn btn-success"><i class="fa fa-print"></i> <b>CETAK COVER FORMULIR PENDAFTARAN</b></button></p>         
        </form>
	<?php endforeach ;?>
    <div class="card">
      <div class="card-header bg-info">
        <h3 class="m-0 text-light text-bold">DATA DIRI</h3>
      </div>
      <div class="card-body">
    <?php foreach ($approval as $data) : ?>
		<form method="post" action="<?php echo base_url().'home/updateapproval'; ?>">
    <div class="form-group">
        <input type="hidden" name="id" class="form-control" value="<?php echo $data->id;?>">
        </div>
        <div class="form-group">
        <label for="">Nama Lengkap</label>
        <input readonly type="text" name="nama" class="form-control" value="<?php echo $data->nama_lengkap;?>">
        </div>

        <div class="form-group">
        <label for="">Tempat Lahir</label>
        <input readonly type="text" name="tptlahir" class="form-control" value="<?php echo $data->tptlahir;?>">
        </div>

        <div class="form-group">
        <label for="">Tanggal Lahir</label>
        <input readonly type="text" name="tgllahir" class="form-control" value="<?=$data->tgllahir;?>">
        </div>

    <div class="form-group">
        <label for="">Jenis Penerimaan</label>
        <input readonly type="text" name="jenis" class="form-control" value="<?=$data->jenis;?>">
      </div>
        <div class="form-group">
        <label for="">NISN</label>
        <input readonly type="text" name="nisn" class="form-control" value="<?php echo $data->nisn;?>">
        </div>
        <div class="form-group">
        <label for="">Alamat</label>
        <input readonly type="text" name="alamat" class="form-control" value="<?php echo $data->alamat;?>">
        </div>
        <div class="form-group">
        <label for="">Sekolah Asal</label>
        <input readonly type="text" name="sekolah_asal" class="form-control" value="<?php echo $data->sekolah_asal;?>">
        </div>
        <div class="form-group">
        <label for="">Nama Ayah</label>
        <input readonly type="text" name="namaayah" class="form-control" value="<?php echo $data->namaayah;?>">
        </div>
        <div class="form-group">
        <label for="">Nama Ibu</label>
        <input readonly type="text" name="namaibu" class="form-control" value="<?php echo $data->namaibu;?>">
        </div>
        <div class="form-group">
        <label for="">No HP Orang Tua</label>
        <input type="text" name="no_hp" class="form-control" value="<?php echo $data->no_hp;?>">
        </div>
        <div class="form-group">
        <label for="">No WA Aktif</label>
        <input type="text" name="no_wa" class="form-control" value="<?php echo $data->no_wa;?>">
        </div>
    </div>
    </div>
        <div class="card">
      <div class="card-header bg-info">
        <h3 class="m-0 text-light text-bold">BERKAS PERSYARATAN</h3>
      </div>
      <div class="card-body">
        <div class="form-group">
        <table class="table table-bordered table-responsive-sm">
          <tr class="bg-dark text-center">
            <th>Pas Foto</th>
            <th>Akte/Surat Keterangan/Sertifikat</th>
            <th>Bukti Transfer</th>
          </tr>
          <tr class="text-center">
            <td>
            <input  type="hidden" name="foto" class="form-control" value="<?php echo $data->foto;?>">
            <img src="<?php echo base_url();?>asset/foto/<?php echo $data->foto;?>" class="border border-dark rounded" width="150px">
            <br><br>
            <a href="<?php echo base_url();?>asset/foto/<?php echo $data->foto;?>" class="btn btn-success btn-sm" target="_blank"><b><i class="fa fa-eye"></i> LIHAT FOTO</b></a>
            </div>
          </td>
            <td> 
              <div class="form-group">
              <input  type="hidden" name="akte" class="form-control" value="<?php echo $data->akte;?>">
              <img src="<?php echo base_url();?>asset/akte/<?php echo $data->akte;?>" class="border border-dark rounded" width="150px">
              <br><br>
              <a href="<?php echo base_url();?>asset/akte/<?php echo $data->akte;?>" class="btn btn-success btn-sm" target="_blank"><b><i class="fa fa-eye"></i> LIHAT BERKAS</b></a>
        </div>
            </td>
      <td>
      <div class="form-group">
        <input  type="hidden" name="bukti_tf" class="form-control" value="<?php echo $data->bukti_tf;?>">
        <img src="<?php echo base_url();?>asset/buktitf/<?php echo $data->bukti_tf;?>" class="border border-dark rounded" width="150px">
        <br><br>
        <a href="<?php echo base_url();?>asset/buktitf/<?php echo $data->bukti_tf;?>" class="btn btn-success btn-sm" target="_blank"><b><i class="fa fa-eye"></i> LIHAT BUKTI PEMBAYARAN</b></a>
        </div>
      </td>
          </tr>
        </table>
               
        <div class="form-group">
        <input type="hidden" name="username" class="form-control" value="<?php echo $data->username;?>">
        </div>
        <div class="form-group">
        <input type="hidden" name="password" class="form-control" value="<?php echo $data->password;?>">
        </div>
        <div class="form-group">
        <input type="hidden" name="role" class="form-control" value="<?php echo $data->role;?>">
        </div>
    </div>
    </div>
    </div>
    
    <div class="card">
      <div class="card-header bg-info">
        <h3 class="m-0 text-light text-bold">KONFIRMASI ADMIN</h3>
      </div>
      <div class="card-body">
        <div class="form-group">
        <label for="">Approve Formulir</label>
        <select class="form-control form-control" name="approve_formulir">
          <option selected hidden><?php echo $data->approve_formulir;?></option>
          <option>Antrian</option>
          <option>Ditolak</option>
          <option>Diterima</option>
          </select>
      </div>
      <div class="form-group">
      <input  type="hidden" name="approve_lulus" class="form-control" value="<?php echo $data->approve_lulus;?>">
      </div>  
      <div class="form-group">
      <input  type="hidden" name="approve_daftarulang" class="form-control" value="<?php echo $data->approve_daftarulang;?>">
      </div>  

      <div class="form-group">
        <button type="submit" class="form-control btn btn-primary font-weight-bold">SIMPAN DATA</button>
        </div>     
            
  </form>
	<?php endforeach ;?>

    </section>
</div>
    </div>
    </div>
<br>