<?php
    session_start();
    include("db.php");
    
    if(isset($_POST['save_report'])){
        
        $idUsuario = $_SESSION ['idUsuario'];
        $descripcion = $_POST['descripcion'];
        $municipio = $_POST['municipio'];
        $ciudad = $_POST['ciudad'];
        $direccion = $_POST['direccion'];
        $status="pendiente";
        
        $query = "INSERT INTO reportes (descripcion, municipio, ciudad, direccion, status, idUsuario) VALUES ('$descripcion', '$municipio', '$ciudad', '$direccion', '$status', '$idUsuario')";
       // $query = "INSERT INTO reportes (NombreDeUsuario) VALUES ('$nameUser')";
        
        $result = mysqli_query($conn, $query); 
        
        if(! $result) {
            die("Query failed");
        }
        
        header ("Location: indexUser.php");
    }

?>