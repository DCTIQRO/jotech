<?php

require_once('esta.php');

extract($_GET);



/*$sql = "select * from clientes where id=$id";
$renglones_clientes = mysqli_query($esta, $sql);

    $renglon_cliente = mysqli_fetch_assoc($renglones_clientes);
  */


?>
<div class="innerLR">
    <div class="innerT">
        <div class="pull-right">
            <a class="btn btn-inverse"><i class="fa fa-envelope"></i> Send Message</a>
            <a class="btn btn-default filled"><i class="fa fa-download"></i></a>
        </div>
        <div class="media">
            
            <div class="media-body innerAll half">
                <h3>
                    <a href="#" class="text-regular "></a> <span class="lead text-muted"></span> 
                </h3>
                
            </div>
        </div>
    </div>
    <div class="widget widget-tabs-content widget-tabs-responsive widget-none">
        <?php
$path = $module . DS . "pages" . DS . $page . DS . $section . ".php";
include $path;
?>
        </div>
    </div>