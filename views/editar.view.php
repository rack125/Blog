<?php require 'header.php'; ?>

<div class="contenedor">
	<div class="post">
		<article>
			<h2 class="titulo">Editar Articulo</h2>
			<form name="formulariomodificar" id="formulariomodificar" class="formulario" enctype="multipart/form-data">
				<input type="hidden" value="<?php echo $post['id']; ?>" name="id">
				<input type="text" id="titulo" name="titulo" value="<?php echo $post['titulo']; ?>">
				<input type="text" id="extracto" name="extracto" value="<?php echo $post['extracto']; ?>">
				<textarea id="texto" name="texto"><?php echo $post['texto']; ?></textarea>
				<input type="file" id="thumb" name="thumb">
				<input type="hidden" name="thumb-guardada" value="<?php echo $post['thumb']; ?>">  <!--el input de tipo hidden no se muestra en pantalla y guardara datos temporalmente-->

				<input onclick="validar();" type="submit" id="botonnico" name="botonnico" value="Modificar Articulo">
			</form>
		</article>
	</div>
</div>
<script src="../js/javascript.js"></script>

<?php require 'footer.php'; ?>