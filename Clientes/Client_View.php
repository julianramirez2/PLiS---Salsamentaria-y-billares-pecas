<!DOCTYPE html>
<html lan = es>
    <head>
        <meta charset="UTF-8">
        <title> Ver Cliente </title>
        <link rel = "shortcut icon" href = "img/MiniCliente.png" />
        <link rel = "stylesheet" href= "css/Style_Clients.css" /> 
    </head>

    <body>
        <!------------------------------- Barra Superior -------------------------------->
        <!--                        Muestra el Logotipo de PLIS                        -->
        <!-- Muestra imagen como boton para devolverse a la pagina anterior (Opciones) -->
        <!------------------------------------------------------------------------------->
        <div class = "Upper_Bar">
            <h2> 
                <img src = "./img/PLIS.png" class = "Logo_PLIS" alt = "Back">
                Ver Clientes
                <a href = "Client_Options.php">
                    <img src = "./img/Back.png" class = "Back" alt = "Back">
                </a>
            </h2>
        </div> 

        <!--      Agrega documentos con funciones    -->
        <?php include("Client_View_Function.php"); ?>
        <div class = "Box_Base">
            <!-- Agrega los datos en la tabla -->
            <?php
                $sql = "SELECT * FROM Clients";
                $result = db_query($sql);
                while($row = mysqli_fetch_object($result)){
            ?>
            <div class = "Box_Client">
                <!-- Muestra el nombre y apellido de cada cliente -->
                <h3> 
                    <?php echo $row->Name;?> 
                    <?php echo $row->LastName;?> 
                </h3>

                <!-- Agrega el boton de Detalle y Borrar para cada cliente -->
                <div> 
                    <a class = "Button_Detail" style="text-decoration:none" name = "Detail" href = "Client_View_Detail.php?ID=<?php echo $row->ID; ?>"> Más Detalle </a>
                    <a class = "Button_Delete" style="text-decoration:none" name = "Delete" href = "Client_View_Delete.php?ID=<?php echo $row->ID;?>"> Eliminar </a>
                </div>
                
            </div>
            <?php } ?>
        </div>

        <!------------------------------- Barra Inferior -------------------------------->
        <!--                      Muestra los derechos protegidos                      -->
        <!------------------------------------------------------------------------------->
        <div class = "Under_Bar">
            <h6> Este proyecto está protegido por derechos de autor adjudicados a PLiS Team </h6>
        </div>
    </body>
</html>