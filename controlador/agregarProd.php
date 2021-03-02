<?php
     include '../funcionalidad/conexión.php';

    if(isset($_POST['agregar'])){
		$nombre = $_POST['Producto']; 
		$Precio = $_POST['Precio'];
		$descripcion = $_POST['Descripcion'];
		$nombreImg = $_FILES['Imagen']['name'];
		$archivo = $_FILES['Imagen']['tmp_name'];
		$ruta = "../img";
		$ruta = $ruta."/".$nombreImg;

		move_uploaded_file($archivo,$ruta);

		$insertarDatos = "INSERT INTO productos VALUES (NULL, '$nombre','$Precio','$descripcion','$ruta')";
		

		$ejecutarInsertar = mysqli_query($enlace,$insertarDatos);

			if(!$ejecutarInsertar){
				echo "<script>alert('ERROR EN LA INSERCION DE DATOS');</script>";
			}else{
				echo "<script>alert('PRODUCTO AGREGADO'); window.location= '../funcionalidad/agproducto.php'</script>";
				//header("Location: ../funcionalidad/agproducto.php");
			}

    }
?>