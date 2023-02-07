<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><b>EDIT KUOTA PENDAFTARAN</b></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PPDB</a></li>
              <li class="breadcrumb-item active">Edit Kuota Pendaftaran</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <hr>
    <section class="content">
    <div class="card">
      <div class="card-header bg-info">
        <h3 class="m-0 text-light text-bold">EDIT KUOTA</h3>
      </div>
      <div class="card-body">
    <?php foreach ($kuota as $data) : ?>
		<form method="post" action="<?php echo base_url().'home/updatekuota'; ?>">
    <div class="form-group">
        <input type="hidden" name="id" class="form-control" value="<?php echo $data->id;?>">
        </div>
        <div class="form-group">
        <input readonly type="text" name="jenis" class="form-control" value="<?php echo $data->jenis;?>">
        </div>
    
        <div class="form-group">
        <label for="">Kuota Penerimaan</label>
        <input type="text" name="kuota" class="form-control" value="<?php echo $data->kuota;?>">
        </div>
        <div class="form-group">
        <label for="">Keterangan</label>
        <input type="text" name="keterangan" class="form-control" value="<?php echo $data->keterangan;?>">
        </div>
        <button type="submit" class="btn btn-primary form-control font-weight-bold">Simpan</button>
      </div>
        </form>
	<?php endforeach ;?>
    </section>
</div>
    </div>
    </div>