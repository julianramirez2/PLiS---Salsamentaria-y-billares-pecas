<!DOCTYPE html>
<html lang = es>
    <head>
        <meta charset = "UTF-8">
        <title> Crear Cliente </title>
        <link rel = "shortcut icon" href = "img/MiniCliente.png" />
        <link rel = "stylesheet" href = "./css/Style_Clients.css" />
    </head>
    
    <body>
        <!------------------------------- Barra Superior -------------------------------->
        <!--                        Muestra el Logotipo de PLIS                        -->
        <!-- Muestra imagen como boton para devolverse a la pagina anterior (Opciones) -->
        <!------------------------------------------------------------------------------->
        <div class = "Upper_Bar">
            <h2> 
                <img src = "./img/PLIS.png" class = "Logo_PLIS" alt = "Back">
                Crear Cliente
                <a href = "Client_Options.php">
                    <img src = "./img/Back.png" class = "Back" alt = "Back">
                </a>
            </h2>
        </div> 

        <div class = "Box_Form">
            <!-- Crea formulario de crear -->
            <form action = "Client_Create_Config.php" method = "POST">
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
                    <p> Deuda: </p>
                    <input class = "Input_Form" name = "Debt" type = "number" min = "0" step = "50" required>
                </label>

                <!-- Mensajes de advertencia o confirmación -->
                <div class = "Messages">
                    <?php require_once 'Client_Create_Messages.php';?>
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