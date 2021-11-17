<?php

$estado_session = session_status();
if($estado_session == PHP_SESSION_NONE)
{
    session_start();
}

if (isset($_SESSION['loggedUserName'])) {
?>
<img src="https://image.freepik.com/vector-gratis/ilustracion-concepto-no-autorizado-error-401_114360-5531.jpg" alt="Error 401 imagen fuera de linea">

<?php    
}else {    
?>

<div class="container">

    <form action="./controller/registrar.php" method="POST">
                    <h3>Registro</h3>
                <div class="row">
                    <div class="input-field col s4">
                        <input  name="nombre" type="text"  class="validate">
                        <label for="first_name">Nombre</label>
                    </div>
                    <div class="input-field col s4">
                        <input name="apellido" type="text" class="validate">
                        <label for="last_name">Apellido</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8">
                        <input name="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8">
                        <input name="contrasena" type="password" class="validate">
                        <label class="active" for="pass">Contraseña</label>
                    </div>

                </div>
                <button class="btn waves-effect waves-light green accent-4" type="submit" name="action" >Enviar        
                </button><br>               
                </form>   
                
               
      
</div>
<?php }?>