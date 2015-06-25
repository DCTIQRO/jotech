<?php

require_once( getcwd().'/pages/esta.php');

extract($_GET);



$sql = "select * from proyectos order by fecha_insercion desc";
$renglones_proyectos = mysqli_query($esta, $sql);



//echo $_SERVER[''];

?>
<div class="innerLR">
    <h1 class="pull-left">
        Proyectos &nbsp; 
        
    </h1>
    <div class="pull-right innerT">
        
    </div>
    <div class="clearfix"></div>
    <div class="innerTB">
        
        <!-- Table Proyectos-->
<table class="dynamicTable scrollVertical table table-primary">

	<!-- Table heading -->
	<thead>
		<tr>
			<th>Rendering eng.</th>
			<th>Browser</th>
			<th>Platform(s)</th>
			<th>Eng. vers.</th>
			<th>CSS grade</th>
		</tr>
	</thead>
	<!-- // Table heading END -->
	
	<!-- Table body -->
	<tbody>
	
		<!-- Table row -->
		<tr class="gradeX">
			<td>Trident</td>
			<td>Internet Explorer 4.0</td>
			<td>Win 95+</td>
			<td class="center">4</td>
			<td class="center">X</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeC">
			<td>Trident</td>
			<td>Internet Explorer 5.0</td>
			<td>Win 95+</td>
			<td class="center">5</td>
			<td class="center">C</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Trident</td>
			<td>Internet Explorer 5.5</td>
			<td>Win 95+</td>
			<td class="center">5.5</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Trident</td>
			<td>Internet Explorer 6</td>
			<td>Win 98+</td>
			<td class="center">6</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Trident</td>
			<td>Internet Explorer 7</td>
			<td>Win XP SP2+</td>
			<td class="center">7</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Trident</td>
			<td>AOL browser (AOL desktop)</td>
			<td>Win XP</td>
			<td class="center">6</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Firefox 1.0</td>
			<td>Win 98+ / OSX.2+</td>
			<td class="center">1.7</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Firefox 1.5</td>
			<td>Win 98+ / OSX.2+</td>
			<td class="center">1.8</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Firefox 2.0</td>
			<td>Win 98+ / OSX.2+</td>
			<td class="center">1.8</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Firefox 3.0</td>
			<td>Win 2k+ / OSX.3+</td>
			<td class="center">1.9</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Camino 1.0</td>
			<td>OSX.2+</td>
			<td class="center">1.8</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Camino 1.5</td>
			<td>OSX.3+</td>
			<td class="center">1.8</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Netscape 7.2</td>
			<td>Win 95+ / Mac OS 8.6-9.2</td>
			<td class="center">1.7</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Netscape Browser 8</td>
			<td>Win 98SE+</td>
			<td class="center">1.7</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Netscape Navigator 9</td>
			<td>Win 98+ / OSX.2+</td>
			<td class="center">1.8</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Mozilla 1.0</td>
			<td>Win 95+ / OSX.1+</td>
			<td class="center">1</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Mozilla 1.1</td>
			<td>Win 95+ / OSX.1+</td>
			<td class="center">1.1</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Mozilla 1.2</td>
			<td>Win 95+ / OSX.1+</td>
			<td class="center">1.2</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Mozilla 1.3</td>
			<td>Win 95+ / OSX.1+</td>
			<td class="center">1.3</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Mozilla 1.4</td>
			<td>Win 95+ / OSX.1+</td>
			<td class="center">1.4</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Mozilla 1.5</td>
			<td>Win 95+ / OSX.1+</td>
			<td class="center">1.5</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Mozilla 1.6</td>
			<td>Win 95+ / OSX.1+</td>
			<td class="center">1.6</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Mozilla 1.7</td>
			<td>Win 98+ / OSX.1+</td>
			<td class="center">1.7</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Mozilla 1.8</td>
			<td>Win 98+ / OSX.1+</td>
			<td class="center">1.8</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Seamonkey 1.1</td>
			<td>Win 98+ / OSX.2+</td>
			<td class="center">1.8</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Epiphany 2.20</td>
			<td>Gnome</td>
			<td class="center">1.8</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Webkit</td>
			<td>Safari 1.2</td>
			<td>OSX.3</td>
			<td class="center">125.5</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Webkit</td>
			<td>Safari 1.3</td>
			<td>OSX.3</td>
			<td class="center">312.8</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Webkit</td>
			<td>Safari 2.0</td>
			<td>OSX.4+</td>
			<td class="center">419.3</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Webkit</td>
			<td>Safari 3.0</td>
			<td>OSX.4+</td>
			<td class="center">522.1</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Webkit</td>
			<td>OmniWeb 5.5</td>
			<td>OSX.4+</td>
			<td class="center">420</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Webkit</td>
			<td>iPod Touch / iPhone</td>
			<td>iPod</td>
			<td class="center">420.1</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Webkit</td>
			<td>S60</td>
			<td>S60</td>
			<td class="center">413</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Presto</td>
			<td>Opera 7.0</td>
			<td>Win 95+ / OSX.1+</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Presto</td>
			<td>Opera 7.5</td>
			<td>Win 95+ / OSX.2+</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Presto</td>
			<td>Opera 8.0</td>
			<td>Win 95+ / OSX.2+</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Presto</td>
			<td>Opera 8.5</td>
			<td>Win 95+ / OSX.2+</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Presto</td>
			<td>Opera 9.0</td>
			<td>Win 95+ / OSX.3+</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Presto</td>
			<td>Opera 9.2</td>
			<td>Win 88+ / OSX.3+</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Presto</td>
			<td>Opera 9.5</td>
			<td>Win 88+ / OSX.3+</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Presto</td>
			<td>Opera for Wii</td>
			<td>Wii</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Presto</td>
			<td>Nokia N800</td>
			<td>N800</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Presto</td>
			<td>Nintendo DS browser</td>
			<td>Nintendo DS</td>
			<td class="center">8.5</td>
			<td class="center">C/A<sup>1</sup></td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeC">
			<td>KHTML</td>
			<td>Konqureror 3.1</td>
			<td>KDE 3.1</td>
			<td class="center">3.1</td>
			<td class="center">C</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>KHTML</td>
			<td>Konqureror 3.3</td>
			<td>KDE 3.3</td>
			<td class="center">3.3</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>KHTML</td>
			<td>Konqureror 3.5</td>
			<td>KDE 3.5</td>
			<td class="center">3.5</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeX">
			<td>Tasman</td>
			<td>Internet Explorer 4.5</td>
			<td>Mac OS 8-9</td>
			<td class="center">-</td>
			<td class="center">X</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeC">
			<td>Tasman</td>
			<td>Internet Explorer 5.1</td>
			<td>Mac OS 7.6-9</td>
			<td class="center">1</td>
			<td class="center">C</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeC">
			<td>Tasman</td>
			<td>Internet Explorer 5.2</td>
			<td>Mac OS 8-X</td>
			<td class="center">1</td>
			<td class="center">C</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Misc</td>
			<td>NetFront 3.1</td>
			<td>Embedded devices</td>
			<td class="center">-</td>
			<td class="center">C</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeA">
			<td>Misc</td>
			<td>NetFront 3.4</td>
			<td>Embedded devices</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeX">
			<td>Misc</td>
			<td>Dillo 0.8</td>
			<td>Embedded devices</td>
			<td class="center">-</td>
			<td class="center">X</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeX">
			<td>Misc</td>
			<td>Links</td>
			<td>Text only</td>
			<td class="center">-</td>
			<td class="center">X</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeX">
			<td>Misc</td>
			<td>Lynx</td>
			<td>Text only</td>
			<td class="center">-</td>
			<td class="center">X</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeC">
			<td>Misc</td>
			<td>IE Mobile</td>
			<td>Windows Mobile 6</td>
			<td class="center">-</td>
			<td class="center">C</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeC">
			<td>Misc</td>
			<td>PSP browser</td>
			<td>PSP</td>
			<td class="center">-</td>
			<td class="center">C</td>
		</tr>
		<!-- // Table row END -->
		
		<!-- Table row -->
		<tr class="gradeU">
			<td>Other browsers</td>
			<td>All others</td>
			<td>-</td>
			<td class="center">-</td>
			<td class="center">U</td>
		</tr>
		<!-- // Table row END -->
		
	</tbody>
	<!-- // Table body END -->
	
