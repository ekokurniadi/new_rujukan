
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Ikan</h2>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Form Ikan</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
        
        <div class="body">
            <form action="<?php echo $action; ?>" method="post" class="form-horizontal">
	   
            <div class="col-sm-12">  
              <div class="form-group"> 
                <div class="form-line">  
                    <label for="nama_ikan">Nama Ikan <?php echo form_error('nama_ikan') ?></label>
                    <input type="text" class="form-control" name="nama_ikan" id="nama_ikan" placeholder="Nama Ikan" value="<?php echo $nama_ikan; ?>" />
                </div>
              </div>
            </div>
	   
            <div class="col-sm-12">  
              <div class="form-group"> 
                <div class="form-line">  
                    <label for="berat_awal">Berat Awal (Gram) <?php echo form_error('berat_awal') ?></label>
                    <input type="text" class="form-control" name="berat_awal" id="berat_awal" placeholder="Berat Awal" value="<?php echo $berat_awal; ?>" />
                </div>
              </div>
            </div>
	   
            <div class="col-sm-12">  
              <div class="form-group"> 
                <div class="form-line">  
                    <label for="berat_akhir">Berat Akhir (Gram) <?php echo form_error('berat_akhir') ?></label>
                    <input type="text" class="form-control" name="berat_akhir" id="berat_akhir" placeholder="Berat Akhir" value="<?php echo $berat_akhir; ?>" />
                </div>
              </div>
            </div>
	   
            <div class="col-sm-12">  
              <div class="form-group"> 
                <div class="form-line">  
                    <label for="tanggal_masuk">Tanggal Masuk <?php echo form_error('tanggal_masuk') ?></label>
                    <input type="date" class="form-control" name="tanggal_masuk" id="tanggal_masuk" placeholder="Tanggal Masuk" value="<?php echo $tanggal_masuk; ?>" />
                </div>
              </div>
            </div>
	   
            <div class="col-sm-12">  
              <div class="form-group"> 
                <div class="form-line">  
                    <label for="tanggal_keluar">Tanggal Keluar <?php echo form_error('tanggal_keluar') ?></label>
                    <input type="date" class="form-control" name="tanggal_keluar" id="tanggal_keluar" placeholder="Tanggal Keluar" value="<?php echo $tanggal_keluar; ?>" />
                </div>
              </div>
            </div>
	   
            <br>
            <div class="card-footer text-left">
              <input type="hidden" name="id" value="<?php echo $id; ?>" />
              <button type="submit" class="btn btn-primary"><span class="fa fa-edit"></span><?php echo $button ?></button> 
              <a href="<?php echo site_url('ikan') ?>" class="btn btn-icon icon-left btn-success">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>