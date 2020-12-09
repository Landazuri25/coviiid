<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <link rel="stylesheet" href="css/modify.css">
        <title> Modificar información </title>
    </head>
    
    <body>
       <div class="inicio">
          <div class="header">
                <h3>Bienvenido administrador</h3>
                 <a   href="Cerrar_Sesion.php" style="padding-left: 50em;">Cerrar Sesion</a > 
           </div>
           <a href="indexAdmin.php"><button class="regresar">Regresar</button></a>
           <div class="modify-status">
                <h3>Modificar status de reporte</h3>
                <select name="" id="" class="select-status">
                    <option value="En proceso">En proceso</option>
                    <option value="Confirmado">Confirmado</option>
                    <option value="Rechazado">Rechazado</option>
                </select>
                <button type="button" name="save_new_status">Guardar cambios</button>




           </div>
       </div> 
    </body>
</html>