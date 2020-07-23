
 <div class="main-content">
<section class="section">
  <div class="section-header">
    <h1> Ikan </h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></div>
      <div class="breadcrumb-item"><a href="#"> Ikan </a></div>
    </div>
  </div>

  <div class="section-body">
  <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
        <div class="card-header">
            <h4>Form Ikan </h4>
        </div>
        <form class="form-horizontal">
	   
              <div class="form-group">
                <label class="col-sm-2 control-label" for="varchar">Nama Ikan <?php echo form_error('nama_ikan') ?></label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" name="nama_ikan" id="nama_ikan" placeholder="Nama Ikan" value="<?php echo $nama_ikan; ?>" readonly />
                </div>
              </div>
	   
              <div class="form-group">
                <label class="col-sm-2 control-label" for="double">Berat Awal <?php echo form_error('berat_awal') ?></label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" name="berat_awal" id="berat_awal" placeholder="Berat Awal" value="<?php echo $berat_awal; ?>" readonly />
                </div>
              </div>
	   
              <div class="form-group">
                <label class="col-sm-2 control-label" for="double">Berat Akhir <?php echo form_error('berat_akhir') ?></label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" name="berat_akhir" id="berat_akhir" placeholder="Berat Akhir" value="<?php echo $berat_akhir; ?>" readonly />
                </div>
              </div>
	   
              <div class="form-group">
                <label class="col-sm-2 control-label" for="date">Tanggal Masuk <?php echo form_error('tanggal_masuk') ?></label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" name="tanggal_masuk" id="tanggal_masuk" placeholder="Tanggal Masuk" value="<?php echo $tanggal_masuk; ?>" readonly />
                </div>
              </div>
	   
              <div class="form-group">
                <label class="col-sm-2 control-label" for="date">Tanggal Keluar <?php echo form_error('tanggal_keluar') ?></label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" name="tanggal_keluar" id="tanggal_keluar" placeholder="Tanggal Keluar" value="<?php echo $tanggal_keluar; ?>" readonly />
                </div>
              </div>
	   
     
        <div class="card-footer text-left">
        <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <a href="<?php echo site_url('ikan') ?>" class="btn btn-icon icon-left btn-success">Cancel</a>
	
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
