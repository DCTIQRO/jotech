<?php

require_once('esta.php');

extract($_POST);

if(isset($nombre)){

$sql = "insert into proyectos (nombre,descripcion_corta,descripcion,fecha_inicio,fecha_entrega,id_cliente_fk,estatus,tipo) values ('$nombre','$descripcion_corta','$descripcion','$fecha_inicio','$fecha_entrega','$cliente','$estatus','$tipo')";
$resultado_query = mysqli_query($esta, $sql);

//$renglon_pieza = mysqli_fetch_assoc($renglones_piezas);
 
    
    $sql = "select * from proyectos order by id desc";
$renglones_proyectos = mysqli_query($esta, $sql);
    
    $renglon_proyecto = mysqli_fetch_assoc($renglones_proyectos);
    $id_proyecto=$renglon_proyecto['id'];
    $etiquetas=explode(",",$hiddenetiquetas);
    
    //echo $hidden-etiquetas;
    
    for($q=0;$q<count($etiquetas);$q++){
    
    
        $sql = "insert into proyectos_etiquetas (etiqueta,id_proyecto_fk) values ('".strtoupper($etiquetas[$q])."','$id_proyecto')";
        $resultado = mysqli_query($esta, $sql);
        
    }
    
$usuarios=explode(",",$tags);
    

    
   
    
    for($q=0;$q<count($usuarios);$q++){

        $sql="select * from usuarios where nombre ='".$usuarios[$q]."'";
        $renglones_usuarios = mysqli_query($esta, $sql);
        $renglon_usuario = mysqli_fetch_assoc($renglones_usuarios);
            
        $id_usuario=$renglon_usuario['id'];
    
        $sql = "insert into proyectos_usuarios (id_proyecto_fk,id_usuario_fk) values ('$id_proyecto','$id_usuario')";
        
        echo $sql;
        
        $resultado_query = mysqli_query($esta, $sql);
    

}
    
    header("Location: http://jotech.dctimx.com/php/admin/index.php?page=projects_list");
die();
}





?>