<?php

require_once( getcwd().'/pages/esta.php');

extract($_GET);



$sql = "select * from clientes order by nombre asc";
$renglones_clientes = mysqli_query($esta, $sql);

$sql = "select * from tipo_proyectos order by tipo asc";
$renglones_tipos = mysqli_query($esta, $sql);

//echo $_SERVER[''];
$sql = "select * from usuarios order by nombre asc";
$renglones_usuarios = mysqli_query($esta, $sql);

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
        <li>
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
        <li class="active">
            <a class="glyphicons lock" href="?page=cliente&amp;section=nuevo_proyecto&id=<?php echo $_GET['id']; ?>"> <i></i>Nuevo Proyecto</a>
        </li>
    </ul>
</div>
<!-- // Tabs Heading END -->
<div class="widget-body">
    <form class="" action="/php/admin/pages/agregar_proyecto.php" method="post" enctype="multipart/form-data">
    <div class="row innerAll inner-2x">
        <div class="col-sm-6">
            
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input class="form-control" name="nombre" type="text" value="" id="nombre">
                   
                </div>
                <div class="form-group">
                    <label for="descripcion_corta">Descripcion corta:</label>
                    <input class="form-control" name="descripcion_corta" value="" type="text" id="descripcion_corta" placeholder="">
                </div>
               
            <div class="form-group">
                    <label for="fecha_inicio">Fecha de Inicio:</label>
                    <input class="form-control datepicker1" type="text" value="2013-02-14" id="fecha_inicio" name="fecha_inicio"  />
                </div>
            <div class="form-group">
                    <label for="fecha_entrega">Fecha de Entrega:</label>
                    <input class="form-control datepicker1" type="text" value="2013-02-14" id="fecha_entrega" name="fecha_entrega"  />
                </div>
                
                
               
            
            
                <div class="separator"></div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Crear Proyecto">
                </div>
            
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                    
                
                    
                    <input type="hidden" name="cliente" id="cliente" value="<?php echo $renglon_cliente['id'];?>">
                </div>
                 <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
                </div>
                
            
            <div class="form-group">
                    <label for="estatus">Estatus:</label>
                    <select id="estatus" name="estatus">
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
                
                </select>
                </div>
            
             <div class="form-group">
                    <label for="tipo">Tipo:</label>
                    <select id="tipo" name="tipo">
                        <?php while($renglon_tipo = mysqli_fetch_assoc($renglones_tipos)){?>
                <option value="<?php echo $renglon_tipo['id'];?>"><?php echo $renglon_tipo['tipo'];?></option>
                        <?php }?>
                
                </select>
                </div>
            
            <div class="form-group">
                    <label for="etiquetas">Etiquetas:</label>
                    <input type="text" name="etiquetas" id="etiquetas" placeholder="Tags" class="tm-input"/>
                </div>
            
            <div class="form-group">
                                         <label for="singleFieldTags2">Usuarios:</label><br>
                                    <input name="tags" id="singleFieldTags2" value="">
                                </div> 
            
        </div>
    </div>
    </form>
</div>
<link href="/php/admin/pages/tagsmanager/tagmanager.css" rel="stylesheet" />
  

  
  
  <script src="/php/admin/pages/tagsmanager/tagmanager.js"></script>

<script>

    jQuery(".tm-input").tagsManager();
    
</script>

<link href="css/jquery.tagit.css" rel="stylesheet" type="text/css">
<link href="css/tagit.ui-zendesk.css" rel="stylesheet" type="text/css">

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/tag-it.js" type="text/javascript" charset="utf-8"></script>
<script>
    
     var sampleTags = [<?php while($renglon_usuario = mysqli_fetch_assoc($renglones_usuarios)){ echo "'".$renglon_usuario['nombre']."',";} ?>];

   $('#singleFieldTags2').tagit({
                availableTags: sampleTags
            });
    
    


</script>