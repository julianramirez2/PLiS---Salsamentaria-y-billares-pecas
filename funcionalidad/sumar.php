<?php  
    $IDPRODUCTO = $_GET['id'];

    $precioEnviado = $_GET['precios'];
    $precioActual = $_GET['precioActual'] + $precioEnviado;
    
    header("Location:factura.php?id=$IDPRODUCTO&precioActual=$precioActual&precioEnviado=$precioEnviado");	
?>