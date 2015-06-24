<?php
session_start();
require_once( getcwd().'/pages/esta.php');
$id_proyecto=$_SESSION['id_proyecto'];

//echo $id_proyecto;

$sql = "select * from proyectos_etapas where id_proyecto_fk=$id_proyecto";
$renglones_proyectos_etapas = mysqli_query($esta, $sql);

$sql = "select * from proyectos order by nombre asc";
$renglones_proyectos = mysqli_query($esta, $sql);


//echo $sql;
?>
<!-- CREATE TASK MODAL -->
<!-- Modal -->
<script>

    function cambiar_modo(modo){
    
        tipo_evento=modo;
        
        console.log(tipo_evento);
        
    }
    
    var tipo_evento=1;
    
    function enviar(){
    
        document.getElementById('nueva_tarea').submit();
    
    }
    
    function enviar_evento(){
    
        if(tipo_evento==1)
        document.getElementById('form_comentario').submit();
        else
            document.getElementById('form_tarea').submit();
    
    }
    
</script>
<div class="modal fade" id="modal-task">

    <div class="modal-dialog">
        <div class="modal-content bg-white">
            <!-- Modal body -->
            <div class="modal-body padding-none ">

                <form  id="nueva_tarea" class="form-horizontal " role="form" method="post" action="/php/admin/pages/agregar_proyecto_etapa_tarea.php">

                        <div class="innerLR innerT">
                            <div class="form-group">
                                <label for="nombre" class="col-sm-2 control-label">Tarea:</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="nombre" name="nombre">
                                        <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
                                        <div class="input-group-btn">
                                            <button type="button" data-toggle="collapse" data-target="#cc" class="btn btn-default">Horario <span class="caret"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="cc" class="collapse">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Fecha Inicio:</label>
                                    <div class="col-sm-10">
                                        <div class="input-group date datepicker1">
    <input class="form-control" id="fecha_inicio" name="fecha_inicio" type="text" value="2013-02-14" />
    <span class="input-group-addon"><i class="fa fa-th"></i></span>
</div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Fecha Fin:</label>
                                    <div class="col-sm-10">
                                        <div class="input-group date datepicker1">
    <input class="form-control" id="fecha_fin" name="fecha_fin" type="text" value="2013-02-14" />
    <span class="input-group-addon"><i class="fa fa-th"></i></span>
</div>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Etapa:</label>
                                <div class="col-sm-6">
                                    <select id="etapa" name="etapa" class="selectpicker">
                                        <?php while($renglon_proyecto_etapa = mysqli_fetch_assoc($renglones_proyectos_etapas)){ ?>
                                        <option value="<?php echo $renglon_proyecto_etapa['id'];?>"><?php echo $renglon_proyecto_etapa['nombre'];?></option>
                                        <?php }?>
                                    </select>
                                </div>

                            </div>

                            
                            <div class="clearfix"></div>
                        </div>


                    <div class="innerAll bg-white">
                        <textarea id="descripcion" name="descripcion" class="notebook border-none form-control padding-none" rows="4" placeholder="Descripción..."></textarea>
                        <div class="clearfix"></div>
                    </div>
                </form>

            </div>
            <!-- // Modal body END -->

            <div class="innerLR innerB text-right">
                <a href="" class="btn btn-default"><i class="fa fa-times"></i> Cancelar</a>
                <a href="javascript:enviar_evento();" class="btn btn-primary"><i class="fa  fa-check"></i> Enviar</a>
            </div>

        </div>
    </div>

</div>
<!-- // Modal END -->




<!-- // END MODAL -->



