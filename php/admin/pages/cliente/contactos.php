<?php

session_start();
extract($_GET);
$id_usuario=$_SESSION['id_usuario_jotech'];

if(isset($_GET['id_usuario'])){

$id_usuario=$_GET['id_usuario'];
}

require_once( getcwd().'/pages/esta.php');

$sql = "select t1.*,t2.tipo as tipo_proyecto from proyectos t1, tipo_proyectos t2 where t1.id_cliente_fk=$id and t1.tipo=t2.id";

//echo $sql;

$renglones_proyectos = mysqli_query($esta, $sql);



$sql = "select * from clientes_tareas where id_cliente_fk =$id";


//echo $sql;

$renglones_tareas = mysqli_query($esta, $sql);



?>
<!-- Tabs Heading -->
<div class="widget-head bg-background text-center">
    <ul>
        <li>
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
		<li class="active">
            <a class="glyphicons share_alt" href="?page=cliente&amp;section=contactos&id=<?php echo $_GET['id']; ?>"> <i></i>Contactos</a>
        </li>
		<li>
            <a class="glyphicons share_alt" href="?page=cliente&amp;section=permisos&id=<?php echo $_GET['id']; ?>"> <i></i>Permisos</a>
        </li>
        <li>
            <a class="glyphicons lock" href="?page=cliente&amp;section=nuevo_proyecto&id=<?php echo $_GET['id']; ?>"> <i></i>Nuevo Proyecto</a>
    </ul>
</div>
<!-- // Tabs Heading END -->
<div class="widget-body">
    <div class="row">
        <div class="col-md-6">
            <h4>
                Proyectos Actuales
            </h4>
            <div class="innerT">
                <?php {?>
                <div class="widget widget-none bg-white ">
                    <div class="widget-body padding-none">
                        <div class=" media innerAll overflow-visible margin-none">
                            <div class="pull-left innerR half hidden-xs"> <i class="icon-tv-play fa-4x icon-faded"></i> </div>
                            <div class="media-body">
                                <h4>
                                    <a href="#" class="media-heading">Contacto 1</a>
                                </h4>
                                <p class="text-muted">simon@simon.com</p>
                                <div class="clearfix"></div>
                                <div class="">
                                    <span class="strong"> Direccion:</span> 
                                    <span> <i class="fa fa-clock-o text-muted"></i> Calle 1</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                
                
                
                
                
            </div>
        </div>
        <div class="col-sm-6">
            
                <div class="form-group">
                    <label for="estado">Nombre:</label>
                    <input class="form-control" name="nombre" value="<?php echo $renglon_cliente['estado'];?>" type="text" id="nombre" placeholder="">
                </div>
                <div class="form-group">
                    <label for="telefono">Dirección:</label>
                    <input class="form-control" name="direccion" value="<?php echo $renglon_cliente['direccion'];?>" type="text" id="direccion" placeholder="">
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
            <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Agregar Contacto">
                </div>
            
            
        </div>
    </div>
</div>