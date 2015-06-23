<?php

session_start();
require_once( 'esta.php');
$id_user=$_SESSION['id_usuario_jotech'];

extract($_POST);



$sql = "insert into proyectos_subcomentarios (id_proyecto_comentario,id_usuario,subcomentario) values ('$id_comentario','$id_user','$subcomentario')";

//echo $sql;

$resultado_query = mysqli_query($esta, $sql);

//$renglon_pieza = mysqli_fetch_assoc($renglones_piezas);
 
    
    
        
    
    
    header("Location: http://jotech.dctimx.com/php/admin/index.php?page=project_milestones&id=$proyecto");
die();






?>