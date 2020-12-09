<?php
    
    session_start();
    include_once("db.php");

    if(isset($_POST['update_status'])){
        
        $idUsuario = $_SESSION['idUsuario'];
        $idReporte = $_SESSION['idReporte'];
     
        $nuevoStatus = $_POST['select_status'];
        
        $query = "UPDATE reportes SET status='$nuevoStatus' WHERE idReporte='$idReporte'";
        
        $result = mysqli_query($conn, $query); 
        
        if(! $result) {
            die("Query failed");
        }
        
        header("Location: indexAdmin.php"); 
        
        
    }

?>