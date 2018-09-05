<?php 

require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);


if (!$conexion) {
	header('Location: ../error.php');
}

$posts = obtener_post($blog_config['post_por_pagina'], $conexion);

 ?>


<?php foreach ($posts as $post): ?>
	<div class="post">
		<article>
			<h2 class="titulo"><?php echo $post['id'] . '.-' . $post['titulo']; ?></h2>
			<a href="editar.php?id=<?php echo $post['id']; ?>">Editar</a>
			<a href="../single.php?id=<?php echo $post['id']; ?>">Ver</a>
			<a onclick="return confirm('¿Estas seguro de querer borrar este articulo?');" href="borrar.php?id=<?php echo $post['id']; ?>">Borrar</a>
		</article>
	</div> 
<?php endforeach ?>

<?php $numero_paginas = numero_paginas($blog_config['post_por_pagina'], $conexion); ?>
<section class="paginacion">
	<ul>

		<?php if (pagina_actual() === 1): ?>
			<li class="disabled">&laquo;</li>
		<?php else: ?>
			<li><a href="index.php?p=<?php echo pagina_actual() - 1 ?>">&laquo;</a></li>
		<?php endif; ?>

		<?php for($i = 1; $i <= $numero_paginas; $i++): ?>
			<?php if (pagina_actual() === $i): ?>
				<li class="active">
					<?php echo $i; ?>
				</li>
		<?php else: ?>
				<li><a href="index.php?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
		<?php endif; ?>

		<?php endfor; ?>
		
		<?php if(pagina_actual() == $numero_paginas): ?>
			<li class="disabled">&raquo;</li>
		<?php else: ?>
			<li><a href="index.php?p=<?php echo pagina_actual() + 1; ?>">&raquo;</a></li>
		<?php endif; ?>
		<!-- <li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">&raquo;</a></li> -->
	</ul>
</section>
