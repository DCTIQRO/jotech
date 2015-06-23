<?php

require_once( getcwd().'/pages/esta.php');

extract($_GET);


session_start();

$id=$_SESSION['id_proyecto'];

$sql = "select t1.*,t2.tipo as tipo_proyecto from proyectos t1, tipo_proyectos t2 where t1.id=$id and t1.tipo=t2.id";

//echo $sql;

$renglones_proyectos = mysqli_query($esta, $sql);
$renglon_proyecto = mysqli_fetch_assoc($renglones_proyectos);





$sql = "select * from proyectos_tareas where id=$id_tarea";

//echo $sql;

$renglones_proyectos_tareas = mysqli_query($esta, $sql);
$renglon_proyecto_tarea = mysqli_fetch_assoc($renglones_proyectos_tareas);

//echo $_SERVER[''];

?>
<div class="innerLR">
    <div class="innerT pull-right"> <a href="index.php?page=project_milestones" class="btn btn-primary">Back to project</a> </div>
    <h1>
        <?php echo $renglon_proyecto_tarea['nombre'];?> 
    </h1>
    <div class="separator"></div>
    <div class="row">
        <div class="col-md-8">
            <div class="widget widget-primary widget-small">
                <div class="widget-body">
                    <p class="lead"><?php echo nl2br($renglon_proyecto_tarea['descripcion']);?></p>
                    <hr/>
                    <div class="innerT">
                        <a href="#" class="btn btn-success btn-xs pull-right">Agregar <i class="icon-add-symbol"></i></a>
                        <h4 class="strong innerB half">
                            Checklist
                        </h4>
                        <ul class="list-group bg-gray margin-none">
                            <li class="list-group-item">
                                <a href="#" class="close"><i class="fa fa-times"></i></a>
                                <label class="checkbox-custom checkbox-custom-2">
                                    <input type="checkbox" name="checkbox" checked="checked">
                                    <i class="fa fa-check-square-o checked"></i> <span>Burn Concept</span> 
                                </label>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="close"><i class="fa fa-times"></i></a>
                                <label class="checkbox-custom checkbox-custom-2">
                                    <input type="checkbox" name="checkbox" />
                                    <i class="fa fa-check-square-o"></i> Finish HTML/CSS 
                                </label>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="close"><i class="fa fa-times"></i></a>
                                <label class="checkbox-custom checkbox-custom-2">
                                    <input type="checkbox" name="checkbox" checked="checked">
                                    <i class="fa fa-check-square-o checked"></i> <span>Burn Concept</span> 
                                </label>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="close"><i class="fa fa-times"></i></a>
                                <label class="checkbox-custom checkbox-custom-2">
                                    <input type="checkbox" name="checkbox" checked="checked">
                                    <i class="fa fa-check-square-o checked"></i> <span>Finish HTML/CSS</span> 
                                </label>
                            </li>
                        </ul>
                        <!-- END CHECKLIST -->
                    </div>
                    <!-- END ROW CHECKLIST -->
                </div>
            </div>
            <div class="widget widget-none">
                <div class="widget-head"><strong>Discussions</strong></div>
                <div class="widget-body">
                    <!-- Comments -->
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Write a comment">
                        <span class="input-group-btn">
                            <a class="btn btn-primary rounded-none"><i class="fa fa-pencil"></i> Comment</a>
                        </span>
                    </div>
                    <!-- End Search Bar -->
                    <div class="separator"></div>
                    <div class="widget border-all widget-none">
                        <div class="media innerAll half">
                            <div class="text-center pull-left hidden-xs"> <i class="fa icon-user-1 fa-3x innerT half icon-faded"></i> </div>
                            <div class="media-body innerT half">
                                <div class="strong"> <a href="">mosaicpro</a> <span class="text-muted text-small"> 6 hrs ago </span> </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="" class="strong text-small text-muted">reply <i class="fa fa-reply"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="widget border-all widget-none">
                        <div class="media innerAll half">
                            <div class="text-center pull-left hidden-xs"> <i class="fa icon-user-1 fa-3x innerT half icon-faded"></i> </div>
                            <div class="media-body innerT half">
                                <div class="strong"> <a href="">JohnMe</a> <span class="text-muted text-small"> 6 hrs ago </span> </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="" class="strong text-small text-muted">reply <i class="fa fa-reply"></i></a>
                                <div class="media">
                                    <img src="../assets//images/people/50/22.jpg" alt="" class="pull-left img-circle innerT half">
                                    <div class="media-body innerT half">
                                        <div class="strong"> <a href="">mosaicpro</a> <span class="text-muted text-small"> 6 hrs ago </span> </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis quo recusandae adipisci maxime quas.</p>
                                        <a href="" class="strong text-small text-muted">reply <i class="fa fa-reply"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget border-all widget-none">
                        <div class="media innerAll half">
                            <div class="text-center pull-left hidden-xs"> <i class="fa icon-user-1 fa-3x innerT half icon-faded"></i> </div>
                            <div class="media-body innerT half">
                                <div class="strong"> <a href="">ThinkSM</a> <span class="text-muted text-small"> 6 hrs ago </span> </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="" class="strong text-small text-muted">reply <i class="fa fa-reply"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- // END Comments -->
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="widget widget-info widget-small">
                <div class="widget-body">
                    <h4 class="strong innerB half">
                        Files 
                    </h4>
                    <!-- FILES UPLOADED START -->
                    <a href="#" class="pull-left innerR innerB half">
                        <img data-src="holder.js/50x50" alt="...">
                    </a>
                    <!-- FILES UPLOADED START -->
                    <a href="#" class="pull-left innerR innerB half">
                        <img data-src="holder.js/50x50" alt="...">
                    </a>
                    <!-- FILES UPLOADED START -->
                    <a href="#" class="pull-left innerR innerB half">
                        <img data-src="holder.js/50x50" alt="...">
                    </a>
                    <!-- FILES UPLOADED START -->
                    <a href="#" class="pull-left innerR innerB half">
                        <img data-src="holder.js/50x50" alt="...">
                    </a>
                    <!-- FILES UPLOADED START -->
                    <a href="#" class="pull-left innerR innerB half">
                        <img data-src="holder.js/50x50" alt="...">
                    </a>
                    <!-- FILES UPLOADED START -->
                    <a href="#" class="pull-left innerR innerB half">
                        <img data-src="holder.js/50x50" alt="...">
                    </a>
                    <!-- FILES UPLOADED START -->
                    <a href="#" class="pull-left innerR innerB half">
                        <img data-src="holder.js/50x50" alt="...">
                    </a>
                    <!-- FILES UPLOADED START -->
                    <a href="#" class="pull-left innerR innerB half">
                        <img data-src="holder.js/50x50" alt="...">
                    </a>
                    <!-- FILES UPLOADED START -->
                    <a href="#" class="pull-left innerR innerB half">
                        <img data-src="holder.js/50x50" alt="...">
                    </a>
                    <!-- FILES UPLOADED START -->
                    <a href="#" class="pull-left innerR innerB half">
                        <img data-src="holder.js/50x50" alt="...">
                    </a>
                    <a href="#" class="btn-add-files"> <i class="fa fa-plus fa-fw"></i> </a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="widget widget-primary widget-small">
                <div class="widget-head">
                    <div class="heading">Proyecto</div>
                </div>
                <div class="widget-body">
                    <div class="row">
                        <div class="col-xs-5 text-muted-dark">
                            <div class="innerB half">Tipo</div>
                        </div>
                        <div class="col-xs-7 text-inverse">
                            <div class="innerB half"><?php echo $renglon_proyecto['tipo_proyecto'];?></div>
                        </div>
                        <div class="col-xs-5 text-muted-dark">
                            <div class="innerB half">Team</div>
                        </div>
                        <div class="col-xs-7 text-inverse">
                            <div class="innerB half">3 People</div>
                        </div>
                        
                        
                        <div class="col-xs-5 text-muted-dark">
                            <div class="innerB half">Entrega</div>
                        </div>
                        <div class="col-xs-7 text-inverse">
                            <div class="innerB half"><?php echo $renglon_proyecto['fecha_entrega'];?></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--
            <div class="widget">
                <div class="widget-head"> <strong>Milestone</strong> </div>
                <div class="widget-body">
                    <h4>
                        <a href="#task2" data-toggle="collapse">Complete Dashboard Design</a>
                    </h4>
                    <div class="innerR"> <span class="strong">Due: </span> <span> 21 April 2014</span> </div>
                </div>
            </div>
-->
        </div>
    </div>
</div>