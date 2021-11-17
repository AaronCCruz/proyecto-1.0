<?php

$var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'Inicio';
switch ($var_getMenu) {
case "inicio":
require_once ('./vistas/Inicio.php');
break;
case "registro":
require_once('./vistas/registro.php');
break;
case "bienvenido":
    include_once ('./model/comentarios.php');
    $sqlComentarios = comentarios::consultar();    
    require_once('./vistas/bienvenido.php');
break;
case "acercade":
    require_once('./vistas/acercade.php');
break;
case "cerrarSesion":
    $session_destroy = session_destroy();
    header("location: ./index.php?menu=inicio");
    break;
case "borrarComentario":
    $id = trim(filter_input(INPUT_GET, 'id'));
    require_once ('./model/comentarios.php');
    $sqlComentarios = comentarios::borrar($id);
    header("location: ./index.php?menu=bienvenido");
break;
case "error401":
require_once ('./vistas/error401.php');
break;
default:
require_once('./vistas/inicio.php');
}
?>

