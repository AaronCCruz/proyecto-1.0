<?php
include ('conexion.php');

class comentarios {
    
    public $id;
    public $comentario;

    
    public function __construct($id,$comentario) {
        $this->id     = $id;
        $this->comentario = $comentario;

    }

    public static function consultar() {
        $mysqli = conectadb::dbmysql();
        $consulta = "select * from comentarios";
        echo ('<br>');
        // echo ($consulta);
        $resultado = mysqli_query($mysqli, $consulta);
        if (!$resultado) {
            echo 'No pudo Realizar la consulta a la base de datos';
            exit;
        }
        $listaComentarios = [];
        while ($comentario = mysqli_fetch_array($resultado)) {
            $listaComentarios[] = new comentarios($comentario['id'], $comentario['texto']);
        }
        return $listaComentarios;
    }
    public static function comentar($txt) {
        $mysqli = conectadb::dbmysql();
        $stmt = $mysqli->prepare('INSERT INTO `comentarios`(`texto`) VALUES (?)');
        $stmt->bind_param('s', $txt);
        $stmt->execute();
        $resultado = $stmt->get_result();
        
      echo '<script>window.location.href="../index.php?menu=bienvenido"</script>';
         
    }
    

    public static function borrar($id) {
        $mysqli = conectadb::dbmysql();
        $stmt = $mysqli->prepare('DELETE FROM comentarios WHERE id = ? ');
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
    }

    
}

?>