<!-- Form Modal evento -->

	
<!-- Modal -->
<div class="modal fade" id="modal-evento">
	
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal body -->
			<div class="modal-body padding-none">
				
				<!-- Form Wizard / Widget Tabs / Double Style -->
				<div class="wizard">
					<div class="widget widget-tabs widget-tabs-double widget-tabs-responsive margin-none border-none">
					
						<!-- Widget heading -->
						<div class="widget-head bg-gray">
							<ul>
								<li class="active"><a onclick="cambiar_modo(1)" href="#tab1-2" class="glyphicons user" data-toggle="tab"><i></i><span class="strong">Comentario</a></li>
								<li><a onclick="cambiar_modo(2)" href="#tab2-2" class="glyphicons calculator" data-toggle="tab"><i></i><span class="strong">Tarea</a></li>
								
								
							</ul>
						</div>
						<!-- // Widget heading END -->
						
						<div class="widget-body innerAll inner-2x">
							<div class="tab-content">
							
								<!-- Step 1 -->
                                
								<div class="tab-pane active" id="tab1-2">
                                    <form id="form_comentario" method="post" action="/php/admin/pages/agregar_proyecto_comentario.php">
									<div class="row">
										
										<div class="col-md-9">
											<label>Comentario</label>
                                            <textarea id="comentario" name="comentario" placeholder="Escriba un comentario" class="inputTitle col-md-6 form-control"></textarea>
											
											<div class="separator"></div>
										</div>
                                        <div class="col-md-9">
                                    <select id="proyecto" name="proyecto" class="selectpicker">
                                        <?php while($renglon_proyecto = mysqli_fetch_assoc($renglones_proyectos)){ ?>
                                        <option value="<?php echo $renglon_proyecto['id'];?>"><?php echo $renglon_proyecto['nombre'];?></option>
                                        <?php }?>
                                    </select>
                                </div>
									</div>
                                    </form>
								</div>
                               
								<!-- // Step 1 END -->
								
								<!-- Step 2 -->
                                
								<div class="tab-pane" id="tab2-2">
                                    <form id="form_tarea" method="post" action="/php/admin/pages/agregar_proyecto_tarea.php">
									<div class="row">
										
										<div class="col-md-9">
											<label>Nombre:</label>
											<input class="form-control" type="text" id="nombre" name="nombre">
										</div>
                                        <div class="col-md-9">
											<label>Nombre:</label>
											<textarea class="form-control" id="descripcion" name="descripcion"></textarea>
										</div>
                                        <div class="col-md-9">
                                    <label class="col-sm-2 control-label">Fecha Inicio:</label>
                                    <div class="col-sm-10">
                                        <div class="input-group date datepicker1">
    <input class="form-control" id="fecha_inicio" name="fecha_inicio" type="text" value="2013-02-14" />
    <span class="input-group-addon"><i class="fa fa-th"></i></span>
</div>

                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <label class="col-sm-2 control-label">Fecha Fin:</label>
                                    <div class="col-sm-10">
                                        <div class="input-group date datepicker1">
    <input class="form-control" id="fecha_fin" name="fecha_fin" type="text" value="2013-02-14" />
    <span class="input-group-addon"><i class="fa fa-th"></i></span>
</div>

                                    </div>
									</div>
                                        <div class="col-md-9">
                                    <select id="proyecto" name="proyecto" class="selectpicker">
                                        <?php

                                        $sql = "select * from proyectos order by nombre asc";
                                        $renglones_proyectos = mysqli_query($esta, $sql);

                                            while($renglon_proyecto = mysqli_fetch_assoc($renglones_proyectos)){ ?>
                                        <option value="<?php echo $renglon_proyecto['id'];?>"><?php echo $renglon_proyecto['nombre'];?></option>
                                        <?php }?>
                                    </select>
                                </div>
								</div>
                                    
								<!-- // Step 2 END -->
                                        
                                        
                                <!-- Step 3 -->
                                
								<div class="tab-pane" id="tab2-2">
                                    <form id="form_tarea" method="post" action="/php/admin/pages/agregar_cliente_tarea.php">
									<div class="row">
										
										<div class="col-md-9">
											<label>Nombre:</label>
											<input class="form-control" type="text" id="nombre" name="nombre">
										</div>
                                        <div class="col-md-9">
											<label>Nombre:</label>
											<textarea class="form-control" id="descripcion" name="descripcion"></textarea>
										</div>
                                        <div class="col-md-9">
                                    <label class="col-sm-2 control-label">Fecha Inicio:</label>
                                    <div class="col-sm-10">
                                        <div class="input-group date datepicker1">
    <input class="form-control" id="fecha_inicio" name="fecha_inicio" type="text" value="2013-02-14" />
    <span class="input-group-addon"><i class="fa fa-th"></i></span>
