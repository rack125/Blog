<?php 

define('RUTA', 'http://localhost/curso_php/practicas/blog');

$bd_config = array(
	'basedatos' => 'blog',
	'usuario' => 'root',
	'pass' => 'morsuda12'
);

$blog_config = array(
	'post_por_pagina' => '2',
	'carpeta_imagenes' => 'imagenes/'
);

$blog_admin = array(        //para no crear la base de datos 
	'usuario' => 'Alonso',
	'password' => '123'
);


?>