<?php

	$servidor="localhost";
	$usuario="root";
	$password="";
	$baseDeDatos="plis_prueba";


	$enlace = mysqli_connect($servidor, $usuario,$password,$baseDeDatos);

	if(!$enlace){
		echo "<script>alert('ERROR EN LA CONEXION CON EL SERVIDOR');</script>";
	}
?>