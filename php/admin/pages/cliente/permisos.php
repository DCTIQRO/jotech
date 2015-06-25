<?php 
require_once( getcwd().'/pages/esta.php'); 
$sql = "select u.nombre,u.id from proyectos_usuarios pu JOIN proyectos p on p.id=pu.id_proyecto_fk JOIN usuarios u on u.id=pu.id_usuario_fk where id_cliente_fk=".$_GET['id']." GROUP BY pu.id_usuario_fk";
$usuarios = mysqli_query($esta, $sql);
?>

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
		<?php while($usuario = mysqli_fetch_assoc($usuarios)){?> 
		<div class="col-sm-12 " Style="margin-bottom:10px" ><h4><strong><?= $usuario['nombre'] ?></strong></h4></div>
			<?php 
				$sql2 = "select p.nombre,pu.permiso,pu.id from proyectos_usuarios pu JOIN proyectos p on p.id=pu.id_proyecto_fk where pu.id_usuario_fk=".$usuario['id']." AND id_cliente_fk=".$_GET['id'];
				$proyectos= mysqli_query($esta, $sql2);
				while($proyecto = mysqli_fetch_assoc($proyectos)){
			?> 
			<form id="proyecto<?= $proyecto['id'] ?>" data-id="<?= $proyecto['id'] ?>" class="users-proyec">
				<div class="col-sm-3 " Style="padding-top: 8px;" ><?= $proyecto['nombre'] ?></div>
				<?php 
					$checket="";
					if($proyecto['permiso'] == 1){$checket="checked";} 
				?>
				<div class="col-sm-3 "><label class="radio"><input id="ver<?= $proyecto['id'] ?>" name="permisos<?= $proyecto['id'] ?>" type="radio" <?= $checket ?> value="1" ><span class="outer"><span class="inner"></span></span>Ver</label></div>
				<?php 
					$checket="";
					if($proyecto['permiso'] == 2){$checket="checked";} 
				?>
				<div class="col-sm-3 "><label class="radio"><input id="modificar<?= $proyecto['id'] ?>" name="permisos<?= $proyecto['id'] ?>" type="radio" <?= $checket ?> value="2" ><span class="outer"><span class="inner"></span></span>Ver/Modificar</label></div>
				<?php 
					$checket="";
					if($proyecto['permiso'] == 0){$checket="checked";} 
				?>
				<div class="col-sm-3 "><label class="radio"><input id="ninguno<?= $proyecto['id'] ?>" name="permisos<?= $proyecto['id'] ?>" type="radio" <?= $checket ?> value="0" ><span class="outer"><span class="inner"></span></span>Ninguno</label></div>
			</form>
			<?php } ?>
		<?php } ?>
		<div class="col-xs-12 text-center">
			<h5 id="notificacion"></h5>
		</div>
		<div class="col-xs-12 text-center">
			<a href="javascript:void(0)" onClick="guardar_permisos()" class="btn btn-success">GUARDAR</a>
		</div>
	</div>
</div>

<script>
function guardar_permisos()
{
	var nombreDelObjeto=new Array();
	var x=0;
	$( ".users-proyec" ).each(function() {
		id=$(this).attr('data-id');
		per=$('input[name=permisos'+id+']:checked').val();
		
		nombreDelObjeto[x] = { proyecto: id, permiso: per };
		x++;
	});
	$.post("pages/cliente/guardar_permisos.php", {
		permisos: nombreDelObjeto
	}, function(result){
        $('#notificacion').text(result);
		window.setTimeout("borrar()",5000);
    });
	//alert(JSON.stringify(nombreDelObjeto, null, '    '));
}

function borrar()
{
	$('#notificacion').text('');
}
</script>