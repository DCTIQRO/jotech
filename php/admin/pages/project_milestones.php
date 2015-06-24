<?php
session_start();
require_once( getcwd().'/pages/esta.php');

extract($_GET);

if(isset($_GET['id'])){
$_SESSION['id_proyecto']=$id;
}
else{
$id=$_SESSION['id_proyecto'];
}

$sql = "select * from proyectos where id=$id";
$renglones_proyectos = mysqli_query($esta, $sql);
$renglon_proyecto = mysqli_fetch_assoc($renglones_proyectos);




$sql = "select * from proyectos_tareas where id_proyecto_fk=$id";
$renglones_proyectos_tareas = mysqli_query($esta, $sql);


//echo $_SERVER[''];

$sql = "select * from usuarios where id not in (select id_usuario_fk from proyectos_usuarios where id_proyecto_fk=$id)";
$renglones_usuarios = mysqli_query($esta, $sql);

$sql = "select * from usuarios where id in (select id_usuario_fk from proyectos_usuarios where id_proyecto_fk=$id)";
$renglones_proyecto_usuarios = mysqli_query($esta, $sql);


?>
<div class="innerLR">
    <h1 class="pull-left">
        Proyecto :: <?php echo $renglon_proyecto['nombre']; ?>
    </h1>
    <div class="innerT pull-right"> <a href="index.php?page=projects_grid" class="btn btn-primary">Regresar a proyectos</a> </div>
    <div class="clearfix"></div>
    <div class="separator"></div>
    <div class="widget widget-none">
        <div class="widget-body">
            <p class="lead"><?php echo nl2br($renglon_proyecto['descripcion']); ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="row half">
                <div class=" col-md-6 col-sm-6 col-xs-6">
                    <div class="pull-left innerR half">
                        <h4>
                            Maquinas de interes 
                        </h4>
                    </div>
                    <!-- Form Modal 1 -->

                    <a href="#modal-login" data-toggle="modal" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i></a>
                </div>
                <div class="pull-right innerR half">
                    <select class="selectpicker" data-style="btn btn-default strong filled">
                        <option>All</option>
                        <option>Urgent</option>
                        <option>Normal Priority</option>
                        <option>Low Priority</option>
                    </select>
                </div>
                <div class="clearfix"></div>
            </div>
            <?php
            
            $sql = "select * from proyectos_etapas where id_proyecto_fk=$id";
            $renglones_proyectos_etapas = mysqli_query($esta, $sql);
            
        $prioridades[2]="Urgente";
        $prioridades[1]="Normal";
        $prioridades[0]="Baja";
        $etapas_cuenta=1;
        while($renglon_proyecto_etapa = mysqli_fetch_assoc($renglones_proyectos_etapas)){
            
            $sql = "select * from proyectos_etapas_tareas where id_etapa_fk=".$renglon_proyecto_etapa['id'];
$renglones_proyectos_etapas_tareas = mysqli_query($esta, $sql);
            
            $total=mysqli_num_rows($renglones_proyectos_etapas_tareas);
            
            ?>
            <div class="widget widget-primary widget-small">
                <div class="media innerAll half">
                    <div class="pull-left h1 media-object hidden-xs margin-none innerR"> <i class=" icon-alarm-clock icon-faded fa-fw"></i> </div>
                    <div class="pull-right text-right">
                        <span class="label label-danger"><?php echo $prioridades[$renglon_proyecto_etapa['prioridad']];?></span> 
                        <div class="strong text-muted innerT half">  </div>
                    </div>
                    <div class="media-body">
                        <h4>
                            <a href="#task<?php echo $etapas_cuenta; ?>" data-toggle="collapse"> <?php echo $renglon_proyecto_etapa['nombre']; ?></a>
                        </h4>
                        <div class="innerR"> <span class="strong">Entrega: </span> <span> <?php echo $renglon_proyecto_etapa['fecha_entrega']; ?></span> </div>
                    </div>
                </div>
                <ul class="list-group bg-gray border-top collapse in" id="task<?php echo $etapas_cuenta; ?>">
                    <?php
            
            
            while($renglon_proyecto_etapa_tarea = mysqli_fetch_assoc($renglones_proyectos_etapas_tareas)){
                break;
                    ?>
                    <li class="list-group-item">
                        <a href="index.php?page=project_tasks" class="text-regular strong"><i class="fa fa-check-square-o icon-faded fa-fw"></i> <?php echo $renglon_proyecto_etapa_tarea['nombre']; ?></a>
                    </li>
                    <?php }?>
                    
                    
                </ul>
            </div>
            <?php $etapas_cuenta++;}?>
            
            <div class="widget">
                <div class="widget-head">
                    <div class="heading">Recent Activity</div>
                </div>
                <div class="widget-body padding-none">
                    <ul class="timeline-activity project list-unstyled">
						<?php 
							$query = "select pc.fecha,pc.id comentar, u.id usuario,u.nombre,pc.comentario, u.imagen, tc.nombre as tipo from proyectos_comentarios pc JOIN usuarios u on u.id = pc.id_usuario_fk JOIN Tipo_comentario tc on tc.id_tipo=pc.tipo where pc.id_proyecto_fk = ".$id;
							$comentarios = mysqli_query($esta, $query);
							while($comentar = mysqli_fetch_assoc($comentarios)){
						?> 
                        <li class="">
                            <span class="list-date">
								<span class="day"><?= date('d',strtotime($comentar['fecha'])) ?></span>
								<span class="month"><?= date('M',strtotime($comentar['fecha'])) ?></span>
							</span>
                            <div class="block block-inline">
                                <div class="caret"></div>
                                <div class="">
                                    <div id="prueba" class="media">
                                        <a class="pull-left" href="javascript:void(0)">
                                            <img class="media-object img-rounded hidden-xs" src="imagenes/<?= $comentar['imagen'] ?>" width="45" alt="..." />
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading innerR "><?= $comentar['nombre'] ?></a>
                                            <label class="label label-default"># <?= $comentar['usuario'] ?></label>
                                            <label class="label label-primary">
                                                <a href="javascript:void(0)" onclick="ver_submensaje(<?= $comentar['comentar'] ?>)" class="text-primary"><i class="fa fa-reply"></i></a>
                                            </label>
                                            <label class="label label-success">
                                                <div class="text-success"><i class="fa fa-envelope-o"></i> <?= $comentar['tipo'] ?> </div>
                                            </label>
                                            <div class="clearfix"></div>
                                            <?= $comentar['comentario'] ?>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
									<div id="mensaje<?= $comentar['comentar'] ?>" class="hidden">
										<?php 
											$query2 = "select pc.id,pc.subcomentario, u.imagen from proyectos_subcomentarios pc JOIN usuarios u on u.id = pc.id_usuario where pc.id_proyecto_comentario = ".$comentar['comentar'];
											$subcomentarios = mysqli_query($esta, $query2);
											while($subcomentar = mysqli_fetch_assoc($subcomentarios)){
										?> 
										<div class="media" Style="padding-left:45px">
											<a class="pull-left" href="#">
												<img class="media-object img-rounded hidden-xs" src="imagenes/<?= $subcomentar['imagen'] ?>" width="25" alt="..." />
											</a>
											<div class="media-body">
												<span><?= $subcomentar['subcomentario'] ?></span>
											</div>
										</div>
										<?php } ?>
										<div class="media" Style="padding-left:45px">
											<form action="/php/admin/pages/agregar_proyecto_subcomentario.php" method="post">
												<input type="hidden" name="proyecto" value="<?= $id ?>" />
												<input type="hidden" name="id_comentario" value="<?= $comentar['comentar'] ?>" />
												<input class="form-control" name="subcomentario" placeholder="Escribe tu respuesta..."/><button type="submit" class="btn-xs btn-success">Enviar</button>
											</form>
										</div>
									</div>
                                </div>
                            </div>
                        </li>
						<?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="widget widget-primary widget-small">
                <div class="widget-head">
                    <div class="heading">Project Overview</div>
                </div>
                <div class="widget-body">
                    <div class="row">
                        <div class="col-xs-5 text-muted-dark">
                            <div class="innerB half">Type</div>
                        </div>
                        <div class="col-xs-7 text-inverse">
                            <div class="innerB half">Template</div>
                        </div>
                        <div class="col-xs-5 text-muted-dark">
                            <div class="innerB half">Team</div>
                        </div>
                        <div class="col-xs-7 text-inverse">
                            <div class="innerB half">3 People</div>
                        </div>
                        <div class="col-xs-5 text-muted-dark">
                            <div class="innerB half">Pending</div>
                        </div>
                        <div class="col-xs-7 text-inverse">
                            <div class="innerB half">3 Milesones</div>
                        </div>
                        <div class="col-xs-5 text-muted-dark">
                            <div class="innerB half">Due</div>
                        </div>
                        <div class="col-xs-7 text-inverse">
                            <div class="innerB half">21 April 2014</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget widget-info widget-small">
                <div class="widget-head">
                    <div class="heading">Personas Asignadas</div> <a href="#modal_agregar_persona" data-toggle="modal" class="btn btn-success btn-xs pull-right">Agregar <i class="icon-add-symbol"></i></a>
                </div>
                <div class="widget-body padding-none">
                    
                    <?php while($renglon_proyecto_usuario = mysqli_fetch_assoc($renglones_proyecto_usuarios)){?>
                    <div class="media innerAll margin-none border-bottom">
                        <div class="pull-left">
                            <img src="./imagenes/<?php echo $renglon_proyecto_usuario['imagen'];?>" width="40" height="40" alt="people" class="img-circle media-object"/>
                        </div>
                        <div class="media-body innerT half"><a href="index.php?page=user&id_usuario=<?php echo $renglon_proyecto_usuario['id'];?>"><?php echo $renglon_proyecto_usuario['nombre'];?></a></div>
                    </div>
                    <?php }?>
                    
                    
                </div>
            </div>
            <div class="widget">
                <div class="widget-head">
                    <div class="heading">Tareas</div>
                </div>
                <div class="widget-body padding-none ">
                    <?php while($renglon_proyecto_tarea = mysqli_fetch_assoc($renglones_proyectos_tareas)){?>
                    <div class="innerAll half border-bottom">
                        <div class="pull-right text-muted"><?php echo $renglon_proyecto_tarea['fecha_inicio']; ?></div>
                        <a href="index.php?page=project_tasks&id_tarea=<?php echo $renglon_proyecto_tarea['id']; ?>" class="text-inverse"> <i class="fa fa-ticket"></i> <?php echo $renglon_proyecto_tarea['nombre']; ?></a>
                        <div class="clearfix"></div>
                    </div>
                    <?php }?>
                    
                    
                    
                    
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>

	
<!-- Modal -->
<div class="modal fade" id="modal-login">
	
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal heading -->
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title">Nueva Maquina de interes</h3>
			</div>
			<!-- // Modal heading END -->
			
			<!-- Modal body -->
			<div class="modal-body">
				<div class="innerAll">
					<div class="innerLR">
						<form class="form-horizontal" role="form" method="post" action="/php/admin/pages/agregar_proyecto_etapa.php">
    
    <div class="form-group">
        <label for="nombre">Nombre</label>

            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de etapa">
            <input type="hidden" class="form-control" id="id_proyecto" name="id_proyecto" value="<?php echo $id; ?>" placeholder="Nombre de etapa">
       
    </div>
     <div class="form-group">
                    <label for="fecha_entrega">Fecha de Entrega:</label>
                    <input class="form-control datepicker1" type="text" value="2013-02-14" id="fecha_entrega" name="fecha_entrega"  />
                </div>
    <div class="form-group">
                    <label for="prioridad">Prioridad:</label>
                    <select id="prioridad" name="prioridad">
                <option value="2">Urgente</option>
                <option value="1">Normal</option>
                <option value="0">Baja</option>
                
                </select>
        </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Agregar Maquina</button>
        </div>
    </div>
</form>




					</div>
				</div>
			</div>
			<!-- // Modal body END -->
	
		</div>
	</div>
	
</div>
<!-- // Modal END -->




<!-- Form Agregar Persona  -->

	
<!-- Modal -->
<div class="modal fade" id="modal_agregar_persona">
	
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal heading -->
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title">Login</h3>
			</div>
			<!-- // Modal heading END -->
			
			<!-- Modal body -->
			<div class="modal-body">
				<div class="innerAll">
					<div class="innerLR">
						<form class="form-horizontal" role="form" action="/php/admin/pages/agregar_proyecto_persona.php" method="post">
    
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
        <div class="col-sm-10">
            <select id="usuario" name="usuario">
                <?php while($renglon_usuario = mysqli_fetch_assoc($renglones_usuarios)){?>
            <option value="<?php echo $renglon_usuario['id']; ?>"><?php echo $renglon_usuario['correo']; ?></option>
                <?php }?>
            </select>
            
        </div>
    </div>
    
    
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Agregar</button>
        </div>
    </div>
</form>




					</div>
				</div>
			</div>
			<!-- // Modal body END -->
	
		</div>
	</div>
	
</div>
<!-- // Modal END -->

<script>
function ver_submensaje(id)
{
	if(	$("#mensaje"+id).hasClass("hidden"))
	{
		$('#mensaje'+id).removeClass('hidden');
	}
	else
	{
		$('#mensaje'+id).addClass('hidden');
	}
}
</script>


