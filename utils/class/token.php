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
}

?>