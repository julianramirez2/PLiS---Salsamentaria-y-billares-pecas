<?php

	$servidor="localhost";
	$usuario="root";
	$password="";
	$baseDeDatos="plis_prueba";


	$enlace = mysqli_connect($servidor, $usuario,$password,$baseDeDatos);

	if(!$enlace){
		echo "<script>alert('ERROR EN LA CONEXION CON EL SERVIDOR');</script>";
	}

	if(isset($_POST['ingresar'])){
		
		$nombre = $_POST['nombre']; 
		$apellido = $_POST['apellido'];
		$user = $_POST['user'];
		$contrasena = $_POST['password'];

		$comprobarDatos = "SELECT * FROM usuarios WHERE Usuario='$user'";

		$resultado = mysqli_query($enlace,$comprobarDatos);

		$filas = mysqli_num_rows($resultado);

	if($filas>0){
			echo "<script>
			alert('NOMBRE DE USUARIO EN USO');
			window.location= '../views/register.php'
			</script>";
	}else{

		$insertarDatos = "INSERT INTO usuarios VALUES (NULL, '$nombre', '$apellido', '$user', '$contrasena')";

		$ejecutarInsertar = mysqli_query($enlace,$insertarDatos);

			if(!$ejecutarInsertar){
				echo "<script>alert('ERROR EN LA INSERCION DE DATOS');</script>";
			}else{
				header("Location: ../views/regex.php");
        		return;
			}

		}

	}
?>