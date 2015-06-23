<?php

session_start();
extract($_GET);
$id_usuario=$_SESSION['id_usuario_jotech'];

if(isset($_GET['id_usuario'])){

$id_usuario=$_GET['id_usuario'];
}

require_once( getcwd().'/pages/esta.php');





$sql = "select * from usuarios where id=$id_usuario";
$renglones_usuarios = mysqli_query($esta, $sql);

$renglon_usuario = mysqli_fetch_assoc($renglones_usuarios);
  

?>
<!-- Tabs Heading -->
<div class="widget-head bg-background text-center">
    <ul>
        <li class="active">
            <a class="glyphicons lock" href="?page=user"> <i></i>Detalles Cuenta </a>
        </li>
        <li>
            <a class="glyphicons clock" href="?page=user&amp;section=projects"> <i></i>Proyectos &amp; Tareas </a>
        </li>
        <li>
            <a class="glyphicons envelope" href="?page=user&amp;section=messages"> <i></i>Mensajes </a>
        </li>
        <li>
            <a class="glyphicons share_alt" href="?page=user&amp;section=history"> <i></i>Bitacora Log </a>
        </li>
    </ul>
</div>
<!-- // Tabs Heading END -->
<div class="widget-body">
    <form class="" action="/php/admin/pages/actualizar_usuario.php" method="post" enctype="multipart/form-data">
    <div class="row innerAll inner-2x">
        <div class="col-sm-6">
            <div class="form-group">
                 <label for="imagen">Imagen de usuario:</label>
            <div class="fileupload fileupload-new margin-none" data-provides="fileupload">
  	<span class="btn btn-default btn-file"><span class="fileupload-new">Seleccionar Archivo</span><span class="fileupload-exists">Change</span><input type="file" class="margin-none" id="imagen" name="imagen" /></span>
  	<span class="fileupload-preview"></span>
  	<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">&times;</a>
</div>   
            </div>
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input class="form-control" name="nombre" type="text" value="<?php echo $renglon_usuario['nombre'];?>" id="nombre">
                    <input name="id_usuario" type="hidden" value="<?php echo $renglon_usuario['id'];?>" id="id_usuario">
                </div>
                <div class="form-group">
                    <label for="direccion">Calle:</label>
                    <input class="form-control" name="calle" value="<?php echo $renglon_usuario['calle'];?>" type="text" id="calle" placeholder="">
                </div>
                <div class="form-group">
                    <label for="numero">Numero:</label>
                    <input class="form-control" name="numero" value="<?php echo $renglon_usuario['numero'];?>" type="text" id="numero" placeholder="">
                </div>
                <div class="form-group">
                    <label for="entre_calles">Entre Calles:</label>
                    <input class="form-control" name="entre_calles" value="<?php echo $renglon_usuario['entre_calles'];?>" type="text" id="entre_calles" placeholder="">
                </div>
                <div class="form-group">
                    <label for="colonia">Colonia:</label>
                    <input class="form-control" name="colonia" value="<?php echo $renglon_usuario['colonia'];?>" type="text" id="colonia" placeholder="">
                </div>
                <div class="form-group">
                    <label for="ciudad">Ciudad:</label>
                    <input class="form-control" name="ciudad" value="<?php echo $renglon_usuario['ciudad'];?>" type="text" id="ciudad" placeholder="">
                </div>
               
            <div class="form-group">
                    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                    <input class="form-control datepicker1" type="text" value="2013-02-14" id="fecha_nacimiento" name="fecha_nacimiento"  />
                </div>
            
                <div class="separator"></div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Guardar cambios">
                </div>
            
        </div>
        <div class="col-sm-6">
            
                <div class="form-group">
                    <label for="estado">Estado:</label>
                    <input class="form-control" name="estado" value="<?php echo $renglon_usuario['estado'];?>" type="text" id="estado" placeholder="">
                </div>
                <div class="form-group">
                    <label for="detalles">Detalles:</label>
                    <textarea class="form-control" name="detalles" id="detalles" placeholder=""><?php echo $renglon_usuario['detalles'];?></textarea>
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono:</label>
                    <input class="form-control" name="telefono" value="<?php echo $renglon_usuario['telefono'];?>" type="text" id="telefono" placeholder="">
                </div>
                <div class="form-group">
                    <label for="correo">Correo:</label>
                    <input class="form-control" name="correo" type="email" value="<?php echo $renglon_usuario['correo'];?>" id="correo">
                </div>
            <div class="form-group">
                    <label for="contrasena">Contraseña:</label>
                    <input class="form-control" name="contrasena" type="password" value="<?php echo $renglon_usuario['contrasena'];?>" id="contrasena">
                </div>
                <div class="form-group">
                    <label for="website">Website:</label>
                    <input class="form-control" name="website" type="text" value="<?php echo $renglon_usuario['website'];?>" id="website">
                </div>
                <div class="form-group">
                    <label for="paid">Pais:</label>
                    <input class="form-control" name="pais" type="text" value="<?php echo $renglon_usuario['pais'];?>" id="pais">
                </div>
            
            <div class="form-group">
                    <label for="paid">Tipo de usuario:</label>
                    <select id="tipo" name="tipo">
                <option value="1">Super Administrador</option>
                <option value="2">Administrador</option>
                <option value="3">Coordinador de proyecto</option>
                <option value="4">Miembro de equipo</option>
                </select>
                </div>
            
        </div>
    </div>
    </form>
</div>