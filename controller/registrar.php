<?php
$_nombre = $_POST['nombre'];
$_apellido = $_POST['apellido'];
$_email = $_POST['email'];
$_contrasena = $_POST['contrasena'];
include_once '../model/usuarios.php';
$registrook = usuarios::registrar($_nombre, $_apellido, $_email, $_contrasena);
if (!$registrook){
    header("location: ../index.php?menu=inicio");
} else{
header("location: ../index.php?menu=registro");

}