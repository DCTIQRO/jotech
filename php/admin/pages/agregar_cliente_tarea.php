<?php

session_start();
require_once( 'esta.php');
$id_proyecto=$_SESSION['id_proyecto'];

extract($_POST);



$sql = "insert into clientes_tareas (nombre,descripcion,fecha_inicio,fecha_fin,id_cliente_fk) values ('$nombre','$descripcion','$fecha_inicio','$fecha_fin','$cliente')";
$resultado_query = mysqli_query($esta, $sql);

//echo $sql;
//$renglon_pieza = mysqli_fetch_assoc($renglones_piezas);
 
    
    
        
    
    
    header("Location: http://jotech.dctimx.com/php/admin/index.php?page=cliente&id=$cliente");
die();






?>