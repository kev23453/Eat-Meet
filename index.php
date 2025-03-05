<?php

include 'utils/autoload.php';

$usuario = new usuario();

$usuario->verificarSesion("user/auth/login.php");

if(isset($_COOKIE['id'])) {
    header("refresh:1; url='user/my/index.php'");
}

?>