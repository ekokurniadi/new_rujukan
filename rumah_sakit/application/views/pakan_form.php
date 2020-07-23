
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Pakan</h2>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Form Pakan</h2>
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
                    <label for="jumlah">Jumlah <?php echo form_error('jumlah') ?></label>
                    <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" value="<?php echo $jumlah; ?>" />
                </div>
              </div>
            </div>
	   
            <div class="col-sm-12">  
              <div class="form-group"> 
                <div class="form-line">  
                    <label for="nama_pakan">Nama Pakan <?php echo form_error('nama_pakan') ?></label>
                    <input type="text" class="form-control" name="nama_pakan" id="nama_pakan" placeholder="Nama Pakan" value="<?php echo $nama_pakan; ?>" />
                </div>
              </div>
            </div>
	   
            <br>
            <div class="card-footer text-left">
              <input type="hidden" name="id" value="<?php echo $id; ?>" />
              <button type="submit" class="btn btn-primary"><span class="fa fa-edit"></span><?php echo $button ?></button> 
              <a href="<?php echo site_url('pakan') ?>" class="btn btn-icon icon-left btn-success">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>