</table>
<!-- // Table proyectos END -->
        
        
        <?php while($renglon_proyecto = mysqli_fetch_assoc($renglones_proyectos)){?> 
        <div class="widget widget-inverse widget-small ">
            <div class="widget-body padding-none">
                <div class=" media innerAll overflow-visible margin-none">
                    <div class="pull-left innerR half hidden-xs"> <i class="icon-tv-play fa-4x icon-faded"></i> </div>
                    <div class="pull-right hidden-xs">
                        <div class="strong text-muted-dark innerB half">Assigned to:</div>
                        <img src="../assets/images/people/50/2.jpg" alt="photo" class="img-circle" style="width:40px;" data-toggle="tooltip" data-placement="top" data-title="Adrian Demian"/>
                        <img src="../assets/images/people/50/4.jpg" alt="photo" class="img-circle" style="width:40px;" data-toggle="tooltip" data-placement="top" data-title="Laza Bogdan"/>
                    </div>
                    <div class="media-body">
                        <h4>
                            <a href="index.php?page=project_milestones&id=<?php echo $renglon_proyecto['id'];?>" class="media-heading"><?php echo $renglon_proyecto['nombre'];?></a>
                        </h4>
                        <p class="text-muted"><?php echo $renglon_proyecto['descripcion_corta'];?></p>
                        <div class="clearfix"></div>
                        <div class="widget widget-none innerR innerB half margin-slim pull-left">
                            <span class="strong"> Entrega:</span> 
                            <span> <i class="fa fa-clock-o text-muted"></i> <?php echo $renglon_proyecto['fecha_entrega'];?></span>
                        </div>
                        <div class="widget widget-none innerR innerB half margin-slim pull-left">
                            <span class="strong"> Etiquetas:</span> 
                            <span class="strong">
                                <?php 
                                
                                $sql = "select * from proyectos_etiquetas where id_proyecto_fk=".$renglon_proyecto['id'];
                                $renglones_etiquetas = mysqli_query($esta, $sql);
                                
                                while($renglon_etiqueta = mysqli_fetch_assoc($renglones_etiquetas)){
                                ?>
                                <a href="#"><span class="label label-primary"><?php echo $renglon_etiqueta['etiqueta']; ?></span></a>
                                <?php }?>
                            </span>
                        </div>
                        <div class="widget widget-none innerR innerB half margin-slim pull-left">
                            <span class="pull-left strong">Progreso:</span> 
                            <div class="progress progress-mini set-width">
                                <div class="progress-bar progress-bar-primary" style="width: <?php echo $renglon_proyecto['progeso'];?>%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        
        
        
        
    </div>
    <ul class="pagination pagination-centered margin-none">
        <li class="disabled"><a href="#">&laquo;</a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&raquo;</a></li>
    </ul>
</div>
<script src="../assets/plugins/tables_datatables/js/jquery.dataTables.min.js?v=v1.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="../assets/plugins/tables_datatables/extras/TableTools/media/js/TableTools.min.js?v=v1.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="../assets/plugins/tables_datatables/extras/ColVis/media/js/ColVis.min.js?v=v1.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="../assets/components/tables_datatables/js/DT_bootstrap.js?v=v1.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="../assets/components/tables_datatables/js/datatables.init.js?v=v1.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="../assets/components/forms_elements_fuelux-checkbox/fuelux-checkbox.init.js?v=v1.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="../assets/plugins/forms_elements_bootstrap-select/js/bootstrap-select.js?v=v1.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="../assets/components/forms_elements_bootstrap-select/bootstrap-select.init.js?v=v1.0.0-rc1&amp;sv=v0.0.1.2"></script>