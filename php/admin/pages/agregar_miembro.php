<?php

require_once('esta.php');

extract($_POST);

if(isset($nombre)){

$sql = "insert into miembros (nombre,puesto,correo,telefono,id_cliente_fk,tipo1,tipo2,newsletter,postal) values ('$nombre','$puesto','$correo','$telefono','$cliente_id','$tipo1','$tipo2','$newsletter','$postal')";
$resultado_query = mysqli_query($esta, $sql);

//$renglon_pieza = mysqli_fetch_assoc($renglones_piezas);
    
    header("Location: http://jotech.dctimx.com/php/admin/index.php?page=cliente&id=$cliente_id");
die();
}

?>