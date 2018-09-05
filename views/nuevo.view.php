<?php require 'header.php'; ?>

<div class="contenedor">
	<div class="post">
		<article>
			<h2 class="titulo">Nuevo Articulo</h2>
			<form onsubmit="return validar();" class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">  <!-- //multipart form data se usa al estar usando un formulario con archivos(en este caso los thumb) -->
				<input type="text" id="titulo" name="titulo" placeholder="Titulo del Articulo">
				<input type="text" id="extracto" name="extracto" placeholder="Extracto del Articulo">
				<textarea name="texto" id="texto" placeholder="Texto del Articulo"></textarea>
				<input type="file" id="imagen" name="thumb">

				<input type="submit" id="" value="Crear Articulo">
			</form>
		</article>
	</div>
</div>


<?php require 'footer.php'; ?>