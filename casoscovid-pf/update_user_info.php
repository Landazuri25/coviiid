<?php
    
    session_start();
    include("db.php");
    
    if(isset($_POST['update_user_info'])){
        
        $idUsuario = $_SESSION ['idUsuario'];
        $nuevoNombre = $_POST['nuevoNombre'];
        $nuevoApellido = $_POST['nuevoApellido'];
        $nuevoCorreo = $_POST['nuevoCorreo'];
        $nuevaContrasena = $_POST['nuevaContrasena'];
        
       $query = "UPDATE usuarios SET nombre='$nuevoNombre', apellido='$nuevoApellido', correoElectronico='$nuevoCorreo', contrasena='$nuevaContrasena' WHERE idUsuario='$idUsuario'";
        
        $result = mysqli_query($conn, $query); 
        
        if(! $result) {
            die("Query failed");
        }
        
        header("Location: indexUser.php"); 
        
        
    }

?>