
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Surat Bpjs</h2>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Form Surat Bpjs</h2>
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
                    <label for="no_surat">No Surat <?php echo form_error('no_surat') ?></label>
                    <input type="text" class="form-control" name="no_surat" id="no_surat" placeholder="No Surat" value="<?php echo $no_surat; ?>" />
                </div>
              </div>
            </div>
	   
            <div class="col-sm-12">  
              <div class="form-group"> 
                <div class="form-line">  
                    <label for="tanggal_surat">Tanggal Surat <?php echo form_error('tanggal_surat') ?></label>
                    <input type="date" class="form-control" name="tanggal_surat" id="tanggal_surat" placeholder="Tanggal Surat" value="<?php echo $tanggal_surat; ?>" />
                </div>
              </div>
            </div>
	   
            <div class="col-sm-12">  
              <div class="form-group"> 
                <div class="form-line">  
                    <label for="kode_pasien">Kode Pasien <?php echo form_error('kode_pasien') ?></label>
                    <input type="text" class="form-control" name="kode_pasien" id="kode_pasien" placeholder="Kode Pasien" value="<?php echo $kode_pasien; ?>" />
                </div>
              </div>
            </div>
	   
            <div class="col-sm-12">  
              <div class="form-group"> 
                <div class="form-line">  
                    <label for="nama_pasien">Nama Pasien <?php echo form_error('nama_pasien') ?></label>
                    <input type="text" class="form-control" name="nama_pasien" id="nama_pasien" placeholder="Nama Pasien" value="<?php echo $nama_pasien; ?>" />
                </div>
              </div>
            </div>
	   
            <div class="col-sm-12">  
              <div class="form-group"> 
                <div class="form-line">  
                    <label for="jenis_kelamin">Jenis Kelamin <?php echo form_error('jenis_kelamin') ?></label>
                    <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis Kelamin" value="<?php echo $jenis_kelamin; ?>" />
                </div>
              </div>
            </div>
	 
            <div class="col-sm-12">  
                <div class="form-group"> 
                  <div class="form-line">  
                      <label for="alamat">Alamat <?php echo form_error('alamat') ?></label>
                        <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea>
                  </div>
                </div>
            </div>
	   
            <div class="col-sm-12">  
              <div class="form-group"> 
                <div class="form-line">  
                    <label for="no_kartu">No Kartu <?php echo form_error('no_kartu') ?></label>
                    <input type="text" class="form-control" name="no_kartu" id="no_kartu" placeholder="No Kartu" value="<?php echo $no_kartu; ?>" />
                </div>
              </div>
            </div>
	   
            <div class="col-sm-12">  
              <div class="form-group"> 
                <div class="form-line">  
                    <label for="kode_rumah_sakit">Kode Rumah Sakit <?php echo form_error('kode_rumah_sakit') ?></label>
                    <input type="text" class="form-control" name="kode_rumah_sakit" id="kode_rumah_sakit" placeholder="Kode Rumah Sakit" value="<?php echo $kode_rumah_sakit; ?>" />
                </div>
              </div>
            </div>
	   
            <div class="col-sm-12">  
              <div class="form-group"> 
                <div class="form-line">  
                    <label for="nama_rumah_sakit">Nama Rumah Sakit <?php echo form_error('nama_rumah_sakit') ?></label>
                    <input type="text" class="form-control" name="nama_rumah_sakit" id="nama_rumah_sakit" placeholder="Nama Rumah Sakit" value="<?php echo $nama_rumah_sakit; ?>" />
                </div>
              </div>
            </div>
	   
            <div class="col-sm-12">  
              <div class="form-group"> 
                <div class="form-line">  
                    <label for="poli">Poli <?php echo form_error('poli') ?></label>
                    <input type="text" class="form-control" name="poli" id="poli" placeholder="Poli" value="<?php echo $poli; ?>" />
                </div>
              </div>
            </div>
	   
            <div class="col-sm-12">  
              <div class="form-group"> 
                <div class="form-line">  
                    <label for="kode_pegawai">Kode Pegawai <?php echo form_error('kode_pegawai') ?></label>
                    <input type="text" class="form-control" name="kode_pegawai" id="kode_pegawai" placeholder="Kode Pegawai" value="<?php echo $kode_pegawai; ?>" />
                </div>
              </div>
            </div>
	   
            <div class="col-sm-12">  
              <div class="form-group"> 
                <div class="form-line">  
                    <label for="nama_pegawai">Nama Pegawai <?php echo form_error('nama_pegawai') ?></label>
                    <input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai" placeholder="Nama Pegawai" value="<?php echo $nama_pegawai; ?>" />
                </div>
              </div>
            </div>
            
            <div class="col-sm-12">  
              <div class="form-group"> 
                <div class="form-line">  
                    <label for="status">Status <?php echo form_error('status') ?></label>
                    <select class="form-control" name="status" id="status">
                      <option value="Terima">Terima</option>
                      <option value="Tolak">Tolak</option>
                    </select>
                </div>
              </div>
            </div>
	 
            <div class="col-sm-12">  
                <div class="form-group"> 
                  <div class="form-line">  
                      <label for="alasan">Alasan <?php echo form_error('alasan') ?></label>
                        <textarea class="form-control" rows="3" name="alasan" id="alasan" placeholder="Alasan"><?php echo $alasan; ?></textarea>
                  </div>
                </div>
            </div>
	   
            <br>
            <div class="card-footer text-left">
              <input type="hidden" name="id" value="<?php echo $id; ?>" />
              <button type="submit" class="btn btn-primary"><span class="fa fa-edit"></span><?php echo $button ?></button> 
              <a href="<?php echo site_url('surat_bpjs') ?>" class="btn btn-icon icon-left btn-success">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>