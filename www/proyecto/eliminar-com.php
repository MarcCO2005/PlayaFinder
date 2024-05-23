<?php
require_once "autoloader.php";
session_start();
$object = new Mostrar();
$id = $_GET['id'];
$object->deleteComent($id);
$playa = $_GET['playa'];
$imagen = $_GET['imagen'];

header("location: playa.php?nombre=$playa&imagen=$imagen");

?>