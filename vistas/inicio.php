<?php ?>
<div id="cuerpo" class="row">
    <div id="divInicio"class="col s4">
        <form action="./controller/login.php"" method="POST">
            <h3>Iniciar sesión</h3>
            <div class="row">
                <div class="input-field col s4 m8">
                    <input name="user" type="text" class="validate">
                    <label class="active" for="user_name">Nombre de Usuario</label>
                </div>        
            </div>
            <div class="row">
                <div class="input-field col s4 m8">
                    <input name="pass" type="password" class="validate">
                    <label class="active" for="pass">Contraseña</label>
                </div>

            </div>
            <button class="btn waves-effect waves-light red darken-4" type="submit" name="action">Ingresar        
            </button><br><br>

            <label>Si aun no estas registrado </label>
            <a href="?menu=registro">Registrate</a>
        </form>
    </div>

    <div id="carrusel" class="col s8">
        <div class="carousel carousel-slider">

            <a class="carousel-item" href="#one!">
                <div class="texto white-text">                   
                </div>
                <img src="./image/americano.png" >

            </a>
            <a class="carousel-item" href="#two!">
                <div class="texto white-text">          
                </div> 
                <img src="./image/balon.png">
            </a>
            <a class="carousel-item" href="#three!">
                <div class="texto white-text">
                </div>
                <img src="./image/box.png">
            </a>
            <a class="carousel-item" href="#four!">
                <div class="texto white-text">
                </div>
                <img src="./image/estadio.png">
            </a>
        </div>

    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('.carousel');
        var instances = M.Carousel.init(elems);
    });

    var instance = M.Carousel.init({
        fullWidth: true,
        indicators: true
    });
</script>

