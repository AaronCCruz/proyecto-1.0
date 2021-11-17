<?php
include ('conexion.php');

class usuarios {
    
    public $id;
    public $user;
    public $correo;
    
    public function __construct($id,$user,$correo) {
        $this->id     = $id;
        $this->user = $user;
        $this->correo  = $correo;
    }

    
    public static function login($user,$pass){
        
        $mysqli = conectadb::dbmysql();
        $stmt = $mysqli->prepare('SELECT correo,contrasenia FROM usuarios WHERE correo = ? and contrasenia = ?');
        $stmt->bind_param('ss', $user, $pass);
        $stmt->execute();
        $resultado = $stmt->get_result();
        while ($filasql = mysqli_fetch_array($resultado)) {
        session_start();

        $_SESSION['loggedUserName'] = $filasql['correo'] ;
    }
        $acceso = false;
        if ($stmt->affected_rows == 1) {
        $acceso = true;
        }
        $mysqli->close();
    return $acceso;
    }
    public static function registrar($nombre,$apellido,$correo,$pass){
        
        $mysqli = conectadb::dbmysql();
        $stmt = $mysqli->prepare('INSERT INTO `usuarios`(`nombre`, `apellido`, `correo`, `contrasenia`) VALUES (?,?,?,?)');
        $stmt->bind_param('ssss', $nombre, $apellido, $correo, $pass);
        $stmt->execute();
        $resultado = $stmt->get_result();
        
    }
    
}

?>
