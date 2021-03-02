<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/producto.css"/>
	<title>PRODUCTOS</title>
</head>
<body style="margin-bottom:50px;">	

<div class="topnav">
            <img src = "../img/PLIS.png" class = "Logo_PLIS" alt = "Back" >
            <a href="../views/mainpage.php">Menú principal</a>
            <a href="../funcionalidad/factura.php?id=0&precios=0&precioActual=0">Factura</a>
            <a href="../funcionalidad/Client_Options.php">Clientes</a>
            <a class="active" href="../funcionalidad/productos.php">Productos</a>
            <a href="../funcionalidad/factura.php?id=0&precios=0&precioActual=0">Fac. Personal</a>
            <a href="../funcionalidad/agproducto.php">Agregar Producto</a>
            <a href="../funcionalidad/timer.php">Tiempo</a>
            <a href="../views/index.php">Cerrar sesión</a>
  </div>

<!-- Ventana de agregar producto fija en todo momento-->
<div class="container">   
        <div class="card-columns mt-3">
                  <!-- Conexión con PHP para consultar los productos de la BD-->
                  <?php 
                    include 'conexión.php';
                    $resultados = mysqli_query($enlace,"SELECT * FROM productos");
                    while($consulta = mysqli_fetch_array($resultados)){
                  ?>
                  <!-- Card que se va a ir añadiendo por cada producto que exista-->
            <div class="card" style="width: 18rem; height:20rem;">
                <div class="card-body">
                  <img src="<?php echo $consulta['Imagen']?>" style="width:100px; height:100px; margin-left:70px;">
                  <h5 class="card-title"><?php echo $consulta['Producto']?></h5>
                  <p class="card-text"><?php echo $consulta['Precio']?></p>
                  <p class="card-text"><?php echo $consulta['Descripcion']?></p>
                  <a href="editarProducto.php?id=<?php echo $consulta['ID']?>" class="btn btn-dark" style="margin-top:;">Editar información</a>
                  <a href="../controlador/eliminarProd.php?id=<?php echo $consulta['ID']?>" class="btn btn-dark" style="margin-top:;">Eliminar</a>
                </div>
            </div>
            <!-- Cerrar el ciclo de los productos-->
            <?php } ?>
        </div>
      </div>  
      <div class = "Under_Bar">
            <h6> Este proyecto está protegido por derechos de autor adjudicados a PLiS Team </h6>
        </div>
</body>
</html>


