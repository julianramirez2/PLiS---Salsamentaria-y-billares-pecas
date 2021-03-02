<?php 
    //---- Conexión a la BD ----//
    include("Client_View_Function.php");
    $ID = $_GET['id'];
    //---- Llama la función ----//
    delete('productos','ID',$ID);
    //---- Lo manda a ese documento ----//
    header("location:../funcionalidad/productos.php");
?>