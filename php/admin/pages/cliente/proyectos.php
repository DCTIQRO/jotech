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
<link href='../assets/plugins/tables_datatables/css/dataTables.bootstrap.css' rel='stylesheet' type='text/css'>
<div class="widget-head bg-background text-center">
    <ul>
        <li>
            <a class="glyphicons lock" href="?page=cliente&id=<?php echo $_GET['id']; ?>"> <i></i>Detalles Cliente </a>
        </li>
        <li class="active">
            <a class="glyphicons clock" href="?page=cliente&amp;section=proyectos&id=<?php echo $_GET['id']; ?>"> <i></i>Proyectos &amp; Tareas </a>
        </li>
        <li>
            <a class="glyphicons envelope" href="?page=cliente&amp;section=miembros&id=<?php echo $_GET['id']; ?>"> <i></i>Miembros </a>
        </li>
        <li>
            <a class="glyphicons share_alt" href="?page=cliente&amp;section=bitacora&id=<?php echo $_GET['id']; ?>"> <i></i>Bitacora</a>
        </li>
		<li>
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
			<!-- Table -->
			<div class="innerT">
				<div class="table-responsive">
					<table id="proyectos" class="table table-vcenter table-condensed table-bordered dataTable no-footer table-striped">

						<!-- Table heading -->
						<thead>
							<tr>
								<th>ID</th>
								<th style="width:45%;">Proyecto</th>
								<th>Entrega <i class="fa fa-clock-o text-muted"></i></th>
								<th>Progreso</th>
							</tr>
						</thead>
						<!-- // Table heading END -->
						
						<!-- Table body -->
						<tbody>
					<?php while($renglon_proyecto = mysqli_fetch_assoc($renglones_proyectos)){?>
							<!-- Table row -->
							<tr class="gradeX">
					<!--ID-->   <td><?php echo $renglon_proyecto['id']; ?></td>
					<!--Proy--> <td><h4><a href="index.php?page=project_milestones&id=<?php echo $renglon_proyecto['id']; ?>" class="media-heading"><?php echo $renglon_proyecto['nombre']; ?></a></h4></td>
					<!--entr--> <td><span><?php echo $renglon_proyecto['fecha_entrega']; ?></span></td>
					<!--prog--> <td><div class="progress progress-mini set-width"><div class="progress-bar progress-bar-primary" style="width: <?php echo $renglon_proyecto['progreso']; ?>%;"></div></div></td>
							</tr>
							<!-- // Table row END -->
					<?php } ?>
						</tbody>
						<!-- // Table body END -->
					</table>
					<!-- // Table END -->                
				</div>
			</div>
        </div>
        <div class="col-md-6">
            <h4 class="innerB">
                Tareas
            </h4>
			<!-- Table -->
			<div class="table-responsive">
				<table id="tareas" class="table table-vcenter table-condensed table-bordered dataTable no-footer table-striped">

					<!-- Table heading -->
					<thead>
						<tr>
							<th>ID</th>
							<th>Tarea</th>
							<th>Entrega <i class="fa fa-clock-o text-muted"></i></th>
							<th>Status</th>
						</tr>
					</thead>
					<!-- // Table heading END -->
					
					<!-- Table body -->
					<tbody>
				<?php while($renglon_tarea = mysqli_fetch_assoc($renglones_tareas)){?>
						<!-- Table row -->
						<tr class="gradeX">
				<!--ID-->   <td><?php echo $renglon_tarea['id']; ?></td>
				<!--Proy--> <td><h4><a href="index.php?page=project_tasks&id_tarea=<?php echo $renglon_tarea['id']; ?>&cliente=1"> <?php echo $renglon_tarea['nombre']; ?></a></h4></td>
				<!--entr--> <td><div class="innerR"> <span class="strong"></span> <span> <?php echo $renglon_tarea['fecha_fin']; ?></span> </div></td>
							<td>
							<?php 
								if($renglon_tarea['estatus'] == 0){echo "<label class='btn-sm btn-info'>En proceso</label>";}
								else {echo "<label class='btn-sm btn-success'>Terminado</label>";}
							?>
							</td>
							
						</tr>
						<!-- // Table row END -->
				<?php } ?>
					</tbody>
					<!-- // Table body END -->
				</table>
				<!-- // Table END -->
			</div>
        </div>
    </div>
</div>

<script src="../assets/plugins/tables_datatables/js/jquery.dataTables.min.js?v=v1.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="../assets/plugins/tables_datatables/js/dataTables.bootstrap.min.js"></script>

<script>
/* Initialize Datatables */
$('#proyectos').dataTable({
	columnDefs: [ { orderable: false, targets: [3] } ],
	pageLength: 10,
	lengthMenu: [[10, 20, 30, -1], [10, 20, 30, 'All']]
});
$('#tareas').dataTable({
	columnDefs: [ { orderable: false, targets: [] } ],
	pageLength: 10,
	lengthMenu: [[10, 20, 30, -1], [10, 20, 30, 'All']]
});

/* Add placeholder attribute to the search input */
$('.dataTables_filter input').attr('placeholder', 'Search');
</script>