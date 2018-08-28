<?php 

function conexion($bd_config){
	try {
		$conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
		return $conexion;
	} catch (PDOException $e) {
		return false;
	}
}

function limpiarDatos($datos){
	$datos = trim($datos);          //quita los espacios
	$datos = stripslashes($datos);  //quita las barras
	$datos = htmlspecialchars($datos); //limpia las etiquetas
	return $datos;
}

function pagina_actual(){
	return isset($_GET['p']) ? (int)$_GET['p'] : 1;  //el isset para comprobrar si una variable esta definida o no
	
}

function obtener_post($post_por_pagina, $conexion){
	$inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
	$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $post_por_pagina"); //SQL CALC FOUND ROWS se utiliza para saber cuantos articulos tenemos en la base de datos 
	$sentencia->execute();
	return $sentencia->fetchAll();  //esto lo que provoca que TODOS los post o articulos retornen en la pagina
}

function id_articulo($id){
	return (int)limpiarDatos($id);
}

function obtener_post_por_id($conexion, $id){
	$resultado = $conexion->query("SELECT * FROM articulos WHERE id = $id LIMIT 1");  //por cosas de seguridad simplemente le pones el LIMIT 1
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

// function fecha($fecha){
// 	$timestamp = strtotime($fecha);   // strotime transforma de una cadena de texto a tiempo
// 	$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

// 	$dia = date('d', $timestamp);
// 	$mes = date('m', $timestamp) - 1; // el -1 ya que el arreglo empieza desde el 0 entonces lo hacemos para que se adapte
// 	$year = date('Y', $timestamp);

// 	$fecha = "$dia de " . $meses[$mes] . " del $year";
// 	return $fecha;
// }

function numero_paginas($post_por_pagina, $conexion){
	$total_post = $conexion->prepare('SELECT FOUND_ROWS() as total');
	$total_post->execute();
	$total_post = $total_post->fetch()['total'];   //se usa fectch para devolver un arreglo

	$numero_paginas = ceil($total_post / $post_por_pagina); //ceil redondea hacia arriba 
	return $numero_paginas;
}

function comprobarSession(){
	if (!isset($_SESSION['admin'])) {
		header('Location: ' . RUTA);
	}
}

 ?>