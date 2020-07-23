
<section class="content">
<div class="container-fluid">
    <div class="block-header">
        <h2>User</h2>
    </div>

    <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                <?php echo anchor(site_url('user/create'),'<i class="fa fa-plus"></i> Add New', 'class="btn btn-icon icon-left btn-primary"'); ?>
                    <small><?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?></small>
                </h2>
                <ul class="header-dropdown m-r--5">
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
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


        <div class="body table-responsive">
        <table class="table table-bordered table-striped table-hover" id="example1">
        <thead>
        <tr>
            <th>No</th>
		<th>Nama</th>
		<th>Username</th>
		<th>Password</th>
		<th>Role</th>
		<th>Foto</th>
		<th>Action</th>
      </tr>
      </thead>
      <tbody><?php
      foreach ($user_data as $user)
      {
          ?>
            <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $user->nama ?></td>
			<td><?php echo $user->username ?></td>
			<td><?php echo $user->password ?></td>
			<td><?php echo $user->role ?></td>
			<td><img src="<?php echo base_url().'images/'.$user->foto?>" alt="" width="100px;"></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('user/read/'.$user->id),'<i class="material-icons">view_column</i>',array('title'=>'detail','class'=>'btn btn-icon icon-left btn-light')); 
				echo '  '; 
				echo anchor(site_url('user/update/'.$user->id),'<i class="material-icons">loyalty</i>',array('title'=>'edit','class'=>'btn btn-icon icon-left btn-warning')); 
				echo '  '; 
				echo anchor(site_url('user/delete/'.$user->id),'<i class="material-icons">delete_sweep</i>','title="delete" class="btn btn-icon icon-left btn-danger" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
            <?php
        }
        ?>
      </tbody>
      </table>
    </div>
</div>
</div>
</div>
	     
</div>
</section>
      