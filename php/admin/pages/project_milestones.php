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
                        <li class="">
                            <span class="list-date">
<span class="day">16</span>
<span class="month">March</span>
</span>
                            <div class="block block-inline">
                                <div class="caret"></div>
                                <div class="">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded hidden-xs" src="../assets/images/people/50/1.jpg" width="45" alt="..." />
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading innerR ">Suzanne Marie</a>
                                            <label class="label label-default"># 30</label>
                                            <label class="label label-primary">
                                                <a href="#" class="text-primary"><i class="fa fa-reply"></i></a>
                                            </label>
                                            <label class="label label-success">
                                                <a href="" class="text-success"><i class="fa fa-lock"></i> Completed </a>
                                            </label>
                                            <div class="clearfix"></div>
                                            <strong>Milestone Title</strong> Lorem ipsum dolor sit amet, consectetur repellendus amet distinctio inventore possimus cum dicta enim!.. 
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <span class="list-date">
<span class="day">14</span>
<span class="month">March</span>
</span>
                            <div class="block block-inline">
                                <div class="caret"></div>
                                <div class="">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded hidden-xs" src="../assets/images/people/50/2.jpg" width="45" alt="..." />
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading innerR ">Adrian Demian</a>
                                            <label class="label label-default"># 100</label>
                                            <label class="label label-primary">
                                                <a href="#" class="text-primary"><i class="fa fa-reply"></i></a>
                                            </label>
                                            <label class="label label-danger">Important</label>
                                            <div class="clearfix"></div>
                                            <strong>Milestone Title</strong> Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing elit</a>. Fugiat molestiae qui fuga .. 
                                            <div class="clearfix"></div>
                                            <div class="attachement innerT">
                                                <a href="#" class="glyphicons-filetype doc"><i></i></a>
                                                <a href="#" class="glyphicons-filetype pdf"><i></i></a>
                                                <a href="#" class="glyphicons-filetype rtf"><i></i></a>
                                                <a href="#" class="glyphicons-filetype csv"><i></i></a>
                                                <a href="#" class="glyphicons-filetype ppt"><i></i></a>
                                                <a href="#" class="glyphicons-filetype html"><i></i></a>
                                                <a href="#" class="glyphicons-filetype zip"><i></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <span class="list-date">
