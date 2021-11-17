
<style>
    #boton{
        position: absolute;
        left: 1250px;
        top: 120px;
    }
    #texto{
        width: 700px;
        height: 100px;
        background-color: #ffffff;
    }
</style>   

<div id="cuerpo">
   
    <h1 id="titulo">Bienvenido</h1>
    <a class="btn-floating btn-large waves-effect waves-light black" id="boton" onclick="object=document.getElementById('cuerpo');
        object.style.backgroundColor = ' #b4b1b1 ';" ondblclick="object=document.getElementById('cuerpo');
        object.style.backgroundColor = ' #ffffff';"><i class="material-icons">brightness_medium</i></a>
    
        <div id="carrusel" class="col s12">
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
            </div><br><br>
            <!-- Crear un comentario -->
            <div id="comentarios" class="col s12">
                <h3>Deja un comentario</h3>
                <div>
                    <form action="./controller/comentar.php" method="POST">
                        <p> <textarea id="texto" name="texto" cols="50" rows="6"></textarea><br></p>   
                        <input type="submit" value="Comentar">
                    </form>
                </div>
                <br>
              
                <table>
                    <thead>
                        <tr>
                           
                            <th>Comentarios</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($sqlComentarios as $comentarioview) {
                            ?>
                            <tr>
                                
                                <td><?php echo $comentarioview->comentario; ?></td>               

                                <td>
                                    <button class="btn waves-effect waves-light red" type="submit" name="action">
                                        <a href="?menu=borrarComentario&id=<?php echo $comentarioview->id; ?>"
                                           ><i class="material-icons ">delete_sweep</i></a>
                                    </button>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
                <br>


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

