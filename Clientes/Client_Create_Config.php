<?php
    include 'Conection.php';
    //--- Comprobación de la Entrada de Datos ---//
    $data = $_POST;

    // Uso de variables para facilitar el uso de datos
    $Name = $data["Name"];
    $LastName = $data["LastName"];
    $Phone = $data["Phone"];
    $Address = $data["Address"];
    $Debt = $data["Debt"];

    // Preparamos la orden SQL
    $consult = "INSERT INTO Clients (Name, LastName, Phone, Address, Debt) VALUES ('$Name', '$LastName', '$Phone', '$Address', '$Debt')";

    // Ejecuta la orden SQL
    if (mysqli_query($connection, $consult)){
        // Mensaje de Confirmación
        $_SESSION['messages'][] = 'Cliente Guardado';
        header('Location: Client_Create.php');
        exit;
    }

    // Verificación de Email
    else {
        // Mensaje de Advertencia
        $_SESSION['messages'][] = 'Ya existe un cliente con este Telefono';
        header('Location: Client_Create.php');
        exit;
    }
    // Cierra la conexión con MySQL
    $connection->close();
?>