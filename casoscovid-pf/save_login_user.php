<?php
    session_start();
    include_once("db.php"); //agregar a todas las pag
    
    if(isset($_POST['save_login'])){
        
        $correoUsuario = $_POST['correoLogin'];
        $contrasenaUsuario = $_POST['contrasenaLogin'];
        
       // $_SESSION['correoLogin']=$correoUsuario;
        
        $consulta="SELECT * FROM usuarios WHERE correoElectronico='$correoUsuario' AND contrasena='$contrasenaUsuario'";
        $resultado=mysqli_query($conn, $consulta);
        
        $filas=mysqli_fetch_assoc($resultado);
        
        if($filas)
        {
            $_SESSION['idUsuario'] = $filas['IdUsuario'];
            echo $_SESSION['idUsuario'];
            header("location: indexUser.php");
        }else{
            ?>
            <?php
            include("loginUser.php");
            ?>
            <h1>ERROR EN LA AUTENFICACION</h1>
            <?php
        }
        mysqli_free_result($resultado);
        mysqli_close($conn);
    }

?>