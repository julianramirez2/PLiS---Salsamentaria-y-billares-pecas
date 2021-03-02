<?php
    include '../funcionalidad/conexión.php';


    if(isset($_POST['agregar'])){
		
		$nombre = $_POST['Producto']; 
		$Precio = $_POST['Precio'];
        $descripcion = $_POST['Descripcion'];
        $id = $_POST['id'];
		$insertarDatos = "UPDATE productos SET Producto='$nombre', Precio='$Precio', Descripcion='$descripcion' WHERE ID='$id'";
		

		$ejecutarInsertar = mysqli_query($enlace,$insertarDatos);

			if(!$ejecutarInsertar){
                echo "<script>alert('ERROR EN LA INSERCION DE DATOS');</script>";
			}else{
				header("Location: ../funcionalidad/productos.php");
        		return;
			}

    }
?>