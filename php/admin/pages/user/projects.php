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
<!-- Table -->
<table class="dynamicTable scrollVertical table table-primary">

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
<!--ID-->   <td>1</td>
<!--Proy--> <td><h4><a href="index.php?page=project_milestones&id=<?php echo $renglon_proyecto['id']; ?>" class="media-heading"><?php echo $renglon_proyecto['nombre']; ?></a></h4></td>
<!--entr--> <td><span><?php echo $renglon_proyecto['fecha_entrega']; ?></td>
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
        <div class="col-md-6">
            <h4 class="innerB">
                Tareas
            </h4>
<!-- Table -->
<table class="dynamicTable scrollVertical table table-primary">

    <!-- Table heading -->
    <thead>
        <tr>
            <th>ID</th>
            <th>Proyecto</th>
            <th>Entrega <i class="fa fa-clock-o text-muted"></i></th>
        </tr>
    </thead>
    <!-- // Table heading END -->
    
    <!-- Table body -->
    <tbody>
<?php while($renglon_tarea = mysqli_fetch_assoc($renglones_tareas)){?>
        <!-- Table row -->
        <tr class="gradeX">
<!--ID-->   <td>1</td>
<!--Proy--> <td><h4><a href="index.php?page=project_tasks&id_tarea=<?php echo $renglon_tarea['id']; ?>&cliente=1"> <?php echo $renglon_tarea['nombre']; ?></a></h4></td>
<!--entr--> <td><div class="innerR"> <span class="strong"></span> <span> <?php echo $renglon_tarea['fecha_fin']; ?></span> </div></td>
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