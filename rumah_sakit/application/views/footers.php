<!-- Jquery Core Js -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="<?php echo base_url()?>plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="<?php echo base_url()?>plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?php echo base_url()?>plugins/node-waves/waves.js"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="<?php echo base_url()?>plugins/jquery-countto/jquery.countTo.js"></script>

<!-- Morris Plugin Js -->
<script src="<?php echo base_url()?>plugins/raphael/raphael.min.js"></script>
<script src="<?php echo base_url()?>plugins/morrisjs/morris.js"></script>

<!-- ChartJs -->
<script src="<?php echo base_url()?>plugins/chartjs/Chart.bundle.js"></script>

<!-- Flot Charts Plugin Js -->
<script src="<?php echo base_url()?>plugins/flot-charts/jquery.flot.js"></script>
<script src="<?php echo base_url()?>plugins/flot-charts/jquery.flot.resize.js"></script>
<script src="<?php echo base_url()?>plugins/flot-charts/jquery.flot.pie.js"></script>
<script src="<?php echo base_url()?>plugins/flot-charts/jquery.flot.categories.js"></script>
<script src="<?php echo base_url()?>plugins/flot-charts/jquery.flot.time.js"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="<?php echo base_url()?>plugins/jquery-sparkline/jquery.sparkline.js"></script>

<!-- Custom Js -->
<script src="<?php echo base_url()?>js/admin.js"></script>
<script src="<?php echo base_url()?>js/pages/index.js"></script>

 <!-- Moment Plugin Js -->
 <script src="<?php echo base_url()?>plugins/momentjs/moment.js"></script>

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="<?php echo base_url()?>plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

<!-- Bootstrap Datepicker Plugin Js -->
<script src="<?php echo base_url()?>plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="<?php echo base_url()?>plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="<?php echo base_url()?>plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    $(document).ready( function () {
        $('#example1').DataTable({
        // "paging":true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth":false,
        "scrollX":true,
        "scrollY":true,
        "responsive":true,
        "lengthMenu": [[10, 25, 50,75,100, -1], [10, 25, 50,75,100, "All"]],
        "order": []
        });
        
      $('#example1').on( 'keyup', function () {
      table.search(this.value).draw();
    });
  });
//   CKEDITOR.replace( 'alamat' );
</script>
<script>
  // In your Javascript (external .js resource or <script> tag)
  $(document).ready(function() {
    // load select2
    $('#jenis_kelamin').select2(
      {
      width: 'resolve',
      placeholder:"Select an option"
    }
    );
    $('#tahun').select2(
      {
      width: 'resolve',
      placeholder:"Select an option"
    }
    );
    $('#type_motor').select2(
      {
      width: 'resolve',
      placeholder:"Select an option"
    }
    );

  });
  </script>
  

</body>

</html>
