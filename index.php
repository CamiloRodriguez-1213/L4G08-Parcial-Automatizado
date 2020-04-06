<?php 
    include('includes/verify_install.php');
    include('includes/db.php');  
    
    $sql = "select * from usuarios";
    
    $result = DB::query($sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Last-Modified" content="0">
    <link rel="stylesheet" type="text/css" href="complementos/estilo.css">
    
    <title>Inicio</title>
    
</head>
<body align= center>
   
  <div style="overflow-x:auto;">
    <table colspan="2" width="100%" height="100%" border = 1>
          <h1>  Base de datos</h1>
          <tr>
          
              <thead style="background-color: #1f1d1d6c">
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Estado</th>
                <th style='width:20%; height:25%'>Acciones</th>
            </thead>      
          </tr>

      <?php while($mostrar= mysqli_fetch_array($result)){?>
        <tr>

          <td><?php echo $mostrar['id'] ?></td>
          <td><?php echo $mostrar['nombre'] ?></td>
          <td><?php echo $mostrar['apellido'] ?></td>
          <td><?php echo $mostrar['email'] ?></td>
          <td><?php echo $mostrar['estado'] ?></td>
                  
          <td >
            <a class="esp" style="text-decoration:none"  href="editar.php?id=<?= $mostrar['id']?> ">Editar</a>
            <a style="text-decoration:none" href="eliminar.php?id=<?= $mostrar['id']?> ">Eliminar</a>                    
          </td>
                      
        </tr>
      <?php
        }

      ?>
    
    </table>
  </div>
  <input type="submit" class="button" onclick="location='crear.php'" value=" Nuevo Usuario" style='width:20%; height:25%'>

</body>
</html>