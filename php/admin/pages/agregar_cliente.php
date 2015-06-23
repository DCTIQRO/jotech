<?php

require_once('esta.php');

extract($_POST);

if(isset($nombre)){

$sql = "insert into clientes (nombre,calle,numero,entre_calles,colonia,ciudad,estado,detalles,website,correo,telefono,pais) values ('$nombre','$calle','$numero','$entre_calles','$colonia','$ciudad','$estado','$detalles','$website','$correo','$telefono','$pais')";
$resultado_query = mysqli_query($esta, $sql);

//$renglon_pieza = mysqli_fetch_assoc($renglones_piezas);
    
    header("Location: http://jotech.dctimx.com/php/admin/index.php?page=clientes");
die();
}

?>