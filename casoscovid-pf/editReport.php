<?php session_start();
include_once("db.php");
    $idUsuario = $_SESSION['idUsuario'];
    $idReporte = $_GET['id'];

        $consulta="SELECT * FROM reportes WHERE idUsuario='$idUsuario' AND idReporte='$idReporte'";
        $resultado=mysqli_query($conn, $consulta);
        //die($consulta);
        
        $row = mysqli_fetch_assoc($resultado);

        if($row)
        {
            $_SESSION['idReporte'] = $row['idReporte'];
        }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <link rel="stylesheet" href="css/modify.css">
        <title> Modificar reporte </title>
    </head>
    
    <body>
        <div class="inicio">
           <div class="header">
             <h3>Bienvenido usuario</h3>
             <a href="modifyUserInfo.php"><button>Configuraciones</button></a>
             <button>Cerrar sesión</button>  
           </div>
           
           <div class="edit-report">
               <h3>Modificar reporte</h3>
               <form action="update_edit_report.php" method="POST">
                   <label for="">Dirección: </label>
                   <input type="text" name="nuevaDir" value="<?php echo $row['direccion']; ?>">
                   <label for="">Ciudad: </label>
                   <input type="text" name="nuevaCiudad" value="<?php echo $row['ciudad']; ?>">
                   <label for="">Municipio: </label>
                   <input type="text" name="nuevoMun" value="<?php echo $row['municipio']; ?>">
                   <label for="">Descripción: </label>
                   <textarea name="nuevaDes"  id="" cols="30" rows="10"><?php echo $row['descripcion']; ?> </textarea>
                   <button name="actualizar_report">Actualizar</button>
               </form>
           </div>
        </div>
    </body>
</html>