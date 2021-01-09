<?php 
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDeDatos="proyecto_farmacia";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>FORMULARIO | REGISTRO</title>
    </head>
    <body>
	<div class="contenedor">
  <h2>Registrarse</h2>
		<form action="#" class="formulario" id="formulario" name="formulario" method="POST">
			<div class="contenedor-inputs">

      <label for="usuario">Usuario</label>
        <input type="text" name="usuario" placeholder="Usuario">
        <br>
				<label for="nombres">Nombres</label>
        <input type="text"  name="nombres" placeholder="Nombres">
        <br>
        <label for="apellidos">Apellidos</label>
        <input type="text"  name="apellidos" placeholder="apellidos">
        <br>
				<label for="correo">Correo</label>
        <input type="text"  name="correo" placeholder="correo">
        <br>
        <label for="teléfono">Teléfono</label>
        <input type="text" name="teléfono" placeholder="Teléfono">
        <br>
        <label for="contraseña">Contraseña</label>
        <input type="password"  name="contraseña" placeholder="contraseña">

			</div>

			<input type="submit" class="btn" name="registrarse" value="Registrate">
    </form>

</body>
</html>
<?php
	if(isset($_POST['registrarse'])){
    $usuario =$_POST["usuario"];
    $nombres =$_POST["nombres"];
    $apellidos=$_POST["apellidos"];
    $correo=$_POST["correo"];
    $teléfono=$_POST["teléfono"];
    $contraseña=$_POST["contraseña"];
		
		$id= rand(1,99);

		$insertarDatos = "INSERT INTO usuarios VALUES('$usuario',
													'$nombres',
													'$apellidos',
													'$correo',
                          '$teléfono',
                          '$contraseña')";

		$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

		if(!$ejecutarInsertar){
			echo"Error En la linea de sql";
		}
	}
?>
		
				

