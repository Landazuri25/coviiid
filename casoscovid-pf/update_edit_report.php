<?php
    
    session_start();
    include_once("db.php");

    if(isset($_POST['actualizar_report'])){
        
        $idUsuario = $_SESSION['idUsuario'];
        $idReporte = $_SESSION['idReporte'];
        
        $nuevaDir = $_POST['nuevaDir'];
        $nuevaCiudad = $_POST['nuevaCiudad'];
        $nuevoMun = $_POST['nuevoMun'];
        $nuevaDes = $_POST['nuevaDes'];
      
        //die($idUsuario);
       $query = "UPDATE reportes SET descripcion='$nuevaDes', municipio='$nuevoMun', ciudad='$nuevaCiudad', direccion='$nuevaDir' WHERE idUsuario='$idUsuario' AND idReporte = '$idReporte' ";
        
        $result = mysqli_query($conn, $query); 
        
        if(! $result) {
            die("Query failed");
        }
        
        header("Location: indexUser.php"); 
        
        
    }

?>