<!DOCTYPE html>
<html lan = es>
    <head>
        <meta charset = "UTF-8">
        <title> Clientes </title>
        <link rel = "shortcut icon" href = "img/MiniCliente.png" />
        <link rel = "stylesheet" href = "./css/Style_Clients.css" />
    </head>

    <body>
        <div class = "Title">
            <h1> ESCOGE UNA OPCIÓN </h1>
        </div>

        <!-- Crea un Botón que lleva a la Creación de Clientes -->
        <div align = "center">
            <button class = "Button_Options" name = "Option_1" onclick = "location = 'Client_Create.php'"> Crear Cliente </button>
        </div>

        <!-- Crea un Botón que lleva a la Visualización de Clientes -->
        <div align = "center">
            <button class = "Button_Options" name = "Option_2" onclick = "location = 'Client_View.php'"> Ver Clientes </button>
        </div>

        <!-- Crea un Botón que lleva de regreso al Menú -->
        <div align = "center">
            <button class = "Button_Back" name = "Option_3" onclick = "location = '../mainpage.php'"> Volver al Menú </button>
        </div>

        <!------------------------------- Barra Inferior -------------------------------->
        <!--                      Muestra los derechos protegidos                      -->
        <!------------------------------------------------------------------------------->
        <div class = "Under_Bar">
            <h6> Este proyecto está protegido por derechos de autor adjudicados a PLiS Team </h6>
        </div>

    </body>
</html>