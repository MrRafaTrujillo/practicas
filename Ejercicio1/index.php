<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>30-10</title>
</head>
<body>
	
	<h1>Ejercicio 1: Nombre compuesto</h1>

	<form action="#" method="POST">
		
		<input type="text" name="nombre">
		<input type="text" name="apellido1">
		<input type="text" name="apellido2">

		<input type="submit">
	
	</form>
	

	<p>TU nombre es: </p>

	<?php

		if (isset($_POST["nombre"]))
		{
			
			if(empty($_POST["nombre"]))
			{
				echo "<p>Está vacío el nombre</p>";
			}
			
			if(empty($_POST["apellido1"]))
			{
				echo "<p>Está vacío el apellido 1</p>";
			}

			if(empty($_POST["apellido2"]))
			{
				echo "<p>Está vacío el apellido 2</p>";
			}

			if(!empty($_POST["nombre"]) && !empty($_POST["apellido1"]) && !empty($_POST["apellido2"]) )
			{
				echo "<p>" . $_POST["nombre"] . " " . $_POST["apellido1"] . " " . $_POST["apellido2"] . "</p>";
			}	


		}

		else
		{
			echo "(ERROR: escribe el Nombre y pulsa Enviar)";
		}

	?>

	


</body>



</html>
