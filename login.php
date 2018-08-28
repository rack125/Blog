<?php session_start();

require 'admin/config.php';
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){   //aca se esta comprobando si ya se enviaron los datos al mismo formulario
	$usuario = limpiarDatos($_POST['usuario']);
	$password = limpiarDatos($_POST['password']);

	if ($usuario == $blog_admin['usuario'] && $password == $blog_admin['password']) { //aca se esta comprobando si los datos puesto en el arreglo son los mismos a los que estamos ingresando
		$_SESSION['admin'] = $blog_admin['usuario'];
		header ('Location:' . RUTA . '/admin');  // si inicio sesion correctamente lo enviaremos a la carpeta admin
	}
}

require 'views/login.view.php';
 ?>