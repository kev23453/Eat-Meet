//TODO: Agregar los metodos Setter and Getter

<?php

include_once 'conexionDB.php';

class usuario extends conectionDB
{
    public function __construct()
    {
        parent::__construct();
    }

    public function verificarUsuario($username, $password)
    {
        $query = "SELECT * FROM usuario WHERE nombre_usuario = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$username]);
        $result = $stmt->fetch();


        if (!$result) {  // * Si el usuario no existe, devolver falso
            return false;
        }


        if (password_verify($password, $result['contraseña'])) {
            return true;
        } else {
            return false;
        }
    }



}
?>
