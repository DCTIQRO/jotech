<?php

require_once('esta.php');

extract($_POST);



$sql = "select * from clientes";
$renglones_clientes = mysqli_query($esta, $sql);

    
  


?>
<div class="innerLR">
    <h1 class="pull-left">
        Clientes &nbsp; 
        
    </h1>
    <div class="pull-right innerT">
        <div class="btn-group">
            <a href="index.php?page=projects_list" class="btn btn-inverse"><i class="fa fa-list"></i></a>
            <a href="index.php?page=projects_grid" class="btn btn-default filled"><i class="fa fa-th"></i></a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="innerTB">
        <?php while($renglon_cliente = mysqli_fetch_assoc($renglones_clientes)){?>
        <div class="widget widget-success widget-small ">
            <div class="widget-body padding-none">
                <div class=" media innerAll overflow-visible margin-none">
                    <div class="pull-left innerR half hidden-xs"> <i class="icon-tv-play fa-4x icon-faded"></i> </div>
                    
                    <div class="media-body">
                        <h4>
                            <a href="index.php?page=cliente&id=<?php echo $renglon_cliente['id']; ?>" class="media-heading"><?php echo $renglon_cliente['nombre']; ?></a>
                        </h4>
                        <p class="text-muted"><?php echo $renglon_cliente['website']; ?></p>
                        <div class="clearfix"></div>
                        
                        <div class="widget widget-none innerR innerB half margin-slim pull-left">
                            <span class="strong"> Etiquetas:</span> 
                            <span class="strong">
                                <a href="#"><span class="label label-primary">HTML</span></a>
                                <a href="#"><span class="label label-warning"> CSS</span></a>
                            </span>
                        </div>
                        <div class="widget widget-none innerR innerB half margin-slim pull-left">
                            <span class="pull-left strong">Estatus:</span> 
                            <div class="progress progress-mini set-width">
                                <div class="progress-bar progress-bar-primary" style="width: 50%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
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