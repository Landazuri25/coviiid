<?php session_start();
include_once("db.php");
    $idUsuario = $_SESSION['idUsuario'];
    $idReporte = $_GET['id'];
    
        $consulta="SELECT * FROM reportes WHERE idUsuario='$idUsuario' AND idReporte='$idReporte'";
        $resultado=mysqli_query($conn, $consulta);
        //die($consulta);
        
        $row = mysqli_fetch_assoc($resultado);
?>
   

   
<?php /*include_once("db.php");

   if(isset($_GET['id'])){
        $idReporte=$_GET['id'];
                           
        $query="SELECT * FROM reportes WHERE idReporte='$idReporte";
        $result=mysqli_query($conn, $query);           
        $row = mysqli_fetch_assoc($result);
    } */   
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <link rel="stylesheet" href="css/modify.css">
        <title> Ver reporte </title>
    </head>
    
    <body>
        <div class="inicio">
           <div class="header">
             <h3>Bienvenido usuario</h3>
             <a href="modifyUserInfo.php"><button>Configuraciones</button></a>
             <button>Cerrar sesión</button>  
           </div>
           <button>Regresar</button>
           <div class="show-report">
               <h3>Información del reporte</h3>
               <div class="info-report">
                  <?php 
                        //die($query);
                       if($resultado!=NULL){?>
                           <h4 style="margin-top: 15px">ID de reporte:</h4>
                           <p><?php echo $row['idReporte'] ?></p>
                           <h4 style="margin-top: 15px">Descripción:</h4>
                           <p><?php echo $row['descripcion'] ?></p>
                           <h4 style="margin-top: 15px">Municipio:</h4>
                           <p><?php echo $row['municipio'] ?></p>
                           <h4 style="margin-top: 15px">Ciudad:</h4>
                           <p><?php echo $row['ciudad'] ?></p>
                           <h4 style="margin-top: 15px">Dirección:</h4>
                           <p><?php echo $row['direccion'] ?></p>
                           <h4 style="margin-top: 15px">Fecha de reporte:</h4>
                           <p><?php echo $row['fechaReporte'] ?></p>
                           <h4 style="margin-top: 15px">Estatus:</h4>
                           <p><?php echo $row['status'] ?></p>
                        <?php }?> 
               </div>
           </div>
        </div>
    </body>
</html>