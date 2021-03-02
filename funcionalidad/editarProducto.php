<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plantilla básica de Bootstrap</title>



    <link href="../css/agregarProds.css" rel="stylesheet" media="screen">

  </head>
  

  <body>

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


    <div class = "Box_Form" style="margin-top:200px; height:400px;">      

    <form method="POST" action="../controlador/editarProd.php">
            <!-- Conexión con la BD para consultar la información del producto-->
            <?php 
                    include 'conexión.php';
                    $resultados = mysqli_query($enlace,"SELECT * FROM productos WHERE ID=".$_GET['id']);
                    while($consulta = mysqli_fetch_array($resultados)){
            ?>
        
        <!-- Inputs con la información-->

                <label class = "Text_Form">
                    <p> Nombre: </p>
                    <input type="text" name="Producto" class="Text_Form" placeholder="Editar producto" value="<?php echo $consulta['Producto']?>">
                </label>

                <label class = "Text_Form">
                    <p> Precio: </p>
                    <input type="text" name="Precio" class="Text_Form" placeholder="Editar precio" value="<?php echo $consulta['Precio']?>">
                </label>

                <label class = "Text_Form">
                    <p> Descripción: </p>
                    <input type="text" name="Descripcion" class="Text_Form" placeholder="Editar descripción" value="<?php echo $consulta['Descripcion']?>" >
                </label>

                <input class="form-control mr-sm-2" type="hidden" placeholder="" aria-label="Search" name="id" value="<?php echo $_GET['id']?>">

                <p><button class = "Button_Save" type = "submit" name = "agregar">EDITAR INFORMACIÓN</button></p>
        

            <?php } ?>

    </form>

    </div>
 
    <div class = "Under_Bar">
            <h6> Este proyecto está protegido por derechos de autor adjudicados a PLiS Team </h6>
    </div>       

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>