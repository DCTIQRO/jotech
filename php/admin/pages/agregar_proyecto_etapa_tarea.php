<?php

session_start();
require_once( 'esta.php');
$id_proyecto=$_SESSION['id_proyecto'];

extract($_POST);



$sql = "insert into proyectos_etapas_tareas (nombre,fecha_inicio,fecha_fin,id_etapa_fk,descripcion) values ('$nombre','$fecha_inicio','$fecha_fin','$etapa','$descripcion')";
$resultado_query = mysqli_query($esta, $sql);

//$renglon_pieza = mysqli_fetch_assoc($renglones_piezas);
 
    
    
        
    
    
    header("Location: http://jotech.dctimx.com/php/admin/index.php?page=project_milestones&id=$id_proyecto");
die();






?>