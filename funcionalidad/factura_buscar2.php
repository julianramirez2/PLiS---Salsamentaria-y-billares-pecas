<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/facturass.css"/>

    <title>Facturación</title>
  </head>
  <body>
    
  <div class="topnav">
            <img src = "../img/PLIS.png" class = "Logo_PLIS" alt = "Back" >
            <a href="../views/mainpage.php">Menú principal</a>
            <a class="active" href="../funcionalidad/factura.php?id=0&precios=0&precioActual=0">Factura</a>
            <a href="../funcionalidad/Client_Options.php">Clientes</a>
            <a href="../funcionalidad/productos.php">Productos</a>
            <a href="../funcionalidad/factura.php?id=0&precios=0&precioActual=0">Fac. Personal</a>
            <a href="../funcionalidad/agproducto.php">Agregar Producto</a>
            <a href="../funcionalidad/timer.php">Tiempo</a>
            <a href="../views/index.php">Cerrar sesión</a>
  </div>

<nav class="navbar navbar-light bg-light">
<form class="form-inline" action = "factura_buscar.php" method="GET">
    <input class="form-control mr-sm-2" type="search" placeholder="Buscar producto" aria-label="Search" name="busqueda">
    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
  </form>
<a class="navbar-brand"><h4>SUBTOTAL DE PRODUCTOS: <?php echo $_GET['precioActual'] ?> COP</h4></a>
<a href="sumar.php?id=0&precios=0&precioActual=0" type="button" class="btn btn btn-warning">LIMPIAR</a>   
</nav>

  <div>
        <table class="table table-striped table-light">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Producto</th>
            <th scope="col">Precio</th>
            <th scope="col">Agregar</th>
          </tr>
        </thead>
        <tbody>
        <?php  
           $servidor="localhost";
           $usuario="root";
           $password="";
           $baseDeDatos="plis_prueba";
           $precio = 0;
           $busqueda = $_GET['busqueda'];
           $precioActual = $_GET['precioActual'];
           $enlace = mysqli_connect($servidor, $usuario,$password,$baseDeDatos);
           $resultados = mysqli_query($enlace,"SELECT * FROM productos WHERE Producto LIKE '$busqueda'");
           while($consulta = mysqli_fetch_array($resultados)){
           ?>
          <tr>
            <th scope="row"><?php echo $consulta['ID'] ?></th>
            <td><?php echo $consulta['Producto'] ?></td>
            <td><?php echo $consulta['Precio'] ?></td>
            <td><a href="sumar.php?id=<?php echo $consulta['ID'] ?>&precios=<?php echo $consulta['Precio']?>&precioActual=<?php echo $precioActual?>" type="button" class="btn btn btn-warning">Agregar producto</a></td>
            <?php } ?>
        </tbody>
      </table>
  </div>

    <div class = "Under_Bar">
        <h6> Este proyecto está protegido por derechos de autor adjudicados a PLiS Team </h6>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>