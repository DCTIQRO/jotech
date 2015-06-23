<?php

session_start();
require_once( 'esta.php');
$id_proyecto=$_SESSION['id_proyecto'];
$id_user=$SESSION['id_usuario_jotech'];

extract($_POST);



$sql = "insert into proyectos_comentarios (comentario,id_proyecto_fk,id_usuario_fk,tipo) values ('$comentario','$proyecto','$id_user','1')";

//echo $sql;

$resultado_query = mysqli_query($esta, $sql);

//$renglon_pieza = mysqli_fetch_assoc($renglones_piezas);
 
    
    
        
    
    
    header("Location: http://jotech.dctimx.com/php/admin/index.php?page=project_milestones&id=$proyecto");
die();






?>