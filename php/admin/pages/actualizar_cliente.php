<?php

require_once('esta.php');

extract($_POST);

if(isset($nombre)){

$sql = "update clientes set nombre='$nombre',calle='$calle',numero='$numero',entre_calles='$entre_calles',colonia='$colonia',ciudad='$ciudad',estado='$estado',detalles='$detalles',website='$website',correo='$correo',telefono='$telefono',pais='$pais' where id=$id";
$resultado_query = mysqli_query($esta, $sql);

//$renglon_pieza = mysqli_fetch_assoc($renglones_piezas);
    
    header("Location: http://jotech.dctimx.com/php/admin/index.php?page=cliente&id=$id");
die();
}

?>