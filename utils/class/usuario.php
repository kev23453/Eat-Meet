<?php

//TODO: Agregar los metodos Setter and Getter

include_once 'conexionDB.php';

class usuario extends conectionDB
{
    // metodo constructor heredando de la clase padre
    public function __construct(){
        parent::__construct();
    }

    // metodo de verificacion para el login
    public function verificarUsuario($email, $password, $path_redirect)
    {
        try {
            $query = "SELECT * FROM usuario WHERE email = ? AND contraseña = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$email, $password]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if(count($result) > 0) {
                foreach($result as $dataUser) {
                    setcookie('id', $dataUser['id_usuario'], time() + 60*60*12, '/');
                    header("refresh:1; url='$path_redirect'");
                }
            }else{
                echo "el usuario no existe";
            }

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    
    public function verificarSesion($identificador, $path) {
        // Este método verifica si existe una sesión activa mediante una cookie.
        // Si la cookie con el identificador dado no está definida, redirige al usuario.
        if (!isset($_COOKIE[$identificador])) {
            header("Location: $path"); // Redirección a la página especificada
            exit(); // Detiene la ejecución del script
        }
    }    
}
