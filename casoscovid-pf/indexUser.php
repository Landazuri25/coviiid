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
        <link rel="stylesheet" href="css/index.css">
        <title> Index usuario </title>
    </head>
    
    <body>
        <div class="inicio">
           <div class="header">
             <h3>Bienvenido usuario</h3>
             
            <a   href="Cerrar_Sesion1.php" style="padding-left: 50em;">Cerrar Sesion</a >   
           </div>
            
            <a href="createReport.php"><button class="create-report-btn">Crear reporte</button></a>
            <div class="reports">
                <h4>Ultimos reportes</h4>
                <table>
                    <tr>
                        <th>Municipio</th>
                        <th>Ciudad</th>
                        <th>Dirección</th>
                        <th>Fecha de reporte</th>
                        <th>Status</th>
                        <th>Acciones</th>
                    </tr>
                    <tbody>
                        <?php 
                       $query="SELECT * FROM reportes WHERE idUsuario='$idUsuario'";
                       $result_reports=mysqli_query($conn, $query);
                        
                        while($row = mysqli_fetch_array($result_reports)){?>
                            <tr>
                                <td><?php echo $row['municipio'] ?></td>
                                <td><?php echo $row['ciudad'] ?></td>
                                <td><?php echo $row['direccion'] ?></td>
                                <td><?php echo $row['fechaReporte'] ?></td>
                                <td><?php echo $row['status'] ?></td>
                                <td>
                                    <a href="fullReport.php?id=<?php echo $row['idReporte'] ?>">
                                        Ver
                                    </a>
                                    <a href="editReport.php?id=<?php echo $row['idReporte'] ?>">
                                        Modificar reporte
                                    </a>
                                    <a href="modifyStatusAdmin.php?id=<?php echo $row['idReporte'] ?>">
                                        Ocultar
                                    </a>
                                </td>     
                            </tr>      
                            
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>