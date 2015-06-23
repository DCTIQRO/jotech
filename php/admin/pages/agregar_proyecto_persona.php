<?php

session_start();
require_once( 'esta.php');
$id_proyecto=$_SESSION['id_proyecto'];

extract($_POST);



$sql = "insert into proyectos_usuarios (id_proyecto_fk,id_usuario_fk) values ('$id_proyecto','$usuario')";
$resultado_query = mysqli_query($esta, $sql);


//echo $sql;
//$renglon_pieza = mysqli_fetch_assoc($renglones_piezas);
 
    
    
        
    
    
    header("Location: http://jotech.dctimx.com/php/admin/index.php?page=project_milestones&id=$id_proyecto");
die();






?>