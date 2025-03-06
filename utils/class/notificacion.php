<?php

class notificacion {

    private $tipoNotificacion;
    private $titulo;
    private $mensaje;
    private $estado;
   
    public function __construct(){

     
    }

    public function setNotificaciones($tipoNotificacion, $titulo,$mensaje, $estado){
        $this->tipoNotificacion = $tipoNotificacion;
        $this->titulo = $titulo;
        $this->mensaje = $mensaje;
        $this->estado = $estado;

    }



}

?>