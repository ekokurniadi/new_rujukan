
  
    <section class="content">
        <div class="container-fluid">
            <!-- Hover Zoom Effect -->
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-pink">
                            <i class="material-icons">hearing</i>
                        </div>
                        <div class="content">
                            <div class="text">AT</div>
                            <div class="number">15</div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-red">
                            <i class="material-icons">motorcycle</i>
                        </div>
                        <div class="content">
                            <div class="text">CUB</div>
                            <div class="number">92%</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-light-blue">
                            <i class="material-icons">directions_bike</i>
                        </div>
                        <div class="content">
                            <div class="text">SPORT</div>
                            <div class="number">07:00 AM</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-deep-purple">
                            <i class="material-icons">all_inclusive</i>
                        </div>
                        <div class="content">
                            <div class="text">ALL TYPE</div>
                            <div class="number">Turkey</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Zoom Effect -->
            <div class="row clearfix">
                <!-- Bar Chart -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Pencarian</h2>
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
                        <div class="body">
                            <div class="row clearfix">
                            <form action="<?php echo base_url('welcome/tes')?>" method="POST">
                                <div class="col-md-2">
                                    <label for="">Part Number</label>
                                    <input type="text" name="part_num" placeholder="Part Number" class="form-control">
                                </div>
                                <div class="col-md-2">
                                    <label for="">Deskripsi</label>
                                    <input type="text" name="desc" placeholder="Deskripsi" class="form-control">
                                </div>
                                <div class="col-md-2">
                                    <label for="">Bahasa Bengkel</label>
                                    <input type="text" name="bahasa_bengkel" placeholder="Bahasa Bengkel" class="form-control">
                                </div>
                                <div class="col-md-2">
                                    <label for="">Harga</label>
                                    <input type="text" name="harga" placeholder="Harga" class="form-control">
                                </div>
                                <div class="col-md-2">
                                    <label for="">Type Motor</label>
                                 <select name="type_motor" id="type_motor" class="form-control">
                                    <option value="Revo X" selected>Revo X</option>
                                 </select>
                                </div>
                                <div class="col-sm-2">
                                <label for="">Tahun</label>
                                <select name="tahun" id="tahun" class="form-control">
                                <?php 
                                $t=date('Y')-50;
                                for($i;$i<$t+100;$i++){
                                    $sel =$i ==date('Y')?'selected="selected"':'';
                                    echo '<option value ="'.$i.'"'.$sel.'>'.$i.'</option>';  
                                }
                                ?>
                                </select>
                                </div> 
                            </div>
                            <div class="row clearfix">
                            <div class="col-md-2">
                                    <button type="submit" class="btn bg-pink waves-effect"><i class="material-icons">search</i><span class="icon-name">Search</span></button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- #END# Bar Chart -->
            </div>
        </div>
    </section>