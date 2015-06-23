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
        <a href="index.php?page=new_project" class="btn btn-success">Agregar Proyecto <i class="icon-add-symbol"></i> </a>
    </h1>
    <div class="pull-right innerT">
        <div class="btn-group">
            <a href="index.php?page=projects_list" class="btn btn-inverse"><i class="fa fa-list"></i></a>
            <a href="index.php?page=projects_grid" class="btn btn-default filled"><i class="fa fa-th"></i></a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="innerTB">
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