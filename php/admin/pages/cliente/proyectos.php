<?php

session_start();
extract($_GET);
$id_usuario=$_SESSION['id_usuario_jotech'];

if(isset($_GET['id_usuario'])){

$id_usuario=$_GET['id_usuario'];
}

require_once( getcwd().'/pages/esta.php');

$sql = "select t1.*,t2.tipo as tipo_proyecto from proyectos t1, tipo_proyectos t2 where t1.id in (select id_proyecto_fk from proyectos_usuarios where id_usuario_fk=$id_usuario) and t1.tipo=t2.id";

//echo $sql;

$renglones_proyectos = mysqli_query($esta, $sql);



$sql = "select * from proyectos_tareas where id in (select id_tarea_fk from tareas_usuarios where id_usuario_fk=$id_usuario)";

//echo $sql;

$renglones_tareas = mysqli_query($esta, $sql);



?>
<!-- Tabs Heading -->
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
                <?php while($renglon_proyecto = mysqli_fetch_assoc($renglones_proyectos)){?>
                <div class="widget widget-none bg-white ">
                    <div class="widget-body padding-none">
                        <div class=" media innerAll overflow-visible margin-none">
                            <div class="pull-left innerR half hidden-xs"> <i class="icon-tv-play fa-4x icon-faded"></i> </div>
                            <div class="media-body">
                                <h4>
                                    <a href="index.php?page=project_milestones" class="media-heading"><?php echo $renglon_proyecto['nombre']; ?></a>
                                </h4>
                                <p class="text-muted"><?php echo $renglon_proyecto['descripcion_corta']; ?></p>
                                <div class="clearfix"></div>
                                <div class="">
                                    <span class="strong"> Entrega:</span> 
                                    <span> <i class="fa fa-clock-o text-muted"></i> <?php echo $renglon_proyecto['fecha_entrega']; ?></span>
                                </div>
                                <div class="">
                                    <span class="pull-left strong">Progreso:</span> 
                                    <div class="progress progress-mini set-width">
                                        <div class="progress-bar progress-bar-primary" style="width: <?php echo $renglon_proyecto['progreso']; ?>%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                
                
                
                
                
            </div>
        </div>
        <div class="col-md-6">
            <h4 class="innerB">
                Milestones &amp; Tasks
            </h4>
            <div class="widget widget-primary widget-small">
                <div class="media innerAll half bg-white">
                    <div class="pull-left h1 media-object hidden-xs margin-none innerR"> <i class=" icon-alarm-clock icon-faded fa-fw"></i> </div>
                    <div class="pull-right text-right">
                        <span class="label label-danger">Urgent</span> 
                        <div class="strong text-muted innerT half"> 4 Tasks </div>
                    </div>
                    <div class="media-body">
                        <h4>
                            <a href="#task1" data-toggle="collapse"> Step 1 of HTML</a>
                        </h4>
                        <div class="innerR"> <span class="strong">Due: </span> <span> 21 April 2014</span> </div>
                    </div>
                </div>
                <ul class="list-group border-top collapse in" id="task1">
                    <li class="list-group-item">
                        <a href="index.php?page=project_tasks" class="text-regular strong"><i class="fa fa-check-square-o icon-faded fa-fw"></i> My specific task</a>
                    </li>
                    <li class="list-group-item">
                        <a href="index.php?page=project_tasks" class="text-regular strong"><i class="fa fa-check-square-o icon-faded fa-fw"></i> My specific task</a>
                    </li>
                </ul>
            </div>
            <div class="widget widget-warning widget-small">
                <div class="media innerAll half bg-white">
                    <div class="pull-left h1 media-object hidden-xs margin-none innerR"> <i class=" icon-alarm-clock icon-faded fa-fw"></i> </div>
                    <div class="pull-right text-right">
                        <span class="label label-warning">Normal</span> 
                        <div class="strong text-muted innerT half"> 4 Tasks </div>
                    </div>
                    <div class="media-body">
                        <h4>
                            <a href="#task2" data-toggle="collapse">Complete Dashboard Design</a>
                        </h4>
                        <div class="innerR"> <span class="strong">Due: </span> <span> 21 April 2014</span> </div>
                    </div>
                </div>
                <ul class="list-group border-top collapse" id="task2">
                    <li class="list-group-item">
                        <a href="index.php?page=project_tasks" class="text-regular strong"><i class="fa fa-check-square-o icon-faded fa-fw"></i> Task Heading Goes Here</a>
                    </li>
                    <li class="list-group-item">
                        <a href="index.php?page=project_tasks" class="text-regular strong"><i class="fa fa-check-square-o icon-faded fa-fw"></i> Task Heading Goes Here</a>
                    </li>
                    <li class="list-group-item">
                        <a href="index.php?page=project_tasks" class="text-regular strong"><i class="fa fa-check-square-o text-success fa-fw"></i> Task Heading Goes Here</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>