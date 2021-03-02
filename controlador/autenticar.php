<?php
	

	if(isset($_POST['ingresar'])){
		
		$user = $_POST['user'];
		$contrasena = $_POST['password'];


		$servidor="localhost";
		$usuario="root";
		$password="";
		$baseDeDatos="plis_prueba";


		$enlace = mysqli_connect($servidor, $usuario,$password,$baseDeDatos);

		$consulta = "SELECT * FROM usuarios WHERE Usuario='$user' and pass='$contrasena'";

		$resultado = mysqli_query($enlace,$consulta);

		$filas = mysqli_num_rows($resultado);

		if($filas>0){
			header("Location:../views/mainpage.php");
		}else{
			echo "<script>
			alert('INCORRECT USER OR PASSWORD');
			window.location= '../views/index.php'
			</script>";
		}



		}else{
		header("Location:../views/register.php");
		}


?>