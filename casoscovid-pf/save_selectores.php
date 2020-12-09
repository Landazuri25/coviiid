<?php
    include("db.php");
    
    if(isset($_POST['buscar_select'])){
        
        $municipio = $_POST ['municipio'];
        $ciudad = $_POST['ciudad'];
        $estatus = $_POST['estatus'];
        
       /* echo($municipio);
        echo($ciudad);
        echo($estatus);*/
        $query = "SELECT idReporte FROM reportes WHERE municipio='$municipio', ciudad = '$ciudad', status = '$estatus'";
        die($query);
        $result = mysqli_query($conn, $query); 
        
        if(! $result) {
            die("Query failed");
        }
           
        
    }

?>