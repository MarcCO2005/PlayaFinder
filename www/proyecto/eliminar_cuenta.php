<?php

require_once "autoloader.php";
session_start();
$object = new Mostrar();

$nombre = $_GET['nombre'];
$object->eliminarCuenta($nombre);

header("location: index.php");


?>