<?php

session_start();

$_SESSION['login']=="1";

?>
<script>

    function iniciar_sesion(){
    
        document.getElementById('form_login').submit();
    
    }

</script>
<div class="row innerT inner-2x">
    <div class="col-md-4 col-md-offset-4 innerT inner-2x">
        <div class="innerT inner-2x">
            <form id="form_login" name="form_login" method="post" action="/php/admin/pages/inicio_sesion.php">
            <div class="widget innerLR innerB margin-none">
                <h3 class="innerTB text-center">
                    Inicio de sesion
                </h3>
                <div class="lock-container">
                    <div class=" text-center">
                        
                        <div class="innerAll">
                            <input class="form-control text-center bg-gray" id="correo" name="correo" type="text" placeholder="Correo"/>
                            <div class="innerB half"></div>
                            <input class="form-control text-center bg-gray" id="contrasena" name="contrasena" type="password" placeholder="Contraseña"/>
                        </div>
                        <div class="innerT half">
                            <a href="javascript:iniciar_sesion()" class="btn btn-primary">Iniciar <i class="fa fa-fw fa-unlock-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <div class="text-right innerT half"> Olvido su contraseña? <a href="" class=" strong margin-none">Resetar Contraseña</a> </div>
        </div>
    </div>
</div>