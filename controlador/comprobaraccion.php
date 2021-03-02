<?php 

$nombre = $_GET['usuario'];

if(isset($_POST["productos"])){
	header("Location:../funcionalidad/productos.php?");	
}

if(isset($_POST["clientes"])){
	header("Location:../funcionalidad/Client_Options.php?valor=0");	
}

if(isset($_POST["factura"])){
	echo '<script>window.open("../funcionalidad/factura.php?id=0&precios=0&precioActual=0","_blank")</script>
	<script>window.location = "../views/mainpage.php";</script>';
}

if(isset($_POST["tiempo"])){  
	echo '<script>window.open("../funcionalidad/timer.php","_blank")</script>
	<script>window.location = "../views/mainpage.php";</script>';

	//header("Location:../mainpage.php");
}

if(isset($_POST["pfactura"])){
	echo '<script>window.open("../funcionalidad/factura.php?id=0&precios=0&precioActual=0","_blank")</script>
	<script>window.location = "../views/mainpage.php";</script>';
}

if(isset($_POST["agproducto"])){
	header("Location:../funcionalidad/agproducto.php");	
}

if(isset($_POST["logout"])){
	header("Location:../views/index.php");	
}
?>