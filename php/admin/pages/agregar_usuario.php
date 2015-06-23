<?php

require_once('esta.php');

extract($_POST);

$aux_imagen=$_FILES["imagen"]["name"];

$sql = "insert into usuarios (nombre,calle,numero,entre_calles,colonia,ciudad,estado,detalles,website,correo,telefono,pais,contrasena,tipo,fecha_nacimiento,imagen) values ('$nombre','$calle','$numero','$entre_calles','$colonia','$ciudad','$estado','$detalles','$website','$correo','$telefono','$pais','$contrasena','$tipo','$fecha_nacimiento','$aux_imagen')";
$resultado_query = mysqli_query($esta, $sql);

//echo $sql;
    
//$renglon_pieza = mysqli_fetch_assoc($renglones_piezas);
    
    header("Location: http://jotech.dctimx.com/php/admin/index.php?page=user");
die();



$target_dir = "../imagenes/";
$target_file = $target_dir . basename($_FILES["imagen"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["imagen"]["name"]). " has been uploaded.";
    } else {
        //echo "Sorry, there was an error uploading your file.";
    }


?>