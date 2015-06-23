
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
                    Agregar Nuevo Cliente
                </h3>
                <form class="innerAll" autocomplete="off" id="nuevo_cliente" method="post" action="/php/admin/pages/agregar_cliente.php">
                    <div class="form-group">
                        <label for="firstname">Nombre:</label>
                        <input class="form-control" name="nombre" type="text" id="nombre">
                    </div>
                    <div class="form-group">
                        <label for="calle">Calle:</label>
                        <input class="form-control" name="calle" type="text" id="calle">
                    </div>
                    <div class="form-group">
                        <label for="numero">Numero:</label>
                        <input class="form-control" name="numero" type="text" id="numero">
                    </div>
                    <div class="form-group">
                        <label for="entre_calles">Entre Calles:</label>
                        <input class="form-control" name="entre_calles" type="text" id="entre_calles">
                    </div>
                    <div class="form-group">
                        <label for="colonia">Colonia:</label>
                        <input class="form-control" name="colonia" type="text" id="colonia">
                    </div>
                    <div class="form-group">
                        <label for="ciudad">Ciudad:</label>
                        <input class="form-control" name="ciudad" type="text" id="ciudad">
                    </div>
                    <div class="form-group">
                        <label for="estado">Estado:</label>
                        <input class="form-control" name="estado" type="text" id="estado">
                    </div>
                    <div class="form-group">
                        <label for="detalles">Detalles:</label>
                        <textarea id="detalles" name="detalles" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="email">Website:</label>
                        <input class="form-control" name="website" type="text" id="website">
                    </div>
                    <div class="form-group">
                        <label for="email">Telefono:</label>
                        <input class="form-control" name="telefono" type="text" id="telefono">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo:</label>
                        <input class="form-control" name="correo" type="email" required id="correo">
                    </div>
                    <div class="form-group">
                        <label for="email">Pais:</label>
                        <input class="form-control" name="pais" type="text" id="pais">
                    </div>
                    <div class="text-center innerT">
                        
                        <a href="javascript:mandar()" class="btn btn-inverse">Agregar</a> 
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>
