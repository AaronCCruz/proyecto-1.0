<?php
$_txt = $_POST['texto'];

include_once '../model/comentarios.php';
$comentarok = comentarios::comentar($_txt);

if ($comentarok){
    header("location: ../index.php?menu=bienvenido");
} else{


}

