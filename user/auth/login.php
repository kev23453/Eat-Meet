<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eat&Meet - Login</title>

    <link rel="stylesheet" href="../../assets/css/normalize.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=SUSE:wght@100..800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../assets/css/login_styles/login_style.css">
</head>

<body>
    <form class="formulario" action="#" method="POST">
        <h2>Login<span class = "p_span">¿Tienes Hambre?</span></h2>
        
        <div class="seccion">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Ingrese la email" required>
        </div>

        <div class="seccion">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" placeholder="Ingrese la contraseña" required>
        </div>
        
        <button class="login" type="submit" class="btn-send">Login</button>
       
        <h3 class = "go_register">¿Aún no tienes cuenta? <a href="register.php">Regístrate</a></h3>
    </form>
</body>

</html>