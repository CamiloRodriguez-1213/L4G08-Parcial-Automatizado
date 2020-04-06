<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="complementos/estilo.css">
    <title>Crear Usuario</title>
</head>
<body>
    <form action="guardar_persona.php" method="post">
    <h1>Crear Nuevo Usuario</h1>
    <div>
        <input type="text" name="nombre"  required placeholder="Nombre">

        <input type="text" name="apellido" required placeholder="Apellido">

        <input type="email" name="email" required placeholder="Email">

        <input type="text" name="user" required placeholder="Usuario GitHub">

        <input type="password" id="password" required name="password" placeholder="Contraseña" size="40" value=""><br>
            <input type="checkbox" id="show-password" />Mostrar Contraseña
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
    </div>
        <br>
        <input type="submit" class="button" value="Crear">
        <input type="submit" class="button" value="Regresar" onclick="location='index.php'">
        <div>
        
        </div>
    </form>
</body>
</html>