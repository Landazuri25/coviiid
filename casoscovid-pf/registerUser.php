
<?php include ("db.php") ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <link rel="stylesheet" href="css/login.css">
        <title> registro login </title>
    </head>
    
    <body>
        <div class="login-box">
            <h2>Registrar usuario</h2>
            <form action="save_user.php" method="POST">
               <label for="">Nombre:</label>
                <input type="text" name="nombreUsuario">
                <label for="">Apellido:</label>
                <input type="text" name="apellidoUsuario">
                <label for="">Correo electronico:</label>
                <input type="text" name="correoUsuario">
                <label for="">Contraseña:</label>
                <input type="password" name="contrasenaUsuario">
                <button name="save_user">Registrar usuario</button>
            </form>
            <a href="loginUser.php">Si ya tiene una cuenta haga click aquí para iniciar sesión</a>
        </div>
        <div class="footer-login">
            <a href="registerAdmin.php"><button>Administrador</button></a>
        </div>
    </body>
</html>