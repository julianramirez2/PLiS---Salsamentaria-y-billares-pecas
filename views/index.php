

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../img/favicon.ico" />
    <link rel="stylesheet" href="../css/style.css"/>
	<title>S/B PECAS LOGIN</title>
</head>
<body>
	<div class="titulo">BIENVENIDO</div>
	<div class="subtitulo"><font size="7">A</font> SALSAMENTARIA Y BILLARES PECAS</div>

	<div class="inputs"><form method="POST" action="../controlador/autenticar.php">

		<div class="is">INICIAR SESIÓN</div>

		<div class="usuario">
		<input type="text" placeholder="USUARIO" name="user">
		</div>

		<div class="contrasena">
		<input type="password" placeholder="CONTRASEÑA" name="password">
		</div>

		<div class="botones">
			<input class="ingreso" type="submit" value="INGRESAR" name="ingresar">
			<input type="submit" name="registrarse" value="REGISTRARSE">
		</div>

	</div>
	</form></div>
	
</body>
</html>
