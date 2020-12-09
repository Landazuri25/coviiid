<?php session_start();
include_once("db.php");
    $idUsuario = $_SESSION['idUsuario'];

        $consulta="SELECT * FROM usuarios WHERE idUsuario='$idUsuario'";
        $resultado=mysqli_query($conn, $consulta);
        //die($consulta);
        
        
        $row = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <link rel="stylesheet" href="css/modify.css">
        <title> Modificar información </title>
    </head>
    
    <body>
       <div class="inicio">
          <div class="header">
                <h3>Bienvenido usuario</h3>
                 <button>Configuraciones</button>
                 <button>Cerrar sesión</button>  
           </div>
           <a href="indexUser.php"><button class="regresar">Regresar</button></a>
           <div class="modify-info">
                <h3>Modificar información</h3>
                <form action="update_user_info.php" method="POST">
                    <label for="">Nombre: </label>
                    <input type="text" name="nuevoNombre" value="<?php echo $row['nombre']; ?>">
                    <label for="">Apellido: </label>
                    <input type="text" name="nuevoApellido" value="<?php echo $row['apellido']; ?>">
                    <label for="">Correo: </label>
                    <input type="text" name="nuevoCorreo" value="<?php echo $row['correoElectronico']; ?>">
                    <label for="">Contraseña: </label>
                    <input type="password" name="nuevaContrasena" value="<?php echo $row['contrasena']; ?>">
                    <button name="update_user_info">Guardar cambios</button>
                </form>
                
           </div>
       </div> 
    </body>
</html>