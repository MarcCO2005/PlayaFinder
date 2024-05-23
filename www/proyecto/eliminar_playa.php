<?php

require_once "autoloader.php";
session_start();
$object = new Mostrar();
$nombre = $_GET['nombre'];
$object->deletePlaya($nombre);

header("location: destino.php");

?>