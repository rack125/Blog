<?php require '../views/header.php'; ?>

	<div class="contenedor">
			<h2>Panel de Control</h2>
			<!-- <a href="" onclick="Modal();" class="btn">Nuevo Post</a> -->
			  <button type="button" onclick="Modal();" class="btn btn-primary btn-lg" >
         	 	<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Nuevo Post
        </button>    

			<a href="cerrar.php" onclick="alert('Adios señor stark');" style="color:white" class="btn">Cerrar Sesion</a>

   <!--    <div id="actualizar"></div> -->
			<?php foreach ($posts as $post): ?>
				<div class="post">
					<article>
						<h2 class="titulo"><?php echo $post['id'] . '.-' . $post['titulo']; ?></h2>
						<a href="editar.php?id=<?php echo $post['id']; ?>" >Editar</a>
						<a href="../single.php?id=<?php echo $post['id']; ?>">Ver</a>
						<a href="borrar2.php?id=<?php echo $post['id']; ?>">Borrar</a>
          <!--   onclick="return confirm('¿Estas seguro de querer borrar este articulo?');"  -->
					</article>
				</div> 
			<?php endforeach ?>
		
		<!-- Modal Ingresar -->

	 <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Nuevo Post</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form role="form" action="" enctype="multipart/form-data" name="frmArticulos" id="frmArticulos" onsubmit="Registrar(); return false">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Titulo</label>
                  <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Titulo del Articulo" required>
                </div>

                <div class="form-group">
                  <label>Extracto</label>
                  <input type="text" name="extracto" id="extracto" class="form-control" placeholder="Extracto del Articulo" required>
                </div>

                <div class="form-group">
                  <label>Contenido</label>
                  <textarea name="texto" id="texto" class="form-control" placeholder="Texto del Articulo" required></textarea>
                </div>

                <div class="form-group">
                  <label>Imagen</label>
                  <input type="file" name="thumb" id="thumb" class="form-control" required>
                </div>

                <button onclick="validarnuevo();" type="submit" class="btn btn-info btn-lg" align="right">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Registrar
                </button>

              </div>
            </form>

          </div>
        </div>
      </div>
	<!-- fin de modal -->

      <!-- Modal modificar -->

<!--    <div class="modal fade" id="modalm" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Editar Articulo</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form role="form" action="" enctype="multipart/form-data" name="frmArticulosm" id="frmArticulosm" onsubmit="Modificar(); return false">
              <div class="col-lg-12">

                <input type="hidden" value="<?php echo $post['id']; ?>" name="id">

                <div class="form-group">
                  <label>Titulo</label>
                  <input type="text" id="titulo" name="titulo" value="<?php echo $post['titulo']; ?>">
                </div>

                <div class="form-group">
                  <label>Extracto</label>
                  <input type="text" id="extracto" name="extracto" value="<?php echo $post['extracto']; ?>">
                </div>

                <div class="form-group">
                  <label>Contenido</label>
                  <textarea id="texto" name="texto"><?php echo $post['texto']; ?></textarea>
                </div>

                <div class="form-group">
                  <label>Imagen</label>
                  <input type="file" name="thumb" id="thumb" class="form-control" required>
                </div>

                <input type="hidden" name="thumb-guardada" value="<?php echo $post['thumb']; ?>"> 

                <button type="submit" class="btn btn-info btn-lg" align="right">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Modificar
                </button>

              </div>
            </form>

          </div>
        </div>
      </div> -->
  <!-- fin de modal -->




		<?php require'../paginacion.php'; ?>
	</div>

<?php require '../views/footer.php'; ?>