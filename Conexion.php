<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Conexion a BD</title>
</head>
<body>
	<?php
		//permite conectarse con el servidor local mediante el usuario root
		$cn=mysqli_connect('localhost','root','');
		//selecciona la base de datos de la conexion al servidor local
		$bd=mysqli_select_db($cn,'bdvehiculo');
		//verificar el estado de la conexion
		if (($cn==true) && ($bd==true)) {
			echo "Conexion Satisfactoria";
		}else{
			echo("error");
			//permite la conexion
			mysql_close($cn);
	}
	?>
</body>
</html>