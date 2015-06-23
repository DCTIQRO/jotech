<?php

require_once( getcwd().'/pages/esta.php');

extract($_GET);



$sql = "select * from proyectos order by fecha_insercion desc";
$renglones_proyectos = mysqli_query($esta, $sql);



//echo $_SERVER[''];

?>
<div class="innerLR">
    <h1 class="pull-left">
        Projectos &nbsp; 
        <a href="index.php?page=project_milestones" class="btn btn-success">Nuevo Proyecto <i class="icon-add-symbol"></i> </a>
    </h1>
    <div class="pull-right innerT">
        <div class="btn-group">
            <a href="index.php?page=projects_list" class="btn btn-default filled"><i class="fa fa-list"></i></a>
            <a href="index.php?page=projects_grid" class="btn btn-inverse"><i class="fa fa-th"></i></a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="innerTB">
        <div class="row">
			<?php while($renglon_proyecto = mysqli_fetch_assoc($renglones_proyectos)){?> 
            <div class="col-md-6">
                <div class="widget widget-primary widget-small">
                    <div class="innerAll">
                        <div class="media">
                            <div class="pull-left innerR half"> <i class="icon-tv fa-4x icon-faded"></i> </div>
                            <div class="media-body ">
                                <h4>
                                    <a href="index.php?page=project_milestones&id=<?php echo $renglon_proyecto['id'];?>" class="media-heading"><?php echo $renglon_proyecto['nombre'];?></a>
                                </h4>
                                <p class="margin-none text-muted"><?php echo $renglon_proyecto['descripcion_corta'];?></p>
                            </div>
                        </div>
                        <form class="form-horizontal" role="form">
                            <div class="widget widget-none bg-gray innerAll half margin-slim">
                                <div class="row">
                                    <label class="col-sm-2 control-label text-left">Progreso:</label>
                                    <div class="col-md-4 col-sm-6 col-xs-10 innerT half">
                                        <div class="progress progress-mini">
											<?php 
												$color="";
												if($renglon_proyecto['progreso'] == 100){$color="success";}
												if($renglon_proyecto['progreso'] >50 && $renglon_proyecto['progreso'] <100){$color="info";}
												if($renglon_proyecto['progreso'] >0 && $renglon_proyecto['progreso'] <50){$color="primary";}
											?>
                                            <div class="progress-bar progress-bar-<?= $color ?>" style="width: <?php echo $renglon_proyecto['progreso'];?>%;"></div>
                                        </div>
                                    </div>
                                    <label class="control-label text-left strong text-muted-dark"><?php echo $renglon_proyecto['progreso'];?> &#37;</label>
                                </div>
                            </div>
                            <div class="widget widget-none bg-gray innerAll half margin-slim">
                                <div class="row">
                                    <label class="col-sm-2 control-label text-left padding-top-none">Tags:</label>
                                    <div class="col-md-4 col-sm-6 col-xs-10 strong">
										<?php 
											$query = "select * from proyectos_etiquetas where id_proyecto_fk = ".$renglon_proyecto['id'];
											$tags = mysqli_query($esta, $query);
											while($tag = mysqli_fetch_assoc($tags)){
										?> 
                                        <a href=""><span class="label label-primary"><?= $tag['etiqueta'] ?></span></a>
										<?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget-none bg-gray innerAll half margin-slim">
                                <div class="row">
                                    <label class="col-sm-2 control-label text-left">Fecha:</label>
                                    <div class="col-sm-10">
                                        <p class="lead margin-none"><?= $renglon_proyecto['fecha_inicio']." - ".$renglon_proyecto['fecha_entrega']." " ?><span class="text-small text-muted-dark strong"> (inicio-entrega)</span> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget-none bg-gray innerAll half margin-slim">
                                <div class="row">
                                    <label class="col-sm-2 control-label text-left innerT">Asignados:</label>
                                    <div class="col-md-10 col-sm-6 col-xs-10">
									<?php 
										$query2 = "select * from proyectos_usuarios pu JOIN usuarios u on pu.id_usuario_fk=u.id where pu.id_proyecto_fk = ".$renglon_proyecto['id'];
										$users = mysqli_query($esta, $query2);
										while($user = mysqli_fetch_assoc($users)){
									?> 
                                        <a href="">
                                            <img src="imagenes/<?= $user['imagen'] ?>" alt="photo" class="img-circle" style="width:40px;" data-toggle="tooltip" data-placement="top" data-title="<?= $user['nombre'] ?>">
                                        </a>
										<?php } ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
			<?php } ?>
        </div>
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