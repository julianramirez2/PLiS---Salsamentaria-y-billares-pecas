<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../img/favicon.ico" />
    <link rel="stylesheet" href="../css/styleregex.css"/>
	<title>S/B PECAS REGISTRO</title>
</head>
<body>

	<div class="titulos">
	<div class="titulo">¡REGISTRO</div>
	<div class="titulo2">EXITOSO!</div>
	</div>

	<div class="inputs"><form method="POST">

		<div class="botones">
			<input class="ingreso" type="submit" value="REGRESAR A LA PÁGINA DE INICIO" name="regresar">
		</div>

	</div>
	</form></div>
	
</body>
</html>

<?php

	if(isset($_POST['regresar'])){
		header("Location: index.php");
       	return;
	}
?>