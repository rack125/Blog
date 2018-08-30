<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">   
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo RUTA; ?>/css/estilos.css">
	<title>Blog</title>
</head>
<body>
	<div id="particles-js"></div>
	<header>
		<div class="contenedor">
			<div class="logo izquierda">
				<p><img src="<?php echo RUTA; ?>/imagenes/zeldalogo.png" alt="" class="imagenlogo"><a href="<?php echo RUTA; ?>">Midgard Games</a></p>
			</div>

			<div class="derecha">
				<form name="busqueda" class="buscar" action="<?php echo RUTA; ?>/buscar.php" method="get" >
					<input type="text" name="busqueda" placeholder="Buscar"><button type="submit" class="icono fa fa-search"></button>
				</form>
				<nav class="menu">
					<ul>
						<li><a href="login.php">-<i class=""></i></a></li>
					</ul>
				</nav>
			</div>

		</div>

	</header>
