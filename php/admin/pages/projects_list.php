<?php

require_once( getcwd().'/pages/esta.php');

extract($_GET);



$sql = "select * from proyectos order by fecha_insercion desc";
$renglones_proyectos = mysqli_query($esta, $sql);



//echo $_SERVER[''];

?>
<link href='../assets/plugins/tables_datatables/css/jquery.dataTables.css' rel='stylesheet' type='text/css'>
<div class="innerLR">
    <h1 class="pull-left">
        Proyectos &nbsp; 
        
    </h1>
    <div class="pull-right innerT">
        
    </div>
    <div class="clearfix"></div>
    <div class="block">
		<div class="row">
		<div class="table-responsive">
			<table id="proyects" class="table table-vcenter table-condensed table-bordered dataTable no-footer table-striped">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Descripción</th>
						<th>Entrega</th>
						<th>Etiquetas</th>
						<th>Progreso</th>
						<th>Asignados</th>
					</tr>
				</thead>
				<tbody>
				<?php while($renglon_proyecto = mysqli_fetch_assoc($renglones_proyectos)){?>
					<tr>
						<td><?= $renglon_proyecto['nombre'];?></td>
						<td><?= $renglon_proyecto['descripcion_corta'];?></td>
						<td><?= $renglon_proyecto['fecha_entrega'];?></td>
						<td>
							<span class="strong">
                                <?php 
                                
                                $sql = "select * from proyectos_etiquetas where id_proyecto_fk=".$renglon_proyecto['id'];
                                $renglones_etiquetas = mysqli_query($esta, $sql);
                                
                                while($renglon_etiqueta = mysqli_fetch_assoc($renglones_etiquetas)){
                                ?>
                                <a href="#"><span class="label label-primary"><?php echo $renglon_etiqueta['etiqueta']; ?></span></a>
                                <?php }?>
                            </span>
						</td>
						<td>
							<div class="progress progress-mini set-width">
                                <div class="progress-bar progress-bar-primary" style="width: <?php echo $renglon_proyecto['progeso'];?>%;"></div>
                            </div>
						</td>
						<td>
							ASIGNADOS
						</td>
					</tr>
				<?php }?>
				</tbody>
			</table>
		</div>   
        </div>
    </div>
</div>
<script src="../assets/plugins/tables_datatables/js/jquery.dataTables.min.js?v=v1.0.0-rc1&amp;sv=v0.0.1.2"></script>
<!--<script src="../assets/plugins/tables_datatables/extras/TableTools/media/js/TableTools.min.js?v=v1.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="../assets/plugins/tables_datatables/extras/ColVis/media/js/ColVis.min.js?v=v1.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="../assets/components/tables_datatables/js/DT_bootstrap.js?v=v1.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="../assets/components/tables_datatables/js/datatables.init.js?v=v1.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="../assets/components/forms_elements_fuelux-checkbox/fuelux-checkbox.init.js?v=v1.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="../assets/plugins/forms_elements_bootstrap-select/js/bootstrap-select.js?v=v1.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="../assets/components/forms_elements_bootstrap-select/bootstrap-select.init.js?v=v1.0.0-rc1&amp;sv=v0.0.1.2"></script>-->
<script>
/* Initialize Datatables */
$('#proyects').dataTable({
	columnDefs: [ { orderable: false, targets: [ 1, 5 ] } ],
	pageLength: 10,
	lengthMenu: [[10, 20, 30, -1], [10, 20, 30, 'All']]
});

/* Add placeholder attribute to the search input */
$('.dataTables_filter input').attr('placeholder', 'Search');
</script>