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
    <a href="../funcionalidad/productos.php">Productos</a>
    <a href="../funcionalidad/factura.php?id=0&precios=0&precioActual=0">Fac. Personal</a>
    <a class="active" href="../funcionalidad/agproducto.php">Agregar Producto</a>
    <a href="../funcionalidad/timer.php">Tiempo</a>
    <a href="../views/index.php">Cerrar sesión</a>
    </div>


    <div class = "Box_Form" style="margin-top:200px; height:450px;">      

    <form method="POST" action="../controlador/agregarProd.php" enctype="multipart/form-data">

        <!-- Inputs con la información-->

                <label class = "Text_Form">
                    <p> Nombre: </p>
                    <input type="text" name="Producto" class="Text_Form" placeholder="Nombre">
                </label>

                <label class = "Text_Form">
                    <p> Precio: </p>
                    <input type="text" name="Precio" class="Text_Form" placeholder="Precio">
                </label>

                <label class = "Text_Form">
                    <p> Descripción: </p>
                    <input type="text" name="Descripcion" class="Text_Form" placeholder="Descripcion">
                </label>

                <label class = "Text_Form">
                    <p> Imagen: </p>
                    <input type="file" name="Imagen" class="Text_Form" placeholder="Imagen">
                </label>

                <p><button class = "Button_Save" type = "submit" name = "agregar">AGREGAR PRODUCTO</button></p>
        


    </form>

    </div>
 
    <div class = "Under_Bar">
            <h6> Este proyecto está protegido por derechos de autor adjudicados a PLiS Team </h6>
    </div>       

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>