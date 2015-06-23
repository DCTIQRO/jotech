<?php

session_start();
require_once( 'esta.php');
$id_proyecto=$_SESSION['id_proyecto'];

extract($_POST);



$sql = "insert into proyectos_tareas_checklist (id_proyecto_tarea_fk,nombre) values ('$id_tarea','$nombre')";
$resultado_query = mysqli_query($esta, $sql);


//echo $sql;
//$renglon_pieza = mysqli_fetch_assoc($renglones_piezas);
 
    
    
        
    
    
    header("Location: http://jotech.dctimx.com/php/admin/index.php?page=project_tasks&id_tarea=$id_tarea");
die();






?>