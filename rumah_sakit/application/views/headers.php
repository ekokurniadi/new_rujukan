<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>DASHBOARD</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url()?>plugins/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
        type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Select 2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
 
    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url()?>plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url()?>plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url()?>plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="<?php echo base_url()?>plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"
        rel="stylesheet" />
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

    <!-- Bootstrap DatePicker Css -->
    <link href="<?php echo base_url()?>plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="<?php echo base_url()?>plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="<?php echo base_url()?>plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?php echo base_url()?>plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url()?>css/themes/all-themes.css" rel="stylesheet" />
   
    <!-- Datatables -->
    <link href="<?php echo base_url()?>plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
</head>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<body class="theme-pink" onload="realtimes();">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
          
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html"><span>Rumah Sakit Rujukan</span></a>
             
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i
                                class="material-icons">search</i></a></li>
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i
                                class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url().'images/user.png'?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo strtoupper($_SESSION['username']);?></div>
                    <div class="email"><?php echo strtoupper($_SESSION['nama_rumah_sakit']);?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="<?php echo base_url('dashboard')?>">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <?php if($_SESSION['terima_bpjs']=='YA'){?>
                    <li>
                        <a href="<?php echo base_url('surat_umum')?>"><span><p id="umum"></p></span>
                            <i class="material-icons">notifications</i>
                          
                            <span>Rujukan UMUM</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('surat_bpjs')?>"><span><p id="bpjs"></p></span>
                            <i class="material-icons">notifications</i>
                          
                            <span>Rujukan BPJS</span>
                        </a>
                    </li>
                    <?php } else { ?>
                        <li>
                        <a href="<?php echo base_url('surat_umum')?>"><span><p id="umum"></p></span>
                            <i class="material-icons">notifications</i>
                            <span>Rujukan UMUM</span>
                        </a>
                    </li>
                    <?php } ?>
                    <li>
                        <a href="<?php echo base_url('auth/logout')?>">
                            <i class="material-icons">lock</i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
          
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
             Copyright &copy;<?php echo date('Y')?> <a href="javascript:void(0);">Rumah Sakit Rujukan</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
    </section>
<script type="text/javascript">
    function realtimes(){
        setInterval(() => {
            realt();
            realt2();
        }, 500);
    }
  function realt(){
            $.ajax({      
                method: "post",      
                url: "<?php echo base_url('dashboard/cek_umum')?>",
                dataType:'json',  
                data: {} 
            })
                .done(function(hasilajax) {   
                   var jm = document.getElementById('umum');
                   jm.innerHTML = hasilajax.total;    
                });
            }
            function realt2(){
            $.ajax({      
                method: "post",      
                url: "<?php echo base_url('dashboard/cek_bpjs')?>",
                dataType:'json',  
                data: {} 
            })
                .done(function(hasilajax2) {   
                   var jm = document.getElementById('bpjs');
                   jm.innerHTML = hasilajax2.total_bpjs;    
                });
            }
    </script>
