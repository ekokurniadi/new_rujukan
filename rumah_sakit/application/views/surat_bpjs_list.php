
<section class="content">
<div class="container-fluid">
    <div class="block-header">
        <h2>Surat bpjs</h2>
    </div>

    <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                <?php echo anchor(site_url('surat_bpjs/create'),'<i class="fa fa-plus"></i> Add New', 'class="btn btn-icon icon-left btn-primary"'); ?>
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
		<th>No Surat</th>
		<th>Tanggal Surat</th>
		<th>Kode Pasien</th>
		<th>Nama Pasien</th>
		<th>Umur</th>
		<th>Jenis Kelamin</th>
		<th>Alamat</th>
		<th>No Kartu</th>
		<th>Kode Rumah Sakit</th>
		<th>Nama Rumah Sakit</th>
		<th>Poli</th>
		<th>Kode Pegawai</th>
		<th>Nama Pegawai</th>
		<th>Action</th>
      </tr>
      </thead>
      <tbody><?php
      foreach ($surat_bpjs_data as $surat_bpjs)
      {
          ?>
            <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $surat_bpjs->no_surat ?></td>
			<td><?php echo $surat_bpjs->tanggal_surat ?></td>
			<td><?php echo $surat_bpjs->kode_pasien ?></td>
			<td><?php echo $surat_bpjs->nama_pasien ?></td>
			<td><?php echo $surat_bpjs->umur ?></td>
			<td><?php echo $surat_bpjs->jenis_kelamin ?></td>
			<td><?php echo $surat_bpjs->alamat ?></td>
			<td><?php echo $surat_bpjs->no_kartu ?></td>
			<td><?php echo $surat_bpjs->kode_rumah_sakit ?></td>
			<td><?php echo $surat_bpjs->nama_rumah_sakit ?></td>
			<td><?php echo $surat_bpjs->poli ?></td>
			<td><?php echo $surat_bpjs->kode_pegawai ?></td>
			<td><?php echo $surat_bpjs->nama_pegawai ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('surat_bpjs/read/'.$surat_bpjs->id),'<i class="material-icons">view_column</i>',array('title'=>'detail','class'=>'btn btn-icon icon-left btn-light')); 
				echo '  '; 
				echo anchor(site_url('surat_bpjs/update/'.$surat_bpjs->id),'<i class="material-icons">loyalty</i>',array('title'=>'edit','class'=>'btn btn-icon icon-left btn-warning')); 
				echo '  '; 
				echo anchor(site_url('surat_bpjs/delete/'.$surat_bpjs->id),'<i class="material-icons">delete_sweep</i>','title="delete" class="btn btn-icon icon-left btn-danger" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
      