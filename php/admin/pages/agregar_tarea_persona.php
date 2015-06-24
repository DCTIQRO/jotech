<?php

session_start();
require_once( 'esta.php');
$id_proyecto=$_SESSION['id_proyecto'];

extract($_POST);



$sql = "insert into tareas_usuarios (id_tarea_fk,id_usuario_fk,tipo) values ('$id_tarea','$usuario','$tipo')";
$resultado_query = mysqli_query($esta, $sql);


//echo $sql;
//$renglon_pieza = mysqli_fetch_assoc($renglones_piezas);
 
    
    
        
    
    if($tipo==0)
    header("Location: http://jotech.dctimx.com/php/admin/index.php?page=project_tasks&id_tarea=$id_tarea");
else
    header("Location: http://jotech.dctimx.com/php/admin/index.php?page=project_tasks&id_tarea=$id_tarea&cliente=1");

die();






?>