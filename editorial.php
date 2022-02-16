<?php 
$conexion = mysqli_connect("localhost", "root", "", "biblioteca") or
die("Problemas con la conexión");

mysqli_query($conexion, "insert into editorial(id,nombre) 
	values ('$_REQUEST[id]','$_REQUEST[nombre]')")
or die("Problemas en el select" . mysqli_error($conexion));

mysqli_close($conexion);

echo "Se registro correctamente la editorial";
?>