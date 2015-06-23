<!-- Tabs Heading -->
<div class="widget-head bg-background text-center">
    <ul>
        <li class="active">
            <a class="glyphicons lock" href="?page=nuevo_usuario"> <i></i>Detalles Usuario </a>
        </li>
        
    </ul>
</div>
<!-- // Tabs Heading END -->
<div class="widget-body">
    <form class="" action="/php/admin/pages/agregar_usuario.php" method="post" enctype="multipart/form-data">
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
                    <input class="form-control" name="nombre" type="text" value="<?php echo $renglon_cliente['nombre'];?>" id="nombre">
                    <input name="id" type="hidden" value="<?php echo $renglon_cliente['id'];?>" id="id">
                </div>
                <div class="form-group">
                    <label for="direccion">Calle:</label>
                    <input class="form-control" name="calle" value="<?php echo $renglon_cliente['calle'];?>" type="text" id="calle" placeholder="">
                </div>
                <div class="form-group">
                    <label for="numero">Numero:</label>
                    <input class="form-control" name="numero" value="<?php echo $renglon_cliente['numero'];?>" type="text" id="numero" placeholder="">
                </div>
                <div class="form-group">
                    <label for="entre_calles">Entre Calles:</label>
                    <input class="form-control" name="entre_calles" value="<?php echo $renglon_cliente['entre_calles'];?>" type="text" id="entre_calles" placeholder="">
                </div>
                <div class="form-group">
                    <label for="colonia">Colonia:</label>
                    <input class="form-control" name="colonia" value="<?php echo $renglon_cliente['colonia'];?>" type="text" id="colonia" placeholder="">
                </div>
                <div class="form-group">
                    <label for="ciudad">Ciudad:</label>
                    <input class="form-control" name="ciudad" value="<?php echo $renglon_cliente['ciudad'];?>" type="text" id="ciudad" placeholder="">
                </div>
               
            <div class="form-group">
                    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                    <input class="form-control datepicker1" type="text" value="2013-02-14" id="fecha_nacimiento" name="fecha_nacimiento"  />
                </div>
            
                <div class="separator"></div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Agregar Usuario">
                </div>
            
        </div>
        <div class="col-sm-6">
            
                <div class="form-group">
                    <label for="estado">Estado:</label>
                    <input class="form-control" name="estado" value="<?php echo $renglon_cliente['estado'];?>" type="text" id="estado" placeholder="">
                </div>
                <div class="form-group">
                    <label for="detalles">Detalles:</label>
                    <textarea class="form-control" name="detalles" id="detalles" placeholder=""><?php echo $renglon_cliente['detalles'];?></textarea>
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono:</label>
                    <input class="form-control" name="telefono" value="<?php echo $renglon_cliente['telefono'];?>" type="text" id="telefono" placeholder="">
                </div>
                <div class="form-group">
                    <label for="correo">Correo:</label>
                    <input class="form-control" name="correo" type="email" value="<?php echo $renglon_cliente['correo'];?>" id="correo">
                </div>
            <div class="form-group">
                    <label for="contrasena">Contraseña:</label>
                    <input class="form-control" name="contrasena" type="password" value="<?php echo $renglon_cliente['correo'];?>" id="contrasena">
                </div>
                <div class="form-group">
                    <label for="website">Website:</label>
                    <input class="form-control" name="website" type="text" value="<?php echo $renglon_cliente['website'];?>" id="website">
                </div>
                <div class="form-group">
                    <label for="paid">Pais:</label>
                    <input class="form-control" name="pais" type="text" value="<?php echo $renglon_cliente['pais'];?>" id="pais">
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