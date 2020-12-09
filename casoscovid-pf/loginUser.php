<?php include ("db.php") ?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <link rel="stylesheet" href="css/login.css">
        <title> login usuario </title>
    </head>
    
    <body>
        <div class="login-box">
            <h2>Bienvenido usuario</h2>
            <form action="save_login_user.php" method="post">
                <label for="">Correo electronico:</label>
                <input type="text" name="correoLogin">
                <label for="">Contraseña:</label>
                <input type="password" name="contrasenaLogin">
                <button name="save_login">Iniciar sesión</button>
            </form>
            <a href="registerUser.php">Si no tiene una cuenta haga click aquí para registrarse</a>
        </div>
        <div class="footer-login">
            <a href="index.php"><button>Administrador</button></a>
        </div>
    </body>
</html>