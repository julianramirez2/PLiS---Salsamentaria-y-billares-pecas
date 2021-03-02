<!DOCTYPE html>
<html>
    <head>
    <meta charset = "UTF-8">
        <title> Detalles de Cliente </title>
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
                Detalles del Cliente
                <a href = "Client_View.php">
                    <img src = "./img/Back.png" class = "Back" alt = "Back">
                </a>
            </h2>
        </div> 

        <div class = "Box_Form">
            <!-- Agrega documentos con funciones y obtiene el ID de cada cliente -->
            <?php 
                include("Client_View_Function.php");
                $id = $_GET['ID'];
                select_id('Clients','ID',$id);
            ?>
            <!-- Crea formulario de actualización y muestra los datos guardados -->
            <form action = "" method = "POST">
                <label class = "Text_Form">
                    <p> Nombre: </p>
                        <input class = "Input_Form" name = "Name" type = "text" value = "<?php echo $row->Name;?>" required>
                </label>

                <label class = "Text_Form">
                    <p> Apellido: </p>
                    <input class = "Input_Form" name = "LastName" type = "text" value = "<?php echo $row->LastName;?>" required>
                </label>

                <label class = "Text_Form">
                    <p> Telefono: </p>
                    <input class = "Input_Form" name = "Phone" type = "tel" value = "<?php echo $row->Phone;?>" required>
                </label>

                <label class = "Text_Form">
                    <p> Dirección: </p>
                    <input class = "Input_Form" name = "Address" type = "address" value = "<?php echo $row->Address;?>" required>
                </label>

                <label class = "Text_Form">
                    <p> Deuda: </p>
                    <input class = "Input_Form" name = "Debt" type = "number" min = "0" step = "50" value = "<?php echo $row->Debt;?>" required>
                </label>

                <!-- Boton para confirmar la actualización -->
                <p> <input class = "Button_Save" type = "submit" name = "submit" value = "ACTUALIZAR DATOS" /> </p>
            </form>

            <!-- Envia los datos en cada campo a la BD y muestra la actualización en Visualización -->
            <?php
                if(isset($_POST['submit'])){
                    $field = array("Name"=>$_POST['Name'], "LastName"=>$_POST['LastName'], "Phone"=>$_POST['Phone'], "Address"=>$_POST['Address'], "Debt"=>$_POST['Debt']);
                    $tbl = "Clients";
                    edit($tbl,$field,'ID',$id);
                    header("location:Client_View.php");
                } 
            ?>
        </div>
        
        <!------------------------------- Barra Inferior -------------------------------->
        <!--                      Muestra los derechos protegidos                      -->
        <!------------------------------------------------------------------------------->
        <div class = "Under_Bar">
            <h6> Este proyecto está protegido por derechos de autor adjudicados a PLiS Team </h6>
        </div>
    </body>
</html>