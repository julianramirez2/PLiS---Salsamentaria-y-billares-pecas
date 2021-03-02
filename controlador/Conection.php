<?php
    //----- Conexión a MySQL -----//
    session_start();

    // Datos para la conexion
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'plis_prueba';

    // Nace la conexión a la Base de Datos.
    $connection = mysqli_connect($host, $user, $password, $dbname);
    
    if(!$connection){
        // Mensaje de Error
        $_SESSION['messages'][] = "Conexión Fallida: " . mysqli_connect_error();
        header('Location: ../funcionalidad/Client_Create.php');
        exit;
    }
?>