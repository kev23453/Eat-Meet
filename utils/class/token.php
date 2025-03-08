<?php

include_once 'conexionDB.php';

// esta clase es para los tokens para el usuario

class token extends conectionDB {
    public function __construct()
    {
        parent::__construct();
    }

    // funcion para generar un token
    public function generarToken()
    {       
        $numerosAleatorios = [];
        for ($i=0; $i < 6 ; $i++) { 
            $numerosAleatorios[] = random_int(0,9);
        }    
        $token = implode("",$numerosAleatorios);
        return $token;
    }



    public function setToken($token, $created_at, $kill_at) {
        $query = "INSERT INTO token(token, creado_a, finaliza_a) VALUES(?,?,?)";
        $stmt = $this->conn->prepare($query);
        $encode_token = base64_encode($token);
        if($stmt->execute([$encode_token, $created_at, $kill_at])) {
            return $this->conn->lastInsertId();
        }
        //return $encode_token;
    }



    public function asignarToken($usuario_id, $token){
        try{
            $query = "INSERT INTO usuarioToken(id_usuario, id_token) VALUES(?,?)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$usuario_id, $token]);
        }
        catch(PDOException $e){
            echo $e->getMessage();
            return;
        }
    }

}

?>