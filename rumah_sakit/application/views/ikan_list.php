
<section class="content">
<div class="container-fluid">
    <div class="block-header">
        <h2>Ikan</h2>
    </div>

    <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                <?php echo anchor(site_url('ikan/create'),'<i class="fa fa-plus"></i> Add New', 'class="btn btn-icon icon-left btn-primary"'); ?>
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
		<th>Nama Ikan</th>
		<th>Berat Awal</th>
		<th>Berat Akhir</th>
		<th>Tanggal Masuk</th>
		<th>Tanggal Keluar</th>
		<th>Action</th>
      </tr>
      </thead>
      <tbody><?php
      foreach ($ikan_data as $ikan)
      {
          ?>
            <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $ikan->nama_ikan ?></td>
			<td><?php echo $ikan->berat_awal ?></td>
			<td><?php echo $ikan->berat_akhir ?></td>
			<td><?php echo tgl_indo($ikan->tanggal_masuk) ?></td>
			<td><?php echo tgl_indo($ikan->tanggal_keluar) ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('ikan/read/'.$ikan->id),'<i class="material-icons">view_column</i>',array('title'=>'detail','class'=>'btn btn-icon icon-left btn-light')); 
				echo '  '; 
				echo anchor(site_url('ikan/update/'.$ikan->id),'<i class="material-icons">loyalty</i>',array('title'=>'edit','class'=>'btn btn-icon icon-left btn-warning')); 
				echo '  '; 
				echo anchor(site_url('ikan/delete/'.$ikan->id),'<i class="material-icons">delete_sweep</i>','title="delete" class="btn btn-icon icon-left btn-danger" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
      