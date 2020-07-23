
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>User</h2>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Form User</h2>
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
            <form action="<?php echo $action; ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
	   
            <div class="col-sm-12">  
              <div class="form-group"> 
                <div class="form-line">  
                    <label for="nama">Nama <?php echo form_error('nama') ?></label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
                </div>
              </div>
            </div>
	   
            <div class="col-sm-12">  
              <div class="form-group"> 
                <div class="form-line">  
                    <label for="username">Username <?php echo form_error('username') ?></label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
                </div>
              </div>
            </div>
	   
            <div class="col-sm-12">  
              <div class="form-group"> 
                <div class="form-line">  
                    <label for="password">Password <?php echo form_error('password') ?></label>
                    <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
                </div>
              </div>
            </div>
	   
            <div class="col-sm-12">  
              <div class="form-group"> 
                <div class="form-line">  
                    <label for="role">Role <?php echo form_error('role') ?></label>
                    <select name="role" id="role" class="form-control">
                    <option value="Admin" selected>Admin</option>
                    </select>
                </div>
              </div>
            </div>
	   
            <div class="col-sm-12">  
              <div class="form-group"> 
                <div class="form-line">  
                    <label for="foto">Foto <?php echo form_error('foto') ?></label>
                    <input type="file" class="form-control" name="foto" id="foto" placeholder="Foto" value="<?php echo $foto; ?>" />
                </div>
              </div>
            </div>
	   
            <br>
            <div class="card-footer text-left">
              <input type="hidden" name="id" value="<?php echo $id; ?>" />
              <button type="submit" class="btn btn-primary"><span class="fa fa-edit"></span><?php echo $button ?></button> 
              <a href="<?php echo site_url('user') ?>" class="btn btn-icon icon-left btn-success">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>