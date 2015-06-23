<?php

require_once('esta.php');

extract($_GET);



$sql = "select * from clientes where id=$cliente_id";
$renglones_clientes = mysqli_query($esta, $sql);

    $renglon_cliente = mysqli_fetch_assoc($renglones_clientes);
  


?>
<script>

    function mandar(){
    
        document.getElementById("nuevo_cliente").submit();
    
    }
    
</script>
<div class="row innerT inner-2x">
    <div class="col-md-4 col-md-offset-4 innerT inner-2x">
        <div class="innerT inner-2x">
            <div class="widget margin-none">
                <h3 class="bg-white border-bottom innerAll text-primary">
                    Agregar nuevo Miembro a <?php echo $renglon_cliente['nombre'];?>
                </h3>
                <form class="innerAll" autocomplete="off" id="nuevo_cliente" method="post" action="/php/admin/pages/agregar_miembro.php">
                    <div class="form-group">
                        <label for="firstname">Nombre:</label>
                        <input class="form-control" name="nombre" type="text" id="nombre">
                        <input  name="cliente_id" type="hidden" id="cliente_id" value="<?php echo $cliente_id;?>">
                    </div>
                    <div class="form-group">
                    <div class="form-group">
                        <label for="puesto">Puesto:</label>
                        <input class="form-control" name="puesto" type="text" id="puesto">
                    </div>
                    
                    <div class="form-group">
                        <label for="telefono">Telefono:</label>
                        <input class="form-control" name="telefono" type="text" id="telefono">
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input class="form-control" name="correo" type="email" required id="correo">
                    </div>
                        <div class="form-group">
                        <label for="tipo1">Tipo 1:</label>
                        <select id="tipo1" name="tipo1">
                            <option value="1" selected>YA NO TRABAJA EN ESTA EMPRESA</option>
                            <option value="2">CONTACTO PRINCIPAL</option>
                            <option value="3">RECOMIENDA</option>
                            <option value="4">DECIDE</option>
                        
                            </select>
                    </div>
                        
                        <div class="form-group">
                        <label for="tipo2">Tipo 2:</label>
                        <select id="tipo2" name="tipo2">
                            <option value="1">YA NO TRABAJA EN ESTA EMPRESA</option>
                            <option value="2" selected>CONTACTO PRINCIPAL</option>
                            <option value="3">RECOMIENDA</option>
                            <option value="4">DECIDE</option>
                        
                            </select>
                    </div>
                        
                        <div class="form-group">
                        <label for="newsletter">Newsletter:</label>
                        <input type="checkbox" id="newsletter" name="newsletter" value="1" checked>
                    </div>
                        <div class="form-group">
                        <label for="postal">postal:</label>
                        <input type="checkbox" id="postal" name="postal" value="1" checked>
                    </div>
                    
                    <div class="text-center innerT">
                        
                        <a href="javascript:mandar()" class="btn btn-inverse">Agregar</a> 
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>
