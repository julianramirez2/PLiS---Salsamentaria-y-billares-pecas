<?php  
           $servidor="localhost";
           $usuario="root";
           $password="";
           $baseDeDatos="plis_prueba";
           $precio = 0;
           $precioActual = $_GET['precioActual'];
           $enlace = mysqli_connect($servidor, $usuario,$password,$baseDeDatos);

           
           $busqueda = $_REQUEST['busqueda']; 
        
           if(empty($busqueda)){
             header("location: factura.php?id=0&precios=0&precioActual=0");
           }else{
            header("location: factura_buscar2.php?id=0&precios=0&precioActual=$precioActual&busqueda=$busqueda");
            }
  ?>

