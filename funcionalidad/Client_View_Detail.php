<!DOCTYPE html>
<html>
    <head>
    <meta charset = "UTF-8">
        <title> Detalles de Cliente </title>
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

        <div class = "Box_Form" style="height:850px;">
            <!-- Agrega documentos con funciones y obtiene el ID de cada cliente -->
            <?php 
                include("../controlador/Client_View_Function.php");
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
                    <input class = "Input_Form" name = "Debt" type = "address" value = "<?php echo $row->Debt;?>" required>
                    <input class = "Input_Form" name = "Debt2" type = "hidden" value = "0" required>
                    <p> Factura: </p>
                    <input class = "Input_Form" name = "Debt3" type = "address" value = "<?php echo $_GET['valor'];?>" required>
                </label>

                <!-- Boton para confirmar la actualización -->
                <p> <input class = "Button_Save" type = "submit" name = "submit" value = "ACTUALIZAR DATOS" /> </p>
                <p> <input class = "Button_Save" type = "submit" name = "deuda" value = "DEUDA PAGADA" /> </p>
                <p> <input class = "Button_Save" type = "submit" name = "deudaFactura" value = "ASIGNAR DEUDA FACTURA" /> </p>
            </form>

            <!-- Envia los datos en cada campo a la BD y muestra la actualización en Visualización -->
            <?php

                if(isset($_POST["deudaFactura"])){
                    $field = array("Name"=>$_POST['Name'], "LastName"=>$_POST['LastName'], "Phone"=>$_POST['Phone'], "Address"=>$_POST['Address'], "Debt"=>$_POST['Debt3']);
                    $tbl = "Clients";
                    edit($tbl,$field,'ID',$id);
                    header("location:Client_View.php?valor=0");
                }

                if(isset($_POST["deuda"])){
                    $field = array("Name"=>$_POST['Name'], "LastName"=>$_POST['LastName'], "Phone"=>$_POST['Phone'], "Address"=>$_POST['Address'], "Debt"=>$_POST['Debt2']);
                    $tbl = "Clients";
                    edit($tbl,$field,'ID',$id);
                    header("location:Client_View.php?valor=0");
                }

                if(isset($_POST['submit'])){
                    $field = array("Name"=>$_POST['Name'], "LastName"=>$_POST['LastName'], "Phone"=>$_POST['Phone'], "Address"=>$_POST['Address'], "Debt"=>$_POST['Debt']);
                    $tbl = "Clients";
                    edit($tbl,$field,'ID',$id);
                    header("location:Client_View.php?valor=0");
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