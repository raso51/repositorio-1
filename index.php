<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>TRABAJO TR1 CLOUD COMPUTING</title>
</head>
<body>
	<div class="test-box"><h1>Registro de Datos</h1></div>
	<form action="validar.php" method="post">
	<table border="3" class="table-1">
		<tr>
			<th>Nombres</th>
			<td><input type="text" name="txtNombre" class="nombre-text">
		</tr>
		<tr>
			<th>Apellidos</th>
			<td><input type="text" name="txtApellido" class="apellido-text"></td>
		</tr>
		<tr>
			<th>Edad</th>
			<td><input type="number" name="txtEdad" class="edad-text"></td>
		</tr>
		<tr>
			<th>DNI</th>
			<td><input type="text" name="txtDni" class="dni-text"></td>
		</tr>
		<tr>
			<th>Correo</th>
			<td><input type="text" name="txtCorreo" class="correo-text"></td>
		</tr>
	</table>
	<input type="submit" name="btnGuardar" value="Guardar" class="boton-guardar">
</body>
</html>
