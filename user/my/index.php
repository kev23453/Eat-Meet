<?php

include '../../utils/autoload.php';

$usuario = new usuario();

// verificar si el usuario tiene su sesion activa
$usuario->verificarSesion("../auth/login.php");

// obteniendo los datos del usuario
$fetch = $usuario->obtenerDatosUsuario();

// accediendo a los datos
foreach($fetch as $data){
    echo "Bienvenida " . $data['nombre_usuario'];
}

// cerrar la sesion
if(isset($_POST['closedSession'])) {
    $usuario->destruirSesion();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <br>
        <button type="submit" name="closedSession">Cerrar sesion</button>
    </form>
</body>
</html>