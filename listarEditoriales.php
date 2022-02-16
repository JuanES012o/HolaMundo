<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$conexion = mysqli_connect("localhost", "root", "", "biblioteca") or
	die("Problemas con la conexión");

	$registros = mysqli_query($conexion, "select id,nombre from editorial") 
	or die("Problemas en el select:" . mysqli_error($conexion));

	while ($regEditorial = mysqli_fetch_array($registros)) {
		echo "Codigo:" . $regEditorial['id'] . "<br>";
		echo "Nombre:" . $regEditorial['nombre'] . "<br>";
		echo "<hr>";
	}

	mysqli_close($conexion);
	?>
</body>
</html>