<span class="day">29</span>
<span class="month">March</span>
</span>
                            <div class="block block-inline">
                                <div class="caret"></div>
                                <div class="">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded hidden-xs" src="../assets/images/people/50/3.jpg" width="45" alt="..." />
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading innerR ">Mary Dawson</a>
                                            <label class="label label-default"># 74</label>
                                            <label class="label label-primary">
                                                <a href="#" class="text-primary"><i class="fa fa-reply"></i></a>
                                            </label>
                                            <label class="label label-success">
                                                <a href="" class="text-success"><i class="fa fa-lock"></i> Completed </a>
                                            </label>
                                            <div class="clearfix"></div>
                                            <strong>Milestone Title</strong> Lorem ipsum dolor sit amet, consectetur repellendus amet distinctio inventore possimus cum dicta enim!.. 
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <span class="list-date">
<span class="day">11</span>
<span class="month">March</span>
</span>
                            <div class="block block-inline">
                                <div class="caret"></div>
                                <div class="">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded hidden-xs" src="../assets/images/people/50/4.jpg" width="45" alt="..." />
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading innerR ">John Carsten</a>
                                            <label class="label label-default"># 75</label>
                                            <label class="label label-primary">
                                                <a href="#" class="text-primary"><i class="fa fa-reply"></i></a>
                                            </label>
                                            <label class="label label-danger">Important</label>
                                            <div class="clearfix"></div>
                                            <strong>Milestone Title</strong> Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing elit</a>. Fugiat molestiae qui fuga .. 
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <span class="list-date">
<span class="day">11</span>
<span class="month">March</span>
</span>
                            <div class="block block-inline">
                                <div class="caret"></div>
                                <div class="">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded hidden-xs" src="../assets/images/people/50/5.jpg" width="45" alt="..." />
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading innerR ">Suzanne Marie</a>
                                            <label class="label label-default"># 11</label>
                                            <label class="label label-primary">
                                                <a href="#" class="text-primary"><i class="fa fa-reply"></i></a>
                                            </label>
                                            <label class="label label-success">
                                                <a href="" class="text-success"><i class="fa fa-lock"></i> Completed </a>
                                            </label>
                                            <div class="clearfix"></div>
                                            <strong>Milestone Title</strong> Lorem ipsum dolor sit amet, consectetur repellendus amet distinctio inventore possimus cum dicta enim!.. 
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <span class="list-date">
<span class="day">25</span>
<span class="month">February</span>
</span>
                            <div class="block block-inline">
                                <div class="caret"></div>
                                <div class="">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded hidden-xs" src="../assets/images/people/50/6.jpg" width="45" alt="..." />
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading innerR ">Bogdan Laza</a>
                                            <label class="label label-default"># 76</label>
                                            <label class="label label-primary">
                                                <a href="#" class="text-primary"><i class="fa fa-reply"></i></a>
                                            </label>
                                            <label class="label label-danger">Important</label>
                                            <div class="clearfix"></div>
                                            <strong>Milestone Title</strong> Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing elit</a>. Fugiat molestiae qui fuga .. 
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <span class="list-date">
<span class="day">30</span>
<span class="month">February</span>
</span>
                            <div class="block block-inline">
                                <div class="caret"></div>
                                <div class="">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded hidden-xs" src="../assets/images/people/50/7.jpg" width="45" alt="..." />
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading innerR ">Stephanie</a>
                                            <label class="label label-default"># 59</label>
                                            <label class="label label-primary">
                                                <a href="#" class="text-primary"><i class="fa fa-reply"></i></a>
                                            </label>
                                            <label class="label label-success">
                                                <a href="" class="text-success"><i class="fa fa-lock"></i> Completed </a>
                                            </label>
                                            <div class="clearfix"></div>
                                            <strong>Milestone Title</strong> Lorem ipsum dolor sit amet, consectetur repellendus amet distinctio inventore possimus cum dicta enim!.. 
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <span class="list-date">
<span class="day">25</span>
<span class="month">February</span>
</span>
                            <div class="block block-inline">
                                <div class="caret"></div>
                                <div class="">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded hidden-xs" src="../assets/images/people/50/8.jpg" width="45" alt="..." />
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading innerR ">John Carsten</a>
                                            <label class="label label-default"># 21</label>
                                            <label class="label label-primary">
                                                <a href="#" class="text-primary"><i class="fa fa-reply"></i></a>
                                            </label>
                                            <label class="label label-danger">Important</label>
                                            <div class="clearfix"></div>
                                            <strong>Milestone Title</strong> Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing elit</a>. Fugiat molestiae qui fuga .. 
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <span class="list-date">
<span class="day">14</span>
<span class="month">February</span>
</span>
                            <div class="block block-inline">
                                <div class="caret"></div>
                                <div class="">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded hidden-xs" src="../assets/images/people/50/9.jpg" width="45" alt="..." />
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading innerR ">girl381</a>
                                            <label class="label label-default"># 98</label>
                                            <label class="label label-primary">
                                                <a href="#" class="text-primary"><i class="fa fa-reply"></i></a>
                                            </label>
                                            <label class="label label-success">
                                                <a href="" class="text-success"><i class="fa fa-lock"></i> Completed </a>
                                            </label>
                                            <div class="clearfix"></div>
                                            <strong>Milestone Title</strong> Lorem ipsum dolor sit amet, consectetur repellendus amet distinctio inventore possimus cum dicta enim!.. 
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <span class="list-date">
<span class="day">27</span>
<span class="month">February</span>
</span>
                            <div class="block block-inline">
                                <div class="caret"></div>
                                <div class="">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded hidden-xs" src="../assets/images/people/50/10.jpg" width="45" alt="..." />
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading innerR ">Bogdan Laza</a>
                                            <label class="label label-default"># 65</label>
                                            <label class="label label-primary">
                                                <a href="#" class="text-primary"><i class="fa fa-reply"></i></a>
                                            </label>
                                            <label class="label label-danger">Important</label>
                                            <div class="clearfix"></div>
                                            <strong>Milestone Title</strong> Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing elit</a>. Fugiat molestiae qui fuga .. 
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <span class="list-date">
<span class="day">28</span>
<span class="month">February</span>
</span>
                            <div class="block block-inline">
                                <div class="caret"></div>
                                <div class="">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded hidden-xs" src="../assets/images/people/50/11.jpg" width="45" alt="..." />
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading innerR ">Suzanne Marie</a>
                                            <label class="label label-default"># 58</label>
                                            <label class="label label-primary">
                                                <a href="#" class="text-primary"><i class="fa fa-reply"></i></a>
                                            </label>
                                            <label class="label label-success">
                                                <a href="" class="text-success"><i class="fa fa-lock"></i> Completed </a>
                                            </label>
                                            <div class="clearfix"></div>
                                            <strong>Milestone Title</strong> Lorem ipsum dolor sit amet, consectetur repellendus amet distinctio inventore possimus cum dicta enim!.. 
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <span class="list-date">
<span class="day">15</span>
<span class="month">February</span>
</span>
                            <div class="block block-inline">
                                <div class="caret"></div>
                                <div class="">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded hidden-xs" src="../assets/images/people/50/12.jpg" width="45" alt="..." />
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading innerR ">Suzanne Marie</a>
                                            <label class="label label-default"># 55</label>
                                            <label class="label label-primary">
                                                <a href="#" class="text-primary"><i class="fa fa-reply"></i></a>
                                            </label>
                                            <label class="label label-danger">Important</label>
                                            <div class="clearfix"></div>
                                            <strong>Milestone Title</strong> Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing elit</a>. Fugiat molestiae qui fuga .. 
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <span class="list-date">
<span class="day">28</span>
<span class="month">February</span>
</span>
                            <div class="block block-inline">
                                <div class="caret"></div>
                                <div class="">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded hidden-xs" src="../assets/images/people/50/13.jpg" width="45" alt="..." />
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading innerR ">John Carsten</a>
                                            <label class="label label-default"># 97</label>
                                            <label class="label label-primary">
                                                <a href="#" class="text-primary"><i class="fa fa-reply"></i></a>
                                            </label>
                                            <label class="label label-success">
                                                <a href="" class="text-success"><i class="fa fa-lock"></i> Completed </a>
                                            </label>
                                            <div class="clearfix"></div>
                                            <strong>Milestone Title</strong> Lorem ipsum dolor sit amet, consectetur repellendus amet distinctio inventore possimus cum dicta enim!.. 
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
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
                    <div class="heading">Assigned Team Members</div>
                </div>
                <div class="widget-body padding-none">
                    <div class="media innerAll margin-none border-bottom">
                        <div class="pull-left">
                            <img src="../assets/images/people/50/2.jpg" width="40" alt="people" class="img-circle media-object"/>
                        </div>
                        <div class="media-body innerT half"><a href="#">Adrian Demian</a></div>
                    </div>
                    <div class="media innerAll margin-none border-bottom">
                        <div class="pull-left">
                            <img src="../assets/images/people/50/12.jpg" width="40" alt="people" class="img-circle media-object"/>
                        </div>
                        <div class="media-body innerT half"><a href="#">Jamie Doe</a></div>
                    </div>
                    <div class="media innerAll margin-none">
                        <div class="pull-left">
                            <img src="../assets/images/people/50/10.jpg" width="40" alt="people" class="img-circle media-object"/>
                        </div>
                        <div class="media-body innerT half"><a href="#">Bogdan Laza</a></div>
                    </div>
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
            <button type="submit" class="btn btn-primary">Agregar Etapa</button>
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


