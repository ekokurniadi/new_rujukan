<?php

$string ="
<section class=\"content\">
<div class=\"container-fluid\">
    <div class=\"block-header\">
        <h2>".ucfirst(str_replace('_',' ',$table_name))."</h2>
    </div>

    <div class=\"row clearfix\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"card\">
            <div class=\"header\">
                <h2>
                <?php echo anchor(site_url('".$c_url."/create'),'<i class=\"fa fa-plus\"></i> Add New', 'class=\"btn btn-icon icon-left btn-primary\"'); ?>
                    <small><?php echo \$this->session->userdata('message') <> '' ? \$this->session->userdata('message') : ''; ?></small>
                </h2>
                <ul class=\"header-dropdown m-r--5\">
                <li class=\"dropdown\">
                    <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"material-icons\">more_vert</i>
                    </a>
                    <ul class=\"dropdown-menu pull-right\">
                        <li><a href=\"javascript:void(0);\">Action</a></li>
                        <li><a href=\"javascript:void(0);\">Another action</a></li>
                        <li><a href=\"javascript:void(0);\">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>


        <div class=\"body table-responsive\">
        <table class=\"table table-bordered table-striped table-hover\" id=\"example1\">
        <thead>
        <tr>
            <th>No</th>";
foreach ($non_pk as $row) {
$string .= "\n\t\t<th>" . label($row['column_name']) . "</th>";
}
$string .= "\n\t\t<th>Action</th>
      </tr>
      </thead>
      <tbody>";
$string .= "<?php
      foreach ($" . $c_url . "_data as \$$c_url)
      {
          ?>
            <tr>";

$string .= "\n\t\t\t<td width=\"80px\"><?php echo ++\$start ?></td>";
foreach ($non_pk as $row) {
$string .= "\n\t\t\t<td><?php echo $" . $c_url ."->". $row['column_name'] . " ?></td>";
}


$string .= "\n\t\t\t<td style=\"text-align:center\" width=\"200px\">"
    . "\n\t\t\t\t<?php "
    . "\n\t\t\t\techo anchor(site_url('".$c_url."/read/'.$".$c_url."->".$pk."),'<i class=\"material-icons\">view_column</i>',array('title'=>'detail','class'=>'btn btn-icon icon-left btn-light')); "
    . "\n\t\t\t\techo '  '; "
    . "\n\t\t\t\techo anchor(site_url('".$c_url."/update/'.$".$c_url."->".$pk."),'<i class=\"material-icons\">loyalty</i>',array('title'=>'edit','class'=>'btn btn-icon icon-left btn-warning')); "
    . "\n\t\t\t\techo '  '; "
    . "\n\t\t\t\techo anchor(site_url('".$c_url."/delete/'.$".$c_url."->".$pk."),'<i class=\"material-icons\">delete_sweep</i>','title=\"delete\" class=\"btn btn-icon icon-left btn-danger\" onclick=\"javasciprt: return confirm(\\'Are You Sure ?\\')\"'); "
    . "\n\t\t\t\t?>"
    . "\n\t\t\t</td>";

$string .=  "\n\t\t</tr>
            <?php
        }
        ?>
      </tbody>
      </table>
    </div>
</div>
</div>
</div>";                
$string .= "\n\t     
</div>
</section>
      ";
$hasil_view_list = createFile($string, $target."views/" . $v_list_file);

?>