<?php

require_once('esta.php');

extract($_POST);



$sql = "insert into proyectos_etapas (nombre,fecha_entrega,prioridad,id_proyecto_fk) values ('$nombre','$fecha_entrega','$prioridad','$id_proyecto')";
$resultado_query = mysqli_query($esta, $sql);

//$renglon_pieza = mysqli_fetch_assoc($renglones_piezas);
 
    
    
        
    
    
    header("Location: http://jotech.dctimx.com/php/admin/index.php?page=project_milestones&id=$id_proyecto");
die();






?>