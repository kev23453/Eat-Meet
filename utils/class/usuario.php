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



    public function verificarExistencia($email,$emailUser){
        try {
            if ($email == $emailUser ) {
                echo "El usuario ya existe";
                return;
            }            
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }



    public function verificarSesion($path) {
        // Este método verifica si existe una sesión activa mediante una cookie.
        // Si la cookie con el identificador dado no está definida, redirige al usuario.
        if (!isset($_COOKIE['id'])) {
            header("Location: $path"); // Redirección a la página especificada
            exit(); // Detiene la ejecución del script
        } else {
            $id = $_COOKIE['id'];
        }
    }    




    // metodo para destruir las cookies
    public function destruirSesion() {
        setcookie("id", "", time() - 1, "/"); // seteando nuevas cokkies pero sin valor
        echo "cerrando sesion..."; 
        header("refresh:1"); // refrescando la pagina
        exit;
    }



    public function obtenerDatosUsuario() {
        try {
            $user = $_COOKIE['id'];
            $query = "SELECT * FROM usuario WHERE id_usuario = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$user]);
            $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $response;
        }
        catch(PDOException $e) {
            throw $e->getMessage();
        }
    }



}
