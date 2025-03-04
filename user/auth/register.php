<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <h2>Registrate</h2>

        <div>
            <label for="username">Nombre de Usuario</label>
            <input type="text" name="username" id="username"  placeholder="Nombre de Usuario..." required>
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email"  placeholder="Correo Electronico..." required>
        </div>

        <div>
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" placeholder="Contraseña..." required>
        </div>

        <div>
            <label for="confirm-password">Confirmar Contraseña</label>
            <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirmar Contraseña"  required>
        </div>

        <button type="submit">Registrar</button>
        <span>aun no tienes cuenta? <a href="login.php">registrate</a></span>
    </form>
</body>
</html>