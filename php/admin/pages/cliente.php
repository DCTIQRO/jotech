<?php

require_once('esta.php');

extract($_GET);



$sql = "select * from clientes where id=$id";
$renglones_clientes = mysqli_query($esta, $sql);

    $renglon_cliente = mysqli_fetch_assoc($renglones_clientes);
  


?>
<div class="innerLR">
    <div class="innerT">
        <div class="pull-right">
            <a class="btn btn-inverse"><i class="fa fa-envelope"></i> Send Message</a>
            <a class="btn btn-default filled"><i class="fa fa-download"></i></a>
        </div>
        <div class="media">
            <img src="../assets/images/people/80/22.jpg" class="pull-left thumbnail" alt="Profile" />
            <div class="media-body innerAll half">
                <h3>
                    <a href="#" class="text-regular "><?php echo $renglon_cliente['nombre'];?></a> <span class="lead text-muted"><?php echo $renglon_cliente['correo'];?></span> 
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