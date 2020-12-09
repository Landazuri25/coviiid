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
        <link rel="stylesheet" href="css/createReport.css">
        <title> Crear reporte </title>
    </head>
    
    <body>
        <div class="inicio">           
            <div class="header">
                <h3>Bienvenido usuario</h3>
                 <button>Configuraciones</button>
                 <a   href="Cerrar_Sesion1.php" style="padding-left: 50em;">Cerrar Sesion</a >    
           </div>
           <a href="indexUser.php"><button class="regresar">Regresar</button></a>
           <div class="create-report">
                <h3>Crear reporte</h3>
                <form action="save_report.php" method="POST">
                    <label for="">Descripción:</label>
                    <textarea name="descripcion" id="" cols="40" rows="2"></textarea>
                    <label for="">Municipio:</label>
                    <input name="municipio" type="text">
                    <label for="">Ciudad:</label>
                    <input name="ciudad" type="text">
                    <label for="">Dirección:</label>
                    <input name="direccion" type="text">
                    <button name="save_report">Enviar reporte</button>
                </form>
           </div>
        </div>
    </body>
</html>