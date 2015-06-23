<?php

session_start();

$id_usuario=$_SESSION['id_usuario_jotech'];


require_once('esta.php');

extract($_GET);



$sql = "select * from usuarios where id=$id_usuario";
$renglones_usuarios = mysqli_query($esta, $sql);

$renglon_usuario = mysqli_fetch_assoc($renglones_usuarios);
  

?>
<div class="innerLR">
    <div class="innerT">
        <div class="pull-right">
            <a class="btn btn-inverse"><i class="fa fa-envelope"></i> Enviar mensaje</a>
            <a class="btn btn-default filled"><i class="fa fa-download"></i></a>
        </div>
        <div class="media">
            <img src="./imagenes/<?php echo $renglon_usuario['imagen'];?>" height="90px" width="90px" class="pull-left thumbnail" alt="Profile" />
            <div class="media-body innerAll half">
                <h3>
                    <a href="#" class="text-regular "><?php echo $renglon_usuario['nombre'];?></a> <span class="lead text-muted"><?php echo $renglon_usuario['correo'];?></span> 
                </h3>
                <a class="btn btn-default filled text-muted-dark" href="/php/admin/pages/cerrar_sesion.php">Salir <i class="fa fa-sign-out fa-fw"></i></a>
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