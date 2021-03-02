<?php 
    //---- Conexión a la BD ----//
    include("Client_View_Function.php");
    $ID = $_GET['ID'];
    //---- Llama la función ----//
    delete('Clients','ID',$ID);
    //---- Lo manda a ese documento ----//
    header("location:../funcionalidad/Client_View.php?valor=0");
?>