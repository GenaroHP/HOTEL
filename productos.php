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
        <title>REGISTRO | PRODUCTO</title>
    </head>
    <body>
    <div class="contenedor">
	<h2>Productos</h2>
		<form action="#" class="registro" id="registro" name="registro" method="POST">
			<div class="contenedor-inputs">
		
		<label for="código">Código</label>
        <input type="text"  name="código" placeholder="Código">
		<br>
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" placeholder="Nombre">
		<br>
		<label for="fabricante">Fabricante</label>
        <input type="text" name="fabricante" placeholder="Fabricante">
		<br>
		<label for="tipo">Tipo</label>
		<input type="text" name="tipo" placeholder="Tipo">
		<br>
		<label for="gramos">Gramos</label>
        <input type="text" name="gramos" placeholder="Gramos">
		<br>
		<label for="precio">Precio</label>
        <input type="text"min="0" step="1" name="precio" placeholder="Precio">
        <br>
        <br>
		<input type="submit" class="btn" name="registrar" value="Registrar">
	</form>
<div class="tabla">
			<table>
				<tr>
					<th>Código</th>
					<th>Nombre</th>
					<th>Fabricante</th>
					<th>Tipo</th>
                    <th>Gramos</th>
                    <th>Precio</th>
				</tr>
<?php
	$consulta = "SELECT * FROM productos";
	$ejecutarConsulta = mysqli_query($enlace, $consulta);
	$verFilas = mysqli_num_rows($ejecutarConsulta);
	$fila = mysqli_fetch_array($ejecutarConsulta);

	if(!$ejecutarConsulta){
		echo"Error en la consulta";
		}else{
			if($verFilas<1){
				echo"<tr><td>Sin registros</td></tr>";
				}else{
					for($i=0; $i<=$fila; $i++){
					echo'
						<tr>
							<td>'.$fila[5].'</td>
							<td>'.$fila[0].'</td>
							<td>'.$fila[1].'</td>
                            <td>'.$fila[2].'</td>
                            <td>'.$fila[3].'</td>
                            <td>'.$fila[4].'</td>
						</tr>
							';
							$fila = mysqli_fetch_array($ejecutarConsulta);
					}
				}
			}
    ?>
		</table>
		</div>
	</div>

</body>
</html>
<?php
	if(isset($_POST['registrar'])){
		$código =$_POST["código"];
		$nombre =$_POST["nombre"];
		$fabricante=$_POST["fabricante"];
		$tipo=$_POST["tipo"];
		$gramos= $_POST["gramos"];
		$precio=$_POST["precio"];

		$insertarDatos = "INSERT INTO productos VALUES('$código',
		                                           '$nombre',
													'$fabricante',
													'$tipo',
													'$gramos',
													'$precio')";

		$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

		if(!$ejecutarInsertar){
			echo"Error En la linea de sql";
		}
	}
?>
