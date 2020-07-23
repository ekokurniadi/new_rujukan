
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Jadwal</h2>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Form Jadwal</h2>
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
                    <label for="tanggal">Tanggal <?php echo form_error('tanggal') ?></label>
                    <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
                </div>
              </div>
            </div>
	   
            <div class="col-sm-12">  
              <div class="form-group"> 
                <div class="form-line">  
                    <label for="jam">Jam <?php echo form_error('jam') ?></label>
                    <input type="time" class="form-control" name="jam" id="jam" placeholder="Jam" value="<?php echo $jam; ?>" />
                </div>
              </div>
            </div>
	   
            <div class="col-sm-12">  
              <div class="form-group"> 
                <div class="form-line">  
                    <label for="status">Status <?php echo form_error('status') ?></label>
                  <select name="status" id="status" class="form-control">
                    <option value="<?=$status?>" selected>Select an Option</option>
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
                  </select>
                 </div>
              </div>
            </div>
	   
            <br>
            <div class="card-footer text-left">
              <input type="hidden" name="id" value="<?php echo $id; ?>" />
              <button type="submit" class="btn btn-primary"><span class="fa fa-edit"></span><?php echo $button ?></button> 
              <a href="<?php echo site_url('jadwal') ?>" class="btn btn-icon icon-left btn-success">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>