<?php

session_start();

unset($_SESSION['id_usuario_jotech']);

header("Location:/php/admin/index.php?page=login");


?>