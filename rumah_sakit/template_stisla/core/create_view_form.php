<?php

$string="
<section class=\"content\">
    <div class=\"container-fluid\">
        <div class=\"block-header\">
            <h2>".ucwords(str_replace('_',' ',$table_name))."</h2>
        </div>

        <div class=\"row clearfix\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"card\">
                    <div class=\"header\">
                        <h2>Form ".ucwords(str_replace('_',' ',$table_name))."</h2>
                        <ul class=\"header-dropdown m-r--5\">
                            <li class=\"dropdown\">
                                <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                    role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
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
        
        <div class=\"body\">
            <form action=\"<?php echo \$action; ?>\" method=\"post\" class=\"form-horizontal\">";
        foreach ($non_pk as $row) {
            if ($row["data_type"] == 'text')
            {
            $string .= "\n\t 
            <div class=\"col-sm-12\">  
                <div class=\"form-group\"> 
                  <div class=\"form-line\">  
                      <label for=\"".$row["column_name"]."\">".label($row["column_name"])." <?php echo form_error('".$row["column_name"]."') ?></label>
                        <textarea class=\"form-control\" rows=\"3\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"".label($row["column_name"])."\"><?php echo $".$row["column_name"]."; ?></textarea>
                  </div>
                </div>
            </div>";
            } else if($row["data_type"] == 'varchar'){
            $string .= "\n\t   
            <div class=\"col-sm-12\">  
              <div class=\"form-group\"> 
                <div class=\"form-line\">  
                    <label for=\"".$row["column_name"]."\">".label($row["column_name"])." <?php echo form_error('".$row["column_name"]."') ?></label>
                    <input type=\"text\" class=\"form-control\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"".label($row["column_name"])."\" value=\"<?php echo $".$row["column_name"]."; ?>\" />
                </div>
              </div>
            </div>";
          } else if($row["data_type"] == 'date'){
            $string .= "\n\t   
            <div class=\"col-sm-12\">  
              <div class=\"form-group\"> 
                <div class=\"form-line\">  
                    <label for=\"".$row["column_name"]."\">".label($row["column_name"])." <?php echo form_error('".$row["column_name"]."') ?></label>
                    <input type=\"date\" class=\"form-control\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"".label($row["column_name"])."\" value=\"<?php echo $".$row["column_name"]."; ?>\" />
                </div>
              </div>
            </div>";
          } else if($row["data_type"] == 'time'){
            $string .= "\n\t   
            <div class=\"col-sm-12\">  
              <div class=\"form-group\"> 
                <div class=\"form-line\">  
                    <label for=\"".$row["column_name"]."\">".label($row["column_name"])." <?php echo form_error('".$row["column_name"]."') ?></label>
                    <input type=\"time\" class=\"form-control\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"".label($row["column_name"])."\" value=\"<?php echo $".$row["column_name"]."; ?>\" />
                </div>
              </div>
            </div>";
            } else if($row["data_type"] == 'enum'){
              $string .= "\n\t   
            <div class=\"col-sm-12\">  
              <div class=\"form-group\"> 
                <div class=\"form-line\">  
                    <label for=\"".$row["column_name"]."\">".label($row["column_name"])." <?php echo form_error('".$row["column_name"]."') ?></label>
                    <select class=\"form-control\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\">
                      <option value=\"<?php echo $".$row["column_name"]."; ?>\" selected>Select an option</option>
                    </select>
                </div>
              </div>
            </div>";
            } else if($row["data_type"] == 'double'){
              $string .= "\n\t   
            <div class=\"col-sm-12\">  
              <div class=\"form-group\"> 
                <div class=\"form-line\">  
                    <label for=\"".$row["column_name"]."\">".label($row["column_name"])." <?php echo form_error('".$row["column_name"]."') ?></label>
                    <input type=\"number\" class=\"form-control\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"".label($row["column_name"])."\" value=\"<?php echo $".$row["column_name"]."; ?>\" />
                </div>
              </div>
            </div>";     
        }
      }
        $string .= "\n\t   
            <br>
            <div class=\"card-footer text-left\">
              <input type=\"hidden\" name=\"".$pk."\" value=\"<?php echo $".$pk."; ?>\" />
              <button type=\"submit\" class=\"btn btn-primary\"><span class=\"fa fa-edit\"></span><?php echo \$button ?></button> 
              <a href=\"<?php echo site_url('".$c_url."') ?>\" class=\"btn btn-icon icon-left btn-success\">Cancel</a>";
      $string .= "
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>";

$hasil_view_form = createFile($string, $target."views/" . $v_form_file);

?>