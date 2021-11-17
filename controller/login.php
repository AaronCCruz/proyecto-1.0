<?php
$_usuario = $_POST['user'];
$_pswd = $_POST['pass'];
include_once '../model/usuarios.php';
$loginok = usuarios::login($_usuario, $_pswd);
//echo '<br> LoginOk = ';
//print_r($loginok);
if ($loginok){
    header("location: ../index.php?menu=bienvenido");
} else{
echo 'Usuario No Existe o password Incorrecto';

}


