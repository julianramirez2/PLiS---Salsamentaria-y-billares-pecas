

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../img/favicon.ico" />
    <link rel="stylesheet" href="../css/stylereg.css"/>
	<title>S/B PECAS REGISTRO</title>
</head>
<body>
	<div class="titulo">REGISTRO</div>

	<div class="inputs"><form method="POST" action="../controlador/registrar.php">


		<div class="nombre">
		<input type="text" placeholder="NOMBRES" name="nombre" required>
		</div>

		<div class="apellido">
		<input type="text" placeholder="APELLIDOS" name="apellido" required>
		</div>

		<div class="usuario">
		<input type="text" placeholder="USUARIO" name="user" required>
		</div>

		<div class="contrasena">
		<input type="password" placeholder="CONTRASEÑA" name="password" required>
		</div>

		<div class="botones">
			<input class="ingreso" type="submit" value="INGRESAR" name="ingresar">
		</div>

	</div>
	</form></div>
	
</body>
</html>

