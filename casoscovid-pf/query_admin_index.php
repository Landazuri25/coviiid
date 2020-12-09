<?php

    include("db.php");
    
    if(isset($_POST['save_user'])){
        
        $nombreUsuario = $_POST['nombreUsuario'];
        $apellidoUsuario = $_POST['apellidoUsuario'];
        $correoUsuario = $_POST['correoUsuario'];
        $contrasenaUsuario = $_POST['contrasenaUsuario'];
        
        $query = "INSERT INTO usuarios (nombre, apellido, correoElectronico, contrasena) VALUES ('$nombreUsuario', '$apellidoUsuario', '$correoUsuario', '$contrasenaUsuario')";
       // $query = "INSERT INTO reportes (NombreDeUsuario) VALUES ('$nameUser')";
        
        $result = mysqli_query($conn, $query); 
        
        if(! $result) {
            die("Query failed");
        }
        
        echo 'saved'; 
    }

?>