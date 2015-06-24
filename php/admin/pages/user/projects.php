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
            <a class="glyphicons lock" href="?page=user"> <i></i>Detalles Cuenta </a>
        </li>
        <li class="active">
            <a class="glyphicons clock" href="?page=user&amp;section=projects"> <i></i>Proyectos &amp; Tareas </a>
        </li>
        <li>
            <a class="glyphicons envelope" href="?page=user&amp;section=messages"> <i></i>Mensajes </a>
        </li>
        <li>
            <a class="glyphicons share_alt" href="?page=user&amp;section=history"> <i></i>Bitacora Log </a>
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
                                    <a href="index.php?page=project_milestones&id=<?php echo $renglon_proyecto['id']; ?>" class="media-heading"><?php echo $renglon_proyecto['nombre']; ?></a>
                                </h4>
                                <p class="text-muted"><?php echo $renglon_proyecto['descripcion_corta']; ?></p>
                                <div class="clearfix"></div>
                                <div class="">
                                    <span class="strong"> Due:</span> 
                                    <span> <i class="fa fa-clock-o text-muted"></i> <?php echo $renglon_proyecto['fecha_entrega']; ?></span>
                                </div>
                                <div class="">
                                    <span class="pull-left strong">Progress:</span> 
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
                Tareas
            </h4>
            <?php while($renglon_tarea = mysqli_fetch_assoc($renglones_tareas)){?>
            <div class="widget widget-primary widget-small">
                <div class="media innerAll half bg-white">
                    <div class="pull-left h1 media-object hidden-xs margin-none innerR"> <i class=" icon-alarm-clock icon-faded fa-fw"></i> </div>
                    <div class="pull-right text-right">
                        <!--<span class="label label-danger">Urgent</span> -->
                        
                    </div>
                    <div class="media-body">
                        <h4>
                            <a href="index.php?page=project_tasks&id_tarea=<?php echo $renglon_tarea['id']; ?>" data-toggle="collapse"> <?php echo $renglon_tarea['nombre']; ?></a>
                        </h4>
                        <div class="innerR"> <span class="strong">Entrega: </span> <span> <?php echo $renglon_tarea['fecha_fin']; ?></span> </div>
                    </div>
                </div>
                
            </div>
            <?php }?>
            
        </div>
    </div>
</div>