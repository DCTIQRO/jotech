<?php

require_once('esta.php');

extract($_POST);

$aux_imagen=$_FILES["imagen"]["name"];

$sql = "update usuarios set nombre='$nombre',calle='$calle',numero='$numero',entre_calles='$entre_calles',colonia='$colonia',ciudad='$ciudad',estado='$estado',detalles='$detalles',website='$website',correo='$correo',telefono='$telefono',pais='$pais',contrasena='$contrasena',tipo='$tipo',fecha_nacimiento='$fecha_nacimiento' where id='$id_usuario'";
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