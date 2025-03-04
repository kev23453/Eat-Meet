
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/login_styles/register_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Eat&Meet - Registrate</title>
</head>
<body>
    <form action="#" method="POST">
        <h2>Registrate </h2>
        <span>descubre lugares cerca de tí</span>
        <br>
        <br>
        <hr>

        <div class="box">
            <label for="username">Nombre de Usuario *</label>
            <input type="text" name="username" id="username" title="Nombre sólo acepta letras y espacios en blanco" placeholder="Nombre de Usuario..." required>
            
        </div>

        <div class="box">
            <label for="email">Email *</label>
            <input type="email" title="Email incorrecto" name="email" id="email" placeholder="Correo Electronico..." required>
        </div>

        <div class="box">
            <label for="password">Contraseña *</label>
            <input type="password" title="La contraseña debe tener de 8 a 18 caracteres." name="password" class="inputPassword" id="password" placeholder="Contraseña..." required>
            <i class="fas fa-eye-slash showPassword" data-inputContraseña="password"></i>
        </div>

        <div class="box">
            <label for="confirm-password">Confirmar Contraseña *</label>
            <input type="password" title="La contraseña deben coincidir." name="confirm-password" class="inputPasswordConfirm" id="confirm-password" placeholder="Confirmar Contraseña"  required>
            <i class="fas fa-eye-slash showPassword" data-inputContraseña="confirm-password"></i>
        </div>

        <button type="submit">Registrar</button>
        <span id="change_form">ya tienes una cuenta? - <a href="login.php">ingresa aqui</a></span>
    </form>


</body>
<script src="../../assets/js/auth/validacion_registro.js"></script>
<script src="../../assets/js/auth/cambiar_tipoInput.js"></script>
</html>