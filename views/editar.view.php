<?php require 'header.php'; ?>

<div class="contenedor">
	<div class="post">
		<article>
			<h2 class="titulo">Editar Articulo</h2>
			<form onsubmit="return validar();" class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<input type="hidden" value="<?php echo $post['id']; ?>" name="id">
				<input type="text" id="titulo" name="titulo" value="<?php echo $post['titulo']; ?>">
				<input type="text" id="extracto" name="extracto" value="<?php echo $post['extracto']; ?>">
				<textarea id="texto" name="texto"><?php echo $post['texto']; ?></textarea>
				<input type="file" id="imagen" name="thumb">
				<input type="hidden" name="thumb-guardada" value="<?php echo $post['thumb']; ?>">  <!--el input de tipo hidden no se muestra en pantalla y guardara datos temporalmente-->

				<input type="submit" value="Modificar Articulo">
			</form>
		</article>
	</div>
</div>
<script src="../js/javascript.js"></script>

<?php require 'footer.php'; ?>