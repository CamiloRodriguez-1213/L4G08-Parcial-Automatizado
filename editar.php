<?php
    include('includes/db.php');
    if(isset($_GET['id']) == false){
        echo "Es necesario enviar un id";
        die;
    }

    $id = $_GET['id'];

    $sql = "select * from usuarios where id = $id";

    $persona = DB::query($sql);

    $persona = mysqli_fetch_object($persona);
    if(!$persona){
        echo "El usuario no existe";
        die;
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="complementos/estilo.css">
    <title>Editar Usuario</title>

    <style>
        .form-group{
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    
<form action="guardar_persona.php" method="post" style="margin-top: 20px; padding-top: 10px;">
        <input type="hidden" name="id" value="<?= $persona->id ?>">
            
            <h1>Editar usuario</h1>
            <input type="text" name="nombre" placeholder="Nombres" value="<?= $persona->nombre ?>"><br>
            <input type="text" name="apellido" placeholder="Apellidos" value="<?= $persona->apellido ?>"><br>
            <input type="email" name="email" placeholder="Email" value="<?= $persona->email?>"><br>
            <input type="text" name="user" placeholder="Usuario Git" value="<?= $persona->user?>"><br>
            <input type="password"id="password" required name="password" placeholder="Contraseña" size="40" value=""><br>
            <input type="checkbox" id="show-password" />Mostrar Contraseña<br>
            <script type="text/javascript">
 
		var password = document.querySelector( "#password" );
		var toggle = document.querySelector( "#show-password" );
		toggle.addEventListener( "click", handleToggleClick, false );
		function handleToggleClick( event ) {
 
			if ( this.checked ) {
 
				console.warn( "Change input 'type' to: text" );
				password.type = "text";
 
			} else {
 
				console.warn( "Change input 'type' to: password" );
				password.type = "password";
 
			}
 
		}
 
	</script>
            <br><h2>Estado</h2><br>
            
                <?php  if($persona->estado == "activo"){  ?>
                    <label class="container" >Activo
                    <input type="radio" name="estado" value="activo" checked="checked" name="radio">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container" >Inactivo
                    <input type="radio" name="estado" value="inactivo"  name="radio">
                    <span class="checkmark"></span>
                    </label><br><br>
                <?php  }else{  ?>
                    <label class="container" >Activo
                    <input type="radio" name="estado" value="activo" name="radio">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container" >Inactivo
                    <input type="radio" name="estado" value="inactivo" checked="checked" name="radio">
                    <span class="checkmark"></span>
                    </label><br><br>
                <?php  }  ?>
                
            </tr>
            <tr>
            <input type="submit" class="button"  value="Modificar" >
            <input type="submit"class="button" onclick="location='index.php'" value="Cancelar">
            </tr>
            
    </form>
    

</body>
</html>