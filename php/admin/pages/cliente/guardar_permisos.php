<?php
require_once('../esta.php');

extract($_POST);
$errores=0;
foreach($permisos as $permiso){
	$query="Update proyectos_usuarios SET permiso=".$permiso['permiso']." where id=".$permiso['proyecto'];
	$resultado = mysqli_query($esta, $query);
	if ($resultado == FALSE){
		$errores++;
	}
}

if($errores == 0){
	echo "Actualización Exitosa";
}
else{
	echo "Error al guardar";
}
?>