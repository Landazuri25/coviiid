<?php

    include("db.php");
    
    if(isset($_POST['save_login'])){
        
        $correoAdmin = $_POST['correoLogin'];
        $contrasenaAdmin = $_POST['contrasenaLogin'];
        
        session_start();
        
        $_SESSION['correoLogin']=$correoAdmin;
        
        $consulta="SELECT*FROM administradores WHERE email='$correoAdmin' AND contrasena='$contrasenaAdmin'";
        $resultado=mysqli_query($conn, $consulta);
        
        $filas=mysqli_num_rows($resultado);
        if($filas){
            header("location: indexAdmin.php");
        }else{
            ?>
            <?php
            include("index.php");
            ?>
            <h1>ERROR EN LA AUTENFICACION</h1>
            <?php
        }
        mysqli_free_result($resultado);
        mysqli_close($conn);
    }

?>