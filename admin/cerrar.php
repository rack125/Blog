<?php session_start();

session_destroy();
$_SESSION = array(); //limpiando el arreglo por precausion 

header('Location: ../');
die();



 ?>