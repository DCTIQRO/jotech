<?php

$servername = "localhost";
//$servername = "localhost";
$username = "jotech";
$password = "dcti*trev*mont";
$dbname = "jotech";

/*
$servername = "localhost";
$username = "quetzala";
$password = "j3Lr7^r9";
$dbname = "quetzala_administrador";
*/
// Create connection
$esta = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$esta) {
    die("Connection failed: " . mysqli_connect_error());
}


?>