<?php include ("db.php") ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <link rel="stylesheet" href="css/index.css">
        <title> Index administrador </title>
    </head>
    
    <body>
        <div class="inicio">
           <div class="header">
             <h3>Bienvenido administrador</h3>
             <a   href="Cerrar_Sesion.php" style="padding-left: 50em;">Cerrar Sesion</a >   
           </div>
            
            <div class="reports">
                <h4>Ultimos reportes</h4>
                <div class="search">
                     <form action="save_selectores.php" name="consulta_select" method="POST">
                      <p>Municipio</p>
                       <select name="municipio" id="" class="select" ><p>Municipio</p>
                          <option value="La Paz">La Paz</option>
                          <option value="Los Cabos">Los Cabos</option>
                          <option value="Mulege">Mulege</option>
                          <option value="Comondú">Comondú</option>
                          <option value="Loreto">Loreto</option>
                       </select>
                       <p>Ciudad</p>
                       <select name="ciudad" id="" class="select">
                           <option value="LA PAZ">La Paz</option>
                           <option value="LOS CABOS">Cabos San Lucas</option>
                           <option value="SAN JOSE DEL CABO">San Jose del Cabo</option>
                           <option value="SANTA ROSALIA">Santa Rosalia</option>
                           <option value="Ciudad Constitución">Ciudad Constitución</option>
                           <option value="Todos Santos">Todos Santos</option>
                           <option value="Guerrero Negro">Guerrero Negro</option>
                           <option value="Puerto Adolfo López Mateos">Puerto Adolfo López Mateos</option>
                           <option value="San Ignacio">San Ignacio</option>
                           <option value="Loreto">Loreto</option>
                       </select>
                       <p>Estatus</p>
                       <select name="estatus" id="" class="select">
                           <option value="En proceso">En proceso</option>
                           <option value="Confirmado">Confirmado</option>
                           <option value="Rechazado">Rechazado</option>
                       </select>
                       <p>Usuario</p>
                       <select name="" id="" class="select">
                           
                       </select>
                       <a href="save_selectores.php"><button name="buscar_select">Buscar</button></a>
                   </div>
                   </form>
                <table>
                    <tr>
                        <th>Nombre de usuario</th>
                        <th>Municipio</th>
                        <th>Ciudad</th>
                        <th>Dirección</th>
                        <th>Fecha de reporte</th>
                        <th>Status</th>
                        <th>Acciones</th>
                    </tr>
                    <tbody>
                        <?php 
                        $query="SELECT U.IdUsuario,U.nombre,U.apellido, R.descripcion , R.municipio, R.ciudad, R.direccion,R.fechaReporte,
                        R.status, R.idReporte FROM usuarios U, reportes R WHERE R.IdUsuario=U.IdUsuario";

                        $result_reports=mysqli_query($conn, $query);
                        
                        while($row = mysqli_fetch_array($result_reports)){?>
                            <tr>
                                <td><?php echo $row['nombre'].' '.$row['apellido'] ?></td>
                                <td><?php echo $row['municipio'] ?></td>
                                <td><?php echo $row['ciudad'] ?></td>
                                <td><?php echo $row['direccion'] ?></td>
                                <td><?php echo $row['fechaReporte'] ?></td>
                                <td><?php echo $row['status'] ?></td>
                                <td>
                                    <a href="fullReport.php?id=<?php echo $row['idReporte'] ?>">
                                        Ver
                                    </a>
                                    <a href="modifyStatusAdmin.php?id=<?php echo $row['idReporte'] ?>">
                                        Modificar status
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