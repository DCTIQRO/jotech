<?php

session_start();

require_once( getcwd().'/esta.php');

extract($_POST);



$sql = "select * from usuarios where correo='$correo' and contrasena='$contrasena'";
$renglones_usuarios = mysqli_query($esta, $sql);

$renglon_usuario = mysqli_fetch_assoc($renglones_usuarios);

$total = mysqli_num_rows($renglones_usuarios);

echo $total;

if($total==0){

    header("Location:/php/admin/index.php?page=login");
}
else{

$_SESSION['id_usuario_jotech']=$renglon_usuario['id'];
    
    header("Location:/php/admin/index.php?page=user");

}

?>