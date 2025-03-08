<?php

include '../../utils/autoload.php';

if(isset($_POST['loginSend'])){
    $email = filter_var($_POST['email']);
    $password = filter_var($_POST['password']);

    $usuario = new usuario();
    $usuario->verificarUsuario($email, $password, "../my/index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eat&Meet - Login</title>
    <link rel="stylesheet" href="../../assets/css/normalize.css">
    <link rel="stylesheet" href="../../assets/css/login_styles/login_style.css">
    <link rel="website icon" type="png" href="../../img/icon2.png">
</head>

<body>
    <form class="formulario" action="" method="POST">
        <h2>Login<span class="p_span">¿Tienes Hambre?</span></h2>
        
        <div class="seccion">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Ingrese la email" required>
        </div>

        <div class="seccion">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" placeholder="Ingrese la contraseña" required>
        </div>
        
        <button class="login" type="submit" name="loginSend" class="btn-send">Login</button>
       
        <h3 class="go_register">¿Aún no tienes cuenta? <a href="register.php">Regístrate</a></h3>
    </form>
</body>

</html>