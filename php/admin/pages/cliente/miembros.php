<?php

require_once( getcwd().'/pages/esta.php');

extract($_GET);



$sql = "select * from miembros where id_cliente_fk=".$_GET['id'];
$renglones_miembros = mysqli_query($esta, $sql);

//echo $_SERVER[''];

?>
<!-- Tabs Heading -->
<div class="widget-head bg-background text-center">
    <ul>
        <li>
            <a class="glyphicons lock" href="?page=cliente&id=<?php echo $_GET['id']; ?>"> <i></i>Detalles Cliente </a>
        </li>
        <li>
            <a class="glyphicons clock" href="?page=cliente&amp;section=proyectos&id=<?php echo $_GET['id']; ?>"> <i></i>Proyectos &amp; Tareas </a>
        </li>
        <li class="active">
            <a class="glyphicons envelope" href="?page=cliente&amp;section=miembros&id=<?php echo $_GET['id']; ?>"> <i></i>Miembros </a>
        </li>
        <li>
            <a class="glyphicons share_alt" href="?page=cliente&amp;section=bitacora&id=<?php echo $_GET['id']; ?>"> <i></i>Bitacora</a>
        </li>
		<li>
            <a class="glyphicons user" href="?page=cliente&amp;section=contactos&id=<?php echo $_GET['id']; ?>"> <i></i>Contactos</a>
        </li>
		<li>
            <a class="glyphicons lock" href="?page=cliente&amp;section=permisos&id=<?php echo $_GET['id']; ?>"> <i></i>Permisos</a>
        </li>
        <li>
            <a class="glyphicons lock" href="?page=cliente&amp;section=nuevo_proyecto&id=<?php echo $_GET['id']; ?>"> <i></i>Nuevo Proyecto</a>
    </ul>
</div>
<!-- // Tabs Heading END -->
<div class="widget-body">
    <a class="btn btn-success pull-right" href="?page=nuevo_miembro&cliente_id=<?php echo $_GET['id']; ?>"><i class="fa fa-pencil fa-fw"></i> Nuevo Miembro</a>
    <h4>
        Miembros
    </h4>
    <div class="separator"></div>
    <!-- MESSAGES START -->
    <div class="row row-merge bg-white">
        
        <!-- // END col -->
        <div class="col-lg-8 col-md-6 hidden-sm hidden-xs " id="email_details">
            <div class="col-table bg-white">
                
                <div class="col-table-row">
                    <div class="col-app col-unscrollable">
                        <div class="col-app">
                            
                            
                            
                            <div class="col-separator-h box"></div>
                            <?php while($renglon_miembro = mysqli_fetch_assoc($renglones_miembros)){?>
                            <div class="innerAll border-bottom">
                                <div class="media innerB">
                                    <img src="../assets/images/people/80/3.jpg" alt="" width="50" class="pull-left" />
                                    <div class="media-body innerT half">
                                        <small class="text-muted pull-right"><?php echo $renglon_miembro['fecha_registro']; ?></small>
                                        <h5 class="text-muted-darker">
                                            <?php echo $renglon_miembro['nombre']; ?> <span class="text-weight-regular">(<?php echo $renglon_miembro['correo']; ?>)</span>
                                        </h5>
                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <style>
                                
                                    .miembro_tipo1{
background-image: url(pages/cliente/tipo1.png);
background-repeat: no-repeat;
background-position: 0;
padding-left: 1.5em;
display:inline;
                                        height:18px;
                                        width:23px;
}
                                    
                                    .miembro_tipo2{
background-image: url(pages/cliente/tipo2.png);
background-repeat: no-repeat;
background-position: 0;
padding-left: 1.5em;
display:inline;
                                        height:18px;
                                        width:23px;
}
                                    
                                    .miembro_tipo3{
background-image: url(pages/cliente/tipo3.png);
background-repeat: no-repeat;
background-position: 0;
padding-left: 1.5em;
display:inline;
                                        height:18px;
                                        width:23px;
}
                                    
                                    .miembro_tipo4{
background-image: url(pages/cliente/tipo4.png);
background-repeat: no-repeat;
background-position: 0;
padding-left: 1.5em;
display:inline;
                                        height:18px;
                                        width:23px;
}
                                    
                                    
                                    
                                </style>
                                <h4 class="margin-none">
                                    <i class="miembro_tipo<?php echo $renglon_miembro['tipo1']; ?>"></i><i class="miembro_tipo<?php echo $renglon_miembro['tipo2']; ?>"></i> <?php echo $renglon_miembro['puesto']; ?>
                                </h4>
                            </div>
                            <?php }?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col 2 -->
    </div>
    <!-- // END MESSAGES -->
    <div class="clearfix"></div>
</div>