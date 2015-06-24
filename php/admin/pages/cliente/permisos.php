<?php require_once( getcwd().'/pages/esta.php'); ?>
<link rel="stylesheet" type="text/css" href="../assets/plugins/AnimatedCheckboxes/css/component.css" />
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
		<li>
            <a class="glyphicons user" href="?page=cliente&amp;section=contactos&id=<?php echo $_GET['id']; ?>"> <i></i>Contactos</a>
        </li>	
		<li class="active">
            <a class="glyphicons lock" href="?page=cliente&amp;section=permisos&id=<?php echo $_GET['id']; ?>"> <i></i>Permisos</a>
        </li>
    </ul>
</div>

<div class="widget-body">
    <div class="row">
		<form >
			<?php 
				//$sql = "select * from proyectos order by fecha_insercion desc";
				//$renglones_proyectos = mysqli_query($esta, $sql);
			?>
			<div class="col-sm-3 ">Nombre</div>
			<div class="col-sm-2 "><label class="radio"><input id="ver" name="permisos" type="radio"><span class="outer"><span class="inner"></span></span>Ver</label></div>
			<div class="col-sm-4 "><label class="radio"><input id="modificar" name="permisos" type="radio"><span class="outer"><span class="inner"></span></span>Ver/Modificar</label></div>
			<div class="col-sm-3 "><label class="radio"><input id="ninguno" name="permisos" type="radio"><span class="outer"><span class="inner"></span></span>Ninguno</label></div>
		</form>
	</div>
</div>