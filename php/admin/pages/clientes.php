<?php
require_once('esta.php');
extract($_POST);
$sql = "select * from clientes";
$renglones_clientes = mysqli_query($esta, $sql);
?>
<link href='../assets/plugins/tables_datatables/css/dataTables.bootstrap.css' rel='stylesheet' type='text/css'>
<div class="innerLR">
    <h1 class="pull-left">
        Clientes &nbsp; 
        
    </h1>
    <div class="pull-right innerT">
        <div class="btn-group">
            <a href="index.php?page=projects_list" class="btn btn-inverse"><i class="fa fa-list"></i></a>
            <a href="index.php?page=projects_grid" class="btn btn-default filled"><i class="fa fa-th"></i></a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="innerTB">
		<div class="table-responsive">
        <!-- Table -->

			<table id="clientes" class="table table-vcenter table-condensed table-bordered dataTable no-footer table-striped">

				<!-- Table heading -->
				<thead>
					<tr>
						<th class="text-center" >ID</th>
						<th class="text-center" >Cliente</th>
						<th class="text-center" >Correo</th>
						<th class="text-center" >Teléfono</th>
						<th class="text-center" >Notas</th>
					</tr>
				</thead>
				<!-- // Table heading END -->
				
				<!-- Table body -->
				<tbody>
					<?php while($renglon_cliente = mysqli_fetch_assoc($renglones_clientes)){?>
					<!-- Table row -->
					<tr onclick="ver_cliente(<?php echo $renglon_cliente['id']?>)">
			<!--ID-->   <td><?= $renglon_cliente['id']; ?></td>
			<!--Proy--> <td>
							<h4>
								<?php echo $renglon_cliente['nombre']; ?>
							</h4>
						</td>
			<!--desc--> <td>
							<p class="text-muted"><?= $renglon_cliente['correo']; ?></p>
						</td>
			<!--prog--> <td class="center"><?= $renglon_cliente['teléfono']; ?></td>
			<!--asig--> <td class="center"><?= $renglon_cliente['detalles']; ?></td>
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

<script src="../assets/plugins/tables_datatables/js/jquery.dataTables.min.js?v=v1.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="../assets/plugins/tables_datatables/js/dataTables.bootstrap.min.js"></script>

<script>
/* Initialize Datatables */
$('#clientes').dataTable({
	columnDefs: [ { orderable: false, targets: [4] } ],
	pageLength: 10,
	lengthMenu: [[10, 20, 30, -1], [10, 20, 30, 'All']]
});

/* Add placeholder attribute to the search input */
$('.dataTables_filter input').attr('placeholder', 'Search');

function ver_cliente(id)
{
location.href="index.php?page=cliente&id="+id;
}
</script>
