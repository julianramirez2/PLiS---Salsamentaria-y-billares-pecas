<!DOCTYPE html>
<html lang = es>
    <head>
        <meta charset = "UTF-8">
        <title> Crear Cliente </title>
        <link rel = "shortcut icon" href = "img/MiniCliente.png" />
        <link rel = "stylesheet" href = "../css/Style_Client.css" />
    </head>
    
    <body>
        <!------------------------------- Barra Superior -------------------------------->
        <!--                        Muestra el Logotipo de PLIS                        -->
        <!-- Muestra imagen como boton para devolverse a la pagina anterior (Opciones) -->
        <!------------------------------------------------------------------------------->
        
        <div class="topnav">
            <img src = "../img/PLIS.png" class = "Logo_PLIS" alt = "Back" >
            <a href="../views/mainpage.php">Menú principal</a>
            <a href="../funcionalidad/factura.php?id=0&precios=0&precioActual=0">Factura</a>
            <a class="active" href="../funcionalidad/Client_Options.php">Clientes</a>
            <a href="../funcionalidad/productos.php">Productos</a>
            <a href="../funcionalidad/factura.php?id=0&precios=0&precioActual=0">Fac. Personal</a>
            <a href="../funcionalidad/agproducto.php">Agregar Producto</a>
            <a href="../funcionalidad/timer.php">Tiempo</a>
            <a href="../views/index.php">Cerrar sesión</a>
        </div>
        
        <div class = "Box_Form" style="height:500px;">
            <!-- Crea formulario de crear -->
            <form action = "../controlador/Client_Create_Config.php" method = "POST">
                <label class = "Text_Form">
                    <p> Nombre: </p>
                        <input class = "Input_Form" name = "Name" type = "text" required>
                </label>

                <label class = "Text_Form">
                    <p> Apellido: </p>
                    <input class = "Input_Form" name = "LastName" type = "text" required>
                </label>

                <label class = "Text_Form">
                    <p> Telefono: </p>
                    <input class = "Input_Form" name = "Phone" type = "tel" required>
                </label>

                <label class = "Text_Form">
                    <p> Dirección: </p>
                    <input class = "Input_Form" name = "Address" type = "address" required>
                </label>

                <label class = "Text_Form">
                  
                    <input type="hidden" class = "Input_Form" name = "Debt" value="0">
                </label>

                <!-- Mensajes de advertencia o confirmación -->
                <div class = "Messages">
                    <?php require_once '../controlador/Client_Create_Messages.php';?>
                </div>

                <!-- Botón que guarda los datos en la BD -->
                <p> <input class = "Button_Save" type = "submit" value = "GUARDAR DATOS" /> </p>
            </form>
        </div>


        <!------------------------------- Barra Inferior -------------------------------->
        <!--                      Muestra los derechos protegidos                      -->
        <!------------------------------------------------------------------------------->
        <div class = "Under_Bar">
            <h6> Este proyecto está protegido por derechos de autor adjudicados a PLiS Team </h6>
        </div>
    </body>
</html>