</div>

                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <label class="col-sm-2 control-label">Fecha Fin:</label>
                                    <div class="col-sm-10">
                                        <div class="input-group date datepicker1">
    <input class="form-control" id="fecha_fin" name="fecha_fin" type="text" value="2013-02-14" />
    <span class="input-group-addon"><i class="fa fa-th"></i></span>
</div>

                                    </div>
									</div>
                                        <div class="col-md-9">
                                    <select id="proyecto" name="proyecto" class="selectpicker">
                                        <?php

                                        $sql = "select * from proyectos order by nombre asc";
                                        $renglones_proyectos = mysqli_query($esta, $sql);

                                            while($renglon_proyecto = mysqli_fetch_assoc($renglones_proyectos)){ ?>
                                        <option value="<?php echo $renglon_proyecto['id'];?>"><?php echo $renglon_proyecto['nombre'];?></option>
                                        <?php }?>
                                    </select>
                                </div>
								</div>
                                    
								<!-- // Step 3 END -->
								
								
								
                                    </form>
								
							</div>
							
							<!-- Wizard pagination controls -->
							
							<!-- // Wizard pagination controls END -->
							
						</div>
					</div>
				</div>
				<!-- // Form Wizard / Widget Tabs / Double Style END -->

			</div>
			<!-- // Modal body END -->
			<div class="modal-footer center margin-none">
				<a href="#" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</a>
                <a href="javascript:enviar_evento();" class="btn btn-primary"><i class="fa  fa-check"></i> Enviar</a>
			</div>
		</div>
	</div>
	
</div>
<!-- // Modal evento END -->


		
		</div>
		<!-- // Content END -->
		
		<div class="clearfix"></div>
		<!-- // Sidebar menu & content wrapper END -->
		
		<div id="footer" class="hidden-print" style="display:none;">
			
			<!--  Copyright Line -->
			<div class="copy">&copy; 2012 - 2014 - <a href="http://www.mosaicpro.biz">MosaicPro</a> - All Rights Reserved. <a href="http://themeforest.net/?ref=mosaicpro" target="_blank">Purchase SMART on ThemeForest</a> - Current version: v1.0.0-rc1 / <a target="_blank" href="../assets/../../CHANGELOG.txt?v=v1.0.0-rc1">changelog</a></div>
			<!--  End Copyright Line -->
	
		</div>
		
		<!-- // Footer END -->
		
	</div>
	<!-- // Main Container Fluid END -->
	

    <!-- Global -->
    <script data-id="App.Config">
        var App = {};        var basePath = 'admin/',
            commonPath = '../assets/',
            rootPath = '../',
            DEV = true,
            componentsPath = '../assets/components/';

        var primaryColor = '#c72a25',
            dangerColor = '#b55151',
            successColor = '#609450',
            infoColor = '#4a8bc2',
            warningColor = '#ab7a4b',
            inverseColor = '#45484d';

        var themerPrimaryColor = primaryColor;

            </script>

    <?php 
foreach ($scripts as $id => $script)
{
	$sections = !empty($script['sections']) && !empty($script['sections'][$page]);
	$inPages = in_array($page, $script['pages']);
	$inSections = !$sections ? false : in_array($section, $script['sections'][$page]);

	if (!$script['header'] && ((!$sections && $inPages) || ($sections && $inSections)))
		echo '<script src="' . $script['file'] . '"></script>' . "\n\t";
} 
?>

</body>
</html>