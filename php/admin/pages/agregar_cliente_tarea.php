<?php

session_start();
require_once( 'esta.php');
$id_proyecto=$_SESSION['id_proyecto'];

extract($_POST);

$usuarios=explode(",",$tags);

$sql = "insert into clientes_tareas (nombre,descripcion,fecha_inicio,fecha_fin,id_cliente_fk) values ('$nombre','$descripcion','$fecha_inicio','$fecha_fin','$cliente')";
$resultado_query = mysqli_query($esta, $sql);



$sql="select * from clientes_tareas order by id desc limit 1";
$renglones_tareas = mysqli_query($esta, $sql);
$renglon_tarea = mysqli_fetch_assoc($renglones_tareas);
    
    $id_tarea=$renglon_tarea['id'];
    
    for($q=0;$q<count($usuarios);$q++){

        $sql="select * from usuarios where nombre ='".$usuarios[$q]."'";
        $renglones_usuarios = mysqli_query($esta, $sql);
        $renglon_usuario = mysqli_fetch_assoc($renglones_usuarios);
            
        $id_usuario=$renglon_usuario['id'];
    
        $sql = "insert into tareas_usuarios (id_tarea_fk,id_usuario_fk,tipo) values ('$id_tarea','$id_usuario','1')";
        $resultado_query = mysqli_query($esta, $sql);
    

}


//echo $sql;
//$renglon_pieza = mysqli_fetch_assoc($renglones_piezas);
 
    
    
        
    
    
    header("Location: http://jotech.dctimx.com/php/admin/index.php?page=cliente&id=$cliente");
die();






?>