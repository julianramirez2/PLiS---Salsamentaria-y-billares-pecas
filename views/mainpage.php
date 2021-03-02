<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../img/favicon.ico" />
    <link rel="stylesheet" href="../css/mainpae.css"/>
	<title>S/B PECAS</title>
</head>
<body>

	<div class="circulo"><div class="TEXTO">BIENVENIDO</div><div class="TEXTO2">¿QUE DESEAS HACER?</div>
	</div>


	<form method="POST" action="../controlador/comprobaraccion.php">
	<div class="funciones">

		<div class="f1">
			<img src="../img/productoI1.png">
			<input class="botones" type="submit" value="PRODUCTOS" name="productos">
		</div>

		<div class="f2">
			<img src="../img/clienteI1.png">
			<input class="botones" type="submit" value="CLIENTES" name="clientes">
		</div>

		<div class="f3">
			<img src="../img/facturaI1.png">
			<input class="botones" type="submit" value="FACTURA" name="factura">
		</div>

		<div class="f4">
			<img src="../img/juegoI1.png">
			<input class="botones" type="submit" value="TIEMPO" name="tiempo">
		</div>

		<div class="f3">
			<img src="../img/FactPI1.png">
			<input class="botones" type="submit" value="FAC.PERSONAL" name="pfactura">
		</div>

		<div class="f4">
			<img src="../img/producto.png">
			<input class="botones" type="submit" value="AG.PRODUCTO" name="agproducto">
		</div>

		<div class="f4">
			<img src="../img/logout.png" style="margin-left:70px; width:200px; height:200px;">
			<input class="botones" type="submit" value="LOGOUT" name="logout">
		</div>

	

	</div>
	</form>

	
</body>
</html>