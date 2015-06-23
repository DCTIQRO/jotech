<?php

session_start();
require_once( 'esta.php');
$id_proyecto=$_SESSION['id_proyecto'];

extract($_POST);



$sql = "insert into proyectos_comentarios (comentario,id_proyecto_fk) values ('$comentario','$proyecto')";

//echo $sql;

$resultado_query = mysqli_query($esta, $sql);

//$renglon_pieza = mysqli_fetch_assoc($renglones_piezas);
 
    
    
        
    
    
    header("Location: http://jotech.dctimx.com/php/admin/index.php?page=project_milestones&id=$proyecto");
die();






?>