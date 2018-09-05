<?php 

$titulo = $_POST['titulo'];
$extracto = $_POST['extracto'];
$texto = $_POST['texto'];
$thumb = $_FILES['thumb'];

foreach ($thumb as $key => $value) {
	echo $key.' '.$value.'->';
}

 ?>