<?php session_start();

require 'config.php';
require '../functions.php';

comprobarSession();

$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: ../error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {    //con esto estamos comprobando si los datos realmente estan siendo enviados y especificamenete con $_SERVEER[REQUEST_METHOD] estamos especificando cual fue el metodo utilizado para enviar la informacion y con $_post estamos recuperando la informacion que estamos enviando
	$titulo = limpiarDatos($_POST['titulo']);
	$extracto = limpiarDatos($_POST['extracto']);
	$texto = $_POST['texto'];
	$thumb = $_FILES['thumb']['tmp_name'];

	$archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];  //variable que va almacenar la ruta del archivo cuando ya este finalizado 
	move_uploaded_file($thumb, $archivo_subido); //funcion que permite mover la imagen del computador del usuario a el servidor donde se debe poner el nombre de la variable del archivo y el destino,en este caso $archivo_subido

	$statement = $conexion->prepare(
	'INSERT INTO articulos (id, titulo, extracto, texto, thumb)
	VALUES (null, :titulo, :extracto, :texto, :thumb)'
	);

	$statement->execute(array(
		':titulo' => $titulo,
		':extracto' => $extracto,
		':texto' => $texto,
		':thumb' => $_FILES['thumb']['name']
	));

	header('Location: '. RUTA . '/admin');

}


require '../views/nuevo.view.php';

 ?>