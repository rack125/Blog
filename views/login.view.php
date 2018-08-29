<?php require 'header.php'; ?>

	<div class="contenedor">
		<div class="post">
			<article>
				<h2 class="titulo">Iniciar Sesion</h2>
				<form class="formulario" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">  <!-- Con el server php self estoy devolviendo los datos a el mismo formulario ya que no quiero enviarlos a otro lugar -->
					<input type="text" name="usuario" id="usuario" placeholder="Usuario">
					<input type="password" name="password" id="password" placeholder="Contraseña">
					<input type="submit" id="send" value="Iniciar Sesion" onclick="valida();">
				</form>
			</article>
		</div>
	</div>
<?php require 'footer.php'; ?>