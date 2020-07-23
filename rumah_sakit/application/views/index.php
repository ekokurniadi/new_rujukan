<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<body onload="realtimes();cek_pakan();">
    
</body>
  
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
                            <i class="material-icons">mood</i>
                        </div>
                        <div class="content">
                            <div class="text">Pengguna</div>
                            <div class="number"><?php echo $user->num_rows();?></div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-red">
                            <i class="material-icons">view_list</i>
                        </div>
                        <div class="content">
                            <div class="text">Jumlah Pakan</div>
                            <div class="number" ><p id="jumlah"></p> gr</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-light-blue">
                            <i class="material-icons">alarm</i>
                        </div>
                        <div class="content">
                            <div class="text">Pemberian Pakan Terakhir<br>Tanggal : <?=tgl_indo($schedule['tanggal'])?><br>Pukul : <?=$schedule['jam']?> WIB</div>
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-deep-purple">
                            <i class="material-icons">all_inclusive</i>
                        </div>
                        <div class="content">
                            <div class="text">Pemberian Pakan Berikutnya</div>
                            <div class="number">07:00 AM</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Zoom Effect -->
            <p id="ahak"></p>
           <p id="uhuk"></p>
            <!-- #END# Hover Zoom Effect -->
            <div class="row clearfix">
                <!-- Bar Chart -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                   
                            <h2>Grafik Jumlah Pakan Tersedia</h2>
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
                        <div class="body" style="margin-left:-20px;">
                                <div id="chart_div" style="width: 400px; height: 300px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Bar Chart -->
            </div>
        </div>
    </section>
   
<script type="text/javascript">
    function realtimes(){
        setInterval(() => {
            realt();
            drawChart();
        }, 500);
    }
  function realt(){
            $.ajax({      
                method: "post",      
                url: "<?php echo base_url('dashboard/api_pakan')?>",
                dataType:'json',  
                data: {} 
            })
                .done(function(hasilajax) {   
                   var jm = document.getElementById('jumlah');
                   jm.innerHTML = hasilajax.jumlah + ' gram';    
                });
            }
    </script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
      google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var jsonData = $.ajax({
          url: "<?php echo base_url('dashboard/api_pakan')?>",
          dataType: "json",
          async: false
          }).responseText;

          var real =JSON.parse(jsonData);
          var nilai =parseInt(real['jumlah']);
        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Jumlah Pakan',nilai]
        ]);

        var options = {
          width: 600, height: 300,
          redFrom: 0, redTo: 10,
          yellowFrom:10, yellowTo: 20,
          greenFrom:75, greenTo: 100,
          minorTicks: 5
          
        };
        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));
        chart.draw(data, options);
        setInterval(function() {
            data.setValue(0, 1000)
          chart.draw(data, options);
        }, 100);   
      }
    </script>
    