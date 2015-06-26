<!-- Tabs Heading -->
<div class="widget-head bg-background text-center">
    <ul>
        <li class="active">
            <a class="glyphicons lock" href="?page=cliente&id=<?php echo $_GET['id']; ?>"> <i></i>Detalles Cliente </a>
        </li>
        <li>
            <a class="glyphicons clock" href="?page=cliente&amp;section=proyectos&id=<?php echo $_GET['id']; ?>"> <i></i>Proyectos &amp; Tareas </a>
        </li>
        <li>
            <a class="glyphicons envelope" href="?page=cliente&amp;section=miembros&id=<?php echo $_GET['id']; ?>"> <i></i>Miembros </a>
        </li>
        <li>
            <a class="glyphicons share_alt" href="?page=cliente&amp;section=bitacora&id=<?php echo $_GET['id']; ?>"> <i></i>Bitacora</a>
        </li>
		<li>
            <a class="glyphicons user" href="?page=cliente&amp;section=contactos&id=<?php echo $_GET['id']; ?>"> <i></i>Contactos</a>
        </li>
		<li>
            <a class="glyphicons lock" href="?page=cliente&amp;section=permisos&id=<?php echo $_GET['id']; ?>"> <i></i>Permisos</a>
        </li>
        <li>
            <a class="glyphicons lock" href="?page=cliente&amp;section=nuevo_proyecto&id=<?php echo $_GET['id']; ?>"> <i></i>Nuevo Proyecto</a>
    </ul>
</div>
<!-- // Tabs Heading END -->
<div class="widget-body">
    <form class="" action="/php/admin/pages/actualizar_cliente.php" method="post">
    <div class="row innerAll inner-2x">
        <div class="col-sm-6">
            
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
                
                <div class="separator"></div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Actualizar información">
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
                    <label for="website">Website:</label>
                    <input class="form-control" name="website" type="text" value="<?php echo $renglon_cliente['website'];?>" id="website">
                </div>
                <div class="form-group">
                    <label for="paid">Pais:</label>
                    <input class="form-control" name="pais" type="text" value="<?php echo $renglon_cliente['pais'];?>" id="pais">
                </div>
            
        </div>
    </div>
    </form>
</div>